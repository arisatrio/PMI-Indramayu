<?php

namespace App\Http\Controllers;

use App\Models\Mcu;
use App\Models\Registrasi;
use Illuminate\Http\Request;

class McuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mcu = Mcu::doesntHave('pendonor')->orderBy('created_at', 'DESC')->get();

        return view('admin.mcu', compact('mcu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $registrasi = Registrasi::find($id);

        return view('admin.mcu-proses', compact('registrasi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama_petugas_hb'       => 'required|regex:/^[a-zA-Z\s]*$/',
            'nama_petugas_paraf'    => 'required|regex:/^[a-zA-Z\s]*$/',
            'tgl_mcu'               => 'required|date|after_or_equal:today',
            'lokasi_mcu'            => 'required',
            'bb'                    => 'required|numeric',
            'goldar'                => 'required',
            'nilai_hb'              => 'required',
            'ht'                    => 'required',
            'tekanan_darah'         => 'required',
        ],
        [
            'required'                => 'Form :attribute harus di isi !',
            'tgl_mcu.after_or_equal'  => 'Tanggal MCU tidak boleh di isi tanggal sebelum hari ini !'
        ]);

        Mcu::create([
            'id_registrasi'         => $request->id_registrasi,
            'nama_petugas_hb'       => $request->nama_petugas_hb,
            'nama_petugas_paraf'    => $request->nama_petugas_paraf,
            'tgl_mcu'               => $request->tgl_mcu,
            'lokasi_mcu'            => $request->lokasi_mcu,
            'bb'                    => $request->bb,
            'goldar'                => $request->goldar,
            'nilai_hb'              => $request->nilai_hb,
            'ht'                    => $request->ht,
            'tekanan_darah'         => $request->tekanan_darah,
            'status_mcu'            => $request->status_mcu
        ]);

        return redirect('/admin/mcu');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mcu  $mcu
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $mcu = Mcu::find($id);

        //dd($mcu->registrasi->nama);

        return view('admin.mcu-detail', compact('mcu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mcu  $mcu
     * @return \Illuminate\Http\Response
     */
    public function edit(Mcu $mcu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mcu  $mcu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mcu $mcu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mcu  $mcu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mcu $mcu)
    {
        //
    }
}
