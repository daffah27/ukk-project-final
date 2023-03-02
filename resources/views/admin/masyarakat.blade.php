@extends('admin.layouts.main')

@section('container')


    <main class="">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Akun Masyarakat</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">

          </div>

            <a href="/masyarakat/create" class="ms-3 m-1 flex-column btn btn-outline-primary">Tambah Akun</a>

        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">NIK</th>
              <th scope="col">Nama</th>
              <th scope="col">Username</th>
              <th scope="col">Telp</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>

@foreach ($user as $item)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $item->nik }}</td>
    <td>{{ $item->name }}</td>
    <td>{{ $item->username }}</td>
    <td>{{ $item->telp }}</td>
    <td>
        <form action="/masyarakat/{{ $item->id }}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button href="" class="badge bg-danger border-0" onclick="return confirm('apakah anda ingin menghapus ?')">Hapus</button>
        </form>
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
