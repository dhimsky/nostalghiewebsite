@extends('admin.layouts.main-layout-admin')

@section('content')
<div class="container-fluid">
    <h1>Tambah Reservasi</h1>

    <form action="{{ route('reservasi.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama_pemesan">Nama Pemesan</label>
            <input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan" required>
        </div>
        <div class="form-group">
            <label for="nama_paket">Nama Paket</label>
            <input type="text" class="form-control" id="nama_paket" name="nama_paket" required>
        </div>
        <div class="form-group">
            <label for="harga_paket">Harga Paket</label>
            <input type="number" class="form-control" id="harga_paket" name="harga_paket" required>
        </div>
        <div class="form-group">
            <label for="no_hp">No. HP</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp" required>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
        </div>
        <div class="form-group">
            <label for="jam">Jam</label>
            <input type="time" class="form-control" id="jam" name="jam" required>
        </div>
        <div class="form-group">
            <label for="jumlah_orang">Jumlah Orang</label>
            <input type="number" class="form-control" id="jumlah_orang" name="jumlah_orang" required>
        </div>
        <div class="form-group">
            <label for="bukti_boking">Bukti Boking</label>
            <input type="file" class="form-control-file" id="bukti_boking" name="bukti_boking" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection