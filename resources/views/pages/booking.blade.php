@extends('layouts.app')

@section('title', 'Book Now - {{ $service["title"] }}')

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
                            <h1 data-animation="fadeInLeft" data-delay=".6s" style="color: #DAA33E">Book {{ $service["title"] }}</h1>
                            <p data-animation="fadeInLeft" data-delay=".8s">Let's bring your vision to life</p>
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

    <!-- Booking Form Section Start -->
    <section class="booking-section section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="booking-form-wrapper">
                        <button onclick="history.back()" class="button boxed-btn btn-lg">Back</button>
                        <div class="section-title text-center mb-5">
                            <h2>Schedule Your {{ $service["title"] }} Project</h2>
                            <p>Fill out the form below to get started with your project. Our team will contact you within 24 hours.</p>
                        </div>
                        
                        <form class="booking-form" action="{{ route('services.store', ['service' => $slug]) }}" method="POST" id="bookingForm">
                            @csrf
                            
                            <!-- Service Selection -->
                            <div class="row mb-4">
                                <div class="col-12">
                                    <h4 class="form-section-title">1. Service Information</h4>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="service" class="form-label">Service Type</label>
                                        <input type="text" class="form-control control" value="{{ $service['title'] }}" readonly>
                                        <input type="hidden" name="service" value="{{ $slug }}">
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <div class="service-details p-3 rounded">
                                        <h5>Select your specified Service</h5>
                                        <select class="form-select form-control control" id="work" name="work">
                                            <option selected disabled>Select your specified service</option>
                                                @foreach($service['works'] as $work)
                                                    <option value="{{ $work }}">{{ $work }}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Contact Information -->
                            <div class="row mb-4">
                                <div class="col-12">
                                    <h4 class="form-section-title">2. Your Details</h4>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Full Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control control" id="name" name="name" placeholder="Your name" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control control" id="email" name="email" placeholder="Your email" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="phone" class="form-label">Phone Number <span class="text-danger">*</span></label>
                                        <input type="tel" class="form-control control" id="phone" name="phone" placeholder="Your phone number" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company" class="form-label">Company/Organization</label>
                                        <input type="text" class="form-control control" id="company" name="company" placeholder="Your company (if applicable)">
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Project Details -->
                            <div class="row mb-4">
                                <div class="col-12">
                                    <h4 class="form-section-title">3. Project Information</h4>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="project_title" class="form-label">Project Title <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control control" id="project_title" name="project_title" placeholder="Give your project a name" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="project_description" class="form-label">Project Description <span class="text-danger">*</span></label>
                                        <textarea class="form-control control" id="project_description" name="project_description" rows="5" placeholder="Describe your project requirements in detail" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="budget" class="form-label">Estimated Budget</label>
                                        <select class="form-select form-control control" id="budget" name="budget">
                                            <option value="" selected disabled>Select your budget range...</option>
                                            <option value="under_500">Under $500</option>
                                            <option value="500_1000">$500 - $1,000</option>
                                            <option value="1000_2500">$1,000 - $2,500</option>
                                            <option value="2500_5000">$2,500 - $5,000</option>
                                            <option value="5000_10000">$5,000 - $10,000</option>
                                            <option value="over_10000">Over $10,000</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="deadline" class="form-label">Desired Completion Date</label>
                                        <input type="date" class="form-control control" id="deadline" name="deadline">
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Additional Information -->
                            <div class="row mb-4">
                                <div class="col-12">
                                    <h4 class="form-section-title">4. Additional Information</h4>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="reference" class="form-label">How did you hear about us?</label>
                                        <select class="form-select form-control control" id="reference" name="reference">
                                            <option value="" selected disabled>Select an option...</option>
                                            <option value="search_engine">Search Engine</option>
                                            <option value="social_media">Social Media</option>
                                            <option value="referral">Referral</option>
                                            <option value="advertisement">Advertisement</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="additional_notes" class="form-label">Additional Notes</label>
                                        <textarea class="form-control control" id="additional_notes" name="additional_notes" rows="3" placeholder="Any other details you'd like to share"></textarea>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Terms and Submit -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-check mb-4">
                                        <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
                                        <label class="form-check-label" for="terms">
                                            I agree to the <a href="#" class="text-primary">terms and conditions</a> <span class="text-danger">*</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="button boxed-btn btn-lg">Submit Booking Request</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Booking Form Section End -->
</main>

@include('includes.footer')

<!-- Scroll Up -->
<div id="back-top">
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- Add custom styles for the booking page -->
<style>
    .control {
        height:50px;
        font-size: 1.4rem;
    }

    .booking-form-wrapper {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 25px rgba(0, 0, 0, 0.1);
        padding: 40px;
        margin-bottom: 50px;
    }

    .section-title h2 {
        font-size: 25px;
        font-weight: bold;
    }
    
    .form-section-title {
        font-size: 2rem;
        font-weight: 600;
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 1px solid #e0e0e0;
        color: #0B1F3A;
    }
    
    .form-label {
        font-weight: 500;
        margin-bottom: 8px;
    }
    
    .section-padding {
        padding: 80px 0;
    }
    
    .text-primary {
        color: #0B1F3A !important;
    }
    
    .service-details {
        background-color: #f8f9fa;
        /* border-left: 3px solid #0B1F3A; */
    }
    
    .service-details ul li {
        margin-bottom: 8px;
    }
    
    @media (max-width: 767px) {
        .booking-form-wrapper {
            padding: 20px;
        }
        
        .section-padding {
            padding: 50px 0;
        }
    }
</style>

@endsection