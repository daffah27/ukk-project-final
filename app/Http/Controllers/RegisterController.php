<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('guest.register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        $request->session();
        return redirect('/login')->with('succes', 'Daftar Berhasil, Silahkan Login');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
