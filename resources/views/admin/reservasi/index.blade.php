@extends('admin.layouts.main-layout-admin')
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h1 mb-2 text-gray-800">Reservasi</h1>
    <div class="text-right">
        <a href="{{ route('reservasi.create') }}" class="btn btn-primary">Tambah Reservasi</a>
    </div>
    <br>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <br>
        <div class="row g-3 align-item-center mt-2">
        <div class="col-auto">
            <!-- Topbar Search -->
            <form action="{{ url('reservasi') }}" method="GET" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                  <input type="search" name="keyword" class="form-control bg-light border-0 small" value="{{ Request::get('keyword') }}" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">
                      <i class="fas fa-search fa-sm"></i>
                    </button>
                  </div>
                </div>
              </form>
        </div>
        <div class="col-auto">
            <a href="/reservasiexportpdf" class="btn btn-info">Export PDF</a>
        </div>
    </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama Pemesan</th>
                        <th>Nama Paket</th>
                        <th>Harga Paket</th>
                        <th>No. HP</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Jumlah Orang</th>
                        <th>Bukti Boking</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reservasi as $r)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $r->nama_pemesan }}</td>
                            <td>{{ $r->nama_paket }}</td>
                            <td>{{ $r->harga_paket }}</td>
                            <td>{{ $r->no_hp }}</td>
                            <td>{{ $r->tanggal }}</td>
                            <td>{{ $r->jam }}</td>
                            <td>{{ $r->jumlah_orang }}</td>
                            <td><img src="{{ asset('buktiboking/'.$r->bukti_boking) }}" alt="Gambar boking" width="200"></td>
                            <td>{{ $r->deskripsi }}</td>
                            <td>
                                <a href="{{ route('reservasi.edit', $r->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('reservasi.destroy', $r->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus Reservasi ini?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection