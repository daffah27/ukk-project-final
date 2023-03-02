@extends('admin.layouts.main')

@section('container')

    <main class="">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Pengaduan</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">

          </div>
          <a href="/downloadpdf" class="ms-3 m-1 flex-column btn btn-outline-primary">Generate Laporan</a>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Foto</th>
              <th scope="col">Isi Laporan</th>
              <th scope="col">Lokasi Laporan</th>
              <th scope="col">Nama Pelapor</th>
              <th scope="col">Tanggal Laporan</th>
              <th scope="col">Status Laporan</th>
              <th scope="col">Tanggapan</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($pengaduan as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td> <img class="img-fluid img-preview d-block" style="max-width: 300px" src="{{ asset('storage/' . $item->foto) }}" alt=""></td>
                <td>{{ $item->isi_laporan }}</td>
                <td>{{ $item->lokasi_laporan }}</td>
                <td>{{ $item->user->name }}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->status }}</td>
                <td>{{ $item->tanggapan }}</td>
                <td>
                    <a href="/pengaduan/{{ $item->id }}/edit" class="badge btn btn-outline-warning text-black">Tanggapi</a>

                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

@endsection
