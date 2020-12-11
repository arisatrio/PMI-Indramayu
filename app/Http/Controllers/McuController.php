<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\McuModel;
use App\Models\PendonorModel;
use DB;

class McuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mcu = DB::table('mcu')
        ->join('pendonor','pendonor.id_pendonor','=','mcu.id_pendonor')
        ->select('mcu.*', 'pendonor.*')
        ->get(); // get()= select * from mcu

        return view ('admin.mcu',compact('mcu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mcu= McuModel::select('id_mcu', 'nama_petugas_hb','nama_petugas_paraf','nilai_hb','ht','tekanan_darah','bb','no_kantongdarah','donorke','goldar','tgl_donor','status')->where('id_mcu');
        $pendonor = PendonorModel::select('id_pendonor','nama_pendonor','alamat','notelp','gol_darah','tgl_kembalidonor','status')->get();

        return view('admin.tambah-mcu',compact('mcu','pendonor'));
        
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
            
             
             'nama_petugas_hb'            => 'required',
             'nama_petugas_paraf'     => 'required',
             'id_pendonor'       => 'required',
             'nilai_hb'            => 'required',
             'ht'       => 'required',
             'tekanan_darah'     => 'required',
             'bb'       => 'required',
             'no_kantongdarah'            => 'required',
             'donorke'       => 'required',
             'goldar'     => 'required',
             'tgl_donor' => 'required',
             'status'            => 'required',
             
        ],[
            'required'          => 'Data tidak boleh kosong!',
         ]);

        $mcu = new \App\Models\McuModel();
        
       
        $mcu->nama_petugas_hb = $request->input('nama_petugas_hb');
        $mcu->nama_petugas_paraf = $request->input('nama_petugas_paraf');
        $mcu->id_pendonor    = $request->input('id_pendonor');
        $mcu->nilai_hb    = $request->input('nilai_hb');
        $mcu->ht    = $request->input('ht');
        $mcu->tekanan_darah = $request->input('tekanan_darah');
        $mcu->bb = $request->input('bb');
        $mcu->no_kantongdarah    = $request->input('no_kantongdarah');
        $mcu->donorke    = $request->input('donorke');
        $mcu->goldar    = $request->input('goldar');
        $mcu->tgl_donor    = $request->input('tgl_donor');
        $mcu->status    = $request->input('status');
        $mcu->save(); 

        //dd($mcu);
        return redirect('admin/mcu');
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
    public function edit($id_mcu)
    {
        $mcu = McuModel::findOrFail($id_mcu);
        $pendonor= PendonorModel::all();
        
        return view('admin.edit-mcu',compact('mcu','pendonor'));  
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
         $mcu = \App\McuModel::findOrFail($id_mcu);

        $mcu->nama_petugas_hb = $request->input('nama_petugas_hb');
        $mcu->nama_petugas_paraf = $request->input('nama_petugas_paraf');
        $mcu->id_pendonor    = $request->input('id_pendonor');
        $mcu->nilai_hb    = $request->input('nilai_hb');
        $mcu->ht    = $request->input('ht');
        $mcu->tekanan_darah = $request->input('tekanan_darah');
        $mcu->bb = $request->input('bb');
        $mcu->no_kantongdarah    = $request->input('no_kantongdarah');
        $mcu->donorke    = $request->input('donorke');
        $mcu->goldar    = $request->input('goldar');
        $mcu->tgl_donor    = $request->input('tgl_donor');
        $mcu->status    = $request->input('status');
       

        $mcu->update();
        return redirect()->to('/admin/mcu')->with('status','Data Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $mcu = Manasik::findOrFail($id_mcu);
        $mcu->delete();
            
        return redirect('/admin/mcu');   
    }
}
