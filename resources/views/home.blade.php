@extends('layouts.main-layout')

@section('title', 'Home')

@section('content')
    
<!-- Hero Section Begin -->
    <section class="hero-section">
      <div class="hs-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="{{ asset('/') }}assets/img/hero/1.jpg">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="hs-text">
                  <h2>NOSTALGHIE creative digital</h2>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et<br />
                    dolore magna aliqua. Quis ipsum suspendisse ultrices gravida accumsan lacus vel facilisis.
                  </p>
                  <a href="#" class="primary-btn">Contact us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="hs-item set-bg" data-setbg="{{ asset('/') }}assets/img/hero/2.jpg">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="hs-text">
                  <h2>NOSTALGHIE</h2>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et<br />
                    dolore magna aliqua. Quis ipsum suspendisse ultrices gravida accumsan lacus vel facilisis.
                  </p>
                  <a href="#" class="primary-btn">Contact us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero Section End -->

    <!-- Services Section Begin -->
    <section class="services-section spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="services-item">
              <img src="{{ asset('/') }}assets/img/services/1.png" alt="" />
              <h3>PHOTO STUDIO</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="services-item">
              <img src="{{ asset('/') }}assets/img/services/2.png" alt="" />
              <h3>PRINT PHOTO</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="services-item">
              <img src="{{ asset('/') }}assets/img/services/3.png" alt="" />
              <h3>MAKEUP ARTIST</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section End -->

    <!-- Categories Section Begin -->
    <section class="categories-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="section-title">
              <h2>Catalog</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do<br />
                eiusmod tempor incididunt ut labore et dolore.
              </p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="right-btn"><a href="/catalog" class="primary-btn">VIew all</a></div>
          </div>
        </div>
        <div class="categories-slider owl-carousel">
          <div class="cs-item">
            <div class="cs-pic set-bg" data-setbg="{{ asset('/') }}assets/img/categories/wedding.png"></div>
            <div class="cs-text">
              <h4>Wedding</h4>
              <span>120 pictures</span>
            </div>
          </div>
          <div class="cs-item">
            <div class="cs-pic set-bg" data-setbg="{{ asset('/') }}assets/img/categories/group.png"></div>
            <div class="cs-text">
              <h4>Group</h4>
              <span>325 pictures</span>
            </div>
          </div>
          <div class="cs-item">
            <div class="cs-pic set-bg" data-setbg="{{ asset('/') }}assets/img/categories/maternity.png"></div>
            <div class="cs-text">
              <h4>Maternity</h4>
              <span>540 pictures</span>
            </div>
          </div>
          <div class="cs-item">
            <div class="cs-pic set-bg" data-setbg="{{ asset('/') }}assets/img/categories/product.png"></div>
            <div class="cs-text">
              <h4>Product</h4>
              <span>120 pictures</span>
            </div>
          </div>
          <div class="cs-item">
            <div class="cs-pic set-bg" data-setbg="{{ asset('/') }}assets/img/categories/family.png"></div>
            <div class="cs-text">
              <h4>Family</h4>
              <span>120 pictures</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Categories Section End -->
    @endsection