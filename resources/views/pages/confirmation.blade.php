@extends('layouts.app')

@section('title', 'Booking Confirmation')

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
                            <h1 data-animation="fadeInLeft" data-delay=".6s">Booking Confirmed</h1>
                            <p data-animation="fadeInLeft" data-delay=".8s">Thank you for choosing our services</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        <!-- Slider Shape -->
        <div class="slider-shape d-none d-lg-block">
            <img class="slider-shape1" src="{{ asset('assets/img/hero/top-left-shape.png') }}" alt="">
        </div>
    </div>
    <!-- Slider Area End -->

    <!-- Confirmation Section Start -->
    <section class="confirmation-section section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="confirmation-wrapper">
                        <div class="confirmation-icon text-center mb-4">
                            <i class="fas fa-check-circle" style="font-size: 64px; color: #28a745;"></i>
                        </div>
                        
                        <div class="confirmation-content text-center mb-5">
                            <h2>Your Booking Request Has Been Submitted</h2>
                            <p class="lead">Thank you for choosing {{ session('service') ?? 'our services' }}.</p>
                            <p>We've received your project details and will contact you within 24 hours to discuss next steps.</p>
                        </div>
                        
                        <div class="booking-details p-4 bg-light rounded mb-5">
                            <h4 class="text-center mb-4">Booking Details</h4>
                            
                            @if(session('booking'))
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><strong>Service:</strong> {{ session('booking.service_title') }}</p>
                                        <p><strong>Project:</strong> {{ session('booking.project_title') }}</p>
                                        <p><strong>Submitted on:</strong> {{ now()->format('F j, Y') }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>Name:</strong> {{ session('booking.name') }}</p>
                                        <p><strong>Email:</strong> {{ session('booking.email') }}</p>
                                        <p><strong>Phone:</strong> {{ session('booking.phone') }}</p>
                                    </div>
                                </div>
                            @else
                                <p class="text-center">A confirmation email has been sent to your email address with all booking details.</p>
                            @endif
                        </div>
                        
                        <div class="next-steps mb-5">
                            <h4 class="text-center mb-4">What Happens Next?</h4>
                            <div class="row">
                                <div class="col-md-4 text-center mb-4">
                                    <div class="step-icon mb-3">
                                        <i class="fas fa-phone" style="font-size: 36px; color: #0B1F3A;"></i>
                                    </div>
                                    <h5>Initial Contact</h5>
                                    <p>Our team will reach out to you within 24 hours to discuss your project.</p>
                                </div>
                                <div class="col-md-4 text-center mb-4">
                                    <div class="step-icon mb-3">
                                        <i class="fas fa-file-alt" style="font-size: 36px; color: #0B1F3A;"></i>
                                    </div>
                                    <h5>Proposal</h5>
                                    <p>We'll prepare a detailed proposal based on your requirements.</p>
                                </div>
                                <div class="col-md-4 text-center mb-4">
                                    <div class="step-icon mb-3">
                                        <i class="fas fa-rocket" style="font-size: 36px; color: #0B1F3A;"></i>
                                    </div>
                                    <h5>Project Kickoff</h5>
                                    <p>Once approved, we'll schedule a kickoff meeting to start your project.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="text-center">
                            <a href="{{ route('services.show', ['service' => $service['slug']]) }}">{{ $service['title'] }}</a>
                            {{-- <a href="{{ route('services.show') }}" class="button boxed-btn">Browse More Services</a> --}}
                            <a href="{{ route('home') }}" class="button boxed-btn btn-outline ml-3">Return to Homepage</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Confirmation Section End -->
</main>

@include('includes.footer')

<!-- Scroll Up -->
<div id="back-top">
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- Add custom styles for the confirmation page -->
<style>
    .confirmation-wrapper {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 25px rgba(0, 0, 0, 0.1);
        padding: 40px;
        margin-bottom: 50px;
    }
    
    .section-padding {
        padding: 80px 0;
    }
    
    .booking-details {
        border-left: 3px solid #0B1F3A;
    }
    
    .btn-outline {
        background: transparent;
        border: 2px solid #0B1F3A;
        color: #0B1F3A;
    }
    
    .btn-outline:hover {
        background: #0B1F3A;
        color: #fff;
    }
    
    .ml-3 {
        margin-left: 1rem;
    }
    
    @media (max-width: 767px) {
        .confirmation-wrapper {
            padding: 20px;
        }
        
        .section-padding {
            padding: 50px 0;
        }
        
        .ml-3 {
            margin-left: 0;
            margin-top: 1rem;
        }
    }
</style>

@endsection