@extends('admin.layouts.main-layout-admin')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h1 mb-6 text-gray-800">Promo</h1>
    <div class="text-right">
        <a href="{{ route('promo.create')}}" class="btn btn-primary">Tambah Promo</a>
    </div>
    <br>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <br>
        <div class="row g-3 align-item-center mt-2">
            <div class="col-auto">
                <!-- Topbar Search -->
                <form action="" method="GET" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                      <input type="search" name="keyword" class="form-control bg-light border-0 small" value="" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
            </div>
            <div class="col-auto">
                <a href="/promoexportpdf" class="btn btn-info">Export PDF</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama Promo</th>
                            <th>Gambar Promo</th>
                            <th>Total Promo</th>
                            <th>Status</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($promo as $p)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $p->nama_promo }}</td>
                                <td>
                                    <img src="{{ asset('gambarpromo/'.$p->gambar_promo) }}" alt="Gambar Promo" width="150" height="100">
                                </td>
                                <td>{{ $p->total_promo }}</td>
                                <td>{{ $p->status }}</td>
                                <td>{{ $p->deskripsi }}</td>
                                <td>
                                    <a href="{{ route('promo.edit', $p->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('promo.destroy', $p->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus promo ini?')">Hapus</button>
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