@extends('layouts.main-layout')

@section('title', 'Package')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $item)
            <p>{{ $item }}</p>
        @endforeach
    </ul>
</div>
@endif

@if (Session::get('success'))
<div class="alert alert-success">
    {{ Session::get('success') }}
</div>
@endif
<section class="services-section services-normal spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="services-item">
            <img src="{{ asset('/') }}assets/img/categories/prewedding.png" alt="" />
            <h4>PREWEDDING PHOTO</h4>
            <p><strong>Rp. 250.000</strong></p>
            <div class="pricing-item">
              <div class="pi-text">
                <a href="package/prewedding" class="primary-btn">Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="services-item">
            <img src="{{ asset('/') }}assets/img/categories/wedding.png" alt="" />
            <h4>WEDDING PHOTO</h4>
            <p><strong>Rp. 400.000</strong></p>
            <div class="pricing-item">
              <div class="pi-text">
                <a href="/package/prewedding-photo" class="primary-btn">Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="services-item">
            <img src="{{ asset('/') }}assets/img/categories/maternity.png" alt="" />
            <h4>MATERNITY PHOTO</h4>
            <p><strong>Rp. 200.000</strong></p>
            <div class="pricing-item">
              <div class="pi-text">
                <a href="/package/prewedding-photo" class="primary-btn">Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="services-item">
            <img src="{{ asset('/') }}assets/img/categories/family.png" alt="" />
            <h4>FAMILY PHOTO</h4>
            <p><strong>Rp. 3500.000</strong></p>
            <div class="pricing-item">
              <div class="pi-text">
                <a href="/package/prewedding-photo" class="primary-btn">Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="services-item">
            <img src="{{ asset('/') }}assets/img/categories/graduation.png" alt="" />
            <h4>GRADUATION PHOTO</h4>
            <p><strong>Rp. 100.000</strong></p>
            <div class="pricing-item">
              <div class="pi-text">
                <a href="/package/prewedding-photo" class="primary-btn">Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="services-item">
            <img src="{{ asset('/') }}assets/img/categories/groupp.png" alt="" />
            <h4>GROUP PHOTO</h4>
            <p><strong>Rp. 300.000</strong></p>
            <div class="pricing-item">
              <div class="pi-text">
                <a href="/package/prewedding-photo" class="primary-btn">Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Services Section End -->
@endsection