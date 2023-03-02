<?php

namespace App\Http\Controllers;

use App\Models\pengaduan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('masyarakat.index', [
            'user' => Auth()->user()->name,
            'pengaduan' => pengaduan::where('user_id', auth()->user()->id)->get(),
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('masyarakat.buat', [
            'user' => Auth()->user()->name
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'isi_laporan' => 'required',
            'lokasi_laporan' => 'required',
            'foto' => 'image|file|max:1024',
        ]);

        $foto = $request->file('foto');
        $validatedData['foto'] = 'blogs/' . $foto->hashName();
        $foto->storeAs('public/blogs', $foto->hashName());

        // if($request->file('foto')){
        //     $validatedData['foto'] = $request->file('foto')->store('post-images');
        // };


        $validatedData['user_id'] = auth()->user()->id;

        pengaduan::create($validatedData);

        return redirect('/home')->with('succes', 'Postingan anda telah berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(pengaduan $pengaduan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pengaduan $pengaduan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pengaduan $pengaduan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pengaduan $pengaduan)
    {
        //
    }
}
