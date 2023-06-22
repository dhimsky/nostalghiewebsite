@extends('admin.layouts.main-layout-admin')
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h3 class="h3 mb-0 text-gray-800">Dashboard</h3>
    </div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-black-800">Welcome! Admin</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Users</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $count }}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-user fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pending</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $count }}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-duotone fa-spinner fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Success</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $count }}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-solid fa-check fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card shadow mb-4">
    <div class="card-body">
      <div class="table-responsive">
          <table class="table table-bordered">
              <thead>
                  <tr class="text-center">
                      <th>No</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Username</th>
                      <th>Level</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($users as $p)
                      <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{ $p->name }}</td>
                          <td>{{ $p->email }}</td>
                          <td>{{ $p->username }}</td>
                          <td>{{ $p->level }}</td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
      </div>
  </div>
    </div>
  </div>
@endsection