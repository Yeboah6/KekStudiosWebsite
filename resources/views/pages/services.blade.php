@extends('layouts.app')

@section('title', 'Service')

@section('content')

@include('includes.header')

    <main>
        <!-- Slider Area Start-->
        <div class="slider-area slider-bg " style="background: #0B1F3A">
            <!-- Single Slider -->
            <div class="single-slider d-flex align-items-center slider-height2">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-8 col-lg-9 col-md-12 ">
                            <div class="hero__caption hero__caption2 text-center">
                                <h1 data-animation="fadeInLeft" data-delay=".6s ">Our Services</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
            <!-- Slider Shape -->
            <div class="slider-shape d-none d-lg-block">
                <img class="slider-shape1" src="assets/img/hero/top-left-shape.png" alt="">
            </div>
        </div>
        <!-- Slider Area End -->
        <!--? Pricing Card Start -->
        <section class="pricing-card-area pricing-card-area2 fix">
            <div class="container-fluid"> <!-- Changed to container-fluid for full width -->
                <div class="row flex-nowrap overflow-auto"> <!-- Added flex-nowrap to prevent wrapping and overflow-auto for scrolling -->
                    <!-- First Card -->
                    @foreach ($services as $slug => $service)
                        <div class="col">
                        <div class="single-card text-center mb-30">
                            <div class="card-top">
                                <img src="assets/img/icon/price1.svg" alt="">
                                <h4>{{$service['title']}}</h4>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li>Logos</li>
                                    <li>Brand guidelines</li>
                                    <li>Brand stationery</li>
                                </ul>
                                <a href="{{ route('services.show', $slug) }}" class="borders-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
                    
                    <!-- Second Card -->
                    {{-- <div class="col">
                        <div class="single-card text-center mb-30">
                            <div class="card-top">
                                <img src="assets/img/icon/price2.svg" alt="">
                                <h4>Commercial Printing</h4>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li>Flyers & Banners</li>
                                    <li>Brochures</li>
                                    <li>T-shirts</li>
                                    <li>Publications</li>
                                    <li>Packaging & Promo Materials</li>
                                </ul>
                                <a href="#" class="borders-btn">Book Now</a>
                            </div>
                        </div>
                    </div> --}}
                    
                    <!-- Third Card -->
                    {{-- <div class="col">
                        <div class="single-card text-center mb-30">
                            <div class="card-top">
                                <img src="assets/img/icon/price3.svg" alt="">
                                <h4>Web & Mobile Applications Development</h4>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li>Branded websites</li>
                                    <li>Mobile applications</li>
                                    <li>Software development</li>
                                </ul>
                                <a href="#" class="borders-btn">Book Now</a>
                            </div>
                        </div>
                    </div> --}}
                    
                    <!-- Fourth Card -->
                    {{-- <div class="col">
                        <div class="single-card text-center mb-30">
                            <div class="card-top">
                                <img src="assets/img/icon/price1.svg" alt="">
                                <h4> </h4>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li> Interfaces for</li>
                                    <ul>
                                        <li>Websites</li>
                                        <li>Apps</li>
                                        <li>Dashboards</li>
                                    </ul>
                                </ul>
                                <a href="#" class="borders-btn">Book Now</a>
                            </div>
                        </div>
                    </div> --}}
                    
                    <!-- Fifth Card -->
                    {{-- <div class="col">
                        <div class="single-card text-center mb-30">
                            <div class="card-top">
                                <img src="assets/img/icon/price2.svg" alt="">
                                <h4>Event & Campaign Branding</h4>
                                <p>Starting at</p>
                            </div>
                            <div class="card-mid">
                                <h4>$4.67 <span>/ month</span></h4>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li>2 TB of space</li>
                                    <li>unlimited bandwidth</li>
                                    <li>full backup systems</li>
                                    <li>free domain</li>
                                    <li>unlimited database</li>
                                </ul>
                                <a href="#" class="borders-btn">Get Started</a>
                            </div>
                        </div>
                    </div> --}}
                    
                    <!-- Sixth Card -->
                    {{-- <div class="col">
                        <div class="single-card text-center mb-30">
                            <div class="card-top">
                                <img src="assets/img/icon/price3.svg" alt="">
                                <h4>Cloud Hosting</h4>
                                <p>Starting at</p>
                            </div>
                            <div class="card-mid">
                                <h4>$4.67 <span>/ month</span></h4>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li>2 TB of space</li>
                                    <li>unlimited bandwidth</li>
                                    <li>full backup systems</li>
                                    <li>free domain</li>
                                    <li>unlimited database</li>
                                </ul>
                                <a href="#" class="borders-btn">Get Started</a>
                            </div>
                        </div>
                    </div> --}}
                {{-- </div>
            </div>
        </section> --}}
        <!-- Pricing Card End -->
        <!--? About-1 Area Start -->
        <div class="about-area1 section-padding40">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-8 col-sm-10">
                        <!-- about-img -->
                        <div class="about-img ">
                            <img src="assets/img/gallery/about1.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-12">
                        <div class="about-caption ">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle2 mb-30">
                                <h2>Global server location</h2>
                            </div>
                            <p class="mb-40">Supercharge your WordPress hosting with detailed website analytics, marketing tools. Our experts are just part of the reason Bluehost is the ideal home for your WordPress website. We're here to help you succeed!</p>
                            <ul>
                                <li>
                                    <img src="assets/img/icon/right.svg" alt="">
                                    <p>WordPress hosting with detailed website</p>
                                </li>
                                <li>
                                    <img src="assets/img/icon/right.svg" alt="">
                                    <p>Our experts are just part of the reason</p>
                                </li>
                                <li>
                                    <img src="assets/img/icon/right.svg" alt="">
                                    <p> Detailed website analytics</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About-1 Area End -->
        <!--? About-2 Area Start -->
        <div class="about-area1 pb-bottom">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-7 col-lg-7 col-md-12">
                        <div class="about-caption about-caption3 mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle2 mb-30">
                                <h2>Dedicated support</h2>
                            </div>
                            <p class="mb-40">Supercharge your WordPress hosting with detailed website analytics, marketing tools. Our experts are just part of the reason Bluehost is the ideal home for your WordPress website. We're here to help you succeed!</p>
                            <ul class="mb-30">
                                <li>
                                    <img src="assets/img/icon/right.svg" alt="">
                                    <p>WordPress hosting with detailed website</p>
                                </li>
                                <li>
                                    <img src="assets/img/icon/right.svg" alt="">
                                    <p>Our experts are just part of the reason</p>
                                </li>
                            </ul>
                            <a href="#" class="btn"><i class="fas fa-phone-alt"></i>(10) 892-293 2678</a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-8 col-sm-10">
                        <!-- about-img -->
                        <div class="about-img ">
                            <img src="assets/img/gallery/about2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About-2 Area End -->
    </main>

    @include('includes.footer')

      <!-- Scroll Up -->
      <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

@endsection