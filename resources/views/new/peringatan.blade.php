@extends('basic.index')
@section('home') 
<div id="home" class="header-hero bg_cover" style="background-image: url(basic/images/banner-bg.svg)">
    <section class="about-area pt-100">
        <div class="container subscribe-area">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title"><span>{{$data->judul}}</span></h3>
                        </div> <!-- section title -->
                        <p class="text">{{$data->isi}}</p>
                        
                    </div> <!-- about content -->
                </div>
                <div class="col-lg-6">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="/basic/images/about3.svg" alt="about">
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-shape-1">
            <img src="/basic/images/about-shape-1.svg" alt="shape">
        </div>
    </section>
    <div id="particles-1" class="particles"></div>
</div>

@endsection