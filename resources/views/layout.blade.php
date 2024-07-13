<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Shared on THEMELOCK.COM - Travolo - Travel Agency & Tour Booking HTML Template - Home Three</title>
  <meta name="author" content="vecuro">
  <meta name="description" content="Travolo -  Travel Agency & Tour Booking HTML Template">
  <meta name="keywords" content="Travolo -  Travel Agency & Tour Booking HTML Template">
  <meta name="robots" content="INDEX,FOLLOW">

  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
  <link rel="icon" type="image/png" href="assets/img/favicons/favicon.png">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">

  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!--==============================
	    All CSS File
	============================== -->
  <!-- Bootstrap -->
  <!-- <link rel="stylesheet" href="assets/css/app.min.css"> -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <!-- Fontawesome Icon -->
  <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
  <!-- Magnific Popup -->
  <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
  <!-- Slick Slider -->
  <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
  <!-- Theme Custom CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>

  <!--********************************
  Code Start From Here 
	******************************** -->

  <!--==============================
    Mobile Menu
  ============================== -->
  <div class="vs-menu-wrapper">
    <div class="vs-menu-area text-center">
      <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
      <div class="mobile-logo">
        <a href="index.html"><img src="assets/img/logo.svg" alt="Travolo"></a>
      </div>
      <div class="vs-mobile-menu">
        <ul>
            <li >
              <a href="/">Beranda</a>
            </li>
            <li>
              <a href="/destination">Destinasi</a>
            </li>
            <li>
              <a href="/destination">Paket Wisata</a>
            </li>
          </ul>
      </div>
    </div>
  </div>

  <!-- ==============================
    Header Area
  ============================== -->
  <header class="vs-header header-layout3">
    <div class="sticky-wrapper">
      <div class="sticky-active">
        <div class="container position-relative z-index-common">
          <div class="row align-items-center justify-content-between ">
            <div class="col-auto">
              <div class="vs-logo">
                <a href="index.html"><img src="{{ asset('assets/img/logo.svg') }}" alt="logo"></a>
              </div>
            </div>
            <div class="col-auto text-end text-xl-center">
              <nav class="main-menu  menu-style1 d-none d-lg-block">
                <ul>
                  <li >
                    <a href="/">Beranda</a>
                  </li>
                  <li>
                    <a href="/destination">Destinasi</a>
                  </li>
                  <li>
                    <a href="/tour">Paket Wisata</a>
                  </li>
                </ul>
              </nav>
              <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="fal fa-bars"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  
  @yield('content')

  <footer class="footer-wrapper footer-layout1" data-bg-src="{{ asset('assets/img/bg/footer-bg.jpg') }}">
    <div class="footer-top">
      <div class="shadow-color"></div>
      <div class="container">
        <div class="cta-style1">
          <div class="row align-items-center justify-content-between">
            <div class="col-lg-6">
              <div class="cta-content">
                <h2 class="cta-title">Ready to get started?</h2>
                <p class="cta-text">It only takes a few minutes to register your FREE Travolo account.</p>
                <a href="sign-up.html" class="vs-btn style2">Open An Account</a>
              </div>
            </div>
            <div class="col-md-5 col-sm-6">
              <div class="cta-image d-lg-block d-none">
                <img src="{{ asset('assets/img/newsletter.png') }}" alt="CTA Image">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="widget-area">
      <div class="container">
        <div class="row g-5 justify-content-center">
          <div class="col-md-6 col-xl-3">
            <div class="widget footer-widget">
              <div class="vs-widget-about">
                <div class="footer-logo">
                  <a href="index.html"><img src="{{ asset('assets/img/white-logo.svg') }}" alt="Travolo" class="logo" /></a>
                </div>
                <p class="footer-text">Curabitur aliquet quam id dui bandit posuere blandit. Vivamfdsus magna justo
                  blandit aliquet.</p>
                <div class="social-style1">
                  <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                  <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                  <a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                  <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright-wrap">
        <div class="row justify-content-between align-items-center">
          <div class="col-lg-auto">
            <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> <script>document.write(new Date().getFullYear())</script> <a href="index.html">Travolo</a>.
              All Rights Reserved By <a href="https://themeforest.net/user/vecuro">Vecuro</a></p>
          </div>
          
        </div>
      </div>
    </div>
  </footer>


  <!--********************************
    Code Ends Here 
	******************************** -->

  <!-- Scroll To Top -->
  <a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>

  <!--==============================
    All Js File
============================== -->
  <!-- Jquery -->
  <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
  <!-- Slick Slider -->
  <script src="{{ asset('assets/js/slick.min.js') }}"></script>
  <!-- Bootstrap -->
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <!-- Magnific Popup -->
  <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
  <!-- jquery Ui -->
  <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
  <!-- Circle Progress -->
  <script src="{{ asset('assets/js/circle-progress.min.js') }}"></script>
  <!-- isotope -->
  <script src="{{ asset('assets/js/imagesLoaded.js') }}"></script>
  <script src="{{ asset('assets/js/isotope.js') }}"></script>
  <!-- Wow.js -->
  <script src="{{ asset('assets/js/wow.min.js') }}"></script>
  <!-- Main Js File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>