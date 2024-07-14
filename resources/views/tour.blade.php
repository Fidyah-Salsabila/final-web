@extends('layout')

@section('content')
<!--==============================
    Hero area Start
  ==============================-->
<div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/bagus.webp">
  <div class="container z-index-common">
    <div class="breadcumb-content">
      <h1 class="breadcumb-title">Tours</h1>
      <div class="breadcumb-menu-wrap">
        <ul class="breadcumb-menu">
          <li><a href="index.html">Home</a></li>
          <li>Tours</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!--==============================
    Hero Area End
  ==============================-->

<!--==============================
    Tours Area Start
  ==============================-->
<section class="space-bottom">
  <div class="outer-wrap">
    <div class="container" style="padding-top: 60px;" >
      <div class="shadow-content1">
          <div class="row" >
            @foreach ($data as $item)
            <div class="col-xl-4 col-lg-6 col-sm-6 filter-item hightTolow">
              <div class="package-style1">
                <div class="package-img">
                  <a href="/tour/show/{{ $item->id }}"><img src="{{ asset('storage/'.$item->image) }}" alt="Package Image"></a>
                </div>
                <div class="package-content">
                  <div class="package-review">
                    @for ($i = 0; $i < $item->rating; $i++)
                    <i class="fas fa-star"></i>
                    @endfor
                  </div>
                  <h3 class="package-title"><a href="tour-booking.html">{{ $item->name }}</a></h3>
                  <p class="package-text">{{ $item->location }}</p>
                  <div class="package-footer">
                    <span class="package-price">{{ number_format($item->price) }}</span>
                    <a href="/tour/show/{{ $item->id }}" class="vs-btn">Detail</a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
      </div>
    </div>
  </div>
</section>
<!--==============================
    Tours Area End
==============================-->
@endsection


  