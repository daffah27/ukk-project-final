@extends('guest.partials.navbar')
<html>
    <head>
        <link href="/css/sign-in.css" rel="stylesheet">
    </head>
</html>

@section('main')

  <body class="text-center">


<main class="form-signin w-100 m-auto">

  <form method="POST" action="/login">
    @csrf
    <h1 class="h1 fw-bold">Silahkan Login</h1>
    <p class="fw-normal mb-4">Gunakan Akun Sampaikan anda</p>

    @if(session()->has('gagal'))

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('gagal') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    @endif

    @if(session()->has('succes'))

    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        {{ session('succes') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    @endif
    <div class="form-floating">
      <input name="username" type="text" class="form-control @error('username') is-invalid @enderror" id="floatingInput" placeholder="Username" required>
      <label for="floatingInput" >Username</label>
      @error('username') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <div class="form-floating">
      <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" required>
      <label for="floatingPassword"  >Password</label>
      @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
    <p class="mt-3">Belum punya akun ? <a href="/register">Klik disini</a></p>
  </form>
</main>


