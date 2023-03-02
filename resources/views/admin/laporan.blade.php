<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sampaikan | Laporan</title>

  <style>
    .thead{
    background-color: #FEB139;
    color: #ffffff;

    }
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-5">
    <div class="title text-center mb-5">
      <h2>Data Pengaduan</h2>
    </div>
    <table class="table table-bordered">
      <thead class="thead">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Foto</th>
            <th scope="col">Isi Laporan</th>
            <th scope="col">Nama Pelapor</th>
            <th scope="col">Tanggal Laporan</th>
            <th scope="col">Status Laporan</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($pengaduan as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td><img class="img-fluid" style="max-width: 100px" src="storage/{{ $item->foto }}" alt=""></td>
            <td>{{ $item->isi_laporan }}</td>
            <td>{{ $item->user->name }}</td>
            <td>{{ $item->created_at }}</td>
            <td>{{ $item->status }}</td>

          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>

</html>
