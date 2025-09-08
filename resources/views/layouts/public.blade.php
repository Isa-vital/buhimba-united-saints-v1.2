<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', config('app.name', 'Buhimba United Saints FC'))</title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="@yield('description', 'Official website of Buhimba United Saints FC - Uganda Premier League football club')">
    <meta name="keywords" content="@yield('keywords', 'Buhimba United Saints FC, Uganda Premier League, UPL, Football, Soccer')">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="@yield('og:title', config('app.name'))">
    <meta property="og:description" content="@yield('og:description', 'Official website of Buhimba United Saints FC')">
    <meta property="og:image" content="@yield('og:image', asset('images/club-logo.png'))">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter:title', config('app.name'))">
    <meta name="twitter:description" content="@yield('twitter:description', 'Official website of Buhimba United Saints FC')">
    <meta name="twitter:image" content="@yield('twitter:image', asset('images/club-logo.png'))">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <!-- Custom Styles -->
    <style>
        :root {
            /* Primary Saints Green */
            --bs-primary: #1B5E20;
            --bs-primary-rgb: 27, 94, 32;
            --bs-primary-light: #4CAF50;
            --bs-primary-dark: #0D3309;
            
            /* Professional Secondary Colors */
            --bs-secondary: #455A64;
            --bs-secondary-light: #78909C;
            --bs-secondary-dark: #263238;
            
            /* Accent Colors */
            --bs-accent: #FF9800;
            --bs-accent-light: #FFB74D;
            --bs-gold: #FFC107;
            
            /* Neutral Colors */
            --bs-light: #F8F9FA;
            --bs-light-gray: #E8F5E8;
            --bs-medium-gray: #9E9E9E;
            --bs-dark: #212529;
            
            /* Status Colors */
            --bs-success: #2E7D32;
            --bs-warning: #F57C00;
            --bs-danger: #D32F2F;
            --bs-info: #1976D2;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            color: var(--bs-dark);
            line-height: 1.6;
        }
        
        /* Navigation */
        .navbar {
            background: linear-gradient(90deg, var(--bs-primary) 0%, var(--bs-primary-light) 100%) !important;
            box-shadow: 0 2px 15px rgba(27, 94, 32, 0.1);
        }
        
        .navbar-brand {
            font-weight: 800;
            font-size: 1.5rem;
            color: white !important;
            text-shadow: 0 1px 3px rgba(0,0,0,0.2);
        }
        
        .navbar-nav .nav-link {
            color: rgba(255,255,255,0.9) !important;
            font-weight: 500;
            transition: all 0.3s ease;
            margin: 0 0.25rem;
            border-radius: 6px;
            padding: 0.5rem 0.75rem !important;
        }
        
        .navbar-nav .nav-link:hover {
            color: white !important;
            background-color: rgba(255,255,255,0.15);
            transform: translateY(-1px);
        }
        
        .dropdown-menu {
            border: none;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        
        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--bs-primary) 0%, var(--bs-primary-light) 50%, var(--bs-accent) 100%);
            background-image: url('{{ asset("images/hero-background.jpg") }}');
            background-size: cover;
            background-position: center;
            background-blend-mode: overlay;
            color: white;
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section.no-bg-image {
            background-image: none;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(27, 94, 32, 0.3);
            z-index: 1;
        }
        
        .hero-section .container {
            position: relative;
            z-index: 2;
        }
        
        .hero-logo {
            max-width: 200px;
            height: auto;
            filter: drop-shadow(0 4px 8px rgba(0,0,0,0.3));
        }
        
        /* Buttons */
        .btn-primary {
            background: linear-gradient(135deg, var(--bs-primary) 0%, var(--bs-primary-light) 100%);
            border: none;
            font-weight: 600;
            padding: 0.75rem 2rem;
            border-radius: 50px;
            box-shadow: 0 4px 15px rgba(27, 94, 32, 0.3);
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background: linear-gradient(135deg, var(--bs-primary-dark) 0%, var(--bs-primary) 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(27, 94, 32, 0.4);
        }
        
        .btn-outline-primary {
            color: var(--bs-primary);
            border: 2px solid var(--bs-primary);
            font-weight: 600;
            padding: 0.75rem 2rem;
            border-radius: 50px;
            transition: all 0.3s ease;
        }
        
        .btn-outline-primary:hover {
            background-color: var(--bs-primary);
            border-color: var(--bs-primary);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(27, 94, 32, 0.3);
        }
        
        .btn-secondary {
            background-color: var(--bs-secondary);
            border-color: var(--bs-secondary);
            color: white;
            font-weight: 600;
            border-radius: 50px;
        }
        
        .btn-secondary:hover {
            background-color: var(--bs-secondary-dark);
            border-color: var(--bs-secondary-dark);
        }
        
        /* Cards */
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            overflow: hidden;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }
        
        .card-header {
            background: linear-gradient(135deg, var(--bs-light-gray) 0%, var(--bs-light) 100%);
            border-bottom: 2px solid var(--bs-primary);
            font-weight: 600;
            color: var(--bs-primary);
        }
        
        /* Stats Cards */
        .stats-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            border-left: 5px solid var(--bs-primary);
            box-shadow: 0 5px 25px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
        }
        
        .stats-card:hover {
            transform: translateY(-5px);
            border-left-color: var(--bs-accent);
        }
        
        .stats-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--bs-primary);
            display: block;
        }
        
        .stats-label {
            color: var(--bs-secondary);
            font-weight: 500;
            text-transform: uppercase;
            font-size: 0.875rem;
            letter-spacing: 0.5px;
        }
        
        /* News Cards */
        .news-card {
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .news-card .card-img-top {
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        
        .news-card:hover .card-img-top {
            transform: scale(1.05);
        }
        
        .news-date {
            color: var(--bs-accent);
            font-weight: 600;
            font-size: 0.875rem;
        }
        
        /* Sections */
        .section-title {
            color: var(--bs-primary);
            font-weight: 700;
            margin-bottom: 3rem;
            position: relative;
            text-align: center;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, var(--bs-primary) 0%, var(--bs-accent) 100%);
            border-radius: 2px;
        }
        
        /* Utilities */
        .text-primary {
            color: var(--bs-primary) !important;
        }
        
        .text-secondary {
            color: var(--bs-secondary) !important;
        }
        
        .text-accent {
            color: var(--bs-accent) !important;
        }
        
        .bg-primary {
            background-color: var(--bs-primary) !important;
        }
        
        .bg-light-green {
            background-color: var(--bs-light-gray) !important;
        }
        
        /* Footer */
        footer {
            background: linear-gradient(135deg, var(--bs-secondary-dark) 0%, var(--bs-dark) 100%);
            color: #ffffff;
            position: relative;
        }
        
        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--bs-primary) 0%, var(--bs-accent) 100%);
        }
        
        .footer-link {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .footer-link:hover {
            color: var(--bs-primary-light) !important;
            text-decoration: underline;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-section {
                padding: 60px 0;
            }
            
            .stats-card {
                margin-bottom: 1.5rem;
            }
            
            .section-title {
                font-size: 1.75rem;
            }
        }
    </style>
    
    @stack('styles')
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                <img src="{{ asset('images/club-logo.png') }}" alt="Buhimba United Saints FC" height="40" class="me-2">
                <span class="fw-bold text-club-green">Buhimba United Saints FC</span>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Team
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('players.index') }}">Players</a></li>
                            <li><a class="dropdown-item" href="{{ route('staff.index') }}">Staff & Coaches</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Matches
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('fixtures.index') }}">Fixtures</a></li>
                            <li><a class="dropdown-item" href="{{ route('results.index') }}">Results</a></li>
                            <li><a class="dropdown-item" href="{{ route('league-table.index') }}">League Table</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('news.*') ? 'active' : '' }}" href="{{ route('news.index') }}">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('sponsors.index') ? 'active' : '' }}" href="{{ route('sponsors.index') }}">Sponsors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                    </li>
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                            <i class="bi bi-person-circle me-1"></i>Admin Login
                        </a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">
                            <i class="bi bi-speedometer2 me-1"></i>Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}" class="d-inline">
                            @csrf
                            <button type="submit" class="nav-link btn btn-link text-white p-0" style="border: none; background: none;">
                                <i class="bi bi-box-arrow-right me-1"></i>Logout
                            </button>
                        </form>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer-club mt-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5 class="fw-bold mb-3">Buhimba United Saints FC</h5>
                    <p class="mb-3">Official website of Buhimba United Saints Football Club, competing in the Uganda Premier League since our establishment.</p>
                    <div class="d-flex gap-3">
                        <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="fw-bold mb-3">Team</h6>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('players.index') }}" class="text-white-50 text-decoration-none">Players</a></li>
                        <li><a href="{{ route('staff.index') }}" class="text-white-50 text-decoration-none">Staff</a></li>
                        <li><a href="{{ route('fixtures.index') }}" class="text-white-50 text-decoration-none">Fixtures</a></li>
                        <li><a href="{{ route('results.index') }}" class="text-white-50 text-decoration-none">Results</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="fw-bold mb-3">Club</h6>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('news.index') }}" class="text-white-50 text-decoration-none">News</a></li>
                        <li><a href="{{ route('about') }}" class="text-white-50 text-decoration-none">About</a></li>
                        <li><a href="{{ route('contact') }}" class="text-white-50 text-decoration-none">Contact</a></li>
                        <li><a href="{{ route('sponsors.index') }}" class="text-white-50 text-decoration-none">Sponsors</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-4 mb-4">
                    <h6 class="fw-bold mb-3">Newsletter</h6>
                    <p class="text-white-50 mb-3">Stay updated with the latest news and match updates.</p>
                    <form class="d-flex">
                        <input type="email" class="form-control me-2" placeholder="Your email address">
                        <button class="btn btn-light" type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
            
            <hr class="my-4">
            
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0 text-white-50">&copy; {{ date('Y') }} Buhimba United Saints FC. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <small class="text-white-50">
                        <a href="#" class="text-white-50 text-decoration-none me-3">Privacy Policy</a>
                        <a href="#" class="text-white-50 text-decoration-none">Terms of Service</a>
                    </small>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JavaScript CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <!-- Newsletter Subscription Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const newsletterForm = document.getElementById('newsletter-form');
            if (newsletterForm) {
                newsletterForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    const formData = new FormData(this);
                    const email = formData.get('email');
                    
                    // Simple validation
                    if (!email || !email.includes('@')) {
                        alert('Please enter a valid email address.');
                        return;
                    }
                    
                    // Here you would typically send to your Laravel backend
                    fetch('/newsletter/subscribe', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: JSON.stringify({ email: email })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert('Thank you for subscribing to our newsletter!');
                            this.reset();
                        } else {
                            alert('There was an error. Please try again.');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Thank you for subscribing! (Demo mode)');
                        this.reset();
                    });
                });
            }
        });
    </script>

    @stack('scripts')
</body>
</html>
