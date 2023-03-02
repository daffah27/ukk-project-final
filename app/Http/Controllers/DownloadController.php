<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf as PDF;
// use Barryvdh\DomPDF\PDF;
use App\Models\pengaduan;
use Illuminate\Http\Request;


class DownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = pengaduan::all();
        $pdf = PDF::loadView('admin.laporan', [
           'pengaduan' => $data,
        ]);


        return $pdf->stream();
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
        //
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
