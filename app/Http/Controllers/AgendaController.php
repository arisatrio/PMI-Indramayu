<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Agenda;

class AgendaController extends Controller
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
        setlocale(LC_ALL, 'IND');
        $agenda = Agenda::orderBy('tgl_kegiatan', 'ASC')->where('status', "PENDING")->get();
        $jml    = $agenda->count();

        return view('admin.agenda', compact('agenda', 'jml'));
    }

    public function indexJadwal()
    {
        //
        setlocale(LC_ALL, 'IND');
        $agenda = Agenda::orderBy('tgl_kegiatan', 'ASC')->where('status', "DISETUJUI")->get();
        $jml    = $agenda->count();

        return view('admin.agenda-jadwal', compact('agenda', 'jml'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kec = $this->WilayahController->getKecamatan();
        return view('admin.agenda-tambah', compact('kec'));
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
        $validatedData = $request->validate([
            'nama_institusi'    => 'required',
            'alamat_institusi'  => 'required',
            'nama_kegiatan'     => 'required',
            'tgl_kegiatan'      => 'required|date|after:today',
            'jam_mulai'         => 'required',
            'jam_selesai'       => 'required|after:jam_mulai',
            'alamat_kegiatan'   => 'required',
            'id_kecamatan'      => 'required',
            'id_kelurahan'      => 'required',
            'nama_koordinator'  => 'required|alpha',
            'notlp_koordinator' => 'required|numeric',
            'jml_pendonor'      => 'required',
            'surat'             => 'required|mimetypes:application/pdf|max:10000',
            'poster'            => 'required|image'
        ],
        [
            'required'              => 'Form :attribute harus di isi !',
            'numeric'               => 'Form :attribute harus di isi angka !',
            'alpha'                 => 'Form :attribute harus di isi huruf',
            'surat.mimetypes'       => 'Upload file dengan format pdf !',
            'poster.image'          => 'Upload file berupa gambar (jpeg, png, bmp, gif, svg, atau webp)',
            'tgl_kegiatan.after'    => 'Tanggal Kegiatan harus di isi hari ini atau setelah hari ini !',
            'jam_selesai.after'     => 'Jam Selesai tidak valid !',
            
        ]);

        if($request->hasFile('surat')){
            $surat              = $request->file('surat');
            $suratName          = time().'.'.$surat->getClientOriginalExtension();
            $destinationPath    = public_path('/img/agenda/surat');
            $surat->move($destinationPath, $suratName);
        };
        if($request->hasFile('poster')){
            $poster              = $request->file('poster');
            $posterName          = time().'.'.$poster->getClientOriginalExtension();
            $destinationPath    = public_path('/img/agenda/poster');
            $poster->move($destinationPath, $posterName);
        };

        $agenda = Agenda::create([
            'nama_institusi'    => $request->nama_institusi,
            'alamat_institusi'  => $request->alamat_institusi,
            'nama_kegiatan'     => $request->nama_kegiatan,
            'tgl_kegiatan'      => $request->tgl_kegiatan,
            'jam_mulai'         => $request->jam_mulai,
            'jam_selesai'       => $request->jam_selesai,
            'alamat_kegiatan'   => $request->alamat_institusi,
            'id_kecamatan'      => $request->id_kecamatan,
            'id_kelurahan'      => $request->id_kelurahan,
            'nama_koordinator'  => $request->nama_koordinator,
            'notlp_koordinator' => $request->notlp_koordinator,
            'jml_pendonor'      => $request->jml_pendonor,
            'surat'             => $suratName,
            'poster'            => $posterName,
            'status'            => 'PENDING'
        ]);

        $agenda->save();

        return redirect('/pengajuan-event-donor')->with('success','Pengajuan dikirim');
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
        setlocale(LC_ALL, 'IND');
        $agenda = Agenda::find($id);
        $kec = $this->WilayahController->getKecamatan();
        //$kel = $this->WilayahController->store();
        
        return view('admin.agenda-detail', compact('agenda', 'kec'));
    }

    public function send(Request $request){
        $kel = DB::table('indonesia_villages')->where('district_id', $request->get('id'))->pluck('name', 'id');
        return response()->json($kel);
    }

    public function loadData(Request $request)
    {
        if ($request->has('q')) {
            $cari = $request->q;
            $data = DB::table('indonesia_cities')->select('id', 'name')->where('name', 'LIKE', '%$cari%')->get();
            return response()->json($data);
        }
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
        setlocale(LC_ALL, 'IND');
        $agenda = Agenda::find($id);

        return view('admin.agenda-edit', compact('agenda'));
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
        $agenda = Agenda::find($id);
        $agenda->delete();

        return redirect('/admin/agenda')->with('messages', 'Pengajuan Agenda telah dihapus');
    }

    public function setuju($id)
    {
        $agenda = Agenda::find($id);
        $agenda->status = "DISETUJUI";
        $agenda->save();

        /* $message = $twilio->messages
                  ->create("whatsapp:" . $to, // to
                        array(
                            "from" => "whatsapp:" . $from,
                            "body" => $body
                        )
                    ); */
        return redirect('/admin/agenda-jadwal');
    }

    public function tolak($id)
    {
        $agenda = Agenda::find($id);
        $agenda->status = "DITOLAK";
        $agenda->save();

        /* $message = $twilio->messages
                  ->create("whatsapp:" . $to, // to
                        array(
                            "from" => "whatsapp:" . $from,
                            "body" => $body
                        )
                    ); */
        return redirect('/admin/agenda');
    }
}
