@extends('layouts.app')

@section('title', 'Contact')

@section('content')

@include('includes.header')

<main>
    <!-- Slider Area Start-->
    <div class="slider-area slider-bg" style="background: #0B1F3A">
        <!-- Single Slider -->
        <div class="single-slider d-flex align-items-center slider-height3">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-8 col-lg-9 col-md-12">
                        <div class="hero__caption hero__caption3 text-center">
                            <h1 data-animation="fadeInLeft" data-delay=".6s" style="color: #DAA33E">Contact us</h1>
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
    
    <!--?  Contact Area start  -->
    <section class="contact-section">
        <div class="container">
            <!-- Map Section -->
            <div class="mb-5 pb-4">
                <div class="map-container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3706.925465576963!2d-0.2748518957771377!3d5.626210976443805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf98c25ce18e1d%3A0xa488794859304f7!2sPentecost%20University!5e1!3m2!1sen!2sgh!4v1745590731634!5m2!1sen!2sgh"
                        style="border:0; width:100%; height:450px;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Get in Touch</h2>
                </div>
                
                <!-- Contact Form -->
                <div class="col-lg-8 col-md-12 mb-5 mb-lg-0">
                    <form class="form-contact " action="{{ url('/send-mail')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" 
                                        placeholder = 'Enter Message' 
                                        placeholder="Enter Message"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text" 
                                        placeholder = 'Enter your name'
                                        placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email" 
                                        placeholder = 'Enter email address'
                                        placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text" 
                                        placeholder = 'Enter Subject'
                                        placeholder="Enter Subject">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn" style="border-radius: 25px;">Send</button>
                        </div>
                    </form>
                </div>
                
                <!-- Contact Information -->
                <div class="col-lg-4 col-md-12">
                    <div class="media contact-info mb-4">
                        <span class="contact-info__icon me-3"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Pentecost University Street, Sowutoum.</h3>
                        </div>
                    </div>
                    <div class="media contact-info mb-4">
                        <span class="contact-info__icon me-3"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>+233 55 369 6305</h3>
                        </div>
                    </div>
                    <div class="media contact-info mb-4">
                        <span class="contact-info__icon me-3"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>kekstudiosofficial1@gmail.com</h3>
                            <p>Send us a message anytime!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Area End -->
</main>

@include('includes.footer')

<!-- Scroll Up -->
<div id="back-top">
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

@endsection