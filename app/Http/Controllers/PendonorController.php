<?php

namespace App\Http\Controllers;

use App\Models\Pendonor;
use App\Models\Mcu;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PendonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendonor   = Pendonor::with('registrasi')->orderBy('created_at', 'DESC')->get();

        return view('admin.pendonor', compact('pendonor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $mcu = Mcu::find($id);

        //dd($mcu->registrasi);

        return view('admin.pendonor-proses', compact('mcu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        //
        $mcu = Mcu::find($id);
        $pendonor = Pendonor::orderBy('id', 'DESC')->first();
        $lastId = $pendonor->id;

        Pendonor::create([
            'registrasi_id'     => $mcu->registrasi->id,
            'mcu_id'            => $mcu->id,
            'no_kantong_darah'  => 'DD/'.date('Y.m.d').'/NKD'.'/000'.str_pad($lastId + 1, 3),
            'status_donor'      => "CEK LAB"
        ]);

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
        $pendonor = Pendonor::with(['registrasi', 'mcu'])->find($id);

        return view('admin.pendonor-detail', compact('pendonor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $pendonor = Pendonor::find($id);

        $pendonor->update([
            'status_donor'  => $request->status_donor
        ]);

        return redirect('admin/pendonor')->with('messages', 'Status Donor berhasil diperbaharui!');
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
        $pendonor = Pendonor::find($id);
        $pendonor->delete();

        return redirect('admin/pendonor')->with('messages', 'Data Pendonor berhasil dihapus!');
    }
}
