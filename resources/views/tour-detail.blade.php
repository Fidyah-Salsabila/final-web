@extends('layout')

@section('content')
<!--==============================
    Hero area Start
==============================-->
<div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/breadcumb/breadcumb-bg.jpg') }}">
    <div class="container z-index-common">
        <div class="breadcumb-content">
        <h1 class="breadcumb-title">Tour Booking</h1>
        <div class="breadcumb-menu-wrap">
            <ul class="breadcumb-menu">
                <li><a href="/">Beranda</a></li>
                <li><a href="/tour">Paket Wisata</a></li>
                <li>{{ $tour->name }}</li>
            </ul>
        </div>
        </div>
    </div>
</div>
<!--==============================
    Hero Area End
==============================-->

<!--==============================
    Tours Booking Area Start
==============================-->
<section class="space-bottom">
    <div class="outer-wrap">
          <div class="container pt-5">
            <div class="shadow-content1">
                <div class="info-image mb-3">
                  <img src="{{ asset('storage/'.$tour->image) }}" alt="tours-img">
                </div>
                <div class="tour-review">
                  <ul>
                    @for ($i = 1; $i <= $tour->rating; $i++)
                    <li><i class="bi bi-star-fill text-warning"></i></li>
                    @endfor
                    @for ($i = 1; $i <= 5 - $tour->rating; $i++)
                    <li><i class="bi bi-star text-warning"></i></li>
                    @endfor
                  </ul>
                </div>
                <div class="row justify-content-between align-items-center">
                  <div class="col-md-6">
                    <h2 class="tab-title">{{ $tour->name }}</h2>
                  </div>
                  <div class="col-auto">
                    <p class="tour-price"><strong>{{ number_format($tour->price) }}</strong> / Per orang</p>
                  </div>
                </div>
                <p>{{ $tour->description }}</p>
                <table class="infolist">
                  <tr>
                    <td class="info-heading">Lokasi</td>
                    <td class="info">{{ $tour->location }}</td>
                  </tr>
                  <tr>
                    <td class="info-heading">Harga</td>
                    <td class="info">{{ number_format($tour->price) }}</td>
                  </tr>
                </table>
            </div>
          </div>
        </div>
</section>
<!--==============================
    Tours Booking Area End
==============================-->
@endsection