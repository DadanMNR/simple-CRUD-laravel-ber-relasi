<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
<style>
  
</style>
    <div class="container mt-5">
        <h1 class="text-center mb-5">Data Penjual</h1>  
        <div class="card">
            <div class="card-body">
       <form action="{{ route('penjual.update', $penjual->id )}}" method="POST">
        @csrf
        @method('patch')
        <div class="mb-3">
          <label for="nama_pemesan" class="form-label">NAMA PEMESAN</label>
          <input type="text" class="form-control" name="nama_pemesan" value="{{ $penjual->nama_pemesan }}" id="nama_pemesan" >
        </div>

        <div class="mb-3">
          <label for="jenis_barang" class="form-label">JENIS BARANG</label>
            <select class="form-control" name="jenis_barang" id="jenis_barang">
              @foreach ($jenis as $jb)
              @if($jb->id==$penjual->jenis_barang)
              <option selected value="{{ $jb->id }}" {{($penjual->jenis_barang->jenis ?? old('jenis')) == $jb->id ? 'selected' : '' }}>
                  {{ $jb->jenis_barang }}
              </option>
              @else 
               <option value="{{ $jb->id }}" {{($penjual->jenis_barang->jenis ?? old('jenis')) == $jb->id ? 'selected' : '' }}>
                  {{ $jb->jenis_barang }}
              </option>
              @endif
              @endforeach
          </select>

        <div class="mb-3">
          <label for="harga_barang" class="form-label">HARGA BARANG</label>
          <input type="number" class="form-control" name="harga_barang" value="{{ $penjual->harga_barang }}"  id="harga_barang" >
        </div>

        <div class="mb-3">
          <label for="alamat" class="form-label">ALAMAT</label>
          <input type="text" class="form-control" name="alamat" value="{{ $penjual->alamat }}"  id="alamat" >
        </div>

        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>