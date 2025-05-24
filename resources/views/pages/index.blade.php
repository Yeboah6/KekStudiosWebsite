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

        .main-content {
            display: flex;
            padding: 60px 40px;
            align-items: center;
            justify-content: space-between;
            min-height: calc(100vh - 90px);
        }

        .text-content {
            width: 45%;
        }

        .tagline {
            color: #333;
            font-size: 18px;
            margin-bottom: 20px;
        }

        .heading {
            color: #1e2a3a;
            font-size: 48px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .description {
            color: #333;
            font-size: 16px;
            line-height: 1.6;
        }

        .dot {
            width: 10px;
            height: 10px;
            background-color: #ccc;
            border-radius: 50%;
            cursor: pointer;
        }

        .dot.active {
            background-color: #1e2a3a;
        }

        /* Media Queries for Responsive Design */
        @media screen and (max-width: 768px) {
            .main-content {
                flex-direction: column;
                padding: 30px 20px;
            }

            .text-content {
                width: 100%;
                margin-bottom: 40px;
                gap: 50px;
                /* margin-left: 100px; */
                text-align: center;
            }

            .heading {
                font-size: 36px;
            }
        }

        @media screen and (max-width: 480px) {
            .heading {
                font-size: 40px;
            }

            .text-content {
                margin-top: 70px;
                margin-bottom: -70px;
            }

            .tagline {
                font-size: 16px;
            }

            .description {
                font-size: 14px;
            }

            .carousel-slide img {
              margin-left: -100px;
            }
        }

    .carousel-container {
    position: relative;
    width: 100%;
    margin-top: 100px;
    overflow: hidden;
}

    .carousel {
        display: flex;
        width: 100%;
        backface-visibility: hidden;
        transform: translateX(0);
        transform-style: preserve-3d;
        will-change: transform;
        -webkit-backface-visibility: hidden;
    }

    .carousel-slide {
      min-width: 90%;
      flex: 0 0 100%;
      transform: translateZ(0);
    }

    .carousel-slide img {
      width: 85%;
      height: auto;
      margin-left: 50px;
      /* object-fit: cover; */
      display: block;
    }

    .carousel-dots {
      display: flex;
      justify-content: center;
      margin-top: 10px;
    }

    .dot {
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background-color: rgba(255, 255, 255, 0.5);
      margin: 0 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .dot.active {
      background-color: white;
    }

</style>

    <main>

        <div class="main-content slider-area slider-bg">
            <div class="text-content">
                <p class="tagline">Reality Of Imagination</p>
                <h1 class="heading">Who We Are</h1>
                <p class="description">
                    At KEKStudios Creative Hub, we are more than just a design agency—we are brand 
                    builders with a mission to empower businesses and organizations through creativity, 
                    innovation, and purpose-driven design.
                </p>
            </div>
            <div class="carousel-container">
                <div class="carousel">
                    <div class="carousel-slide">
                        <img
                         src="assets/img/background.png" 
                         alt="Green Ford Truck">
                    </div>
                    <div class="carousel-slide">
                        <img src="assets/img/image4.jpg" alt="Design Project 1">
                    </div>
                    <div class="carousel-slide">
                        <img src="assets/img/13-Free .jpg" alt="Design Project 2">
                    </div>
                </div>
                <div class="carousel-dots">
                    <div class="dot active"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                </div>
            </div>
        </div>
        
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
                            <img src="{{$service['img']}}" alt="{{$service['title']}}" class="service-image" >
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
        <div class="about-caption about-area1">
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

<script>
    // JavaScript for smooth mobile carousel
document.addEventListener('DOMContentLoaded', function() {
  const carousel = document.querySelector('.carousel');
  const slides = document.querySelectorAll('.carousel-slide');
  const dots = document.querySelectorAll('.dot');
  const totalSlides = slides.length;
  
  let currentIndex = 0;
  let startX, startY, endX, endY;
  let isDragging = false;
  let isScrolling = false;
  let autoplayInterval;
  let animationFrameId = null;
  
  // Preload images for smoother experience
  function preloadImages() {
    slides.forEach(slide => {
      const img = slide.querySelector('img');
      if (img) {
        const preloadImg = new Image();
        preloadImg.src = img.src;
      }
    });
  }
  
  // Animation functions
  function easeOutCubic(x) {
    return 1 - Math.pow(1 - x, 3);
  }
  
  function smoothTransition(start, end, duration) {
    // Cancel any ongoing animation
    if (animationFrameId) {
      cancelAnimationFrame(animationFrameId);
    }
    
    const startTime = performance.now();
    
    function animate(currentTime) {
      const elapsedTime = currentTime - startTime;
      const progress = Math.min(elapsedTime / duration, 1);
      const easeProgress = easeOutCubic(progress);
      const position = start + (end - start) * easeProgress;
      
      carousel.style.transform = `translateX(${position}%)`;
      
      if (progress < 1) {
        animationFrameId = requestAnimationFrame(animate);
      } else {
        animationFrameId = null;
      }
    }
    
    animationFrameId = requestAnimationFrame(animate);
  }
  
  // Navigation functions
  function goToSlide(index) {
    currentIndex = index;
    const startPosition = parseFloat(carousel.style.transform?.replace('translateX(', '').replace('%)', '') || 0);
    const endPosition = -currentIndex * 100;
    
    smoothTransition(startPosition, endPosition, 300);
    updateDots();
  }
  
  function updateDots() {
    dots.forEach((dot, index) => {
      dot.classList.toggle('active', index === currentIndex);
    });
  }
  
  function nextSlide() {
    const nextIndex = (currentIndex + 1) % totalSlides;
    goToSlide(nextIndex);
  }
  
  function prevSlide() {
    const prevIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    goToSlide(prevIndex);
  }
  
  // Event handlers
  function handleTouchStart(e) {
    startX = e.touches[0].clientX;
    startY = e.touches[0].clientY;
    isDragging = true;
    isScrolling = false;
    
    // Stop any autoplay
    clearInterval(autoplayInterval);
    
    // Stop any ongoing animation
    if (animationFrameId) {
      cancelAnimationFrame(animationFrameId);
      animationFrameId = null;
    }
  }
  
  let lastTouchMoveTime = 0;
  const THROTTLE_DELAY = 16; // ~60fps
  
  function handleTouchMove(e) {
    if (!isDragging) return;
    
    // Throttle for performance
    const now = performance.now();
    if (now - lastTouchMoveTime < THROTTLE_DELAY) return;
    lastTouchMoveTime = now;
    
    endX = e.touches[0].clientX;
    endY = e.touches[0].clientY;
    
    // Determine if the user is trying to scroll vertically
    if (!isScrolling) {
      const diffX = Math.abs(endX - startX);
      const diffY = Math.abs(endY - startY);
      
      // If vertical movement is greater, let the page scroll
      if (diffY > diffX) {
        isScrolling = true;
        return;
      }
      
      // Prevent default only if horizontal swiping
      e.preventDefault();
    }
    
    if (isScrolling) return;
    
    const diff = startX - endX;
    const percentage = (diff / window.innerWidth) * 100;
    const newPosition = -currentIndex * 100 - percentage;
    
    // Apply transformation without transition for drag effect
    carousel.style.transition = 'none';
    carousel.style.transform = `translateX(${newPosition}%)`;
  }
  
  function handleTouchEnd() {
    if (!isDragging || isScrolling) {
      isDragging = false;
      return;
    }
    
    isDragging = false;
    
    // Calculate swipe distance as percentage of screen width
    const swipeDistance = startX - endX;
    const screenPercentage = (swipeDistance / window.innerWidth) * 100;
    
    // Re-enable transition for smooth movement
    carousel.style.transition = 'transform 0.3s ease-out';
    
    // If swiped more than 15% of screen width, change slide
    if (Math.abs(screenPercentage) > 15) {
      if (swipeDistance > 0 && currentIndex < totalSlides - 1) {
        currentIndex++;
      } else if (swipeDistance < 0 && currentIndex > 0) {
        currentIndex--;
      }
    }
    
    goToSlide(currentIndex);
    
    // Restart autoplay
    startAutoplay();
  }
  
  // Dot navigation
  dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
      goToSlide(index);
      clearInterval(autoplayInterval);
      startAutoplay();
    });
  });
  
  // Autoplay
  function startAutoplay() {
    clearInterval(autoplayInterval);
    autoplayInterval = setInterval(() => {
      nextSlide();
    }, 5000); // Change slide every 5 seconds
  }
  
  // Handle visibility change to pause autoplay when tab is inactive
  document.addEventListener('visibilitychange', () => {
    if (document.hidden) {
      clearInterval(autoplayInterval);
    } else {
      startAutoplay();
    }
  });
  
  // Initialize carousel
  function initCarousel() {
    // Set initial position
    carousel.style.transform = 'translateX(0)';
    
    // Add event listeners
    carousel.addEventListener('touchstart', handleTouchStart, { passive: true });
    carousel.addEventListener('touchmove', handleTouchMove, { passive: false });
    carousel.addEventListener('touchend', handleTouchEnd, { passive: true });
    
    // For desktop
    carousel.addEventListener('mousedown', (e) => {
      e.preventDefault();
      startX = e.clientX;
      isDragging = true;
      clearInterval(autoplayInterval);
    });
    
    document.addEventListener('mousemove', (e) => {
      if (!isDragging) return;
      e.preventDefault();
      endX = e.clientX;
      const diff = startX - endX;
      const percentage = (diff / window.innerWidth) * 100;
      carousel.style.transition = 'none';
      carousel.style.transform = `translateX(${-currentIndex * 100 - percentage}%)`;
    });
    
    document.addEventListener('mouseup', () => {
      if (!isDragging) return;
      isDragging = false;
      const swipeDistance = startX - endX;
      const screenPercentage = (swipeDistance / window.innerWidth) * 100;
      
      if (Math.abs(screenPercentage) > 15) {
        if (swipeDistance > 0 && currentIndex < totalSlides - 1) {
          currentIndex++;
        } else if (swipeDistance < 0 && currentIndex > 0) {
          currentIndex--;
        }
      }
      
      goToSlide(currentIndex);
      startAutoplay();
    });
    
    // Handle window resize
    let resizeTimer;
    window.addEventListener('resize', () => {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(() => {
        goToSlide(currentIndex);
      }, 100);
    });
    
    // Preload images
    preloadImages();
    
    // Start autoplay
    startAutoplay();
  }
  
  // Initialize after DOM is fully loaded
  initCarousel();
});
</script>

@endsection