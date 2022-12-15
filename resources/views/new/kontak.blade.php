@extends('basic.index')
@section('home') 
<div id="home" class="header-hero bg_cover" style="background-image: url(basic/images/banner-bg.svg)">
    <section class="about-area pt-100">

        <div class="container">
            <div class="subscribe-area wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="subscribe-content mt-45">
                            <h3 class="subscribe-title">Telp : <span> {{$data->telp}}</span></h3>
                            <h3 class="subscribe-title">WA : <span>  {{$data->telp}}</span></h3>
                            <h3 class="subscribe-title">Facebook : <span>  {{$data->facebook}}</span></h3>
                            <h3 class="subscribe-title">Youtube : <span>  {{$data->youtube}}</span></h3>
                            <h3 class="subscribe-title">Email : <span>  {{$data->email}}</span></h3>
                            <h3 class="subscribe-title">instagram : <span>  {{$data->ig}}</span></h3>
                        </div>
                    </div>
                 </div> <!-- row -->
            </div> <!-- subscribe area -->
            
        </div> <!-- container -->
        <div id="particles-2"></div>
        
        <div class="about-shape-1">
            <img src="/basic/images/about-shape-1.svg" alt="shape">
        </div>
    </section>
    <div id="particles-1" class="particles"></div>
</div>

@endsection