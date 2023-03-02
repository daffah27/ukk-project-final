@extends('masyarakat.navbar')

@section('main')


<body class="text-center">

    <main class=" w-50 m-auto mt-5 ">
        <div class="d-block justify-content-between  align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2 text-black mt-5">Buat Data Pengaduan</h1>
          </div>

          <form method="POST" action="/home" enctype="multipart/form-data" class="">
            @csrf
            <div class="mb-3">
                <label class="form-label">Laporan</label>
                <input type="text" name="isi_laporan" class="form-control" >
            </div>

            <div class="mb-3">
                <label class="form-label">Lokasi Laporan</label>
                <input type="text" name="lokasi_laporan" class="form-control" >
            </div>

            {{--  <div class="mb-3">
                <label class="form-label">Paragraf</label>
                <input id="paragraf" type="hidden" name="paragraf">
                <trix-editor input="paragraf"></trix-editor>
            </div>  --}}

            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar Laporan</label>
                <img class="img-preview img-fluid">
                <input class="form-control" type="file" id="gambar" name="foto" onchange="previewImage()">
                @error('gambar') <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>

            <button type="submit" class="btn btn-primary mb-5 mt-2">Laporkan !!!</button>
        </form>
    </div>

    </main>
</body>

@endsection
