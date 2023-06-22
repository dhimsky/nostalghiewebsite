@extends('admin.layouts.main-layout-admin')
@section('content')
<form method="POST" action="{{ route('promo.store')}}"method="POST" enctype="multipart/form-data">
    @csrf
    <div class="col-12">
      <label for="nama_promo" class="form-label"><strong>Nama Promo</strong></label>
      <input type="text" class="form-control" name="nama_promo" required>
    </div>
    <br>

    <div class="col-12">
        <label for="gambar_promo" class="form-label"><strong>Gambar Promo</strong></label>
        <input type="file" class="form-control-file" name="gambar_promo" required>
    </div>
    <br>

    <div class="col-12">
        <label for="total_promo" class="form-label"><strong>Promo</strong></label>
        <input type="text" class="form-control" name="total_promo" required>
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