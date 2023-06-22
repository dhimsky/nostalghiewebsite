@extends('admin.layouts.main-layout-admin')
@section('content')
<form method="POST" action="{{ route('paket.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="col-12">
      <label for="nama_paket" class="form-label"><strong>Nama Paket</strong></label>
      <input type="text" class="form-control" name="nama_paket" required>
    </div>

    <br>
    <div class="col-12">
        <label for="gambar_paket" class="form-label"><strong>Gambar Paket</strong></label>
        <input type="file" class="form-control-file" name="gambar_paket" required>
    </div>

    <br>
    <div class="col-12">
        <label for="hrg_paket" class="form-label"><strong>Harga Paket</strong></label>
        <input type="text" class="form-control" name="hrg_paket" required>
    </div>

    <br>
    <div class="col-12">
        <label for="status" class="form-label"><strong>Status</strong></label>
        <input type="text" class="form-control" name="status" required>
    </div>

    <br>
    <div class="col-12">
        <label for="deskripsi" class="form-label"><strong>Deskripsi</strong></label>
        <input type="text" class="form-control" name="deskripsi" required>
    </div>

    <br>
    <div class="col-12">
        <button type="submit" class="btn-primary">Submit</button>
    </div>
  </form><!-- End General Form Elements -->
@endsection