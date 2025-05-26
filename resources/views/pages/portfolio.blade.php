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
        font-size: 18px;
    }
    
    .filter-btn.active {
        background-color: #DAA33E;
        color: white;
    }
    
    .filter-btn:not(.active) {
        background-color: transparent;
        color: #0B1F3A;
    }
    
    .filter-btn:hover:not(.active) {
        background-color: rgba(26, 38, 57, 0.1);
    }
    
    .container {
        max-width: 1200px;
        padding: 0 1rem;
    }

    .projects-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 2rem;
    }
    
    .category-container {
        display: none;
        width: 100%;
        grid-column: 1 / -1;
        margin-top: 1rem;
    }
    
    .project-card {
        border-radius: 5px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        background-color: white;
        transition: transform 0.3s ease;
        cursor: pointer;
    }
    
    .project-card:hover {
        transform: translateY(-5px);
    }
    
    .project-card img {
        width: 100%;
        height: 250px;
    }
    
    .project-info {
        padding: 1rem;
    }
    
    .project-info h3 {
        margin-bottom: 0.5rem;
        color: #104986;
    }
    
    .project-info p {
        color: #666;
        font-size: 0.9rem;
    }
    
    .category-projects {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 1.5rem;
        margin-top: 1.5rem;
    }
    
    .sub-project {
        background-color: #f9f9f9;
        border-radius: 5px;
        /* padding: 1rem; */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    }
    
    .sub-project img {
        width: 100%;
        height: 200px;
        /* object-fit: cover; */
        border-radius: 8px;
        margin-bottom: 1rem;
    }

    @media (max-width:500px) {
        .sub-project img {
            height: 350px;
        }

        .project-card img {
            height: 300px;
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
                <button class="filter-btn active" data-filter="all">All</button>
                @foreach($projects as $key => $category)
                    <button class="filter-btn" data-filter="{{ $key }}">{{ $category['title'] }}</button>
                @endforeach
            </div>

            <div class="container">
                <div class="projects-grid">
                    @foreach($projects as $categoryKey => $category)
                        @foreach($category['projects'] as $projectIndex => $project)
                            <div class="project-card" data-category="{{ $categoryKey }}">
                                <img src="{{ $project['img'] }}" alt="{{ $project['title'] }}">
                                <div class="project-info">
                                    <h3>{{ $project['title'] }}</h3>
                                    <p>{{ $project['description'] }}</p>
                                </div>
                            </div>
                            
                            <div class="category-container" id="{{ $categoryKey }}-projects-{{ $projectIndex }}">
                                <h2>More {{ $project['title'] }} Projects</h2>
                                <div class="category-projects">
                                    @foreach($project['sub_projects'] as $subProject)
                                        <div class="sub-project">
                                            <img src="{{ $subProject['img'] }}" alt="{{ $subProject['title'] }}">
                                            <h3>{{ $subProject['title'] }}</h3>
                                            <p>{{ $subProject['description'] }}</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    @endforeach
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

<script>
    // Filter functionality
    const filterBtns = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');
    const categoryContainers = document.querySelectorAll('.category-container');
    
    // Initially hide all category containers
    categoryContainers.forEach(container => {
        container.style.display = 'none';
    });
    
    // Filter button click handling
    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Remove active class from all buttons
            filterBtns.forEach(b => b.classList.remove('active'));
            
            // Add active class to clicked button
            btn.classList.add('active');
            
            const filter = btn.getAttribute('data-filter');
            
            // Hide all category containers first
            categoryContainers.forEach(container => {
                container.style.display = 'none';
            });
            
            // Filter projects
            projectCards.forEach(card => {
                if (filter === 'all' || card.getAttribute('data-category') === filter) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
    
    // Project card click handling
    projectCards.forEach(card => {
        card.addEventListener('click', () => {
            const category = card.getAttribute('data-category');
            // Find the index of this card among cards with the same category
            const categoryCards = Array.from(document.querySelectorAll(`.project-card[data-category="${category}"]`));
            const index = categoryCards.indexOf(card);
            
            const relatedContainer = document.getElementById(`${category}-projects-${index}`);
            
            // Toggle the display of the related container
            if (relatedContainer.style.display === 'block') {
                relatedContainer.style.display = 'none';
            } else {
                // Hide all containers first
                categoryContainers.forEach(container => {
                    container.style.display = 'none';
                });
                
                // Show the clicked category's container
                relatedContainer.style.display = 'block';
                
                // Scroll to the container
                relatedContainer.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });
    
    // Back to top button
    const backToTopBtn = document.querySelector('.back-to-top');
    
    backToTopBtn.addEventListener('click', (e) => {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
</script>

@endsection