@extends('layouts.public')

@section('title', 'News - Buhimba United Saints FC')
@section('description', 'Latest news, updates, and announcements from Buhimba United Saints FC. Stay informed about team news, transfers, and match reports.')

@section('content')
<!-- Page Header -->
<section class="bg-club-green text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">Club News</h1>
                <p class="lead mb-0">Latest news, updates, and announcements from Buhimba United Saints FC</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <div class="bg-white bg-opacity-20 rounded p-3">
                    <h5 class="mb-1">Latest Update</h5>
                    @if($latestNews)
                        <div class="fw-bold">{{ Str::limit($latestNews->title, 30) }}</div>
                        <small>{{ $latestNews->published_at->diffForHumans() }}</small>
                    @else
                        <small>No recent news</small>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

@if($featuredNews)
    <!-- Featured News -->
    <section class="py-5">
        <div class="container">
            <h2 class="fw-bold text-club-green mb-4">
                <i class="bi bi-star-fill me-2"></i>Featured Story
            </h2>
            
            <div class="card featured-news-card border-0 shadow">
                <div class="row g-0">
                    <div class="col-lg-6">
                        @if($featuredNews->featured_image)
                            <img src="{{ asset('storage/' . $featuredNews->featured_image) }}" 
                                 alt="{{ $featuredNews->title }}" 
                                 class="img-fluid h-100 w-100" 
                                 style="object-fit: cover; min-height: 300px;">
                        @else
                            <div class="bg-club-green d-flex align-items-center justify-content-center h-100 text-white" 
                                 style="min-height: 300px;">
                                <div class="text-center">
                                    <i class="bi bi-newspaper fs-1 mb-3"></i>
                                    <h4>{{ $featuredNews->title }}</h4>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="col-lg-6">
                        <div class="card-body h-100 d-flex flex-column p-4">
                            <div class="mb-3">
                                <span class="badge bg-club-green">{{ $featuredNews->category }}</span>
                                <small class="text-muted ms-2">{{ $featuredNews->published_at->format('M d, Y') }}</small>
                            </div>
                            
                            <h3 class="card-title fw-bold mb-3">{{ $featuredNews->title }}</h3>
                            
                            <p class="card-text mb-4 flex-grow-1">{{ $featuredNews->excerpt ?: Str::limit($featuredNews->content, 200) }}</p>
                            
                            <div class="mt-auto">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="author-info d-flex align-items-center">
                                        <div class="author-avatar bg-light rounded-circle me-2" style="width: 32px; height: 32px;">
                                            <i class="bi bi-person-fill text-muted d-flex align-items-center justify-content-center h-100"></i>
                                        </div>
                                        <small class="text-muted">{{ $featuredNews->author }}</small>
                                    </div>
                                    <a href="{{ route('news.show', $featuredNews->slug) }}" class="btn btn-club-primary">Read More</a>
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
    <!-- News Categories Filter -->
    <section class="py-3 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="btn-group flex-wrap" role="group">
                        <button type="button" class="btn btn-outline-club-green active" data-category="all">All News</button>
                        @foreach($categories as $category)
                            <button type="button" class="btn btn-outline-club-green" data-category="{{ $category }}">{{ $category }}</button>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4 text-md-end">
                    <small class="text-muted">{{ $news->total() }} articles</small>
                </div>
            </div>
        </div>
    </section>

    <!-- News Grid -->
    <section class="py-5">
        <div class="container">
            <div class="row" id="news-grid">
                @foreach($news as $article)
                    <div class="col-lg-4 col-md-6 mb-4 news-item" data-category="{{ $article->category }}">
                        <div class="card news-card h-100 shadow-sm">
                            @if($article->featured_image)
                                <div class="card-img-top-wrapper" style="height: 200px; overflow: hidden;">
                                    <img src="{{ asset('storage/' . $article->featured_image) }}" 
                                         alt="{{ $article->title }}" 
                                         class="card-img-top h-100 w-100" 
                                         style="object-fit: cover;">
                                </div>
                            @else
                                <div class="card-img-top bg-club-green d-flex align-items-center justify-content-center text-white" 
                                     style="height: 200px;">
                                    <i class="bi bi-newspaper fs-2"></i>
                                </div>
                            @endif
                            
                            <div class="card-body d-flex flex-column">
                                <div class="mb-2">
                                    <span class="badge bg-{{ 
                                        $article->category == 'Match Report' ? 'success' : 
                                        ($article->category == 'Transfer News' ? 'info' : 
                                        ($article->category == 'Team News' ? 'primary' : 'secondary')) 
                                    }}">
                                        {{ $article->category }}
                                    </span>
                                    <small class="text-muted ms-2">{{ $article->published_at->diffForHumans() }}</small>
                                </div>
                                
                                <h5 class="card-title fw-bold mb-3">
                                    <a href="{{ route('news.show', $article->slug) }}" class="text-decoration-none text-dark">
                                        {{ $article->title }}
                                    </a>
                                </h5>
                                
                                <p class="card-text text-muted flex-grow-1">
                                    {{ $article->excerpt ?: Str::limit(strip_tags($article->content), 100) }}
                                </p>
                                
                                <div class="mt-auto pt-3 border-top">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="author-info d-flex align-items-center">
                                            <div class="author-avatar bg-club-green text-white rounded-circle me-2 d-flex align-items-center justify-content-center" 
                                                 style="width: 28px; height: 28px; font-size: 0.8rem;">
                                                {{ substr($article->author, 0, 1) }}
                                            </div>
                                            <small class="text-muted">{{ $article->author }}</small>
                                        </div>
                                        <div class="article-meta">
                                            @if($article->views_count)
                                                <small class="text-muted me-2">
                                                    <i class="bi bi-eye me-1"></i>{{ $article->views_count }}
                                                </small>
                                            @endif
                                            @if($article->comments_count)
                                                <small class="text-muted">
                                                    <i class="bi bi-chat me-1"></i>{{ $article->comments_count }}
                                                </small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center">
                {{ $news->links() }}
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
.news-card {
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.news-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
}

.featured-news-card {
    border-radius: 15px;
    overflow: hidden;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.featured-news-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
}

.news-card .card-title a:hover {
    color: var(--bs-primary) !important;
}

.author-avatar {
    font-size: 0.8rem;
    font-weight: bold;
}

.card-img-top-wrapper {
    position: relative;
    overflow: hidden;
}

.card-img-top-wrapper::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.1) 100%);
}

.btn-group .btn {
    margin-bottom: 0.5rem;
}

@media (max-width: 768px) {
    .btn-group {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
    }
    
    .btn-group .btn {
        flex: 0 0 auto;
    }
    
    .featured-news-card .card-body {
        padding: 2rem !important;
    }
}
</style>
@endpush

@push('scripts')
<script>
// Category filter functionality
document.addEventListener('DOMContentLoaded', function() {
    const categoryButtons = document.querySelectorAll('[data-category]');
    const newsItems = document.querySelectorAll('.news-item');
    
    categoryButtons.forEach(button => {
        button.addEventListener('click', function() {
            const category = this.getAttribute('data-category');
            
            // Update active button
            categoryButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            // Filter news items
            newsItems.forEach(item => {
                const itemCategory = item.getAttribute('data-category');
                
                if (category === 'all' || itemCategory === category) {
                    item.style.display = 'block';
                    // Add fade-in animation
                    item.style.opacity = '0';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transition = 'opacity 0.3s ease';
                    }, 50);
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
    
    // Newsletter subscription
    const newsletterForm = document.querySelector('form[action="#"]');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[type="email"]').value;
            
            // Simple validation
            if (email) {
                alert('Thank you for subscribing! You will receive our latest updates.');
                this.querySelector('input[type="email"]').value = '';
            }
        });
    }
});
</script>
@endpush
