@extends('admin.layouts.main-layout-admin')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h1 mb-6 text-gray-800">Package</h1>
    <div class="text-right">
        <a href="{{ route('paket.create')}}" class="btn btn-primary">Tambah Package</a>
    </div>
    <br>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <br>
        <div class="text-left">
            <!-- Topbar Search -->
            <form action="" method="GET" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                  <input type="text" name="keyword" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">
                      <i class="fas fa-search fa-sm"></i>
                    </button>
                  </div>
                </div>
              </form>
        </div>
        <br>
        <div class="cardbody">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Paket</th>
                            <th>Gambar Paket</th>
                            <th>Harga Paket</th>
                            <th>Status</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($paket as $p)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $p->nama_paket }}</td>
                                <td>
                                    <img src="{{ asset('gambarpaket/'.$p->gambar_paket) }}" alt="Gambar Paket" width="100" height="50">
                                </td>
                                <td>{{ $p->hrg_paket }}</td>
                                <td>{{ $p->status }}</td>
                                <td>{{ $p->deskripsi }}</td>
                                <td>
                                    <a href="{{ route('paket.edit', $p->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('paket.destroy', $p->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <div>
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return 
                                            confirm('Apakah Anda yakin ingin menghapus paket ini?')">Hapus</button>
                                        </div>
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