@extends('basic.index')
@section('home')
<div id="home" class="header-hero bg_cover" style="background-image: url(basic/images/banner-bg.svg)">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="header-hero-content text-center">
                    <h3 class="header-sub-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">{{$data->judul1}}</h3>
                    <h2 class="header-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">{{$data->judul2}}</h2>
                    
                </div> <!-- header hero content -->
            </div>
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="header-hero-image text-center wow fadeIn" data-wow-duration="1.3s" data-wow-delay="1.4s">
                    <img src="/basic/logo.png" width="30%" alt="hero">
                </div> <!-- header hero image -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
    <div id="particles-1" class="particles"></div>
</div>
@endsection