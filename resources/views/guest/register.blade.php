@extends('guest.partials.navbar')
<html>
    <head>
        <link href="/css/sign-in.css" rel="stylesheet">
    </head>
</html>

@section('main')

  <body class="">

<main class="form-signin m-auto">

    <h1 class="h1 fw-bold mb-5 text-center">Ayo Daftar di Sampaikan Web</h1>
    <form class="row g-3" method="post" action="/register">
        @csrf
        <div class="col-12">
          <label class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="inputAddress" name="name" value="{{ old('name') }}">
          @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="col-md-6">
            <label class="form-label">NIK</label>
            <input type="number" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ old('nik') }}">
            @error('nik') <div class="invalid-feedback">{{ $message }}</div> @enderror
          </div>
          <div class="col-md-6">
            <label class="form-label">No. Telepon</label>
            <input type="number" class="form-control @error('telp') is-invalid @enderror" name="telp" value="{{ old('telp') }}">
            @error('telp') <div class="invalid-feedback">{{ $message }}</div> @enderror
          </div>
          <div class="col-12">
            <label  class="form-label">Username</label>
            <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}">
            @error('username') <div class="invalid-feedback">{{ $message }}</div> @enderror
          </div>
          <div class="col-md-6">
              <label  class="form-label">Password</label>
              <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" >
              @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="col-md-6">
              <label class="form-label">Konfirmasi Password</label>
              <input type="password" class="form-control @error('konfirpassword') is-invalid @enderror"name="konfirpassword">
              @error('konfirpassword') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

        <div class="mt-5">
          <button type="submit" class="btn-primary w-100 btn btn-lg">Daftar</button>
        </div>
      </form>
</main>


