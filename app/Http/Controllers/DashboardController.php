<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Berita;
use App\Models\User;
use App\Models\Komunikasi;
use App\Models\Agenda;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Http\Controllers\WilayahController;
use App\Chart;
use DB;

class DashboardController extends Controller
{
    public function index(){
        $agenda         = Agenda::orderBy('tgl_kegiatan', 'ASC')->where('status', "PENDING")->get();
        $komunikasi     = Komunikasi::whereNotNull('isi_balasan')->get();

        $jmlagenda      = $agenda->count();
        $jmlkomunikasi  = $komunikasi->count();

        return view('admin.index', compact('jmlagenda', 'jmlkomunikasi'));
    }

    public function grafikDaftar(){
        //
        // Get users grouped by age
        $groups = DB::table('users')
        ->select('age', DB::raw('count(*) as total'))
        ->groupBy('age')
        ->pluck('total', 'age')->all();
        // Generate random colours for the groups
        for ($i=0; $i<=count($groups); $i++) {
        $colours[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
        }
        // Prepare the data for returning with the view
        $chart = new Chart;
        $chart->labels = (array_keys($groups));
        $chart->dataset = (array_values($groups));
        $chart->colours = $colours;
    }
}
