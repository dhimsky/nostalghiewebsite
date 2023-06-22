@extends('layouts.main-layout')

@section('title', 'Promo')

@section('content')
<section class="about-section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 p-0">
          <div class="about-pic set-bg" data-setbg="{{ asset('/') }}assets/img/about/about-pic.jpg">
            <a href="https://www.youtube.com/watch?v=hxADTEJalRw&list=WL&index=49&t=0s" class="play-btn video-popup"><i class="fa fa-play"></i></a>
          </div>
        </div>
        <div class="col-lg-6 p-0">
          <div class="about-text">
            <div class="section-title">
              <h2>Capturing the moments that captivate your heart</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing, tempor incididunt ut labore et dolore magna aliqua. Risus commodo viverra maecenas accumsan lacus vel facilisis. All these taglines are owned by their respective owners,
                and we do not have any copyright on them.
              </p>
            </div>
            <div class="at-list">
              <div class="al-item">
                <div class="al-pic">
                  <img src="{{ asset('/') }}assets/img/about/list-1.png" alt="" />
                </div>
                <div class="al-text">
                  <h5>Professionalism</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                </div>
              </div>
              <div class="al-item">
                <div class="al-pic">
                  <img src="{{ asset('/') }}assets/img/about/list-2.png" alt="" />
                </div>
                <div class="al-text">
                  <h5>Individual approach</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                </div>
              </div>
              <div class="al-item">
                <div class="al-pic">
                  <img src="{{ asset('/') }}assets/img/about/list-3.png" alt="" />
                </div>
                <div class="al-text">
                  <h5>Flexible Schedule</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                </div>
              </div>
              <div class="al-item">
                <div class="al-pic">
                  <img src="{{ asset('/') }}assets/img/about/list-4.png" alt="" />
                </div>
                <div class="al-text">
                  <h5>Experience</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection