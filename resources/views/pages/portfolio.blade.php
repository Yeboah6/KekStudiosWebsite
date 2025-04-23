@extends('layouts.app')

@section('title', 'Portfolio')

@section('content')

@include('includes.header')

<style>
        /* * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        } */
        /* body {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        } */
        h1 {
            text-align: center;
            margin-bottom: 30px;
            /* font-family: 'Brush Script MT', cursive; */
            font-size: 2.5rem;
        }
        .menu-filters {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 30px;
        }
        .filter-btn {
            padding: 8px 20px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s ease;
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
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        .menu-item {
            border-radius: 10px;
            overflow: hidden;
            background-color: #f7f7f7;
            transition: all 0.5s ease;
            transform-origin: center;
            opacity: 1;
            transform: scale(1);
            /* height: auto; */
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
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            /* padding: 20px; */
            background-color: #f0f0f0;
        }
        .item-image img {
            max-width: 100%;
            /* max-height: 160px; */
        }
        .item-details {
            /* margin-top: 70px; */
            padding: 20px;
            background-color: #0B1F3A;
            color: white;
        }
        .item-title {
            font-size: 1.5rem;
            /* margin-bottom: 10px; */
            color: #fff
        }
        .item-description {
            font-size: 1.3rem;
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
    </style>

    <main>
        <!-- Slider Area Start-->
        <div class="slider-area slider-bg ">
            <!-- Single Slider -->
            <div class="single-slider d-flex align-items-center slider-height3">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-8 col-lg-9 col-md-12 ">
                            <div class="hero__caption hero__caption3 text-center">
                                <h1 data-animation="fadeInLeft" data-delay=".6s ">Portfolio</h1>
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
                            <h1>Our Portfolio List</h1>
                        </div>
                    </div>
                </div>
                <div class="menu-filters">
                    <button class="filter-btn active" data-category="all">All</button>
                    <button class="filter-btn" data-category="burger">Brand Identity Design</button>
                    <button class="filter-btn" data-category="flyer">Commercial Printing</button>
                    <button class="filter-btn" data-category="pasta"> Web & Mobile App Development</button>
                    <button class="filter-btn" data-category="fries">UI/UX Design</button>
                    <button class="filter-btn" data-category="fries">Event & Campaign Branding</button>
                    <button class="filter-btn" data-category="fries"> Creative Strategy & Consulting</button>
                </div>

                    <div class="menu-container">
        <div class="menu-grid">
            <!-- Menu Item 1 -->
            <div class="menu-item" data-category="flyer">
                {{-- <div class="item-image"> --}}
                    <img src="assets/img/flyer1.jpg" alt="flyer" style="width:100%;border-radius:20px;">
                {{-- </div> --}}
                {{-- <div class="item-details"> --}}
                    {{-- <h3 class="item-title">Delicious flyer</h3> --}}
                    {{-- <p class="item-description">Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque</p> --}}
                {{-- </div> --}}
            </div>
            
            <!-- Menu Item 2 -->
            <div class="menu-item" data-category="burger">
                <div class="item-image">
                    <img src="/api/placeholder/200/160" alt="Burger">
                </div>
                <div class="item-details">
                    <h3 class="item-title">Delicious Burger</h3>
                    <p class="item-description">Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque</p>
                </div>
            </div>
            
            <!-- Menu Item 3 -->
            <div class="menu-item" data-category="flyer">
                {{-- <div class="item-image"> --}}
                    <img src="assets/img/flyer2.jpg" alt="flyer" style="width:100%;">
                {{-- </div> --}}
                <div class="item-details">
                    {{-- <h3 class="item-title">Margherita flyer</h3> --}}
                    <p class="item-description">Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque</p>
                    {{-- <div class="item-footer">
                        <div class="item-price">$17</div>
                        <button class="add-btn">+</button>
                    </div> --}}
                </div>
            </div>
            
            <!-- Menu Item 4 -->
            <div class="menu-item" data-category="pasta">
                <div class="item-image">
                    <img src="/api/placeholder/200/160" alt="Pasta">
                </div>
                <div class="item-details">
                    <h3 class="item-title">Delicious Pasta</h3>
                    <p class="item-description">Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque</p>
                    {{-- <div class="item-footer">
                        <div class="item-price">$18</div>
                        <button class="add-btn">+</button>
                    </div> --}}
                </div>
            </div>
            
            <!-- Menu Item 5 -->
            <div class="menu-item" data-category="fries">
                <div class="item-image">
                    <img src="/api/placeholder/200/160" alt="French Fries">
                </div>
                <div class="item-details">
                    <h3 class="item-title">French Fries</h3>
                    <p class="item-description">Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque</p>
                    {{-- <div class="item-footer">
                        <div class="item-price">$10</div>
                        <button class="add-btn">+</button>
                    </div> --}}
                </div>
            </div>
            
            <!-- Menu Item 6 -->
            <div class="menu-item" data-category="flyer">
                {{-- <div class="item-image"> --}}
                    <img src="assets/img/flyer3.jpg" alt="flyer" style="width:100%;">
                {{-- </div> --}}
                <div class="item-details">
                    {{-- <h3 class="item-title">Pepperoni flyer</h3> --}}
                    <p class="item-description">Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque</p>
                    {{-- <div class="item-footer">
                        <div class="item-price">$22</div>
                        <button class="add-btn">+</button>
                    </div> --}}
                </div>
            </div>
            
            <!-- Additional Items -->
            <div class="menu-item" data-category="burger">
                <div class="item-image">
                    <img src="/api/placeholder/200/160" alt="Cheeseburger">
                </div>
                <div class="item-details">
                    <h3 class="item-title">Cheeseburger</h3>
                    <p class="item-description">Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque</p>
                    {{-- <div class="item-footer">
                        <div class="item-price">$16</div>
                        <button class="add-btn">+</button>
                    </div> --}}
                </div>
            </div>
            
            <div class="menu-item" data-category="pasta">
                <div class="item-image">
                    <img src="/api/placeholder/200/160" alt="Spaghetti">
                </div>
                <div class="item-details">
                    <h3 class="item-title">Spaghetti Bolognese</h3>
                    <p class="item-description">Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque</p>
                    {{-- <div class="item-footer">
                        <div class="item-price">$19</div>
                        <button class="add-btn">+</button>
                    </div> --}}
                </div>
            </div>
            
            <div class="menu-item" data-category="fries">
                <div class="item-image">
                    <img src="/api/placeholder/200/160" alt="Loaded Fries">
                </div>
                <div class="item-details">
                    <h3 class="item-title">Loaded Fries</h3>
                    <p class="item-description">Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque</p>
                    {{-- <div class="item-footer">
                        <div class="item-price">$12</div>
                        <button class="add-btn">+</button>
                    </div> --}}
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

                // Add hover effect to add buttons
                const addButtons = document.querySelectorAll('.add-btn');
                addButtons.forEach(button => {
                    button.innerHTML = "+";
                });
            </script>
            
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