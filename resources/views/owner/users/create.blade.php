@extends('admin.layouts.main-layout-admin')
@section('content')
<form method="POST" action="{{ route('users.store')}}">
    @csrf
    <div class="col-12">
      <label for="name" class="form-label"><strong>Nama</strong></label>
      <input type="text" class="form-control" name="name" required>
    </div>

    <br>
    <div class="col-12">
        <label for="email" class="form-label"><strong>Email</strong></label>
        <input type="text" class="form-control-file" name="email" required>
    </div>

    <br>
    <div class="col-12">
        <label for="username" class="form-label"><strong>Username</strong></label>
        <input type="text" class="form-control" name="username" required>
    </div>

    <br>
    <div class="col-12">
        <label for="password" class="form-label"><strong>Password</strong></label>
        <input type="text" class="form-control" name="password" required>
    </div>

    <br>
    <div class="col-12">
        <label for="level" class="form-label"><strong>Level</strong></label>
        <input type="text" class="form-control" name="level" required>
    </div>

    <br>
    <div class="col-12">
        <button type="submit" class="btn-primary">Submit</button>
    </div>
  </form><!-- End General Form Elements -->
@endsection