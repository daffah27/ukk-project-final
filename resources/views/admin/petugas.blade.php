@extends('admin.layouts.main')

@section('container')
    <main class="">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Akun Admin</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">

          </div>
          <a href="/petugas/create" class="ms-3 m-1 flex-column btn btn-outline-primary">Tambah Akun</a>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Petugas</th>
                  <th scope="col">Username</th>
                  <th scope="col">Telp</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>

    @foreach ($admin as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->username }}</td>
        <td>{{ $item->telp }}</td>
        <td>
            <a href="/petugas/{{ $item->id }}/edit" class="badge bg-warning">Edit</a>
            <form action="/petugas/{{ $item->id }}" method="POST" class="d-inline">
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

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 ">
        <h1 class="h2">Data Akun Petugas</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">

          </div>

        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Petugas</th>
                  <th scope="col">Username</th>
                  <th scope="col">Telp</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>

    @foreach ($petugas as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->username }}</td>
        <td>{{ $item->telp }}</td>
        <td>
            <a href="/petugas/{{ $item->id }}/edit" class="badge bg-warning">Edit</a>
            <form action="/petugas/{{ $item->id }}" method="POST" class="d-inline">
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
