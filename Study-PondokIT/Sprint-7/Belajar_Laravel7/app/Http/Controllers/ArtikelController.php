<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ArtikelController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $artikel = Artikel::all();
        return view('layouts.artikel', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artikel = Artikel::all();
        return view('layouts.tambah', compact('artikel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $artikel = $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'desc' => 'required',
            'image' => 'required'
        ]);

        $imgName = $request->image->getClientOriginalName() . '-' . time() . '.' . $request->image->extension();

        $request->image->move(public_path('image'), $imgName);


        Artikel::create([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'desc' => $request->desc,
            'image' => $imgName,
        ]);
        return redirect('/artikel')->with('status', 'Data Berhasil Di Tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $artikel)
    {
        // $artikel = new Artikel;
        // $judul = Response('judul');
        // $kategori = Response('kategori');
        // $desc = Response('desc');
        // return view('layouts.edit', compact('artikel'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit(Artikel $artikel)
    {
        return view('layouts.edit', compact('artikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artikel $artikel)
    {
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'desc' => 'required',
            // 'image' => 'required'
        ]);

        $imgName = $request->old_image;
        if ($request->image) {
            $imgName = $request->image->getClientOriginalName() . '-' . time() . '.' . $request->image->extension();

            $request->image->move(public_path('image'), $imgName);
        }


        Artikel::where('id', $artikel->id)
            ->update([
                'judul' => $request->judul,
                'kategori' => $request->kategori,
                'desc' => $request->desc,
                'image' => $imgName,
            ]);
        return redirect('/artikel')->with('status', 'Data Berhasil Di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artikel $artikel)
    {
        Artikel::destroy($artikel->id);
        return redirect('/artikel')->with('status', 'Data Berhasil Di Hapus');
    }
}
