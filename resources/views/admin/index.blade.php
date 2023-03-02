@extends('admin.layouts.main')

@section('container')



    <main class="">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard {{ auth()->user()->name }}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
          </div>
        </div>
      </div>

     <div>
        <div class="row">
            <h2 class="h5">Pengaduan</h2>
<div class="col">
    <div class="card">
        <div class="card-header">
          Jumlah Pengaduan
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>{{ $jumlah->count() }} Pengaduan</p>
          </blockquote>
        </div>
      </div>
</div>
<div class="col">
    <div class="card">
        <div class="card-header">
          Belum diproses
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>{{ $blm_prs->count() }} Pengaduan</p>
          </blockquote>
        </div>
      </div>
</div>
<div class="col">
    <div class="card">
        <div class="card-header">
          Sedang diproses
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>{{ $prs->count() }} Pengaduan</p>
          </blockquote>
        </div>
      </div>
</div>
<div class="col">
    <div class="card">
        <div class="card-header">
          Selesai
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>{{ $sls->count() }} Pengaduan</p>
          </blockquote>
        </div>
      </div>
</div>
        </div>

        <div class="row mt-3">
            <h2 class="h5">Akun</h2>
<div class="col">
    <div class="card">
        <div class="card-header">
          Masyarakat
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>{{ $masyarakat->count() }} Akun</p>
          </blockquote>
        </div>
      </div>
</div>
<div class="col">
    <div class="card">
        <div class="card-header">
          Admin
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>{{ $admin->count() }} Akun</p>
          </blockquote>
        </div>
      </div>
</div>
<div class="col">
    <div class="card">
        <div class="card-header">
          Petugas
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>{{ $petugas->count() }} Akun</p>
          </blockquote>
        </div>
      </div>
</div>
        </div>

     </div>
    </main>
  </div>
</div>

@endsection
