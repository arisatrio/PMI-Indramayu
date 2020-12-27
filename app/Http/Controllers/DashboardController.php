<?php

namespace App\Http\Controllers;

use App\Charts\PendonorChart as ChartsPendonorChart;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use App\Models\Berita;
use App\Models\User;
use App\Models\Komunikasi;
use App\Models\Agenda;
use App\Models\Pendonor;
use App\Models\Registrasi;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Http\Controllers\WilayahController;
use App\PendonorChart;
use Charts;
use DB;

class DashboardController extends Controller
{
    public function index(){
        $agenda         = Agenda::orderBy('tgl_kegiatan', 'ASC')->where('status', "PENDING")->get();
        $komunikasi     = Komunikasi::whereNotNull('isi_balasan')->get();
        $pendonor       = Pendonor::where('status_donor', "BERHASIL")->get();
        $registrasi     = Registrasi::doesntHave('mcu');
        $chart          = $this->grafikDaftar();
        $chart2         = $this->grafikJk();

        return view('admin.index', compact('agenda', 'komunikasi', 'pendonor', 'registrasi', 'chart', 'chart2'));
    }

    public function grafikDaftar(){
        //

        //$pendonor   = Pendonor::all();
        $startDate = Carbon::now();
        $cek = $startDate->format('d M');
        $firstDay = $startDate->firstOfMonth()->format('d M');

        $firstDayofPreviousMonth = Carbon::now()->startOfMonth()->toDateString();
        $lastDayofPreviousMonth = Carbon::now()->toDateString();
        $bulanIni = CarbonPeriod::create($firstDayofPreviousMonth, $lastDayofPreviousMonth);


        $today_users = Pendonor::whereDate('created_at', today())->count();
        $yesterday_users = Pendonor::whereDate('created_at', today()->subDays(1))->count();
        $users_2_days_ago = Pendonor::whereDate('created_at', today()->subDays(2))->count();
        $chart      = new ChartsPendonorChart;

        $chart->labels(['hari_ini','kemarin','duahariyanglalu']);
        $chart->dataset('Jumlah Pendonor', 'line',[$users_2_days_ago, $yesterday_users, $today_users])->options([
            'color' => '#77a1e5',
            'backgroundColor' => '#ff0000',
            'lineTension' => '0.5'
        ]);

        return $chart;
    }

    public function grafikJk()
    {
        $laki   = Pendonor::with('registrasi')->whereHas('Registrasi', function($q){
            $q->where('jenis_kelamin', "Laki-laki");
        })->get();
        $pl     = Pendonor::with('registrasi')->whereHas('Registrasi', function($q){
            $q->where('jenis_kelamin', "Perempuan");
        })->get();

        $chart2 = new ChartsPendonorChart;
        $chart2->labels(['Laki-laki', 'Perempuan']);
        $chart2->dataset('Jumlah Pendonor', 'pie', [$laki->count(), $pl->count()])->backgroundColor(['#007bff', '#28a745']);
        
        return $chart2;
    }
}
