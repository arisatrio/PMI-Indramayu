<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Pagination\Paginator;
use Carbon\Carbon;
use App\Models\Berita;
use App\Models\User;
use App\Models\Komunikasi;
use App\Models\Agenda;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Http\Controllers\WilayahController;

class HomeController extends Controller
{
    protected $WilayahController;
    public function __construct(WilayahController $WilayahController)
    {
        $this->WilayahController = $WilayahController;
    }

    public function index(){
        $data       = $this->covid();
        $komunikasi = $this->indexKomunikasi();

        return view('user.index', compact('data', 'komunikasi'));
    }

    public function covid(){
        $Client = new Client();
        $request = $Client ->get('https://api.kawalcorona.com/indonesia',['verify => false']);
        $response = $request->getBody()->getContents();

        $data = json_decode($response, TRUE);
        
        return $data;
    }

    public function indexKomunikasi(){
        $komunikasi = Komunikasi::whereNotNull('isi_balasan')->paginate(3);
        return $komunikasi;
    }

    //
    public function indexBerita(){
        $berita = Berita::orderBy('id', 'DESC')->paginate(5);

        return view('user.berita', compact('berita'));
    }

    public function readBerita($slug){
        $berita = Berita::where('slug', $slug)->with('user')->get();
        $indexBerita = Berita::paginate(5);

        return view('user.baca-berita', compact('berita', 'indexBerita'));
    }

    public function indexAgenda(){
        setlocale(LC_ALL, 'IND');
        $agenda1 = Agenda::orderBy('tgl_kegiatan', 'ASC')->where('status', "DISETUJUI")->first();
        $agenda = Agenda::orderBy('tgl_kegiatan', 'ASC')->where('status', "DISETUJUI")->get();
        $agenda = $agenda->slice(1, 6);

        return view('user.agenda', compact('agenda', 'agenda1'));
    }

    public function agendaDetail($id){
        setlocale(LC_ALL, 'IND');
        $agenda = Agenda::find($id);

        return view('user.agenda-detail', compact('agenda'));
    }

    public function formAgenda(){
        $kec = $this->WilayahController->getKecamatan();
        return view('user.pengajuan-event-donor', compact('kec'));
    }

    public function store(Request $request){
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

    public function cek(){
        $agenda = Agenda::orderBy('id', 'DESC')->get();

        foreach($agenda as $data){
            echo $data->kecamatan->name;
            echo $data->kelurahan->name;
        }
        

        
    }

}
