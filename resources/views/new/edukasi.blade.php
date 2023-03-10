@extends('basic.index')
@section('home') 
<div id="home" class="header-hero bg_cover" style="background-image: url(basic/images/banner-bg.svg)">
    <section id="facts" class="video-counter pt-100">
        <div class="container">
            <div class="row subscribe-area">
                <div class="col-lg-6">
                    <div class="video-content mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img class="dots" src="/basic/images/dots.svg" alt="dots">
                        <div class="video-wrapper">
                            <div class="video-image">
                                <img src="/basic/images/video.png" alt="video">
                            </div>
                            <div class="video-icon">
                                <a href="{{$data->url_video}}" class="video-popup"><i class="lni-play"></i></a>
                            </div>
                        </div> <!-- video wrapper -->
                    </div> <!-- video content -->
                </div>
                <div class="col-lg-6">
                    <div class="counter-wrapper mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="counter-content">
                            <div class="section-title">
                                <div class="line"></div>
                                <h3 class="title">Edukasi Bencana <span> </span></h3>
                            </div> <!-- section title -->
                            <p class="text">{{$data->isi}}</p>
                        </div> <!-- counter content -->
                        
                    </div> <!-- counter wrapper -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <div id="particles-1" class="particles"></div>
</div>
{{-- <div id="home" class="header-hero bg_cover" style="background-image: url(basic/images/banner-bg.svg)">
<section id="facts" class="video-counter pt-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="video-content mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                    <img class="dots" src="assets/images/dots.svg" alt="dots">
                    <div class="video-wrapper">
                        <div class="video-image">
                            <img src="assets/images/video.png" alt="video">
                        </div>
                        <div class="video-icon">
                            <a href="https://www.youtube.com/watch?v=r44RKWyfcFw" class="video-popup"><i class="lni-play"></i></a>
                        </div>
                    </div> <!-- video wrapper -->
                </div> <!-- video content -->
            </div>
            <div class="col-lg-6">
                <div class="counter-wrapper mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                    <div class="counter-content">
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title">Cool facts <span> this about app</span></h3>
                        </div> <!-- section title -->
                        <p class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, seiam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                    </div> <!-- counter content -->
                    <div class="row no-gutters">
                        <div class="col-4">
                            <div class="single-counter counter-color-1 d-flex align-items-center justify-content-center">
                                <div class="counter-items text-center">
                                    <span class="count"><span class="counter">125</span>K</span>
                                    <p class="text">Downloads</p>
                                </div>
                            </div> <!-- single counter -->
                        </div>
                        <div class="col-4">
                            <div class="single-counter counter-color-2 d-flex align-items-center justify-content-center">
                                <div class="counter-items text-center">
                                    <span class="count"><span class="counter">87</span>K</span>
                                    <p class="text">Active Users</p>
                                </div>
                            </div> <!-- single counter -->
                        </div>
                        <div class="col-4">
                            <div class="single-counter counter-color-3 d-flex align-items-center justify-content-center">
                                <div class="counter-items text-center">
                                    <span class="count"><span class="counter">4.8</span></span>
                                    <p class="text">User Rating</p>
                                </div>
                            </div> <!-- single counter -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- counter wrapper -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>
</div> --}}
@endsection