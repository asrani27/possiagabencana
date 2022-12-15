@extends('basic.index')
@section('home') 
<div id="home" class="header-hero bg_cover" style="background-image: url(basic/images/banner-bg.svg)">
        <section id="blog" class="blog-area pt-100">
            <div class="container  subscribe-area">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title pb-35">
                            <div class="line"></div>
                            <h3 class="title"><span>Artikel</span></h3>
                        </div> <!-- section title -->
                    </div>
                </div> <!-- row -->
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-7">
                        <div class="single-blog mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <div class="blog-image">
                                <img src="/basic/images/blog-1.jpg" alt="blog">
                            </div>
                            <div class="blog-content">
                                <ul class="meta">
                                    <li>Posted By: <a href="#">Admin</a></li>
                                    <li>03 June, 2023</li>
                                </ul>
                                <p class="text">Lorem ipsuamet conset sadips cing elitr seddiam nonu eirmod tempor invidunt labore.</p>
                                <a class="more" href="#">Learn More <i class="lni-chevron-right"></i></a>
                            </div>
                        </div> <!-- single blog -->
                    </div> 
                    <div class="col-lg-4 col-md-7">
                        <div class="single-blog mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="blog-image">
                                <img src="/basic/images/blog-2.jpg" alt="blog">
                            </div>
                            <div class="blog-content">
                                <ul class="meta">
                                    <li>Posted By: <a href="#">Admin</a></li>
                                    <li>03 June, 2023</li>
                                </ul>
                                <p class="text">Lorem ipsuamet conset sadips cing elitr seddiam nonu eirmod tempor invidunt labore.</p>
                                <a class="more" href="#">Learn More <i class="lni-chevron-right"></i></a>
                            </div>
                        </div> <!-- single blog -->
                    </div> 
                    <div class="col-lg-4 col-md-7">
                        <div class="single-blog mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                            <div class="blog-image">
                                <img src="/basic/images/blog-3.jpg" alt="blog">
                            </div>
                            <div class="blog-content">
                                <ul class="meta">
                                    <li>Posted By: <a href="#">Admin</a></li>
                                    <li>03 June, 2023</li>
                                </ul>
                                <p class="text">Lorem ipsuamet conset sadips cing elitr seddiam nonu eirmod tempor invidunt labore.</p>
                                <a class="more" href="#">Learn More <i class="lni-chevron-right"></i></a>
                            </div>
                        </div> <!-- single blog -->
                    </div> 
                </div> <!-- row -->
            </div> <!-- container -->
        </section>
    <div id="particles-1" class="particles"></div>
</div>

@endsection