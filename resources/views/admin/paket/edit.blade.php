@extends('admin.layouts.main-layout-admin')
@section('content')
<form method="POST" action="{{ route('paket.update', $paket->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="col-12">
      <label for="nama_paket" class="form-label"><strong>Nama Paket</strong></label>
      <input type="text" class="form-control" name="nama_paket" value="{{$paket->nama_paket}}" required>
    </div>
    <br>

    <div class="col-12">
        <label for="gambar_paket" class="form-label"><strong>Gambar Paket</strong></label>
        <input type="file" class="form-control-file" name="gambar_paket" value="{{$paket->gambar_paket}}" required>
    </div>
    <br>

    <div class="col-12">
        <label for="hrg_paket" class="form-label"><strong>Harga Paket</strong></label>
        <input type="text" class="form-control" name="hrg_paket" value="{{$paket->hrg_paket}}" required>
    </div>
    <br>

    <div class="col-12">
        <label for="status" class="form-label"><strong>Status</strong></label>
        <input type="text" class="form-control" name="status" value="{{$paket->status}}" required>
    </div>
    <br>

    <div class="col-12">
        <label for="deskripsi" class="form-label"><strong>Deskripsi</strong></label>
        <input type="text" class="form-control" name="deskripsi" value="{{$paket->deskripsi}}" required>
    </div>
    <br>

    <div class="col-12">
        <button type="submit" class="btn-primary">Submit</button>
    </div>
  </form><!-- End General Form Elements -->
@endsection