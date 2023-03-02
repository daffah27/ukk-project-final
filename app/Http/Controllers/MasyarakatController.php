<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.masyarakat', [
            'user' => User::where('level', 'masyarakat')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nik' => ['required','unique:users'],
            'name' => ['required'],
            'username' => ['required', 'unique:users'],
            'password' => ['required'],
            'konfirpassword' => ['required','same:password'],
            'telp' => ['required'],
        ]);

        $validated['level'] = 'masyarakat';

        $validated['password'] = bcrypt($validated['password']);
        User::create($validated);

        return redirect('/masyarakat')->with('succes', 'Akun anda telah berhasil ditambahkan');
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
    public function edit(user $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, user $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        user::destroy($id);
        return redirect('/masyarakat')->with('hapus', 'Akun telah berhasil dihapus');
    }
}
