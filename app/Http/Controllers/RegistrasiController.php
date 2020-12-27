<?php

namespace App\Http\Controllers;

use App\Models\Registrasi;
use App\Models\Pendonor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RegistrasiController extends Controller
{
    protected $WilayahController;
    
    public function __construct(WilayahController $WilayahController)
    {
        $this->WilayahController = $WilayahController;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $registrasi = Registrasi::doesntHave('mcu')->orderBy('created_at', 'DESC')->paginate(10);
        
        return view('admin.registrasi', compact('registrasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kec    = $this->WilayahController->getKecamatan();
        return view('user.registrasi-donor', compact('kec'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //USER REGISTRASI
        $request->validate([
            'nik'           => 'required|numeric',
            'nama'          => 'required|regex:/^[a-zA-Z\s]*$/',
            'alamat'        => 'required',
            'kecamatan'     => 'required',
            'kelurahan'     => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir'  => 'required|regex:/^[a-zA-Z\s]*$/',
            'tanggal_lahir' => 'required|date|before:today',
            'pekerjaan'     => 'required',
            'status'        => 'required',
            'nohp'          => 'required|numeric',
            'tanggal_donor' => 'required|date|after_or_equal:today',
            'jam_donor'     => 'required'
        ],
        [
            'required'                      => 'Form :attribute harus di isi !',
            'nik.numeric'                   => 'NIK tidak valid !',
            'tanggal_lahir.before'          => 'Tanggal Lahir tidak valid !',
            'tanggal_donor.after_or_equal'  => 'Tanggal Donor tidak boleh di isi tanggal sebelum hari ini !'
        ]);

        $blocked = Pendonor::with('registrasi')->where('status_donor', "BLOK")->first();

        if($request->nik != $blocked->registrasi->nik){
            $kd_registrasi = Str::random(8);
            $registrasi = Registrasi::create([
                'kd_registrasi'     => $kd_registrasi,
                'nik'               => $request->nik,
                'nama'              => $request->nama,
                'alamat'            => $request->alamat,
                'id_kecamatan'      => $request->kecamatan,
                'id_kelurahan'      => $request->kelurahan,
                'jenis_kelamin'     => $request->jenis_kelamin,
                'tempat_lahir'      => $request->tempat_lahir,
                'tanggal_lahir'     => $request->tanggal_lahir,
                'pekerjaan'         => $request->pekerjaan,
                'status'            => $request->status,
                'nohp'              => $request->nohp,
                'tanggal_donor'     => $request->tanggal_donor,
                'jam_donor'         => $request->jam_donor
            ]);
            setlocale(LC_ALL, 'IND');
            return view('user.registrasi-invoice', compact('registrasi'));

        }else{
            return redirect()->back()->with('messages', 'Anda tidak di izinkan untuk donor darah kembali !');
        }
        //return view('user.registrasi-invoice', compact('registrasi'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registrasi  $registrasi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        setlocale(LC_ALL, 'IND');
        $registrasi = Registrasi::find($id);

        return view('admin.registrasi-detail', compact('registrasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registrasi  $registrasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Registrasi $registrasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registrasi  $registrasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registrasi $registrasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registrasi  $registrasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $registrasi = Registrasi::find($id);
        $registrasi->delete();

        return redirect('admin/registrasi')->with('messages', 'Data Registrasi Donor Dihapus!');
    }
}
