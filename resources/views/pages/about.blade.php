@extends('layouts.app')

@section('title', 'About Us')

@section('content')

@include('includes.header')
    <main>
        <!-- Slider Area Start-->
        <div class="slider-area slider-bg ">
            <!-- Single Slider -->
            <div class="single-slider d-flex align-items-center slider-height3">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-8 col-lg-9 col-md-12 ">
                            <div class="hero__caption hero__caption3 text-center">
                                <h1 data-animation="fadeInLeft" data-delay=".6s ">About Us</h1>
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
        <!-- ask questions -->
        <section class="ask-questions section-padding40 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-9 col-md-10 ">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2 text-center mb-90">
                            <h2>Who We Are</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-question  single-question2 d-flex mb-50">
                            {{-- <span> Q.</span> --}}
                            <div class="pera">
                                <h2>At KEKStudios Creative Hub, we are more than just a 
                                    design agency—we are brand builders with a mission 
                                    to empower businesses and organizations through 
                                    creativity, innovation, and purpose-driven design.
                                </h2>

                                {{-- <p>At KEKStudios Creative Hub, we are more than just a 
                                    design agency—we are brand builders with a mission 
                                    to empower businesses and organizations through 
                                    creativity, innovation, and purpose-driven design.</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-question  single-question2 d-flex mb-50">
                            {{-- <span> Q.</span> --}}
                            <div class="pera">
                                <h2> 
                                    Our clientele spans SMEs, churches, corporate 
                                    institutions, event organizers, and freelance creatives
                                     —all seeking impactful, timely, and accessible design 
                                    and branding services.
                                </h2>
                                {{-- <p>We operate one of the most advanced 100 Gbit networks in the world, complete with Anycast support and extensive DDoS protection.</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-question  single-question2 d-flex mb-50">
                            {{-- <span> Q.</span> --}}
                            <div class="pera">
                                <h2>Founded in Accra, Ghana, KEKStudios has grown into 
                                    a dynamic creative powerhouse that delivers end-to
                                    end branding solutions—from logo design and digital 
                                    product interfaces to high-quality commercial 
                                    printing and brand consulting.
                                </h2>
                                {{-- <p>We operate one of the most advanced 100 Gbit networks in the world, complete with Anycast support and extensive DDoS protection.</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-question  single-question2 d-flex mb-50">
                            {{-- <span> Q.</span> --}}
                            <div class="pera">
                                <h2>With a strong commitment to excellence and 
                                    community empowerment, KEKStudios exists to help 
                                    brands become unforgettable, by blending faith
                                    rooted values with modern design innovation.
                                </h2>
                                {{-- <p>We operate one of the most advanced 100 Gbit networks in the world, complete with Anycast support and extensive DDoS protection.</p> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="about-area1 section-padding40">
                    <div class="container">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-xl-5 col-lg-5 col-md-8 col-sm-10">
                                <!-- about-img -->
                                <div class="about-img ">
                                    <img src="assets/img/loader1.png" alt="">
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7 col-md-12">
                                <div class="about-caption ">
                                    <!-- Section Tittle -->
                                    <div class="section-tittle section-tittle2 mb-30">
                                        <h2 style=" font-family: 'Brush Script MT', cursive;">Vision</h2>
                                    </div>
                                    <p class="mb-40">
                                        To be West Africa’s leading creative and 
                                        print hub, setting the standard for quality, 
                                        innovation, and brand impact.
                                    </p>
                                    <div class="section-tittle section-tittle2 mb-30">
                                        <h2 style=" font-family: 'Brush Script MT', cursive;">Mission</h2>
                                    </div>
                                    <p class="mb-40">
                                        To provide innovative, high-impact design and print 
                                        solutions that empower brands to grow, connect, and 
                                        thrive in a competitive and ever-evolving world.
                                    </p>
                                    {{-- <ul>
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
                                    </ul> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-xl-12 ">
                        <div class="more-btn text-center mt-20">
                            <a href="#" class="btn">Go to Support</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </section>
        <!-- End ask questions -->
    </main>

@include('includes.footer')

      <!-- Scroll Up -->
      <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    @endsection