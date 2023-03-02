@extends('masyarakat.navbar')

@section('main')

<body class="text-center">

    <main class=" w-70 m-auto mt-5 ">
        <div class="d-block justify-content-between  align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2 text-black mt-5">Data Pengaduan</h1>
            <div class="btn-toolbar mb-2 me-5 justify-content-end">
              <a href="/home/create" class="ms-3 m-1 flex-column btn btn-outline-primary">Buat Pengaduan</a>
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
                  <th scope="col">Tanggal Laporan</th>
                  <th scope="col">Status Laporan</th>
                  <th scope="col">Tanggapan</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($pengaduan as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td> <img class="img-fluid" style="max-width: 200px" src="storage/{{ $item->foto }}" alt=""></td>
                    <td>{{ $item->isi_laporan }}</td>
                    <td>{{ $item->lokasi_laporan }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->tanggapan }}</td>

                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
    </main>


@endsection
