{{-- @extends('layouts.app')

@section('title', 'About Us')

@section('content')

@include('includes.header')

<style>
    .container {
        width: 90%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
    }
    
    .logo-container {
        display: flex;
        align-items: center;
    }
    
    .logo {
        display: flex;
        margin-bottom: 15px;
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
        padding: 0;
        margin: 0;
        flex-wrap: wrap;
    }
    
    nav ul li {
        margin-left: 30px;
        margin-bottom: 10px;
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
        flex-wrap: wrap;
    }
    
    .hero {
        background-size: cover;
        background-position: center;
        color: white;
        text-align: center;
        padding: 80px 0;
        position: relative;
    }
    
    .hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.5);
    }
    
    .hero-content {
        position: relative;
        z-index: 1;
    }
    
    .hero h1 {
        font-size: 2.5rem;
        margin-bottom: 20px;
    }
    
    .about-section {
        padding: 60px 0;
    }
    
    .about-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        align-items: center;
    }
    
    .about-image {
        border-radius: 10px;
        overflow: hidden;
        text-align: center;
    }
    
    .about-image img {
        width: 100%;
        max-width: 300px;
        height: auto;
    }
    
    .welcome-title {
        font-size: 3rem;
        margin-bottom: 20px;
        color: #1C4E8F;
        text-align: center;
    }
    
    .separator {
        width: 100%;
        height: 2px;
        background-color: #F4A300;
        margin: 20px 0;
    }
    
    .journey-section {
        padding: 60px 0;
        background-color: #0B1F3A;
        color: #fff;
    }
    
    .journey-title {
        font-size: 3rem;
        margin-bottom: 40px;
        text-align: center;
        color: #fff;
    }
    
    .journey-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
    }
    
    .journey-image {
        grid-row: 1 / span 3;
        height: 100%;
    }
    
    .journey-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 10px;
    }
    
    .journey-content {
        padding: 20px;
    }
    
    .year-circle {
        background-color: #F4A300;
        color: white;
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 20px;
    }
    
    .journey-title-block {
        font-size: 1.6rem;
        margin-bottom: 20px;
        color: #fff;
    }
    
    .journey-text {
        color: #ccc;
        line-height: 1.6;
    }
    
    .journey-milestone {
        margin-bottom: 40px;
    }
    
    .team-section {
        padding: 60px 0;
    }
    
    .team-header {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        align-items: center;
        margin-bottom: 40px;
    }
    
    .team-title-container {
        color: #ff4d4d;
    }
    
    .team-subtitle {
        font-size: 16px;
        text-transform: uppercase;
        letter-spacing: 2px;
    }
    
    .team-title {
        font-size: 3rem;
        margin-top: 10px;
    }
    
    .team-description {
        line-height: 1.6;
        color: #666;
    }
    
    .view-team-btn {
        display: inline-block;
        padding: 12px 30px;
        border: 2px solid #F4A300;
        color: #333;
        text-decoration: none;
        font-weight: bold;
        transition: all 0.3s ease;
        margin-top: 20px;
    }
    
    .view-team-btn:hover {
        background-color: #F4A300;
        color: white;
    }
    
    /* Responsive styles */
    @media screen and (max-width: 991px) {
        .about-grid,
        .journey-grid,
        .team-header {
            grid-template-columns: 1fr;
            gap: 30px;
        }
        
        .journey-image {
            grid-row: auto;
            max-height: 400px;
        }
        
        .about-image {
            order: -1;
        }
        
        .hero h1 {
            font-size: 2rem;
        }
        
        .welcome-title,
        .journey-title,
        .team-title {
            font-size: 2.5rem;
        }
        
        .journey-content {
            padding: 15px 0;
        }

        .journey-title-block {
            font-size: 2rem;
        }
    }
    
    @media screen and (max-width: 767px) {
        .container {
            width: 95%;
        }
        
        .hero {
            padding: 60px 0;
        }
        
        .about-section,
        .journey-section,
        .team-section {
            padding: 40px 0;
        }
        
        .year-circle {
            width: 70px;
            height: 70px;
            font-size: 18px;
        }
        
        .journey-title-block {
            font-size: 1.6rem;
        }
        
        .view-team-btn {
            padding: 10px 25px;
        }
        
        nav ul {
            justify-content: center;
        }
        
        nav ul li {
            margin: 0 15px 10px;
        }
    }
    
    @media screen and (max-width: 480px) {
        .about-section,
        .journey-section,
        .team-section {
            padding: 30px 0;
        }
        
        .hero h1 {
            font-size: 1.8rem;
        }
        
        .welcome-title,
        .journey-title,
        .team-title {
            font-size: 1.5rem;
        }
        
        .journey-title-block {
            font-size: 1.2rem;
        }
        
        .year-circle {
            width: 60px;
            height: 60px;
            font-size: 16px;
        }
        
        .view-team-btn {
            display: block;
            text-align: center;
        }
        
        .slider-height3 {
            min-height: 200px;
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
                        <div class="hero__caption hero__caption3 text-center">
                            <h1 data-animation="fadeInLeft" data-delay=".6s">About Us</h1>
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

<section class="about-section">
    <div class="container about-grid">
        <div class="about-image">
            <img src="assets/img/loader1.png" alt="KEKStudios Logo">
        </div>
        <div class="about-content">
            <h2 class="welcome-title">Welcome To KEKStudios</h2>
            <div class="separator"></div>
            <p>At KEKStudios Creative Hub, we are more than just a 
                design agency—we are brand builders with a mission 
                to empower businesses and organizations through 
                creativity, innovation, and purpose-driven design.
            </p>
        </div>
    </div>
</section>
<section class="journey-section">
    <div class="container">
        <h2 class="journey-title">The Journey</h2>
        
        <div class="journey-grid">
            <div class="journey-image">
                <img src="assets/img/KEYSTONE REALTY_KEYSTON 1.jpg" alt="Pizzaman Chickenman food showcase">
            </div>
            <div class="journey-content">
                <div class="journey-milestone">
                    <div class="year-circle">2020</div>
                    <h3 class="journey-title-block">A Beginning of new ERA</h3>
                    <p class="journey-text">
                        Founded in Accra, Ghana, KEKStudios has grown into 
                        a dynamic creative powerhouse that delivers end-to
                        end branding solutions—from logo design and digital 
                        product interfaces to high-quality commercial 
                        printing and brand consulting.
                    </p>
                    <br>
                    <p class="journey-text">
                        Our clientele spans SMEs, churches, corporate 
                        institutions, event organizers, and freelance creatives
                         —all seeking impactful, timely, and accessible design 
                        and branding services.
                    </p>
                </div>
                
                <div class="journey-milestone">
                    <div class="year-circle">2023</div>
                    <h3 class="journey-title-block">A Good Idea Become An Group</h3>
                    <p class="journey-text">
                        With a strong commitment to excellence and 
                        community empowerment, KEKStudios exists to help 
                        brands become unforgettable, by blending faith
                        rooted values with modern design innovation.
                    </p>
                    <br>
                </div>
                
                <div class="journey-milestone">
                    <h3 class="journey-title-block">Innovators</h3>
                    <p class="journey-text">
                        After several months of selling pizzas, management saw the need to introduce a sister brand called Chickenman in January 2020.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="team-section">
    <div class="container">
        <div class="team-header">
            <div class="team-title-container">
                <h4 class="team-subtitle">CHEFS FOR PASSION</h4>
                <h2 class="team-title">Meet Our Team</h2>
            </div>
            <div>
                <p class="team-description">
                    A master in the art of several rare cuisines, Chefs will surprise you with their touch to the simplest.
                </p>
                <a href="/our-team" class="view-team-btn">View Team</a>
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

@endsection --}}

@extends('layouts.app')

@section('title', 'About Us')

@section('content')

@include('includes.header')

<style>
    .container {
        width: 90%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
    }
    
    .logo-container {
        display: flex;
        align-items: center;
    }
    
    .logo {
        display: flex;
        margin-bottom: 15px;
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
        padding: 0;
        margin: 0;
        flex-wrap: wrap;
    }
    
    nav ul li {
        margin-left: 30px;
        margin-bottom: 10px;
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
        flex-wrap: wrap;
    }
    
    .hero {
        background-size: cover;
        background-position: center;
        color: white;
        text-align: center;
        padding: 80px 0;
        position: relative;
    }
    
    .hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.5);
    }
    
    .hero-content {
        position: relative;
        z-index: 1;
    }
    
    .hero h1 {
        font-size: 2.5rem;
        margin-bottom: 20px;
    }
    
    .about-section {
        padding: 60px 0;
    }
    
    .about-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        align-items: center;
    }
    
    .about-image {
        border-radius: 10px;
        overflow: hidden;
        text-align: center;
    }
    
    .about-image img {
        width: 100%;
        max-width: 300px;
        height: auto;
    }
    
    .welcome-title {
        font-size: 3rem;
        margin-bottom: 20px;
        color: #333;
        text-align: center;
    }
    
    .separator {
        width: 100%;
        height: 2px;
        background-color: #F4A300;
        margin: 20px 0;
    }
    
    /* Vision Mission Core Values Section */
    .vmcv-section {
        padding: 70px 0;
        background-color: #f9f9f9;
    }
    
    .vmcv-title {
        font-size: 2.2rem;
        margin-bottom: 20px;
        text-align: center;
        color: #1C4E8F;
    }
    
    .vmcv-subtitle {
        text-align: center;
        color: #666;
        max-width: 700px;
        margin: 0 auto 50px;
        line-height: 1.6;
    }
    
    .vm-container {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
        margin-bottom: 50px;
    }
    
    .vm-card {
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        padding: 40px 30px;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    
    .vm-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    }
    
    .vm-icon {
        width: 80px;
        height: 80px;
        background-color: #F4A300;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 25px;
        color: white;
        font-size: 30px;
    }
    
    .vm-card h3 {
        color: #1C4E8F;
        font-size: 1.8rem;
        margin-bottom: 15px;
    }
    
    .vm-content {
        color: #666;
        line-height: 1.8;
        flex-grow: 1;
        font-size: 1.05rem;
    }
    
    .values-title {
        text-align: center;
        font-size: 2rem;
        margin: 30px 0;
        color: #1C4E8F;
    }
    
    .core-values-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
    }
    
    .value-card {
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        padding: 25px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
    
    .value-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }
    
    .value-icon {
        width: 60px;
        height: 60px;
        background-color: rgba(255, 77, 77, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 15px;
        color: #F4A300;
        font-size: 24px;
    }
    
    .value-card h4 {
        color: #1C4E8F;
        font-size: 2rem;
        margin-bottom: 10px;
        font-weight: 600;
    }
    
    .value-content {
        color: #666;
        line-height: 1.6;
        font-size: 1.5rem;
    }
    
    .journey-section {
        padding: 60px 0;
        background-color: #0B1F3A;
        color: #fff;
    }
    
    .journey-title {
        font-size: 3rem;
        margin-bottom: 40px;
        text-align: center;
        color: #fff;
    }
    
    .journey-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
    }
    
    .journey-image {
        grid-row: 1 / span 3;
        height: 100%;
    }
    
    .journey-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 10px;
    }
    
    .journey-content {
        padding: 20px;
    }
    
    .year-circle {
        background-color: #F4A300;
        color: white;
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 20px;
    }
    
    .journey-title-block {
        font-size: 2rem;
        margin-bottom: 20px;
        color: #fff;
    }
    
    .journey-text {
        color: #ccc;
        line-height: 1.6;
    }
    
    .journey-milestone {
        margin-bottom: 40px;
    }
    
    .team-section {
        padding: 60px 0;
    }
    
    .team-header {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        align-items: center;
        margin-bottom: 40px;
    }
    
    .team-title-container {
        color: #ff4d4d;
    }
    
    .team-subtitle {
        font-size: 16px;
        text-transform: uppercase;
        letter-spacing: 2px;
    }
    
    .team-title {
        font-size: 3rem;
        margin-top: 10px;
    }
    
    .team-description {
        line-height: 1.6;
        color: #666;
    }
    
    .view-team-btn {
        display: inline-block;
        padding: 12px 30px;
        border: 2px solid #F4A300;
        color: #333;
        text-decoration: none;
        font-weight: bold;
        transition: all 0.3s ease;
        margin-top: 20px;
    }
    
    .view-team-btn:hover {
        background-color: #F4A300;
        color: white;
    }
    
    /* Responsive styles */
    @media screen and (max-width: 991px) {
        .about-grid,
        .journey-grid,
        .team-header,
        .vm-container {
            grid-template-columns: 1fr;
            gap: 30px;
        }
        
        .core-values-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
        
        .journey-image {
            grid-row: auto;
            max-height: 400px;
        }
        
        .about-image {
            order: -1;
        }
        
        .hero h1 {
            font-size: 2rem;
        }
        
        .welcome-title,
        .journey-title,
        .team-title,
        .vmcv-title,
        .values-title {
            font-size: 2.5rem;
        }
        
        .vm-card h3 {
            font-size: 1.5rem;
        }
        
        .journey-content {
            padding: 15px 0;
        }
        
        .vm-card, .value-card {
            padding: 20px;
        }
    }
    
    @media screen and (max-width: 767px) {
        .container {
            width: 95%;
        }
        
        .hero {
            padding: 60px 0;
        }
        
        .about-section,
        .journey-section,
        .team-section,
        .vmcv-section {
            padding: 40px 0;
        }
        
        .year-circle,
        .vm-icon {
            width: 70px;
            height: 70px;
            font-size: 18px;
        }
        
        .value-icon {
            width: 50px;
            height: 50px;
            font-size: 20px;
        }
        
        .journey-title-block,
        .value-card h4 {
            font-size: 1.3rem;
        }
        
        .view-team-btn {
            padding: 10px 25px;
        }
        
        nav ul {
            justify-content: center;
        }
        
        nav ul li {
            margin: 0 15px 10px;
        }
        
        .core-values-grid {
            grid-template-columns: 1fr;
        }
    }
    
    @media screen and (max-width: 480px) {
        .about-section,
        .journey-section,
        .team-section,
        .vmcv-section {
            padding: 30px 0;
        }
        
        .hero h1 {
            font-size: 1.8rem;
        }
        
        .welcome-title,
        .journey-title,
        .team-title,
        .vmcv-title,
        .values-title {
            font-size: 2.5rem;
        }
        
        .journey-title-block,
        .vm-card h3 {
            font-size: 1.2rem;
        }
        
        .year-circle,
        .vm-icon {
            width: 60px;
            height: 60px;
            font-size: 16px;
        }
        
        .value-icon {
            width: 45px;
            height: 45px;
            font-size: 18px;
        }
        
        .view-team-btn {
            display: block;
            text-align: center;
        }
        
        .slider-height3 {
            min-height: 200px;
        }
        
        .vm-card, .value-card {
            padding: 15px;
        }
        
        .vmcv-subtitle {
            margin-bottom: 30px;
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
                        <div class="hero__caption hero__caption3 text-center">
                            <h1 data-animation="fadeInLeft" data-delay=".6s">About Us</h1>
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

<section class="about-section">
    <div class="container about-grid">
        <div class="about-image">
            <img src="assets/img/loader1.png" alt="KEKStudios Logo">
        </div>
        <div class="about-content">
            <h2 class="welcome-title">Welcome To KEKStudios</h2>
            <div class="separator"></div>
            <p>At KEKStudios Creative Hub, we are more than just a 
                design agency—we are brand builders with a mission 
                to empower businesses and organizations through 
                creativity, innovation, and purpose-driven design.
            </p>
        </div>
    </div>
</section>

<!-- Vision Mission Core Values Section -->
<section class="vmcv-section">
    <div class="container">
        <h2 class="vmcv-title">Our Purpose & Values</h2>
        <p class="vmcv-subtitle">
            Guided by faith and driven by innovation, we deliver strategic design solutions that 
            elevate brands and foster meaningful connections.
        </p>
        
        <!-- Vision and Mission Cards -->
        <div class="vm-container">
            <!-- Vision Card -->
            <div class="vm-card">
                <div class="vm-icon">
                    <i class="fas fa-eye"></i>
                </div>
                <h3>Our Vision</h3>
                <div class="vm-content">
                    <p>
                        To be West Africa’s leading creative and 
                        print hub, setting the standard for quality, 
                        innovation, and brand impact.
                    </p>
                </div>
            </div>
            
            <!-- Mission Card -->
            <div class="vm-card">
                <div class="vm-icon">
                    <i class="fas fa-rocket"></i>
                </div>
                <h3>Our Mission</h3>
                <div class="vm-content">
                    <p>
                        To provide innovative, high-impact design and print 
                        solutions that empower brands to grow, connect, and 
                        thrive in a competitive and ever-evolving world.
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Core Values Section -->
        <h3 class="values-title">Core Values</h3>
        <div class="core-values-grid">
            <!-- Faith & Purpose -->
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-pray"></i>
                </div>
                <h4>Faith & Purpose</h4>
                <p class="value-content">
                    We honor God by embedding purpose into every creative expression. Our work is driven by a deeper mission to uplift, inspire, and create lasting impact.
                </p>
            </div>
            
            <!-- Innovation -->
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h4>Innovation</h4>
                <p class="value-content">
                    We constantly explore new ways to fuse originality with technology—transforming ideas into iconic visual experiences and scalable digital platforms.
                </p>
            </div>
            
            <!-- Excellence -->
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-award"></i>
                </div>
                <h4>Excellence</h4>
                <p class="value-content">
                    Our commitment to top-tier quality is non-negotiable. Every project is delivered with precision, professionalism, and an eye for brand distinction.
                </p>
            </div>
            
            <!-- Integrity -->
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <h4>Integrity</h4>
                <p class="value-content">
                    We operate with honesty, reliability, and transparency—earning the trust of clients, partners, and communities through consistent action.
                </p>
            </div>
            
            <!-- Accessibility -->
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-universal-access"></i>
                </div>
                <h4>Accessibility</h4>
                <p class="value-content">
                    We believe great design should be within reach for everyone. Our pricing, platforms, and programs are built to include micro-businesses, churches, and nonprofits.
                </p>
            </div>
            
            <!-- Empowerment -->
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-hands-helping"></i>
                </div>
                <h4>Empowerment</h4>
                <p class="value-content">
                    We invest in people. Through mentorship, training, and opportunity creation, we build a new generation of African creatives ready to lead in the global space.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="journey-section">
    <div class="container">
        <h2 class="journey-title">The Journey</h2>
        
        <div class="journey-grid">
            <div class="journey-image">
                <img src="assets/img/KEYSTONE REALTY_KEYSTON 1.jpg" alt="Pizzaman Chickenman food showcase">
            </div>
            <div class="journey-content">
                <div class="journey-milestone">
                    <div class="year-circle">2020</div>
                    <h3 class="journey-title-block">A Beginning of new ERA</h3>
                    <p class="journey-text">
                        Founded in Accra, Ghana, KEKStudios has grown into 
                        a dynamic creative powerhouse that delivers end-to
                        end branding solutions—from logo design and digital 
                        product interfaces to high-quality commercial 
                        printing and brand consulting.
                    </p>
                    <br>
                    <p class="journey-text">
                        Our clientele spans SMEs, churches, corporate 
                        institutions, event organizers, and freelance creatives
                         —all seeking impactful, timely, and accessible design 
                        and branding services.
                    </p>
                </div>
                
                <div class="journey-milestone">
                    <div class="year-circle">2023</div>
                    <h3 class="journey-title-block">A Good Idea Become An Group</h3>
                    <p class="journey-text">
                        With a strong commitment to excellence and 
                        community empowerment, KEKStudios exists to help 
                        brands become unforgettable, by blending faith
                        rooted values with modern design innovation.
                    </p>
                    <br>
                    {{-- <p class="journey-text">
                        On 7th September 2018, Pizzaman was moved from the apartment in Kotei to a small shop at Ayeduase, opposite the Victory Towers Hostel. From that period, pizza was sold daily. A revenue of GHC12,000 was generated in the first month of operation, which looked promising. October 2018 would have been a great month until there was a student demonstration at KNUST which led to the closedown of the pizzeria since the market was targeted at students during those moments.
                    </p> --}}
                </div>
                
                <div class="journey-milestone">
                    <h3 class="journey-title-block">Innovators</h3>
                    <p class="journey-text">
                        After several months of selling pizzas, management saw the need to introduce a sister brand called Chickenman in January 2020.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="team-section">
    <div class="container">
        <div class="team-header">
            <div class="team-title-container">
                {{-- <h4 class="team-subtitle">CHEFS FOR PASSION</h4> --}}
                <h2 class="team-title">Meet Our Team</h2>
            </div>
            <div>
                <p class="team-description">
                    A master in the art of several rare cuisines, Chefs will surprise you with their touch to the simplest.
                </p>
                <a href="/our-team" class="view-team-btn">View Team</a>
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