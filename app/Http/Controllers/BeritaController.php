<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;
use App\Models\Berita;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $berita = Berita::orderBy('id', 'DESC')->get();
        return view('admin.berita', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.berita-buat');
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
        $request->validate([
            'judul_berita'     => 'required',
            'gambar_berita'    => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'isi_berita'       => 'required'
        ]);

        if($request->hasFile('gambar_berita')){
            $image              = $request->file('gambar_berita');
            $imageName          = time().'.'.$image->getClientOriginalExtension();
            $destinationPath    = public_path('/img/berita');
            $image->move($destinationPath, $imageName);
        };

        $penulis = Auth::user()->id;
        $berita = Berita::create([
            'judul_berita'  => $request->judul_berita,
            'slug'          => Str::slug($request->judul_berita),
            'gambar_berita' => $imageName,
            'isi_berita'    => $request->isi_berita,
            'penulis_id'    => $penulis
        ]);
        $berita->save();

        return redirect('/admin/berita');
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
        $berita = Berita::find($id);

        return view('admin.berita-edit', compact('berita'));
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
        $image_name = $request->hidden_image;

        if($request->hasFile('gambar_berita')){
            $request->validate([
                'judul_berita'     => 'required',
                'gambar_berita'    => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'isi_berita'       => 'required'
            ]);

            $image              = $request->file('gambar_berita');
            $imageName          = time().'.'.$image->getClientOriginalExtension();
            $destinationPath    = public_path('/img/berita');
            $image->move($destinationPath, $imageName);
        }else{
            $request->validate([
                'judul_berita'     => 'required',
                'isi_berita'       => 'required'
            ]);
        };

        $berita = Berita::find($id);
        $penulis = Auth::user()->id;
        $berita->update([
            'judul_berita'  => $request->judul_berita,
            'slug'          => Str::slug($request->judul_berita),
            'gambar_berita' => $image_name,
            'isi_berita'    => $request->isi_berita,
            'penulis_id'    => $penulis
        ]);

        return redirect('admin/berita');
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
        $berita = Berita::find($id);
        $berita->delete();

        return redirect('/admin/berita');
    }
}
