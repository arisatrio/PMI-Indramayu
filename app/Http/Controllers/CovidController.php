<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;


class CovidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    
        {
            $Client = new Client();
            $request = $Client ->get('https://api.kawalcorona.com/indonesia',['verify => false']);
            $response = $request->getBody()->getContents();
    
            $data = json_decode($response, TRUE);
             
            return view('',compact( 'data'));
    
        }
        

}
