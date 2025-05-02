@extends('layouts.app')

@section('title', 'Home')

@section('content')

@include('includes.header')

<style>

        .services {
            max-width: 1200px;
            margin: 3rem auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 2rem;
            padding: 0 1rem;
        }
        
        .service-card {
            width: 100%;
            height: 250px;
            gap: 50px;
            max-width: 350px;
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            background: #fff
        }
        
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        }
        
        .service-image {
            /* height: 250px; */
            width: 105%;
            object-fit: cover;
        }
        
        .service-label {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(12, 30, 62, 0.85);
            color: white;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .service-name {
            display: flex;
            align-items: center;
        }

        @media (max-width: 550px) {
        .service-card {
            width: 120%;
            height: 250px;
        }
    }
    .image-carousel {
        position: relative;
        width: 100%;
    }
    
    .owl-dots {
        position: absolute;
        bottom: -30px;
        width: 100%;
        text-align: center;
    }
    
    .owl-dots .owl-dot {
        display: inline-block;
        margin: 0 5px;
    }
    
    .owl-dots .owl-dot span {
        display: block;
        width: 10px;
        height: 10px;
        background: rgba(255,255,255,0.5);
        border-radius: 50%;
    }
    
    .owl-dots .owl-dot.active span {
        background: #fff;
    }

</style>

    <main>
        
<!-- Slider Area Start-->
<div class="slider-area slider-bg">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-xl-5 col-lg-5 col-md-9">
                <div class="hero__caption hero__caption3">
                    <span data-animation="fadeInLeft" data-delay=".3s">Reality Of Imagination </span>
                    <h1 data-animation="fadeInLeft" data-delay=".6s" style="font-weight: 800">Who We Are</h1>
                    <p data-animation="fadeInLeft" data-delay=".8s">At KEKStudios Creative Hub, we are more than just a 
                        design agency—we are brand builders with a mission 
                        to empower businesses and organizations through 
                        creativity, innovation, and purpose-driven design.</p>
                    <!-- Slider btn -->
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="hero__img d-none d-lg-block f-right">
                    <!-- Image carousel -->
                    <div class="image-carousel">
                        <div class="carousel-images owl-carousel">
                            <img src="assets/img/background.png" alt="KEKStudios brand identity design process" style="width: 115%">
                            <img src="assets/img/image4.jpg" alt="KEKStudios creative work" style="width: 115%">
                            <img src="assets/img/image3.jpg" alt="KEKStudios portfolio" style="width: 115%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Slider Shape -->
    {{-- <div class="slider-shape d-none d-lg-block">
        <img class="slider-shape1" src="assets/img/hero/top-left-shape.png" alt="">
    </div> --}}
</div>
<!-- Slider Area End -->
        {{-- <!-- Slider Area Start-->
        <div class="slider-area slider-bg ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider d-flex align-items-center slider-height ">
                    <div class="container">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-xl-5 col-lg-5 col-md-9 ">
                                <div class="hero__caption hero__caption3">
                                    <span data-animation="fadeInLeft" data-delay=".3s">Reality Of Imagination </span>
                                    <h1 data-animation="fadeInLeft" data-delay=".6s " style="font-weight: 800">Who We Are</h1>
                                    <p data-animation="fadeInLeft" data-delay=".8s">At KEKStudios Creative Hub, we are more than just a 
                                        design agency—we are brand builders with a mission 
                                        to empower businesses and organizations through 
                                        creativity, innovation, and purpose-driven design.</p>
                                    <!-- Slider btn -->
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="hero__img d-none d-lg-block f-right">
                                    <img src="assets/img/background.png" alt="KEKStudios brand identity design process" data-animation="fadeInRight" data-delay="1s" style="width: 115%">
                                </div>
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
        <!-- Slider Area End --> --}}
    <!--? Team -->
    <section class="team-area section-padding40 section-bg1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="section-tittle text-center mb-105">
                        <h2>Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="row services">
                    <!-- Service Cards -->
                    @foreach ($services as $slug => $service)
                    <a href="{{ route('services.show', $slug) }}" class="service-card-link">
                        <div class="service-card">
                            <img src="{{$service['img']}}" alt="{{$service['title']}}" class="service-image" loading="lazy">
                            <div class="service-label">
                                <div class="service-name">
                                    <strong>{{$service['title']}}</strong>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Services End -->

    <!--? About-1 Area Start -->
    <div class="about-area1 section-padding40">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-5 col-lg-5 col-md-8 col-sm-10">
                    <!-- about-img -->
                    <div class="about-img ">
                        <img src="assets/img/Mockup.jpg" alt="" style="">
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-12">
                    <div class="about-caption about-area1   ">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2 mb-30">
                            <h2 style="font-weight: bold">WHY CHOOSE US</h2>
                        </div>
                        <ul>
                            <li>
                                <h3>Fast Turnaround</h3>
                                <p> 24-hour service with reliable, on-time delivery.</p>
                            </li>
                            
                            <li>
                                <h3 style="margin-bottom: 10px;">Dual-Service Model</h3>
                                <p>Digital design + high-quality printing under one roof.</p>
                            </li>
                            <li>
                                <h3 style="margin-bottom: 10px;"> Creative & Original</h3>
                                <p>Unique solutions tailored to each client.</p>
                            </li>
                            <li>
                                <h3 style="margin-bottom: 10px;">6+ Years Experience</h3>
                                <p>Trusted by brands across industries.</p>
                            </li>
                            <li>
                                <h3 style="margin-bottom: 10px;">Scalable & Impactful</h3>
                                <p>Built to grow with clients and empower creatives.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About-1 Area End -->

    <!--? Testimonial Area Start -->
    <section class="testimonial-area section-bg1">    
        <div class="container" >   
            <div class="testimonial-wrapper">
                <div class="row align-items-center justify-content-center">
                    <div class=" col-lg-10 col-md-12 col-sm-11">
                        <!-- Testimonial Start -->
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            {{-- <div class="single-testimonial text-center mt-55">
                                <div class="testimonial-caption">
                                    <img src="assets/img/icon/quotes-sign.png" alt="" class="quotes-sign">
                                    <p>
                                        I truly appreciate your consistency. <br>
                                       You brought my vision to life, and I 
                                       couldn’t be more grateful for 
                                       your amazing work.
                                    </p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                    <div class="founder-img">
                                    </div>
                                    <div class="founder-text">
                                        <span>Yolanda Obeng</span>
                                        <p>Founder & CEO , CalledOutSupport</p>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center mt-55">
                                <div class="testimonial-caption">
                                    <img src="assets/img/icon/quotes-sign.png" alt="" class="quotes-sign">
                                    <p>
                                        I truly appreciate your consistency. <br>
                                        You brought my vision to life, and I 
                                        couldn’t be more grateful for 
                                        your amazing work.
                                    </p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                    <div class="founder-img">
                                    </div>
                                    <div class="founder-text">
                                        <span>Jacson Miller</span>
                                        <p>Designer @Colorlib</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial End -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--? Testimonial Area End -->
</main>

@include('includes.footer')

<!-- Add this script at the end of your body tag to initialize the carousel -->
<script>
    $(document).ready(function(){
        $('.carousel-images').owlCarousel({
            items: 1,
            loop: true,
            margin: 0,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: false,
            nav: false,
            dots: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn'
        });
    });
</script>



@endsection