@extends('admin.layouts.main')

@section('container')


<main class="form-signin m-auto">


    <form class="row g-3" method="post" action="/pengaduan/{{ $pengaduan->id }}" >
        @csrf
        <div class="col-12 mt-5">
          <label class="form-label">Foto</label>
          <img src="{{ asset('storage/' . $pengaduan->foto) }}" class="img-preview img-fluid d-block">
        </div>
        <div class="col-12">
            <label class="form-label">Isi Laporan</label>
            <input disabled type="text" class="form-control" value="{{ old('isi_laporan',  $pengaduan->isi_laporan) }}">
          </div>
          <div class="col-12">
            <label class="form-label">Lokasi Laporan</label>
            <input disabled type="text" class="form-control" value="{{ old('lokasi_laporan',  $pengaduan->lokasi_laporan) }}">
          </div>
          <div class="col-12">
            <label class="form-label">Tanggal Laporan</label>
            <input disabled type="text" class="form-control" value="{{ old('created_at',  $pengaduan->created_at) }}">
          </div>
          <div class="col-12">
            <label class="form-label">Status Laporan</label>
            <select class="form-select" name="status" >
                <option value="Belum Proses">Belum Proses</option>
                <option value="Proses">Proses</option>
                <option value="Selesai">Selesai</option>
              </select>
          </div>
          <div class="col-12">
            <label class="form-label">Tanggapan</label>
            <input type="text" class="form-control" name="tanggapan" value="{{ old('tanggapan') }}">
          </div>

        <div class="mt-5">
          <button type="submit" class="btn-primary w-100 btn btn-lg">Tanggapi</button>
        </div>
      </form>
</main>




@endsection
