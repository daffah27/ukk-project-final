<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.petugas', [
            'petugas' => User::where('level', 'petugas')->get(),
            'admin' => User::where('level', 'admin')->get(),
        ] );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tambah-petugas');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'username' => ['required', 'unique:users'],
            'password' => ['required'],
            'konfirpassword' => ['required','same:password'],
            'telp' => ['required'],
            'level' => ['required'],
        ]);


        $validated['password'] = bcrypt($validated['password']);
        User::create($validated);

        return redirect('/petugas')->with('succes', 'Akun anda telah berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $aidi = user::find($id);
        return view('admin.edit-petugas', [
            'petugas' => $aidi,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'username' => ['required'],
            'password' => ['required'],
            'telp' => ['required'],
            'level' => ['required'],
        ]);


        $validated['password'] = bcrypt($validated['password']);

        // if($request->file('gambar')){
        //     if($request->oldImage){
        //         Storage::delete($request->oldImage);
        //     }
        //     $validatedData['gambar'] = $request->file('gambar')->store('post-images');
        // };

        user::where('id', $id)->update($validated);

        return redirect('/petugas')->with('edit', 'Postingan anda telah berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        user::destroy($id);
        return redirect('/petugas')->with('hapus', 'Akun telah berhasil dihapus');
    }
}
