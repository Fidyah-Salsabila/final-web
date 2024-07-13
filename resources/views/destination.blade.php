@extends('layout')

@section('content')
  <!--==============================
	  Hero area Start
	==============================-->
  <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
    <div class="container z-index-common">
      <div class="breadcumb-content">
        <h1 class="breadcumb-title">Destinasi</h1>
        <div class="breadcumb-menu-wrap">
          <ul class="breadcumb-menu">
            <li><a href="/">Beranda</a></li>
            <li>Destinasi</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!--==============================
	  Hero Area End
	==============================-->

  <!--==============================
     Destiniations Area Start 
  ==============================-->
  <section class="space-top space-extra-bottom">
    <div class="container">
      <div class="row justify-content-center">
        @foreach ($data as $item)
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="destination-style1">
            <a href="/destination/show/{{ $item->id }}">
              <img src="{{ asset('storage/'.$item->image) }}" alt="destination image" />
            </a>
            {{-- <span class="destination-price">{{ number_format($item->price) }}</span> --}}
            <div class="destination-info">
              <h4 class="destination-name"><a href="#">{{ $item->name }}</a></h4>
              <p class="destination-text">{{ $item->address }}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <!--==============================
     Destiniations Area End 
  ==============================-->

  
@endsection

  