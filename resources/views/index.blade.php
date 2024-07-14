@extends('layout')

@section('content')
<!-- ==============================
  Hero Area Start 
============================== -->
<section class="hero-layout2">
  <div>
    <div class="vs-carousel hero-slider3" data-slide-show="1" data-fade="true" >
      @foreach ($tour as $item)
      <div class="hero-slide hero-mask" data-bg-src="{{ asset('storage/'.$item->image) }}">
        <div class="container">
          <div class="row align-items-center justify-content-between">
            <div class="col-lg-8">
              <div class="hero-content">
                <span class="hero-subtitle">Let's Go Now</span>
                <h1 class="hero-title">{{ $item->name }}</h1>
                <p class="hero-text">{{ $item->description }}</p>
                <a href="/tour/show/{{ $item->id }}" class="vs-btn style4">Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div>
      <button class="icon-btn prev-btn" data-slick-prev=".hero-slider3"><i class="fas fa-chevron-up"></i></button>
      <button class="icon-btn next-btn" data-slick-next=".hero-slider3"><i class="fas fa-chevron-down"></i></button>
    </div>
  </div>
</section>
<!-- ============================
  Hero Area End 
==============================-->

<!-- ==============================
  About Area Start 
============================== -->
<section class="space shape-mockup-wrap">
  <div class="shape-mockup d-none d-xl-block ripple-animation z-index-negative" data-top="10%" data-left="5%">
    <img src="assets/img/shape/Ballon.png" alt="svg">
  </div>
  <div class="shape-mockup d-none d-xl-block jump z-index-negative" data-top="10%" data-right="10%">
    <img src="assets/img/shape/up-arrow.png" alt="svg">
  </div>
  <div class="shape-mockup d-none d-xl-block jump z-index-negative" data-bottom="0%" data-left="0%">
    <img class="plane2" src="assets/img/shape/plane2.png" alt="svg">
  </div>
  <div class="shape-mockup d-none d-xl-block jump z-index-negative" data-bottom="15%" data-right="5%">
    <img src="assets/img/shape/Lines.png" alt="svg">
  </div>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-xl-5">
        <div class="about-content">
          <div class="title-area">
            <span class="sec-subtitle">We are Travolo</span>
            <h2 class="sec-title h1">We Are The Best For Your Travel </h2>
            <p class="sec-text">Temukan keajaiban dunia di setiap sudut destinasi kami! Dari pantai berpasir putih yang menakjubkan hingga puncak gunung yang mempesona, website kami adalah panduan terbaik Anda untuk merencanakan petualangan berikutnya.</p>
          </div>
          {{-- <ul class="about-list1">
            <li>Mei an periculaeuripidis.</li>
            <li>Lorem ipsum dolor sit am.</li>
            <li>Blienum nhaedrum tortos.</li>
            <li>Dlienum phaed is in meis.</li>
            <li>torquatos nec euls vis.</li>
            <li>peric uripidis, fincartem.</li>
            <li>pericu laeuri pidis Mei sm.</li>
          </ul> --}}
          <a href="about.html" class="vs-btn style4">View More</a>
        </div>
      </div>
      <div class="col-xl-6">
        <div class="img-box3">
          <img class="img1" src="assets/img/about/1.webp" alt="about image">
          <div class="bottom-img">
            <img class="img2" src="assets/img/about/3.jpeg" alt="about image">
            <img class="img3" src="assets/img/about/2.jpg" alt="about image">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ==============================
  About Area End 
============================== -->

<!-- ==============================
  Tour Package Area Start 
============================== -->
<section class="space bg-light shape-mockup-wrap" data-bg-src="assets/img/shape/Bg.png">
  <div class="shape-mockup d-none d-xl-block jump z-index-negative" data-bottom="20%" data-left="5%">
    <img src="assets/img/shape/Dot.png" alt="Dots">
  </div>
  <div class="shape-mockup d-none d-xl-block spin z-index-negative" data-bottom="-5%" data-right="-5%">
    <img src="assets/img/shape/circle1.png" alt="Circle">
  </div>
  <div class="shape-mockup d-none d-xl-block ripple-animation z-index-negative" data-top="10%" data-left="10%">
    <img src="assets/img/shape/Plane.png" alt="plane">
  </div>
  <div class="container ">
    <div class="row justify-content-center text-center">
      <div class="col-xl-6 col-lg-8 wow fadeInUp" data-wow-delay="0.3s">
        <div class="title-area">
          <span class="sec-subtitle">Tour Menyenangkan</span>
          <h2 class="sec-title h1">Paket Wisata</h2>
          <p class="sec-text">Jelajahi dunia dengan paket murah dan lengkap, paket terbaik dari layanan kami.</p>
        </div>
      </div>
    </div>
    <div class="row vs-carousel" data-slide-show="4" data-arrows="false" data-lg-slide-show="3" data-md-slide-show="2"
      data-sm-slide-show="1">
      @foreach ($tour as $item)
      <div class="col-xl-3 col-lg-6 col-sm-6">
        <div class="package-style1">
          <div class="package-img">
            <a href="/tour/show/{{ $item->id }}"><img class="w-100" src="{{ asset('storage/'.$item->image) }}" alt="Package Image"></a>
          </div>
          <div class="package-content">
            <div class="package-review">
              @for ($i = 0; $i < $item->rating; $i++)
              <i class="fas fa-star"></i>
              @endfor
            </div>
            <h3 class="package-title"><a href="/tour/show/{{ $item->id }}">{{ $item->name }}</a></h3>
            <p class="package-text">{{ $item->location }}</p>
            <div class="package-footer">
              <span class="package-price">{{ number_format($item->price) }}</span>
              <a href="/tour/show/{{ $item->id }}" class="vs-btn style4">Detail</a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="text-center pt-lg-2">
      <a href="/tour" class="vs-btn">View More</a>
    </div>
  </div>
</section>
<!-- ==============================
  Tour Package Area End 
============================== -->

<!-- ==============================
  Features Area Start 
============================== -->
<section class="space-top space-extra-bottom shape-mockup-wrap">
  <div class="shape-mockup d-none d-xl-block ripple-animation z-index-negative" data-bottom="10%" data-right="13%">
    <img src="assets/img/shape/circle.png" alt="svg">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-xl-4 col-md-6 col-sm-6 col-12">
        <div class="features-style1">
          <div class="features-bg" data-bg-src="assets/img/shape/features.png"></div>
          <div class="features-image">
            <img src="assets/img/features/foto lapleng.jpg" alt="image">
          </div>
          <div class="features-content">
            <h3 class="features-title">Fidyah Nurfitrah Salsabila</h3>
            <p class="features-text">Owner of 7 Men from South Korea or more often known by their group name, BTS.</p>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-6 col-sm-6 col-12">
        <div class="features-style1">
          <div class="features-bg" data-bg-src="assets/img/shape/features.png"></div>
          <div class="features-image">
            <img src="assets/img/features/foto1.jpg" alt="image">
          </div>
          <div class="features-content">
            <h3 class="features-title">Khadijjah Kurniawati</h3>
            <p class="features-text"><br>Work until u dont have to introduce urself.</p>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-6 col-sm-6 col-12">
        <div class="features-style1">
          <div class="features-bg" data-bg-src="assets/img/shape/features.png"></div>
          <div class="features-image">
            <img src="assets/img/features/foto2.jpg" alt="image">
          </div>
          <div class="features-content">
            <h3 class="features-title">Fairuz Zuhdi </h3>
            <p class="features-text">Yesterday is history, tomorrow is a mystery, but today is a gift. That's why it's called the present</p>
          </div>
        </div>
      </div>
      {{-- <div class="col-xl-3 col-md-6 col-sm-6 col-12">
        <div class="features-style1">
          <div class="features-bg" data-bg-src="assets/img/shape/features.png"></div>
          <div class="features-image">
            <img src="assets/img/features/features-1-4.png" alt="image">
          </div>
          <div class="features-content">
            <h3 class="features-title">Location Manager</h3>
            <p class="features-text">Curabitur aliquet qugbfam isfbd dgui posuedfdre bladscfndit vivgbagmus Bitur
              aliquet</p>
          </div>
        </div>
      </div> --}}
    </div>
  </div>
</section>
<!-- ==============================
  Features Area End 
============================== -->


<!--==============================
   Destiniations Area Start 
==============================-->
<section class="space space-extra-bottom bg-light shape-mockup-wrap" data-bg-src="assets/img/shape/Bg.png">
  <div class="shape-mockup d-none d-xl-block spin z-index-negative" data-top="-20%" data-right="-8%">
    <img src="assets/img/shape/circle1.png" alt="circle">
  </div>
  <div class="shape-mockup d-none d-xl-block  z-index-negative" data-bottom="13%" data-left="0%">
    <img src="assets/img/shape/walk.png" alt="circle">
  </div>
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-5">
        <div class="title-area">
          <span class="sec-subtitle">Top Destination</span>
          <h2 class="sec-title h1">Unforgettable Cities</h2>
          <p class="sec-text">Curabitur aliquet quam id dui posuere blandit. Vivamus magna justo, lacinia eget
            consectetur sed,
            convgallis at tellus.</p>
        </div>
      </div>
      <div class="col-auto">
        <div class="sec-btns">
          <button class="icon-btn" data-slick-prev=".destinationSlide"><i class="fas fa-chevron-left"></i></button>
          <button class="icon-btn" data-slick-next=".destinationSlide"><i class="fas fa-chevron-right"></i></button>
        </div>
      </div>
    </div>
    <div class="row destinationSlide vs-carousel" data-slide-show="3" data-arrows="false" data-lg-slide-show="2"
      data-md-slide-show="2" data-sm-slide-show="1">
      @foreach ($destination as $item)
      <div class="col-xl-4">
        <div class="destination-style1">
          <a href="/destination/show/{{ $item->id }}">
            <img src="{{ asset('storage/'.$item->image) }}" alt="destination image" />
          </a>
          <span class="destination-price"></span>
          <div class="destination-info">
            <h4 class="destination-name"><a href="/destination/show/{{ $item->id }}">{{ $item->name }}</a></h4>
              <p class="destination-text">{{ $item->address }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
<!--==============================
   Destinations Area End 
==============================-->
@endsection

