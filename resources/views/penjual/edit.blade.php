<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Form Edit Data Penjual</h1>
        <div class="card">
            <div class="card-body">
       <form action="{{ route('penjual.update', $penjual->id)}}" method="POST">
        @csrf
        @method('patch')
        <div class="mb-3">
          <label for="nama_pemesan" class="form-label">NAMA PEMESAN</label>
          <input type="text" class="form-control" name="nama_pemesan" value="{{ $penjual->nama_pemesan }}" id="nama_pemesan" >
        </div>

        <div class="mb-3">
          <label for="nama_barang" class="form-label">NAMA BARANG</label>
          <input type="text" class="form-control" name="nama_barang" value="{{ $penjual->nama_barang }}"  id="nama_barang" >
        </div>

        <div class="mb-3">
          <label for="jumlah_barang" class="form-label">JUMLAH BARANG</label>
          <input type="text" class="form-control" name="jumlah_barang" value="{{ $penjual->jumlah_barang }}"  id="jumlah_barang" >
        </div>

        <div class="mb-3">
          <label for="alamat" class="form-label">ALAMAT</label>
          <input type="text" class="form-control" name="alamat" value="{{ $penjual->alamat }}"  id="alamat" >
        </div>
        <button type="submit" class="btn btn-primary float-end">Simpan</button>
      </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>