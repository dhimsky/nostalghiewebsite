<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Phozogy Template" />
    <meta name="keywords" content="Phozogy, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>nostalGhie | @yield('title')</title>

    <link href="{{ asset('/') }}assets/img/SENOVTEK.png" rel="icon">
    <link href="{{ asset('/') }}assets/img/SENOVTEK.png" rel="apple-touch-icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Quantico:400,700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
    rel="stylesheet">
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/elegant-icons.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/slicknav.min.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/style.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/pulse.css" type="text/css" />
    <link href="{{ asset('/') }}assets/css/stylepackage.css" rel="stylesheet">



</head>
<body>
    <div id="preloder">
        <div class="loader"></div>
      </div>

          <!-- Header Section Begin -->
    <header class="header fixed-top d-flex align-items-center">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="logo">
              <a href="/home">
                <img src="{{ asset('/') }}assets/img/logohead.png" alt="" />
              </a>
            </div>
            <nav class="nav-menu mobile-menu header-nav ms-auto">
              <ul>
                <li><a href="/home">Home</a></li>
                <li><a href="/catalog">Catalog</a></li>
                <li><a href="/package">Package</a></li>
                <li><a href="/promosi">Promo</a></li>
                <li><a href="/contact">Contact</a></li>
                <li class="nav-item"><a href="/logout" class="nav-link">Logout</a></li>
                {{-- <button type="button" class="btn btn-primary btn-rounded btn-fw ml-auto">Primary</button> --}}
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- Header End -->
    <br>
    <br>
    <br>
    <br>

      @yield('content')

          <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="fs-about">
                <div class="fa-logo">
                  <a href="#">
                    <img src="{{ asset('/') }}assets/img/logohead.png" alt="" />
                  </a>
                </div>
                <div class="fa-social">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-youtube-play"></i></a>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-2 col-md-6 col-sm-6">
              <div class="fs-widget">
                <h5>Quick links</h5>
                <ul>
                  <li><a href="/home">Home</a></li>
                  <li><a href="/catalog">Catalog</a></li>
                  <li><a href="/package">Package</a></li>
                </ul>
                <ul>
                  <li><a href="/promo">Promo</a></li>
                  <li><a href="/contact">Contact</a></li>
                  <li><a href="#">Pages</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="fs-widget">
                <h5>Subscribe</h5>
                <div class="fw-subscribe">
                  <form action="#">
                    <input type="text" placeholder="Email" />
                    <button type="submit"><i class="fa fa-send"></i></button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="copyright-text">
                <p>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy;
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  All rights reserved 
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- Footer Section End -->
  
      <!-- Search model Begin -->
      <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
          <div class="search-close-switch">+</div>
          <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here....." />
          </form>
        </div>
      </div>
      <!-- Search model end -->

        <!--wahtsapp melayang-->
        <a href="https://wa.me/6289671141721?text=Halo%20ada%20yang%20ingin%20saya%20tanyakan" target="_blank">
          <button class="wa_btn whatsapp pulse-2">
            <i class="fa-brands fa-whatsapp fa-2x"></i></a>
        </button>
        </a>
        

  <!--kembali ke atas-->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
    class="bi bi-arrow-up-short"></i></a>

      <!-- Js Plugins -->
      <script src="{{ asset('/') }}assets/js/jquery-3.3.1.min.js"></script>
      <script src="{{ asset('/') }}assets/js/bootstrap.min.js"></script>
      <script src="{{ asset('/') }}assets/js/jquery.magnific-popup.min.js"></script>
      <script src="{{ asset('/') }}assets/js/isotope.pkgd.min.js"></script>
      <script src="{{ asset('/') }}assets/js/masonry.pkgd.min.js"></script>
      <script src="{{ asset('/') }}assets/js/jquery.slicknav.js"></script>
      <script src="{{ asset('/') }}assets/js/owl.carousel.min.js"></script>
      <script src="{{ asset('/') }}assets/js/main.js"></script>
      <script src="https://kit.fontawesome.com/9c221ab8dd.js" crossorigin="anonymous"></script>

</body>
</html>