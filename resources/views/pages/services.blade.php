@extends('layouts.app')

@section('title', 'Service')

@section('content')

@include('includes.header')

<style>
    /* * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    } */
    
    /* body {
        background-color: #f5f5f5;
        color: #333;
        line-height: 1.6;
    } */
    
    /* header {
        background-color: #001f3f;
        color: white;
        padding: 2rem 0;
        text-align: center;
    } */
    
    h1 {
        font-size: 3rem;
        font-weight: 600;
        margin-bottom: 1rem;
    }
    
    .subtitle {
        font-size: 2rem;
        opacity: 0.8;
    }
    
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem 1rem;
    }
    
    .case-studies {
        display: grid;
        grid-template-columns: 1fr;
        gap: 3rem;
        margin-top: 3rem;
    }
    
    .case-study {
        background-color: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }
    
    .case-study:hover {
        transform: translateY(-10px);
    }
    
    .case-study-header {
        padding: 1.5rem;
        border-bottom: 1px solid #eee;
    }
    
    .case-study-header h2 {
        color: #001f3f;
        font-size: 2.3rem;
        margin-bottom: 0.5rem;
    }
    
    .case-study-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 2rem;
        padding: 1.5rem;
    }
    
    .case-study-text h3 {
        color: #001f3f;
        margin-bottom: 1rem;
        font-size: 2rem;
    }
    
    .case-study-text p {
        margin-bottom: 1.3rem;
        font-size: 1.7rem;
    }
    
    .case-study-image {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .case-study-image img {
        max-width: 100%;
        border-radius: 5px;
    }
    
    .axam-color {
        background-color: #0B1F3A;
        height: 10px;
        width: 100%;
    }
    
    .christell-color {
        background-color: #0B1F3A;
        height: 10px;
        width: 100%;
    }
    
    .glaft-color {
        background-color: #0B1F3A;
        height: 10px;
        width: 100%;
    }
    
    @media (max-width: 768px) {
        .case-study-content {
            grid-template-columns: 1fr;
        }
    }
</style>

    <main>
        <!-- Slider Area Start-->
        <div class="slider-area slider-bg" style="background: #0B1F3A">
            <!-- Single Slider -->
            <div class="single-slider d-flex align-items-center slider-height2">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-8 col-lg-9 col-md-12">
                            <div class="hero__caption hero__caption2 text-center">
                                <h1 data-animation="fadeInLeft" data-delay=".6s" style="color: #DAA33E">Our Services</h1>
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
        <!--? Pricing Card Start -->
        <section class="pricing-card-area pricing-card-area2 fix">
            <div class="container">
                <div class="row">
                    <!-- Service Cards -->
                    @foreach ($services as $slug => $service)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="single-card text-center mb-30 h-100">
                                <div class="card-top">
                                    <img src="{{$service['img']}}" alt="">
                                    <h4>{{$service['title']}}</h4>
                                </div>
                                <div class="card-bottom">
                                    <ul>
                                        @foreach($service['works'] as $work)
                                            <li>{{ $work }}</li>
                                        @endforeach
                                    </ul>
                                    <a href="{{ route('services.show', $slug) }}" class="borders-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <div class="container">
            <div class="case-studies">
                <!-- AXAM Case Study -->
                <div class="case-study">
                    <div class="axam-color"></div>
                    <div class="case-study-header">
                        <h2>AXAM Resources Limited</h2>
                    </div>
                    <div class="case-study-content">
                        <div class="case-study-text">
                            <h3>Challenge</h3>
                            <p>AXAM Resource Limited needed a brand identity that showcased their ability to transform land into purposeful, well-crafted developments.</p>
                            
                            <h3>Result</h3>
                            <p>The refreshed brand identity established AXAM Resource Limited as a modern and trustworthy construction firm, reinforcing its mission to build with purpose and visual appeal across all platforms.</p>
                        </div>
                        <div class="case-study-image">
                            <img src="/api/placeholder/500/300" alt="AXAM Resources Limited branded green truck">
                        </div>
                    </div>
                </div>
                
                <!-- Christell Case Study -->
                <div class="case-study">
                    <div class="christell-color"></div>
                    <div class="case-study-header">
                        <h2>Christell Ushering Agency</h2>
                    </div>
                    <div class="case-study-content">
                        <div class="case-study-text">
                            <h3>Challenge</h3>
                            <p>Christell Ushering Agency needed a professional brand identity and corporate documents to present a polished image to high-end clients and event organizers. They struggled with showcasing their services in a clear, engaging, and visually compelling way.</p>
                            
                            <h3>Solution</h3>
                            <p>We crafted a refined brand identity that reflected elegance and professionalism, aligning with their service offerings. Additionally, sleek corporate documents were designed, including service brochures and pitch materials, ensuring their messaging was clear and their visuals captivating.</p>
                            
                            <h3>Result</h3>
                            <p>The new brand identity and corporate documents elevated Christell Ushering Agency's presentation, attracting higher-profile clients and boosting their credibility in the event industry. Their enhanced professional image led to increased client inquiries and secured several high-value contracts.</p>
                        </div>
                        <div class="case-study-image">
                            <img src="/api/placeholder/500/300" alt="Christell Ushering Agency branded materials">
                        </div>
                    </div>
                </div>
                
                <!-- Glaft Case Study -->
                <div class="case-study">
                    <div class="glaft-color"></div>
                    <div class="case-study-header">
                        <h2>Glaft Gh. Limited</h2>
                    </div>
                    <div class="case-study-content">
                        <div class="case-study-text">
                            <h3>Challenge</h3>
                            <p>Needed a clear, investor-ready business plan.</p>
                            
                            <h3>Result</h3>
                            <p>The professionally designed business plan enhanced Glaft Gh. Limited's credibility, making a strong impression on potential investors. It effectively communicated their vision and growth strategy, opening doors to new opportunities and driving substantial business growth.</p>
                        </div>
                        <div class="case-study-image">
                            <img src="/api/placeholder/500/300" alt="Glaft Gh. Limited business plan">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('includes.footer')

    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

@endsection