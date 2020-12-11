<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendonorModel;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PendonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendonor = PendonorModel::all();
        return view ('admin.pendonor',compact('pendonor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambah-pendonor');
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
            
             
             'nama_pendonor'            => 'required',
             'alamat'     => 'required',
             'notelp'       => 'required',
             'gol_darah'            => 'required',
             'tgl_kembalidonor'       => 'required',
             'status'            => 'required',
             
        ],[
            'required'          => 'Data tidak boleh kosong!',
         ]);

        $pendonor = new \App\Models\PendonorModel();
        
       
        $pendonor->nama_pendonor = $request->input('nama_pendonor');
        $pendonor->alamat = $request->input('alamat');
        $pendonor->notelp    = $request->input('notelp');
        $pendonor->gol_darah    = $request->input('gol_darah');
        $pendonor->tgl_kembalidonor    = $request->input('tgl_kembalidonor');
        $pendonor->status    = $request->input('status');
        $pendonor->save(); 

        //dd($pendonor);
        return redirect('admin/pendonor');
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
    public function edit($id_pendonor)
    {
         $pendonor = PendonorModel::findOrFail($id_pendonor);
        return view('admin.editpendonor',compact('pendonor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_pendonor)
    {
        $pendonor = \App\Models\PendonorModel::findOrFail($id_pendonor);
          
        $pendonor->nama_pendonor = $request->input('nama_pendonor');
         $pendonor->alamat = $request->input('alamat');
        $pendonor->notelp = $request->input('notelp');
        $pendonor->gol_darah= $request->input('gol_darah');
        $pendonor->tgl_kembalidonor = $request->input('tgl_kembalidonor');
         $pendonor->status = $request->input('status');
        
        
        $pendonor->update();
        return redirect('/admin/pendonor')->with('status','Data Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_pendonor)
    {
        $pendonor = PendonorModel::find($id_pendonor);
        $pendonor->delete();
        
        return redirect('/admin/pendonor');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;
 
            // mengambil data dari table paket sesuai pencarian data
        $pendonor = DB::table('pendonor')
        ->where('nama_pendonor','like',"%".$cari."%")
        ->paginate();
 
            // mengirim data paket ke view index
        return view('admin.pendonor',['pendonor' => $pendonor]);
 
    }
}
