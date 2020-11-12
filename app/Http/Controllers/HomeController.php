<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Carbon\Carbon;
use App\Models\Berita;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        //$berita = $this->berita();

        return view('/');
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

}
