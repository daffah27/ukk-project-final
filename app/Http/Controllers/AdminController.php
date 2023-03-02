<?php

namespace App\Http\Controllers;

use App\Models\pengaduan;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.index', [
            'masyarakat' => User::where('level', 'masyarakat')->get(),
            'admin' => User::where('level', 'admin')->get(),
            'petugas' => User::where('level', 'petugas')->get(),
            'jumlah' => pengaduan::all(),
            'blm_prs' => pengaduan::where('status', 'Belum Proses')->get(),
            'prs' => pengaduan::where('status', 'Proses')->get(),
            'sls' => pengaduan::where('status', 'Selesai')->get(),
        ]);
    }



    public function pengaduan()
    {
        return view('admin.pengaduan', [
            // 'pengaduan' => DB::table('pengaduans')->leftJoin('users', 'pengaduans.nik', '=', 'users.nik')->select('users.*', 'pengaduans.*')->get()
            'pengaduan' => pengaduan::all()
        ]);
    }

    public function edit_pengaduan($id)
    {
        $aidi = pengaduan::find($id);
        return view('admin.tanggapi-pengaduan', [
            'pengaduan' => $aidi,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_pengaduan(Request $request, $id)
    {
        Pengaduan::where('id', $id)->update([
            'status' => $request['status'],
            'tanggapan' => $request['tanggapan'],
        ]);

        return redirect('/pengaduan')->with('edit', 'Laporan anda telah berhasil diubah');
    }




    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(string $id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     //
    // }
}
