@extends('layouts.app')

@section('title', 'Portfolio')

@section('content')

@include('includes.header')

<style>
    h1 {
        text-align: center;
        margin-bottom: 30px;
        font-size: 30px;
        font-weight: bold;
    }
    
    .menu-filters {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 10px;
        margin-bottom: 30px;
        padding: 0 15px;
    }
    
    .filter-btn {
        padding: 8px 15px;
        border: none;
        border-radius: 20px;
        cursor: pointer;
        font-weight: bold;
        transition: all 0.3s ease;
        margin-bottom: 5px;
        font-size: 14px;
    }
    
    .filter-btn.active {
        background-color: #F4A300;
        color: white;
    }
    
    .filter-btn:not(.active) {
        background-color: transparent;
        color: #000;
    }
    
    .filter-btn:hover:not(.active) {
        background-color: rgba(26, 38, 57, 0.1);
    }
    
    .menu-grid {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        gap: 20px;
        padding: 0 15px;
    }
    
    .menu-item {
        border-radius: 10px;
        overflow: hidden;
        /* background-color: #f7f7f7; */
        transition: all 0.5s ease;
        transform-origin: center;
        opacity: 1;
        transform: scale(1);
        margin-bottom: 0;
    }
    
    .menu-item.hidden {
        opacity: 0;
        transform: scale(0.8);
        height: 0;
        margin-bottom: -20px;
        pointer-events: none;
        position: absolute;
    }
    
    .item-image {
        height: auto;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f0f0f0;
    }
    
    .item-image img {
        width: 100%;
        height: auto;
        display: block;
    }
    
    .item-details {
        padding: 15px;
        background-color: #0B1F3A;
        color: white;
        border-radius: 0 0 10px 10px;
    }
    
    .item-title {
        font-size: 1.3rem;
        color: #fff;
        margin-bottom: 8px;
    }
    
    .item-description {
        font-size: 1rem;
        margin-bottom: 15px;
        color: #ccc;
    }
    
    .item-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .item-price {
        font-weight: bold;
    }
    
    .add-btn {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background-color: #f39c12;
        color: white;
        border: none;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: transform 0.2s ease;
    }
    
    .add-btn:hover {
        transform: scale(1.1);
    }
    
    .menu-container {
        position: relative;
        min-height: 400px;
    }
    
    /* Responsive Styles */
    @media (min-width: 576px) {
        .filter-btn {
            padding: 8px 18px;
            font-size: 15px;
        }
    }
    
    @media (min-width: 768px) {
        .menu-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .menu-filters {
            gap: 12px;
        }
    }
    
    @media (min-width: 992px) {
        .menu-grid {
            grid-template-columns: repeat(3, 1fr);
        }
        
        .item-title {
            font-size: 1.5rem;
        }
        
        .item-description {
            font-size: 1.1rem;
        }
        
        /* .filter-btn {
            padding: 8px 20px;
            font-size: 16px;
        } */
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
                            <h1 data-animation="fadeInLeft" data-delay=".6s" style="color: #DAA33E">Portfolio</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        <!-- Slider Shape -->
    </div>
    <!-- Slider Area End -->
    
    <!-- Portfolio Section -->
    <section class="ask-questions section-padding40 fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9 col-md-10">
                    <!-- Section Title -->
                    <div class="section-tittle section-tittle2 text-center mb-70 mb-md-50">
                        <h1>Our Portfolio List</h1>
                    </div>
                </div>
            </div>
            
            <div class="menu-filters">
                <button class="filter-btn active" data-category="all">All</button>
                <button class="filter-btn" data-category="brand">Brand Identity</button>
                <button class="filter-btn" data-category="print">Commercial Printing</button>
                <button class="filter-btn" data-category="web">Web & Mobile Apps</button>
                <button class="filter-btn" data-category="ui">UI/UX Design</button>
                <button class="filter-btn" data-category="event">Event & Campaign Branding</button>
                <button class="filter-btn" data-category="strategy">Creative Strategy & Consulting</button>
            </div>

            <div class="menu-container">
                <div class="menu-grid">
                    <!-- Menu Item 1 -->
                    <div class="menu-item" data-category="print">
                        <img src="assets/img/flyer1.jpg" alt="flyer" style="width:100%;border-radius:20px 10px 0 0;">
                        <div class="item-details">
                            <h3 class="item-title">Print Design</h3>
                            <p class="item-description">Modern flyer design for business promotion with elegant layout and vibrant color scheme</p>
                        </div>
                    </div>
                    
                    <!-- Menu Item 2 -->
                    <div class="menu-item" data-category="brand">
                        <div class="item-image">
                            <img src="assets/img/KEYSTONE1.jpg" alt="Brand Identity">
                        </div>
                        <div class="item-details">
                            <h3 class="item-title">Logo Design</h3>
                            <p class="item-description">Distinctive brand identity created with careful attention to market positioning and core values</p>
                        </div>
                    </div>
                    
                    <!-- Menu Item 3 -->
                    <div class="menu-item" data-category="print">
                        <img src="assets/img/flyer2.jpg" alt="flyer" style="width:100%;border-radius:10px 10px 0 0;">
                        <div class="item-details">
                            <h3 class="item-title">Marketing Brochure</h3>
                            <p class="item-description">Professional multi-page brochure designed to showcase products with compelling visuals</p>
                        </div>
                    </div>
                    
                    <!-- Menu Item 4 -->
                    {{-- <div class="menu-item" data-category="web">
                        <div class="item-image">
                            <img src="/api/placeholder/400/250" alt="Web Development">
                        </div>
                        <div class="item-details">
                            <h3 class="item-title">E-commerce Website</h3>
                            <p class="item-description">Responsive online store built with modern frameworks and seamless checkout experience</p>
                        </div>
                    </div> --}}

                    <div class="menu-item" data-category="brand">
                        <div class="item-image">
                            <img src="assets/img/KEYSTONE REALTY-02.jpg" alt="Brand Identity">
                        </div>
                        <div class="item-details">
                            <h3 class="item-title">Logo Design</h3>
                            <p class="item-description">Distinctive brand identity created with careful attention to market positioning and core values</p>
                        </div>
                    </div>
                    
                    <!-- Menu Item 5 -->
                    {{-- <div class="menu-item" data-category="ui">
                        <div class="item-image">
                            <img src="/api/placeholder/400/250" alt="UI Design">
                        </div>
                        <div class="item-details">
                            <h3 class="item-title">Mobile App UI</h3>
                            <p class="item-description">Intuitive user interface design focused on accessibility and user experience best practices</p>
                        </div>
                    </div> --}}
                    
                    <!-- Menu Item 6 -->
                    <div class="menu-item" data-category="print">
                        <img src="assets/img/flyer3.jpg" alt="flyer" style="width:100%;border-radius:10px 10px 0 0;">
                        <div class="item-details">
                            <h3 class="item-title">Product Catalog</h3>
                            <p class="item-description">Well-organized catalog layout with professional photography and compelling descriptions</p>
                        </div>
                    </div>

                    <div class="menu-item" data-category="event">
                        <div class="item-image">
                            <img src="assets/img/SELLERS SHOP PULL UPS 2.jpg" alt="Event Branding">
                        </div>
                        <div class="item-details">
                            <h3 class="item-title">Conference Branding</h3>
                            <p class="item-description">Cohesive visual identity system for industry event including signage and promotional materials</p>
                        </div>
                    </div>
                    
                    <!-- Additional Items -->
                    <div class="menu-item" data-category="brand">
                        <div class="item-image">
                            <img src="assets/img/KEYSTONE REALTY_KEYSTON 1 copy-05.jpg" alt="Brand Strategy">
                        </div>
                        <div class="item-details">
                            <h3 class="item-title">Brand Guidelines</h3>
                            <p class="item-description">Comprehensive brand identity system with detailed usage guidelines and applications</p>
                        </div>
                    </div>

                    <div class="menu-item" data-category="event">
                        <div class="item-image">
                            <img src="assets/img/image.jpg" alt="Event Branding">
                        </div>
                        <div class="item-details">
                            <h3 class="item-title">Conference Branding</h3>
                            <p class="item-description">Cohesive visual identity system for industry event including signage and promotional materials</p>
                        </div>
                    </div>

                    <div class="menu-item" data-category="brand">
                        <div class="item-image">
                            <img src="assets/img/KEYSTONE REALTY_KEYSTON 1.jpg" alt="Brand Identity">
                        </div>
                        <div class="item-details">
                            <h3 class="item-title">Logo Design</h3>
                            <p class="item-description">Distinctive brand identity created with careful attention to market positioning and core values</p>
                        </div>
                    </div>
                    
                    {{-- <div class="menu-item" data-category="web">
                        <div class="item-image">
                            <img src="/api/placeholder/400/250" alt="Web Application">
                        </div>
                        <div class="item-details">
                            <h3 class="item-title">Dashboard Design</h3>
                            <p class="item-description">Data visualization interface designed for clarity and efficient information presentation</p>
                        </div>
                    </div> --}}
                    
                    <div class="menu-item" data-category="event">
                        <div class="item-image">
                            <img src="assets/img/Mockup 1.png" alt="Event Branding">
                        </div>
                        <div class="item-details">
                            <h3 class="item-title">Conference Branding</h3>
                            <p class="item-description">Cohesive visual identity system for industry event including signage and promotional materials</p>
                        </div>
                    </div>

                    <div class="menu-item" data-category="brand">
                        <div class="item-image">
                            <img src="assets/img/Mockup.jpg" alt="Brand Strategy">
                        </div>
                        <div class="item-details">
                            <h3 class="item-title">Brand Guidelines</h3>
                            <p class="item-description">Comprehensive brand identity system with detailed usage guidelines and applications</p>
                        </div>
                    </div>
                    <div class="menu-item" data-category="brand">
                        <div class="item-image">
                            <img src="assets/img/image2.jpg" alt="Brand Strategy">
                        </div>
                        <div class="item-details">
                            <h3 class="item-title">Brand Guidelines</h3>
                            <p class="item-description">Comprehensive brand identity system with detailed usage guidelines and applications</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <script>
                // Get all filter buttons and menu items
                const filterButtons = document.querySelectorAll('.filter-btn');
                const menuItems = document.querySelectorAll('.menu-item');

                // Add click event listener to each filter button
                filterButtons.forEach(button => {
                    button.addEventListener('click', () => {
                        // Remove active class from all buttons
                        filterButtons.forEach(btn => btn.classList.remove('active'));

                        // Add active class to clicked button
                        button.classList.add('active');

                        // Get selected category
                        const selectedCategory = button.getAttribute('data-category');

                        // Filter menu items with animation
                        menuItems.forEach(item => {
                            const itemCategory = item.getAttribute('data-category');

                            if (selectedCategory === 'all' || selectedCategory === itemCategory) {
                                // If item should be visible
                                if (item.classList.contains('hidden')) {
                                    // If it was hidden before, add a small delay for a staggered effect
                                    setTimeout(() => {
                                        item.classList.remove('hidden');
                                    }, 100);
                                }
                            } else {
                                // If item should be hidden
                                item.classList.add('hidden');
                            }
                        });
                    });
                });
            </script>
        </div>
    </section>
</main>

@include('includes.footer')

<!-- Scroll Up -->
<div id="back-top">
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

@endsection