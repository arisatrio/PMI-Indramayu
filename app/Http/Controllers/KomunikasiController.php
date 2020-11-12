<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komunikasi;
use Carbon\Carbon;

class KomunikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Menampilkan semua pertanyaan dan Saran BARU di Dashboard Admin
        $komunikasi = Komunikasi::whereNull('isi_balasan')->get();
        $jml        = $komunikasi->count();

        return view('admin.komunikasi', compact('komunikasi', 'jml'));
    }

    public function arsip()
    {
        //Menampilkan semua pertanyaan dan Saran YANG SUDAH DIBALAS di Dashboard Admin
        $komunikasi = Komunikasi::whereNotNull('isi_balasan')->get();
        return view('admin.komunikasi-arsip', compact('komunikasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Menampilkan Form Pertanyaan atau Saran
        return view('user.komunikasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //STORE DATA
        $validatedData = $request->validate([
            'nama'           => 'required|max:50',
            'tentang_komunikasi' => 'required',
            'isi_komunikasi' => 'required',
            'isi_balasan'    => 'nullable'
        ]);

        $komunikasi = Komunikasi::create([
            'nama'                  => $request->nama,
            'tentang_komunikasi'    => $request->tentang_komunikasi,
            'isi_komunikasi'        => $request->isi_komunikasi
        ]);
        $komunikasi->save();
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //BALAS
        $komunikasi = Komunikasi::find($id);
        return view('admin.komunikasi-balas', compact('komunikasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'isi_balasan'   => 'required'
        ]);

        $komunikasi = Komunikasi::find($id);
        $komunikasi->isi_balasan = $request->isi_balasan;
        $komunikasi->save();

        return redirect('/admin/komunikasi-arsip');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $komunikasi = Komunikasi::find($id);
        $komunikasi->forceDelete();

        return redirect()->route('admin.komunikasi')->with('success', 'Pertanyaan telah dihapus');
    }
}
