<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WilayahController extends Controller
{
    //
    public function index(){
        $response = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/villages/3212150.json');
        $data = $response->json();

        //dd($data);
        //print_r($data['id']);

        /* foreach($data as $datas){
            echo $datas['id'];
        } */
        return view('user.registrasi-donor', compact('data'));
    }
}
