@extends('layout')

@section('content')

<!--==============================
    Hero area Start
==============================-->
<div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/breadcumb/breadcumb-bg.jpg') }}">
    <div class="container z-index-common">
        <div class="breadcumb-content">
        <h1 class="breadcumb-title">Destination Details</h1>
        <div class="breadcumb-menu-wrap">
            <ul class="breadcumb-menu">
            <li><a href="/">Beranda</a></li>
            <li><a href="/destiantion">Destination</a></li>
            <li>{{ $destination->name }}</li>
            </ul>
        </div>
        </div>
    </div>
</div>
<!--==============================
    Hero Area End
==============================-->
    
<!--==============================
    Destination Details Area Start
==============================-->
    <section class="space">
        <div class="container">
            <div class="destination-details">
              <h2 class="ds-title">{{ $destination->name }} - {{ $destination->address }}</h2>
              <div class="ds-img1">
                <img src="{{ asset('storage/'.$destination->image) }}" alt="image">
              </div>
              <p class="ds-text">{{ $destination->description }}</p>
            </div>
        </div>
    </section>
<!--==============================
    Destination Details Area End
==============================-->
    
@endsection