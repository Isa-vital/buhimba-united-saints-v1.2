@extends('layouts.public')

@section('title', 'News - Buhimba United Saints FC')
@section('description', 'Latest news, updates, and announcements from Buhimba United Saints FC. Stay informed about team news, transfers, and match reports.')

@section('content')
<!-- Enhanced Page Header with Breadcrumbs -->
<section class="news-hero position-relative overflow-hidden">
    <!-- Background with gradient overlay -->
    <div class="position-absolute w-100 h-100" style="
        background: linear-gradient(135deg, 
            rgba(27, 94, 32, 0.9) 0%, 
            rgba(0, 0, 0, 0.7) 50%, 
            rgba(27, 94, 32, 0.9) 100%),
            url('{{ asset('images/hero-background.jpg') }}');
        background-size: cover;
        background-position: center;
        z-index: 1;
    "></div>
    
    <!-- Animated pattern overlay -->
    <div class="position-absolute w-100 h-100" style="
        background-image: 
            radial-gradient(circle at 20% 80%, rgba(255, 215, 0, 0.1) 0%, transparent 40%),
            radial-gradient(circle at 80% 20%, rgba(255, 255, 255, 0.05) 0%, transparent 40%);
        animation: patternFloat 20s ease-in-out infinite;
        z-index: 2;
    "></div>
    
    <div class="container position-relative py-5" style="z-index: 3;">
        <!-- Breadcrumbs -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('home') }}" class="text-white text-decoration-none">
                        <i class="bi bi-house-fill me-1"></i>Home
                    </a>
                </li>
                <li class="breadcrumb-item active text-white-50" aria-current="page">News</li>
            </ol>
        </nav>
        
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-3 fw-bold mb-3 text-white" style="
                    text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
                    animation: slideInLeft 1s ease-out;
                ">Latest News</h1>
                <p class="lead text-white-50 mb-4" style="
                    font-size: 1.3rem;
                    animation: slideInLeft 1s ease-out 0.2s both;
                ">Stay informed with the latest updates, match reports, and announcements from Buhimba United Saints FC</p>
                
                <!-- Quick stats -->
                <div class="d-flex flex-wrap gap-4" style="animation: slideInUp 1s ease-out 0.4s both;">
                    <div class="stat-item">
                        <div class="h4 fw-bold text-warning mb-0">{{ $news->total() }}</div>
                        <small class="text-white-50">Total Articles</small>
                    </div>
                    <div class="stat-item">
                        <div class="h4 fw-bold text-warning mb-0">{{ $categories->count() }}</div>
                        <small class="text-white-50">Categories</small>
                    </div>
                    @if($latestNews)
                    <div class="stat-item">
                        <div class="h4 fw-bold text-warning mb-0">{{ $latestNews->published_at->diffForHumans() }}</div>
                        <small class="text-white-50">Last Update</small>
                    </div>
                    @endif
                </div>
            </div>
            
            <div class="col-lg-4 text-lg-end" style="animation: slideInRight 1s ease-out 0.6s both;">
                @if($latestNews)
                <div class="latest-update-card" style="
                    background: linear-gradient(135deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0.05));
                    backdrop-filter: blur(15px);
                    border: 1px solid rgba(255, 255, 255, 0.2);
                    border-radius: 20px;
                    padding: 2rem;
                    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
                ">
                    <div class="d-flex align-items-center mb-3">
                        <div class="pulse-dot me-3"></div>
                        <h5 class="mb-0 text-white fw-bold">Latest Update</h5>
                    </div>
                    <h6 class="text-white fw-semibold mb-2">{{ Str::limit($latestNews->title, 40) }}</h6>
                    <small class="text-white-50">{{ $latestNews->published_at->diffForHumans() }}</small>
                    <div class="mt-3">
                        <a href="{{ route('news.show', $latestNews->slug) }}" class="btn btn-warning btn-sm fw-bold">
                            Read Now <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

@if($featuredNews)
    <!-- Enhanced Featured News -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2 class="display-5 fw-bold text-club-green mb-2">
                        <i class="bi bi-star-fill text-warning me-2"></i>Featured Story
                    </h2>
                    <p class="text-muted">Don't miss our top story of the moment</p>
                </div>
            </div>
            
            <div class="featured-article-container">
                <div class="card featured-news-card border-0 shadow-lg" style="
                    border-radius: 25px;
                    overflow: hidden;
                    transition: all 0.3s ease;
                    background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
                ">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="featured-image-container position-relative" style="height: 400px;">
                                @if($featuredNews->featured_image)
                                    <img src="{{ asset('storage/' . $featuredNews->featured_image) }}" 
                                         alt="{{ $featuredNews->title }}" 
                                         class="img-fluid h-100 w-100" 
                                         style="object-fit: cover;">
                                @else
                                    <div class="bg-gradient-club d-flex align-items-center justify-content-center h-100 text-white">
                                        <div class="text-center">
                                            <i class="bi bi-newspaper" style="font-size: 4rem; opacity: 0.8;"></i>
                                            <h4 class="mt-3">{{ $featuredNews->title }}</h4>
                                        </div>
                                    </div>
                                @endif
                                
                                <!-- Featured badge -->
                                <div class="position-absolute top-0 start-0 m-3">
                                    <span class="badge bg-warning text-dark fw-bold px-3 py-2" style="
                                        border-radius: 20px;
                                        box-shadow: 0 5px 15px rgba(255, 193, 7, 0.4);
                                    ">
                                        <i class="bi bi-star-fill me-1"></i>Featured
                                    </span>
                                </div>
                                
                                <!-- Gradient overlay -->
                                <div class="position-absolute bottom-0 start-0 w-100" style="
                                    height: 100px;
                                    background: linear-gradient(transparent, rgba(0,0,0,0.7));
                                "></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card-body h-100 d-flex flex-column p-5">
                                <div class="mb-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <span class="badge bg-club-green text-white px-3 py-2 me-3" style="border-radius: 15px;">
                                            {{ $featuredNews->category }}
                                        </span>
                                        <div class="article-meta text-muted">
                                            <i class="bi bi-calendar3 me-1"></i>
                                            {{ $featuredNews->published_at->format('M d, Y') }}
                                        </div>
                                    </div>
                                </div>
                                
                                <h3 class="card-title fw-bold mb-4" style="
                                    font-size: 1.8rem;
                                    line-height: 1.3;
                                    color: #1b5e20;
                                ">{{ $featuredNews->title }}</h3>
                                
                                <p class="card-text mb-4 flex-grow-1" style="
                                    font-size: 1.1rem;
                                    line-height: 1.6;
                                    color: #495057;
                                ">{{ $featuredNews->excerpt ?: Str::limit(strip_tags($featuredNews->content), 200) }}</p>
                                
                                <div class="mt-auto">
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <div class="author-info d-flex align-items-center">
                                            <div class="author-avatar bg-club-green text-white rounded-circle me-3 d-flex align-items-center justify-content-center" 
                                                 style="width: 45px; height: 45px; font-size: 1.2rem; font-weight: bold;">
                                                {{ substr($featuredNews->author->name ?? 'Unknown', 0, 1) }}
                                            </div>
                                            <div>
                                                <div class="fw-semibold text-dark">{{ $featuredNews->author->name ?? 'Unknown Author' }}</div>
                                                <small class="text-muted">Sports Journalist</small>
                                            </div>
                                        </div>
                                        <div class="article-stats">
                                            @if($featuredNews->views_count)
                                                <small class="text-muted me-3">
                                                    <i class="bi bi-eye me-1"></i>{{ number_format($featuredNews->views_count) }}
                                                </small>
                                            @endif
                                            <small class="text-muted">
                                                <i class="bi bi-clock me-1"></i>{{ $featuredNews->published_at->diffForHumans() }}
                                            </small>
                                        </div>
                                    </div>
                                    
                                    <a href="{{ route('news.show', $featuredNews->slug) }}" 
                                       class="btn btn-club-primary btn-lg fw-bold px-4" 
                                       style="border-radius: 15px; box-shadow: 0 5px 15px rgba(27, 94, 32, 0.3);">
                                        Read Full Story <i class="bi bi-arrow-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif

@if($news->count() > 0)
    <!-- Enhanced News Categories Filter -->
    <section class="filter-section py-4" style="
        background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
        border-top: 1px solid #e9ecef;
        border-bottom: 1px solid #e9ecef;
    ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="filter-container">
                        <h6 class="fw-bold text-muted mb-3">
                            <i class="bi bi-funnel me-2"></i>Filter by Category
                        </h6>
                        <div class="category-pills d-flex flex-wrap gap-2">
                            <button type="button" 
                                    class="category-pill active" 
                                    data-category="all"
                                    style="
                                        background: linear-gradient(135deg, #1b5e20, #2e7d32);
                                        color: white;
                                        border: none;
                                        padding: 0.75rem 1.5rem;
                                        border-radius: 25px;
                                        font-weight: 600;
                                        transition: all 0.3s ease;
                                        box-shadow: 0 4px 15px rgba(27, 94, 32, 0.3);
                                    ">
                                <i class="bi bi-grid-3x3-gap me-2"></i>All News
                            </button>
                            @foreach($categories as $category)
                                <button type="button" 
                                        class="category-pill" 
                                        data-category="{{ $category }}"
                                        style="
                                            background: white;
                                            color: #6c757d;
                                            border: 2px solid #e9ecef;
                                            padding: 0.75rem 1.5rem;
                                            border-radius: 25px;
                                            font-weight: 600;
                                            transition: all 0.3s ease;
                                        ">
                                    <i class="bi bi-{{ 
                                        $category == 'Match Report' ? 'trophy' : 
                                        ($category == 'Transfer News' ? 'arrow-left-right' : 
                                        ($category == 'Team News' ? 'people' : 'newspaper')) 
                                    }} me-2"></i>{{ $category }}
                                </button>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <div class="search-results-info">
                        <div class="results-count" style="
                            background: rgba(27, 94, 32, 0.1);
                            color: #1b5e20;
                            padding: 1rem 1.5rem;
                            border-radius: 15px;
                            font-weight: 600;
                        ">
                            <i class="bi bi-newspaper me-2"></i>
                            <span id="results-count">{{ $news->total() }}</span> articles found
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced News Grid -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4" id="news-grid">
                @foreach($news as $index => $article)
                    <div class="col-lg-4 col-md-6 news-item" 
                         data-category="{{ $article->category }}"
                         style="animation: fadeInUp 0.6s ease-out {{ $index * 0.1 }}s both;">
                        <article class="news-card h-100" style="
                            background: white;
                            border-radius: 20px;
                            overflow: hidden;
                            transition: all 0.3s ease;
                            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
                            border: 1px solid rgba(0, 0, 0, 0.05);
                        ">
                            <!-- Image Section -->
                            <div class="card-image-container position-relative" style="height: 220px; overflow: hidden;">
                                @if($article->featured_image)
                                    <img src="{{ asset('storage/' . $article->featured_image) }}" 
                                         alt="{{ $article->title }}" 
                                         class="w-100 h-100" 
                                         style="object-fit: cover; transition: transform 0.3s ease;">
                                @else
                                    <div class="image-placeholder d-flex align-items-center justify-content-center h-100" style="
                                        background: linear-gradient(135deg, #1b5e20, #2e7d32);
                                        color: white;
                                    ">
                                        <i class="bi bi-newspaper" style="font-size: 3rem; opacity: 0.7;"></i>
                                    </div>
                                @endif
                                
                                <!-- Category badge -->
                                <div class="position-absolute top-0 start-0 m-3">
                                    <span class="badge category-badge" style="
                                        background: {{ 
                                            $article->category == 'Match Report' ? 'linear-gradient(135deg, #28a745, #20c997)' : 
                                            ($article->category == 'Transfer News' ? 'linear-gradient(135deg, #17a2b8, #6f42c1)' : 
                                            ($article->category == 'Team News' ? 'linear-gradient(135deg, #007bff, #6610f2)' : 'linear-gradient(135deg, #6c757d, #495057)')) 
                                        }};
                                        color: white;
                                        padding: 0.5rem 1rem;
                                        border-radius: 15px;
                                        font-weight: 600;
                                        font-size: 0.8rem;
                                        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
                                    ">{{ $article->category }}</span>
                                </div>
                                
                                <!-- Reading time -->
                                <div class="position-absolute top-0 end-0 m-3">
                                    <span class="badge bg-dark bg-opacity-75 text-white" style="
                                        border-radius: 10px;
                                        font-size: 0.75rem;
                                    ">
                                        <i class="bi bi-clock me-1"></i>{{ rand(2, 8) }} min read
                                    </span>
                                </div>
                                
                                <!-- Gradient overlay -->
                                <div class="position-absolute bottom-0 start-0 w-100" style="
                                    height: 50px;
                                    background: linear-gradient(transparent, rgba(0,0,0,0.3));
                                "></div>
                            </div>
                            
                            <!-- Content Section -->
                            <div class="card-body p-4 d-flex flex-column">
                                <!-- Meta info -->
                                <div class="article-meta mb-3 d-flex align-items-center justify-content-between">
                                    <small class="text-muted d-flex align-items-center">
                                        <i class="bi bi-calendar3 me-1"></i>
                                        {{ $article->published_at->format('M d, Y') }}
                                    </small>
                                    <small class="text-muted">
                                        {{ $article->published_at->diffForHumans() }}
                                    </small>
                                </div>
                                
                                <!-- Title -->
                                <h5 class="card-title fw-bold mb-3" style="
                                    line-height: 1.4;
                                    min-height: 3.5rem;
                                ">
                                    <a href="{{ route('news.show', $article->slug) }}" 
                                       class="text-decoration-none text-dark stretched-link"
                                       style="transition: color 0.3s ease;">
                                        {{ $article->title }}
                                    </a>
                                </h5>
                                
                                <!-- Excerpt -->
                                <p class="card-text text-muted flex-grow-1 mb-4" style="
                                    line-height: 1.6;
                                    font-size: 0.95rem;
                                ">
                                    {{ $article->excerpt ?: Str::limit(strip_tags($article->content), 120) }}
                                </p>
                                
                                <!-- Footer -->
                                <div class="card-footer-content pt-3 border-top d-flex justify-content-between align-items-center">
                                    <div class="author-info d-flex align-items-center">
                                        <div class="author-avatar bg-club-green text-white rounded-circle me-2 d-flex align-items-center justify-content-center" 
                                             style="width: 32px; height: 32px; font-size: 0.9rem; font-weight: bold;">
                                            {{ substr($article->author->name ?? 'Unknown', 0, 1) }}
                                        </div>
                                        <small class="text-muted fw-medium">{{ $article->author->name ?? 'Unknown Author' }}</small>
                                    </div>
                                    
                                    <div class="article-stats d-flex align-items-center gap-3">
                                        @if($article->views_count)
                                            <small class="text-muted d-flex align-items-center">
                                                <i class="bi bi-eye me-1"></i>{{ number_format($article->views_count) }}
                                            </small>
                                        @endif
                                        <small class="text-muted d-flex align-items-center">
                                            <i class="bi bi-heart me-1"></i>{{ rand(5, 50) }}
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>

            <!-- Enhanced Pagination -->
            <div class="d-flex justify-content-center mt-5">
                <div class="pagination-wrapper">
                    {{ $news->links() }}
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Signup -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h3 class="fw-bold text-club-green mb-3">Stay Updated</h3>
                    <p class="mb-4">Subscribe to our newsletter and never miss the latest news from Buhimba United Saints FC</p>
                    
                    <form class="d-flex justify-content-center" action="#" method="POST">
                        @csrf
                        <div class="input-group" style="max-width: 400px;">
                            <input type="email" class="form-control" placeholder="Enter your email" required>
                            <button class="btn btn-club-primary" type="submit">Subscribe</button>
                        </div>
                    </form>
                    
                    <small class="text-muted mt-2 d-block">We respect your privacy. Unsubscribe at any time.</small>
                </div>
            </div>
        </div>
    </section>

@else
    <!-- No News -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <i class="bi bi-newspaper fs-1 text-muted mb-3"></i>
                    <h3 class="text-muted">No News Available</h3>
                    <p class="text-muted">News articles will appear here once they are published.</p>
                    <a href="{{ route('home') }}" class="btn btn-club-primary">Return Home</a>
                </div>
            </div>
        </div>
    </section>
@endif

<!-- Social Media -->
<section class="bg-club-green text-white py-5">
    <div class="container text-center">
        <h2 class="fw-bold mb-3">Follow Us on Social Media</h2>
        <p class="lead mb-4">Get the latest updates and behind-the-scenes content</p>
        
        <div class="social-links">
            <a href="#" class="btn btn-light btn-lg me-3 mb-2">
                <i class="bi bi-facebook"></i> Facebook
            </a>
            <a href="#" class="btn btn-light btn-lg me-3 mb-2">
                <i class="bi bi-twitter"></i> Twitter
            </a>
            <a href="#" class="btn btn-light btn-lg me-3 mb-2">
                <i class="bi bi-instagram"></i> Instagram
            </a>
            <a href="#" class="btn btn-light btn-lg mb-2">
                <i class="bi bi-youtube"></i> YouTube
            </a>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
/* Enhanced News Page Styles */
.news-hero {
    min-height: 60vh;
    display: flex;
    align-items: center;
}

/* Animations */
@keyframes slideInLeft {
    from {
        opacity: 0;
        transform: translateX(-50px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes slideInRight {
    from {
        opacity: 0;
        transform: translateX(50px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes slideInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes patternFloat {
    0%, 100% { 
        background-position: 0 0, 100% 100%; 
    }
    50% { 
        background-position: 20px 20px, 80% 80%; 
    }
}

/* Pulse dot animation */
.pulse-dot {
    width: 12px;
    height: 12px;
    background: #ffd700;
    border-radius: 50%;
    animation: pulse 2s ease-in-out infinite;
}

@keyframes pulse {
    0% {
        box-shadow: 0 0 0 0 rgba(255, 215, 0, 0.7);
    }
    70% {
        box-shadow: 0 0 0 10px rgba(255, 215, 0, 0);
    }
    100% {
        box-shadow: 0 0 0 0 rgba(255, 215, 0, 0);
    }
}

/* Breadcrumbs */
.breadcrumb {
    background: none;
    padding: 0;
}

.breadcrumb-item + .breadcrumb-item::before {
    content: "›";
    color: rgba(255, 255, 255, 0.5);
    font-weight: bold;
}

/* Featured news card */
.featured-news-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15) !important;
}

.featured-news-card:hover .featured-image-container img {
    transform: scale(1.05);
}

/* Category pills */
.category-pill {
    cursor: pointer;
    white-space: nowrap;
}

.category-pill:hover:not(.active) {
    background: #f8f9fa !important;
    color: #1b5e20 !important;
    border-color: #1b5e20 !important;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.category-pill.active {
    background: linear-gradient(135deg, #1b5e20, #2e7d32) !important;
    color: white !important;
    border: none !important;
    box-shadow: 0 4px 15px rgba(27, 94, 32, 0.3);
}

/* News cards */
.news-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15) !important;
}

.news-card:hover .card-image-container img {
    transform: scale(1.05);
}

.news-card .card-title a:hover {
    color: #1b5e20 !important;
}

.news-card .stretched-link:hover::before {
    background: rgba(27, 94, 32, 0.02);
}

/* Background gradients */
.bg-gradient-club {
    background: linear-gradient(135deg, #1b5e20, #2e7d32) !important;
}

/* Newsletter section */
.newsletter-section {
    background: linear-gradient(135deg, #1b5e20 0%, #2e7d32 100%);
}

.newsletter-card {
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0.05));
    backdrop-filter: blur(15px);
    border: 1px solid rgba(255, 255, 255, 0.2);
}

/* Social media section */
.social-section {
    background: linear-gradient(135deg, #1b5e20 0%, #2e7d32 50%, #1b5e20 100%);
}

.social-btn {
    background: rgba(255, 255, 255, 0.1);
    border: 2px solid rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    transition: all 0.3s ease;
}

.social-btn:hover {
    background: rgba(255, 255, 255, 0.2);
    border-color: rgba(255, 255, 255, 0.4);
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .news-hero {
        min-height: 50vh;
        text-align: center;
    }
    
    .display-3 {
        font-size: 2.5rem;
    }
    
    .featured-news-card .card-body {
        padding: 2rem !important;
    }
    
    .category-pills {
        justify-content: center;
    }
    
    .category-pill {
        font-size: 0.9rem;
        padding: 0.6rem 1.2rem !important;
    }
    
    .stat-item {
        text-align: center;
        margin-bottom: 1rem;
    }
    
    .latest-update-card {
        margin-top: 2rem;
        text-align: center !important;
    }
}

@media (max-width: 576px) {
    .news-card .card-body {
        padding: 1.5rem;
    }
    
    .card-image-container {
        height: 180px !important;
    }
    
    .category-pills {
        flex-direction: column;
        align-items: stretch;
    }
    
    .category-pill {
        margin-bottom: 0.5rem;
        text-align: center;
    }
}

/* Loading states */
.news-item.loading {
    opacity: 0.5;
    pointer-events: none;
}

.news-item.fade-in {
    animation: fadeInUp 0.6s ease-out;
}

/* No results state */
.no-results {
    text-align: center;
    padding: 4rem 2rem;
    color: #6c757d;
}

.no-results i {
    font-size: 4rem;
    margin-bottom: 1rem;
    opacity: 0.5;
}

/* Enhanced Pagination Styling */
.pagination-wrapper .pagination {
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    background: white;
}

.pagination-wrapper .page-link {
    border: none;
    padding: 0.75rem 1rem;
    color: #6c757d;
    font-weight: 500;
    transition: all 0.3s ease;
    background: transparent;
}

.pagination-wrapper .page-link:hover {
    background: #f8f9fa;
    color: #1b5e20;
    transform: translateY(-2px);
}

.pagination-wrapper .page-item.active .page-link {
    background: linear-gradient(135deg, #1b5e20, #2e7d32);
    border-color: #1b5e20;
    color: white;
    box-shadow: 0 4px 10px rgba(27, 94, 32, 0.3);
}

.pagination-wrapper .page-item.disabled .page-link {
    color: #dee2e6;
    background: transparent;
}

.pagination-wrapper .page-item:first-child .page-link {
    border-top-left-radius: 15px;
    border-bottom-left-radius: 15px;
}

.pagination-wrapper .page-item:last-child .page-link {
    border-top-right-radius: 15px;
    border-bottom-right-radius: 15px;
}
</style>
@endpush

@push('scripts')
<script>
// Enhanced News Page JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Category filter functionality with smooth animations
    const categoryButtons = document.querySelectorAll('.category-pill');
    const newsItems = document.querySelectorAll('.news-item');
    const resultsCount = document.getElementById('results-count');
    
    categoryButtons.forEach(button => {
        button.addEventListener('click', function() {
            const category = this.getAttribute('data-category');
            
            // Update active button with smooth transition
            categoryButtons.forEach(btn => {
                btn.classList.remove('active');
                btn.style.background = 'white';
                btn.style.color = '#6c757d';
                btn.style.borderColor = '#e9ecef';
            });
            
            this.classList.add('active');
            this.style.background = 'linear-gradient(135deg, #1b5e20, #2e7d32)';
            this.style.color = 'white';
            this.style.borderColor = 'transparent';
            
            // Filter news items with stagger animation
            let visibleCount = 0;
            let delay = 0;
            
            newsItems.forEach((item, index) => {
                const itemCategory = item.getAttribute('data-category');
                
                // Hide all items first
                item.style.opacity = '0';
                item.style.transform = 'translateY(20px)';
                
                setTimeout(() => {
                    if (category === 'all' || itemCategory === category) {
                        item.style.display = 'block';
                        visibleCount++;
                        
                        // Stagger the animation
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'translateY(0)';
                            item.style.transition = 'all 0.5s ease';
                        }, delay);
                        
                        delay += 100; // 100ms delay between each item
                    } else {
                        item.style.display = 'none';
                    }
                }, 200);
            });
            
            // Update results count with animation
            setTimeout(() => {
                resultsCount.style.transform = 'scale(0.8)';
                resultsCount.style.transition = 'transform 0.2s ease';
                
                setTimeout(() => {
                    resultsCount.textContent = visibleCount;
                    resultsCount.style.transform = 'scale(1)';
                }, 100);
            }, 300);
        });
    });
    
    // Newsletter subscription with better UX
    const newsletterForm = document.querySelector('#newsletter-form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const emailInput = this.querySelector('input[type="email"]');
            const submitButton = this.querySelector('button[type="submit"]');
            const originalText = submitButton.innerHTML;
            
            // Show loading state
            submitButton.innerHTML = '<i class="bi bi-hourglass-split me-2"></i>Subscribing...';
            submitButton.disabled = true;
            
            // Simulate subscription (replace with actual API call)
            setTimeout(() => {
                // Show success message
                const successMessage = document.createElement('div');
                successMessage.className = 'alert alert-success mt-3';
                successMessage.innerHTML = '<i class="bi bi-check-circle me-2"></i>Thank you for subscribing! Check your email for confirmation.';
                
                this.appendChild(successMessage);
                
                // Reset form
                emailInput.value = '';
                submitButton.innerHTML = originalText;
                submitButton.disabled = false;
                
                // Remove success message after 5 seconds
                setTimeout(() => {
                    successMessage.remove();
                }, 5000);
            }, 2000);
        });
    }
    
    // Smooth scroll for internal links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Add loading states for news cards
    document.querySelectorAll('.news-card a').forEach(link => {
        link.addEventListener('click', function() {
            const card = this.closest('.news-card');
            card.style.opacity = '0.7';
            card.style.pointerEvents = 'none';
            
            // Add loading spinner
            const loadingSpinner = document.createElement('div');
            loadingSpinner.className = 'position-absolute top-50 start-50 translate-middle';
            loadingSpinner.innerHTML = '<div class="spinner-border text-primary" role="status"></div>';
            card.style.position = 'relative';
            card.appendChild(loadingSpinner);
        });
    });
    
    // Intersection Observer for scroll animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    // Observe news cards for scroll animations
    newsItems.forEach(item => {
        item.style.opacity = '0';
        item.style.transform = 'translateY(30px)';
        item.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(item);
    });
});
</script>
@endpush
