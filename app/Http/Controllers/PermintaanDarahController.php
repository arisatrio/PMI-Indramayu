<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MintaDarahModel;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PermintaanDarahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permintaan_darah = MintaDarahModel::all();
        return view ('admin.permintaan_darah',compact('permintaan_darah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.permintaan-darah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            
             'nama_rs'       => 'required',
             'nama_pasien'            => 'required',
             'nama_petugas'     => 'required',
             'tgl'       => 'required',
             'jenis_darah'            => 'required',
             'gol_darah'       => 'required',
             'rhesus'            => 'required',
             'jumlah'       => 'required',
             'file'            => 'required|mimes:pdf|max:10000',
             'status'           => 'required'
        ],[
            'required'          => 'Data tidak boleh kosong!',
         ]);

        $permintaan_darah = new \App\Models\MintaDarahModel();
        
        $permintaan_darah->nama_rs   = $request->input('nama_rs');
        $permintaan_darah->nama_pasien = $request->input('nama_pasien');
        $permintaan_darah->nama_petugas = $request->input('nama_petugas');
        $permintaan_darah->tgl    = $request->input('tgl');
        $permintaan_darah->jenis_darah    = $request->input('jenis_darah');
        $permintaan_darah->gol_darah    = $request->input('gol_darah');
        $permintaan_darah->rhesus    = $request->input('rhesus');
        $permintaan_darah->jumlah    = $request->input('jumlah');
        $file = $request->file('file');
        $ext = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('uploads/file',$newName);
        $permintaan_darah->file = $newName;

        $permintaan_darah->status    = $request->input('status');
        $permintaan_darah->save();  
        return redirect('/permintaan_darah');
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
         $permintaan_darah = Paket::findOrFail($id_darah);
        return view('/admin/edit-permintaandarah',compact('permintaan_darah'));
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
         $permintaan_darah = \App\Models\MintaDarahModel::findOrFail($id_darah);
        
        $permintaan_darah->nama_rs = $request->input('nama_rs');
        $permintaan_darah->nama_pasien = $request->input('nama_pasien');
        $permintaan_darah->nama_petugas = $request->input('nama_petugas');
        $permintaan_darah->tgl = $request->input('tgl');
        $permintaan_darah->jenis_darah = $request->input('jenis_darah');
        $permintaan_darah->gol_darah = $request->input('gol_darah');
        $permintaan_darah->rhesus = $request->input('rhesus');
        $permintaan_darah->jumlah = $request->input('jumlah');
        if (empty($request->file('file')))
        {
            $permintaan_darah->file = $permintaan_darah->file;
        }
        else{
            unlink('uploads/file/'.$permintaan_darah->file); //menghapus file lama
            $file = $request->file('file');
            $ext = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('uploads/file',$newName);
            $permintaan_darah->file = $newName;
        }
        $permintaan_darah->status = $request->input('status');
        $permintaan_darah->update();

        return redirect()->to('/permintaan_darah')->with('status','Data Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $permintaan_darah = MintaDarahModel::find($id_darah);
        $permintaan_darah->forceDelete();

        return redirect()->route('admin.permintaan_darah')->with('success', 'Pertanyaan telah dihapus');
    }
}
