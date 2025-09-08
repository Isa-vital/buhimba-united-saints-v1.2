@extends('layouts.public')

@section('title', $news->title . ' - Buhimba United Saints FC')
@section('description', $news->excerpt ?: Str::limit(strip_tags($news->content), 160))

@section('content')
<!-- Article Header -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb" class="mb-4">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-club-green">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('news.index') }}" class="text-club-green">News</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ Str::limit($news->title, 50) }}</li>
                    </ol>
                </nav>

                <!-- Article Meta -->
                <div class="article-meta mb-4">
                    <span class="badge bg-{{ 
                        $news->category == 'Match Report' ? 'success' : 
                        ($news->category == 'Transfer News' ? 'info' : 
                        ($news->category == 'Team News' ? 'primary' : 'secondary')) 
                    }} me-2">{{ $news->category }}</span>
                    <small class="text-muted">
                        Published {{ $news->published_at->format('M d, Y \a\t H:i') }}
                    </small>
                    @if($news->updated_at != $news->created_at)
                        <small class="text-muted"> • Updated {{ $news->updated_at->diffForHumans() }}</small>
                    @endif
                </div>

                <!-- Article Title -->
                <h1 class="display-5 fw-bold mb-4">{{ $news->title }}</h1>

                <!-- Article Excerpt -->
                @if($news->excerpt)
                    <p class="lead text-muted mb-4">{{ $news->excerpt }}</p>
                @endif

                <!-- Featured Image -->
                @if($news->featured_image)
                    <div class="article-image mb-4">
                        <img src="{{ asset('storage/' . $news->featured_image) }}" 
                             alt="{{ $news->title }}" 
                             class="img-fluid rounded shadow">
                        @if($news->image_caption)
                            <small class="text-muted d-block mt-2 text-center fst-italic">{{ $news->image_caption }}</small>
                        @endif
                    </div>
                @endif

                <!-- Author Info -->
                <div class="author-info d-flex align-items-center mb-4 p-3 bg-light rounded">
                    <div class="author-avatar bg-club-green text-white rounded-circle me-3 d-flex align-items-center justify-content-center" 
                         style="width: 50px; height: 50px; font-size: 1.2rem;">
                        {{ substr($news->author, 0, 1) }}
                    </div>
                    <div>
                        <h6 class="mb-1 fw-bold">{{ $news->author }}</h6>
                        <small class="text-muted">Sports Writer</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Article Content -->
<section class="pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- Article Body -->
                <div class="article-content">
                    {!! nl2br(e($news->content)) !!}
                </div>

                <!-- Article Tags -->
                @if($news->tags && count($news->tags) > 0)
                    <div class="article-tags mt-5 pt-4 border-top">
                        <h6 class="fw-bold text-club-green mb-3">Tags:</h6>
                        @foreach($news->tags as $tag)
                            <span class="badge bg-light text-dark me-2 mb-2">#{{ $tag }}</span>
                        @endforeach
                    </div>
                @endif

                <!-- Social Share -->
                <div class="social-share mt-4 pt-4 border-top">
                    <h6 class="fw-bold text-club-green mb-3">Share this article:</h6>
                    <div class="d-flex gap-2 flex-wrap">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" 
                           target="_blank" class="btn btn-outline-primary btn-sm">
                            <i class="bi bi-facebook me-1"></i>Facebook
                        </a>
                        <a href="https://twitter.com/intent/tweet?text={{ urlencode($news->title) }}&url={{ urlencode(request()->fullUrl()) }}" 
                           target="_blank" class="btn btn-outline-info btn-sm">
                            <i class="bi bi-twitter me-1"></i>Twitter
                        </a>
                        <a href="https://wa.me/?text={{ urlencode($news->title . ' - ' . request()->fullUrl()) }}" 
                           target="_blank" class="btn btn-outline-success btn-sm">
                            <i class="bi bi-whatsapp me-1"></i>WhatsApp
                        </a>
                        <button onclick="copyToClipboard('{{ request()->fullUrl() }}')" 
                                class="btn btn-outline-secondary btn-sm">
                            <i class="bi bi-link me-1"></i>Copy Link
                        </button>
                    </div>
                </div>

                <!-- Navigation -->
                <div class="article-navigation mt-5 pt-4 border-top">
                    <div class="row">
                        @if($previousNews)
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-arrow-left text-club-green fs-4 me-2"></i>
                                    <div>
                                        <small class="text-muted">Previous Article</small>
                                        <div>
                                            <a href="{{ route('news.show', $previousNews->slug) }}" 
                                               class="text-decoration-none fw-semibold">
                                                {{ Str::limit($previousNews->title, 60) }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if($nextNews)
                            <div class="col-md-6 mb-3 {{ !$previousNews ? 'ms-auto' : '' }}">
                                <div class="d-flex align-items-center {{ !$previousNews ? 'justify-content-end' : '' }}">
                                    <div class="{{ !$previousNews ? 'text-end' : '' }}">
                                        <small class="text-muted">Next Article</small>
                                        <div>
                                            <a href="{{ route('news.show', $nextNews->slug) }}" 
                                               class="text-decoration-none fw-semibold">
                                                {{ Str::limit($nextNews->title, 60) }}
                                            </a>
                                        </div>
                                    </div>
                                    <i class="bi bi-arrow-right text-club-green fs-4 ms-2"></i>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Articles -->
@if($relatedNews && $relatedNews->count() > 0)
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="fw-bold text-club-green text-center mb-5">Related Articles</h2>
            
            <div class="row">
                @foreach($relatedNews as $article)
                    <div class="col-lg-4 col-md-6 mb-4">
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
                                
                                <div class="mt-auto">
                                    <a href="{{ route('news.show', $article->slug) }}" class="btn btn-outline-club-green btn-sm">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif

<!-- Newsletter Signup -->
<section class="py-5 bg-club-green text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h3 class="fw-bold mb-3">Stay Updated</h3>
                <p class="mb-4">Subscribe to our newsletter and never miss the latest news from Buhimba United Saints FC</p>
                
                <form class="d-flex justify-content-center" action="#" method="POST">
                    @csrf
                    <div class="input-group" style="max-width: 400px;">
                        <input type="email" class="form-control" placeholder="Enter your email" required>
                        <button class="btn btn-light" type="submit">Subscribe</button>
                    </div>
                </form>
                
                <small class="mt-2 d-block opacity-75">We respect your privacy. Unsubscribe at any time.</small>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
.article-content {
    font-size: 1.1rem;
    line-height: 1.8;
}

.article-content p {
    margin-bottom: 1.5rem;
}

.article-image img {
    width: 100%;
    height: auto;
    max-height: 500px;
    object-fit: cover;
}

.news-card {
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.news-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
}

.news-card .card-title a:hover {
    color: var(--bs-primary) !important;
}

.author-avatar {
    font-weight: bold;
}

.social-share a:hover {
    transform: translateY(-2px);
}

.article-navigation a:hover {
    color: var(--bs-club-green) !important;
}

@media (max-width: 768px) {
    .article-content {
        font-size: 1rem;
        line-height: 1.6;
    }
    
    .article-navigation .d-flex {
        flex-direction: column;
        text-align: center;
    }
    
    .article-navigation .bi {
        margin: 0.5rem 0;
    }
}
</style>
@endpush

@push('scripts')
<script>
// Copy to clipboard function
function copyToClipboard(text) {
    navigator.clipboard.writeText(text).then(function() {
        // Show success message
        const button = event.target.closest('button');
        const originalText = button.innerHTML;
        button.innerHTML = '<i class="bi bi-check me-1"></i>Copied!';
        button.classList.remove('btn-outline-secondary');
        button.classList.add('btn-success');
        
        setTimeout(() => {
            button.innerHTML = originalText;
            button.classList.remove('btn-success');
            button.classList.add('btn-outline-secondary');
        }, 2000);
    }).catch(function(err) {
        alert('Error copying to clipboard');
    });
}

// Newsletter subscription
document.addEventListener('DOMContentLoaded', function() {
    const newsletterForm = document.querySelector('form[action="#"]');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[type="email"]').value;
            
            if (email) {
                alert('Thank you for subscribing! You will receive our latest updates.');
                this.querySelector('input[type="email"]').value = '';
            }
        });
    }
});

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth'
            });
        }
    });
});
</script>
@endpush
