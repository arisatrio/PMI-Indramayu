<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WilayahController extends Controller
{
    //
    public function index(){

        $kec = DB::table('indonesia_districts')->where('city_id', 3212)->pluck('name', 'id');
        return view('user.registrasi-donor', compact('kec'));
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
}
