@extends('layouts.app')

@section('title', 'Our Team')

@section('content')

@include('includes.header')

<style>
    .container {
        width: 90%;
        max-width: 1200px;
        margin: 0 auto;
    }
    
    .logo-container {
        display: flex;
        align-items: center;
    }
    
    .logo {
        display: flex;
    }
    
    .logo-piece {
        width: 100px;
        height: 80px;
    }
    
    .pizza-logo {
        background-color: white;
        color: black;
        border: 2px solid #ff4d4d;
        border-radius: 10px;
        padding: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }
    
    .chicken-logo {
        background-color: #ff4d4d;
        color: white;
        border-radius: 10px;
        padding: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }
    
    nav {
        display: flex;
        justify-content: flex-end;
    }
    
    nav ul {
        list-style: none;
        display: flex;
    }
    
    nav ul li {
        margin-left: 30px;
    }
    
    nav ul li a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
        font-size: 16px;
    }
    
    .header-flex {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .board-title {
        text-align: center;
        font-size: 32px;
        margin: 50px 0 20px;
        color: #333;
    }
    
    .title-underline {
        width: 180px;
        height: 3px;
        background-color: #F4A300;
        margin: 0 auto 60px;
    }
    
    .directors-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 200px;
        margin-bottom: 60px;
    }
    
    .director-card {
        border-radius: 5px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        margin-bottom: 20px;
    }
    
    .director-image-container {
        position: relative;
        width: 100%;
        height: 0;
        padding-bottom: 100%; /* Creates a square aspect ratio */
        overflow: hidden;
    }

    .info {
        position: relative;
        width: 100%;
        height: 0;
        padding-bottom: 125%;
        overflow: hidden;
    }

    .info h2 {
        font-size: 30px;    
    }
    
    .director-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }
    
    .director-details {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.8);
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        opacity: 0;
        transition: opacity 0.3s ease;
        padding: 20px;
    }
    
    .director-image-container:hover .director-details {
        opacity: 1;
    }
    
    .director-image-container:hover .director-image {
        transform: scale(1.1);
    }
    
    .contact-title {
        font-size: 20px;
        margin-bottom: 15px;
        color: #ff4d4d;
    }
    
    .contact-info {
        margin-bottom: 8px;
        font-size: 16px;
        text-align: center;
    }
    
    .director-info {
        background-color: #2c3e50;
        color: #fff;
        padding: 16px;
        text-align: center;
    }
    
    .director-name {
        font-size: 22px;
        margin-bottom: 5px;
        color: #fff;
    }
    
    .director-position {
        font-size: 16px;
        opacity: 0.9;
        color: #fff;
    }
    
    .social {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 15px;
    }
    
    .social a {
        color: white;
        background-color: rgba(255, 255, 255, 0.2);
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }
    
    .social a:hover {
        background-color: #DAA33E;
        transform: translateY(-3px);
    }
    
    /* Responsive styles */
    @media (max-width: 991px) {
        
        .board-title {
            font-size: 28px;
        }
    }
    
    @media (max-width: 767px) {
        .slider-height3 {
            min-height: 200px;
        }
        
        .hero__caption h1 {
            font-size: 28px;
        }
        
        .directors-grid {
            gap: 15px;
        }
        
    }
    
    @media (max-width: 575px) {
        .container {
            width: 95%;
        }
        
        .directors-grid {
            grid-template-columns: 1fr;
            /* max-width: 320px; */
            margin-left: auto;
            margin-right: auto;
        }
        
        .board-title {
            font-size: 24px;
            margin: 30px 0 15px;
        }
        
        .title-underline {
            width: 140px;
            margin-bottom: 30px;
        }
    }

    @media (max-width: 480px) {
        .info {
            padding-bottom: 180%;
        }
        .info h2 {
            font-size: 2.5rem;    
        }
       
    }
</style>

<main>
    <!-- Slider Area Start-->
    <div class="slider-area slider-bg" style="background: #0B1F3A">
        <!-- Single Slider -->
        <div class="single-slider d-flex align-items-center slider-height3">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-8 col-lg-9 col-md-12">
                        <div class="hero__caption hero__caption2 text-center">
                            <h1 data-animation="fadeInLeft" data-delay=".6s" style="color:#DAA33E;">Meet Our CEO</h1>
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

    <!--? Team Section Start -->
    <section class="board-section">
        <div class="container">
            <h2 class="board-title">Our CEO</h2>
            <div class="title-underline"></div>
            
            <div class="directors-grid">
                <div class="director-card">
                    <div class="director-image-container">
                        <img src="assets/img/teams/TJE-4.png" alt="Board Chairman" class="director-image">
                        <div class="director-details">
                            <div class="social">
                                <a href="tel:+233 55 696 305"><i class="ti-tablet"></i></a>
                                <a href="https://www.linkedin.com/in/emmanuel-kofi-ketsi/"><i class="fab fa-linkedin"></i></a>
                                <a href="https://www.behance.net/kekstudiosofficial"><i class="fab fa-behance"></i></a>
                                <a href="https://www.instagram.com/kekstudios_official?igsh=azBuejV0YnplMnVs"><i class="fab fa-instagram"></i></a>
                                <a href="mailto:kekstudiosofficial1@gmail.com"><i class="ti-email"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="director-info">
                        <h3 class="director-name">Emmanuel Kofi Ketsi</h3>
                        <p class="director-position">Lead Creative & CEO</p>
                    </div>
                </div>
                {{-- <div class="director-card"> --}}
                    
                    <div class="info">
                        <h2>About me</h2>
                        {{-- <hr> --}}
                        <p>
                            I 
                            specialize in crafting high-impact pitch 
                            decks, business plans, and corporate designs 
                            that help businesses stand out and succeed. 
                            As the Founder and CEO of KEKStudios 
                            Creative Hub, I transform complex ideas into 
                            clear, persuasive visuals that drive results — 
                            from securing funding to building brand 
                            credibility
                        </p>
<br>
                        <h2> The Problems I Solve</h2>
                        {{-- <hr> --}}
                        <p>
                            I help businesses turn complex ideas into 
                            clear, persuasive visuals, making it easier to 
                            secure funding, build credibility, and stand 
                            out
                        </p>
<br>
                        <h2>Who I Serve</h2>
                            <ul>
                                <li>
                                    <p>
                                        Startups and Entrepreneurs who need to pitch their 
                                        ideas and secure funding
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        Corporate Brands seeking polished business 
                                        documents and standout brand identities.
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        Agencies and Teams needing expert design support 
                                        for presentations, UI/UX, and social media.
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        Small Businesses looking to build a strong brand 
                                        presence and communicate their vision clearly.
                                    </p>
                                </li>
                            </ul>
                    </div>
            </div>
        </div>
    </section>
</main>

@include('includes.footer')

<!-- Scroll Up -->
<div id="back-top">
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

@endsection