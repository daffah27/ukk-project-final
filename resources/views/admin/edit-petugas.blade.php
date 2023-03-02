@extends('admin.layouts.main')

@section('container')


<main class="form-signin m-auto">

    <form class="row g-3" method="post" action="/petugas/{{ $petugas->id }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="col-12 mt-5">
          <label class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="inputAddress" name="name" value="{{ old('name',  $petugas->name ) }}">
          @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="col-md-6">
            <label class="form-label">Pilih Hak Akses</label>
            <select class="form-select" name="level" >
                <option value="admin">Admin</option>
                <option value="petugas">Petugas</option>
              </select>
          </div>
          <div class="col-md-6">
            <label class="form-label">No. Telepon</label>
            <input type="number" class="form-control @error('telp') is-invalid @enderror" name="telp" value="{{ old('telp',  $petugas->telp) }}">
            @error('telp') <div class="invalid-feedback">{{ $message }}</div> @enderror
          </div>


          <div class="col-12">
            <label  class="form-label">Username</label>
            <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username',  $petugas->username) }}">
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




@endsection
