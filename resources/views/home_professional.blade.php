@extends('layouts.public')

@section('title', 'Home - Buhimba United Saints FC')
@section('description', 'Official website of Buhimba United Saints FC - Uganda Premier League football club. Latest news, fixtures, results and player information.')

@section('content')

<!-- Professional Hero Section -->
<section class="hero-section position-relative overflow-hidden" style="min-height: 100vh;">
    <!-- Dynamic Background with Admin Control -->
    <div class="hero-background position-absolute w-100 h-100" style="z-index: 1;">
        <!-- Image Background with Professional Football Stadium -->
        <div class="hero-image w-100 h-100" style="
            background: linear-gradient(135deg, 
                rgba(27, 94, 32, 0.85) 0%, 
                rgba(0, 0, 0, 0.7) 30%, 
                rgba(27, 94, 32, 0.6) 70%, 
                rgba(0, 0, 0, 0.8) 100%),
                        url('{{ asset('images/hero-background.jpg') }}');
            background-size: cover;
            background-position: center center;
            background-attachment: fixed;
        "></div>
        
        <!-- Animated Overlay Pattern -->
        <div class="hero-pattern position-absolute w-100 h-100" style="
            background-image: 
                radial-gradient(circle at 20% 80%, rgba(255, 215, 0, 0.15) 0%, transparent 40%),
                radial-gradient(circle at 80% 20%, rgba(255, 255, 255, 0.08) 0%, transparent 40%),
                radial-gradient(circle at 40% 40%, rgba(27, 94, 32, 0.1) 0%, transparent 50%);
            animation: patternFloat 25s ease-in-out infinite;
        "></div>
        
        <!-- Floating Football Elements -->
        <div class="position-absolute w-100 h-100" style="z-index: 2;">
            <div class="position-absolute" style="
                top: 15%; right: 10%; width: 100px; height: 100px;
                background: rgba(255, 215, 0, 0.1);
                border: 2px solid rgba(255, 215, 0, 0.3);
                border-radius: 50%;
                animation: float 8s ease-in-out infinite;
            "></div>
            <div class="position-absolute" style="
                bottom: 25%; left: 8%; width: 60px; height: 60px;
                background: rgba(255, 255, 255, 0.05);
                border: 2px solid rgba(255, 255, 255, 0.2);
                transform: rotate(45deg);
                animation: float 10s ease-in-out infinite reverse;
            "></div>
            <div class="position-absolute" style="
                top: 60%; right: 20%; width: 40px; height: 40px;
                background: rgba(27, 94, 32, 0.2);
                border-radius: 50%;
                animation: float 6s ease-in-out infinite;
            "></div>
        </div>
    </div>
    
    <div class="container-fluid px-0 position-relative" style="z-index: 10;">
        <div class="row g-0 min-vh-100">
            <!-- Main Hero Content -->
            <div class="col-lg-8 d-flex align-items-center">
                <div class="hero-content p-4 p-lg-5 w-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-11 col-xl-10">
                                <!-- Club Identity -->
                                <div class="club-identity mb-5" style="animation: slideInLeft 1.2s ease-out;">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="position-relative me-4">
                                            <div class="club-logo-container" style="
                                                width: 100px; height: 100px;
                                                background: linear-gradient(135deg, rgba(255, 255, 255, 0.15), rgba(255, 215, 0, 0.2));
                                                border-radius: 50%;
                                                display: flex;
                                                align-items: center;
                                                justify-content: center;
                                                backdrop-filter: blur(10px);
                                                border: 3px solid rgba(255, 215, 0, 0.3);
                                                box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
                                            ">
                                                <img src="{{ asset('images/logo.png') }}" alt="Buhimba United Saints FC" 
                                                     class="club-logo" style="height: 70px; filter: drop-shadow(2px 2px 4px rgba(0,0,0,0.3));">
                                            </div>
                                            <!-- Pulsing Ring Animation -->
                                            <div class="position-absolute top-0 start-0 w-100 h-100" style="
                                                border: 2px solid rgba(255, 215, 0, 0.4);
                                                border-radius: 50%;
                                                animation: pulse 3s ease-in-out infinite;
                                            "></div>
                                        </div>
                                        <div>
                                            <h1 class="club-name mb-1" style="
                                                font-size: 3.5rem;
                                                font-weight: 900;
                                                color: #ffffff;
                                                text-shadow: 3px 3px 8px rgba(0,0,0,0.8);
                                                line-height: 1;
                                                font-family: 'Arial Black', Arial, sans-serif;
                                                letter-spacing: -1px;
                                            ">BUHIMBA UNITED</h1>
                                            <h2 class="club-subtitle mb-0" style="
                                                font-size: 2.2rem;
                                                font-weight: 700;
                                                background: linear-gradient(135deg, #ffd700, #ffb300);
                                                -webkit-background-clip: text;
                                                -webkit-text-fill-color: transparent;
                                                background-clip: text;
                                                text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
                                                letter-spacing: 1px;
                                            ">SAINTS FC</h2>
                                        </div>
                                    </div>
                                    
                                    <!-- Enhanced Club Tagline -->
                                    <div class="club-tagline-container mb-4">
                                        <div class="d-flex align-items-center">
                                            <div class="tagline-separator me-3" style="
                                                width: 60px; height: 3px;
                                                background: linear-gradient(90deg, #ffd700, #ffb300);
                                                border-radius: 2px;
                                            "></div>
                                            <p class="club-tagline mb-0" style="
                                                color: #f8f9fa; 
                                                text-shadow: 1px 1px 2px rgba(0,0,0,0.7);
                                                font-size: 1.1rem;
                                                font-weight: 600;
                                                letter-spacing: 2px;
                                                text-transform: uppercase;
                                            ">One Team • One Dream</p>
                                            <div class="tagline-separator ms-3" style="
                                                width: 60px; height: 3px;
                                                background: linear-gradient(90deg, #ffb300, #ffd700);
                                                border-radius: 2px;
                                            "></div>
                                        </div>
                                    </div>
                                    
                                    <!-- Club Stats Summary -->
                                    <div class="club-stats-summary">
                                        <div class="row g-3">
                                            <div class="col-4">
                                                <div class="stat-mini text-center" style="
                                                    background: rgba(255, 255, 255, 0.1);
                                                    border-radius: 15px;
                                                    padding: 1rem 0.5rem;
                                                    backdrop-filter: blur(10px);
                                                    border: 1px solid rgba(255, 255, 255, 0.2);
                                                ">
                                                    <div class="stat-number" style="
                                                        font-size: 1.8rem;
                                                        font-weight: 900;
                                                        color: #ffd700;
                                                        text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
                                                    ">1</div>
                                                    <div class="stat-label" style="
                                                        font-size: 0.8rem;
                                                        color: #f8f9fa;
                                                        text-transform: uppercase;
                                                        font-weight: 600;
                                                        letter-spacing: 1px;
                                                    ">Trophies</div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="stat-mini text-center" style="
                                                    background: rgba(255, 255, 255, 0.1);
                                                    border-radius: 15px;
                                                    padding: 1rem 0.5rem;
                                                    backdrop-filter: blur(10px);
                                                    border: 1px solid rgba(255, 255, 255, 0.2);
                                                ">
                                                    <div class="stat-number" style="
                                                        font-size: 1.8rem;
                                                        font-weight: 900;
                                                        color: #ffd700;
                                                        text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
                                                    ">{{ $totalPlayers }}</div>
                                                    <div class="stat-label" style="
                                                        font-size: 0.8rem;
                                                        color: #f8f9fa;
                                                        text-transform: uppercase;
                                                        font-weight: 600;
                                                        letter-spacing: 1px;
                                                    ">Players</div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="stat-mini text-center" style="
                                                    background: rgba(255, 255, 255, 0.1);
                                                    border-radius: 15px;
                                                    padding: 1rem 0.5rem;
                                                    backdrop-filter: blur(10px);
                                                    border: 1px solid rgba(255, 255, 255, 0.2);
                                                ">
                                                    <div class="stat-number" style="
                                                        font-size: 1.8rem;
                                                        font-weight: 900;
                                                        color: #ffd700;
                                                        text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
                                                    ">2018</div>
                                                    <div class="stat-label" style="
                                                        font-size: 0.8rem;
                                                        color: #f8f9fa;
                                                        text-transform: uppercase;
                                                        font-weight: 600;
                                                        letter-spacing: 1px;
                                                    ">Founded</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Enhanced Match Info Cards -->
                                <div class="match-info-cards mb-5" style="animation: slideInUp 1.2s ease-out 0.3s both;">
                                    <div class="row g-4">
                                        <!-- Next Match Card -->
                                        <div class="col-md-6">
                                            @if($nextFixture)
                                            <div class="info-card next-match-card" style="
                                                background: linear-gradient(135deg, rgba(255, 255, 255, 0.95), rgba(248, 249, 250, 0.95));
                                                backdrop-filter: blur(15px);
                                                border: 1px solid rgba(255, 255, 255, 0.3);
                                                border-radius: 20px;
                                                box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
                                                overflow: hidden;
                                                transition: all 0.3s ease;
                                            " onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 20px 45px rgba(0, 0, 0, 0.15)'"
                                               onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 15px 35px rgba(0, 0, 0, 0.1)'">
                                                <div class="card-header border-0 py-3" style="
                                                    background: linear-gradient(135deg, #1b5e20, #2e7d32);
                                                ">
                                                    <small class="fw-bold d-flex align-items-center" style="
                                                        color: #ffffff;
                                                        text-transform: uppercase;
                                                        letter-spacing: 1px;
                                                        font-size: 0.85rem;
                                                    ">
                                                        <i class="bi bi-clock me-2" style="color: #ffd700;"></i>NEXT MATCH
                                                    </small>
                                                </div>
                                                <div class="card-body p-4">
                                                    <div class="match-teams mb-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="team home-team text-center">
                                                                <small class="text-muted fw-semibold" style="font-size: 0.75rem; text-transform: uppercase;">HOME</small>
                                                                <div class="fw-bold mt-1" style="color: #1b5e20; font-size: 0.9rem;">{{ $nextFixture->home_team }}</div>
                                                            </div>
                                                            <div class="vs-badge">
                                                                <span class="badge" style="
                                                                    background: linear-gradient(135deg, #1b5e20, #2e7d32);
                                                                    color: #ffffff;
                                                                    font-size: 0.8rem;
                                                                    padding: 0.5rem 1rem;
                                                                    border-radius: 25px;
                                                                ">VS</span>
                                                            </div>
                                                            <div class="team away-team text-center">
                                                                <small class="text-muted fw-semibold" style="font-size: 0.75rem; text-transform: uppercase;">AWAY</small>
                                                                <div class="fw-bold mt-1" style="color: #1b5e20; font-size: 0.9rem;">{{ $nextFixture->away_team }}</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="match-details">
                                                        <div class="d-flex justify-content-between mb-2" style="font-size: 0.85rem;">
                                                            <span class="fw-semibold" style="color: #495057;">{{ $nextFixture->match_date->format('M d, Y') }}</span>
                                                            <span class="fw-bold" style="color: #1b5e20;">{{ $nextFixture->match_date->format('H:i') }}</span>
                                                        </div>
                                                        <div class="mb-2" style="font-size: 0.8rem; color: #6c757d;">
                                                            <i class="bi bi-geo-alt me-1" style="color: #ffd700;"></i>{{ $nextFixture->venue }}
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div style="font-size: 0.8rem; color: #6c757d;">
                                                                <i class="bi bi-trophy me-1" style="color: #ffd700;"></i>{{ $nextFixture->competition }}
                                                            </div>
                                                            <a href="{{ route('fixtures.index') }}" class="btn btn-sm" style="
                                                                background: linear-gradient(135deg, #ffd700, #ffb300);
                                                                color: #1b5e20;
                                                                border: none;
                                                                border-radius: 20px;
                                                                font-weight: 600;
                                                                font-size: 0.75rem;
                                                                padding: 0.4rem 1rem;
                                                            ">Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @else
                                            <div class="info-card next-match-card" style="
                                                background: linear-gradient(135deg, rgba(255, 255, 255, 0.95), rgba(248, 249, 250, 0.95));
                                                backdrop-filter: blur(15px);
                                                border: 1px solid rgba(255, 255, 255, 0.3);
                                                border-radius: 20px;
                                                box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
                                            ">
                                                <div class="card-header border-0 py-3" style="
                                                    background: linear-gradient(135deg, #1b5e20, #2e7d32);
                                                ">
                                                    <small class="fw-bold d-flex align-items-center" style="
                                                        color: #ffffff;
                                                        text-transform: uppercase;
                                                        letter-spacing: 1px;
                                                        font-size: 0.85rem;
                                                    ">
                                                        <i class="bi bi-clock me-2" style="color: #ffd700;"></i>NEXT MATCH
                                                    </small>
                                                </div>
                                                <div class="card-body text-center py-5">
                                                    <i class="bi bi-calendar-x fs-1 mb-3" style="color: #6c757d;"></i>
                                                    <p class="text-muted mb-0 fw-semibold">No upcoming fixtures</p>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                        
                                        <!-- Latest Result Card -->
                                        <div class="col-md-6">
                                            @if($latestResult)
                                            <div class="info-card latest-result-card" style="
                                                background: linear-gradient(135deg, rgba(255, 255, 255, 0.95), rgba(248, 249, 250, 0.95));
                                                backdrop-filter: blur(15px);
                                                border: 1px solid rgba(255, 255, 255, 0.3);
                                                border-radius: 20px;
                                                box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
                                                overflow: hidden;
                                                transition: all 0.3s ease;
                                            " onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 20px 45px rgba(0, 0, 0, 0.15)'"
                                               onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 15px 35px rgba(0, 0, 0, 0.1)'">
                                                <div class="card-header border-0 py-3" style="
                                                    background: linear-gradient(135deg, #28a745, #20c997);
                                                ">
                                                    <small class="fw-bold d-flex align-items-center" style="
                                                        color: #ffffff;
                                                        text-transform: uppercase;
                                                        letter-spacing: 1px;
                                                        font-size: 0.85rem;
                                                    ">
                                                        <i class="bi bi-check-circle me-2" style="color: #ffd700;"></i>LATEST RESULT
                                                    </small>
                                                </div>
                                                <div class="card-body p-4">
                                                    <div class="match-teams mb-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="team">
                                                                <div class="fw-bold" style="color: #1b5e20; font-size: 0.9rem;">{{ $latestResult->home_team }}</div>
                                                            </div>
                                                            <div class="score-display">
                                                                <span class="score-number fw-bold" style="
                                                                    font-size: 1.8rem;
                                                                    color: #1b5e20;
                                                                    text-shadow: 1px 1px 3px rgba(0,0,0,0.1);
                                                                ">{{ $latestResult->home_goals }}</span>
                                                                <span class="score-separator mx-2" style="color: #6c757d;">-</span>
                                                                <span class="score-number fw-bold" style="
                                                                    font-size: 1.8rem;
                                                                    color: #1b5e20;
                                                                    text-shadow: 1px 1px 3px rgba(0,0,0,0.1);
                                                                ">{{ $latestResult->away_goals }}</span>
                                                            </div>
                                                            <div class="team text-end">
                                                                <div class="fw-bold" style="color: #1b5e20; font-size: 0.9rem;">{{ $latestResult->away_team }}</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="match-details">
                                                        <div class="text-center mb-3">
                                                            <small class="badge" style="
                                                                background: linear-gradient(135deg, #28a745, #20c997);
                                                                color: #ffffff;
                                                                font-size: 0.75rem;
                                                                padding: 0.4rem 1rem;
                                                                border-radius: 20px;
                                                            ">FINAL</small>
                                                        </div>
                                                        <div class="text-center mb-3" style="font-size: 0.85rem; color: #6c757d; font-weight: 500;">
                                                            {{ $latestResult->match_date->format('M d, Y') }}
                                                        </div>
                                                        <div class="text-center">
                                                            <a href="{{ route('results.index') }}" class="btn btn-sm" style="
                                                                background: linear-gradient(135deg, #ffd700, #ffb300);
                                                                color: #1b5e20;
                                                                border: none;
                                                                border-radius: 20px;
                                                                font-weight: 600;
                                                                font-size: 0.75rem;
                                                                padding: 0.4rem 1.2rem;
                                                            ">
                                                                Match Report
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @else
                                            <div class="info-card latest-result-card" style="
                                                background: linear-gradient(135deg, rgba(255, 255, 255, 0.95), rgba(248, 249, 250, 0.95));
                                                backdrop-filter: blur(15px);
                                                border: 1px solid rgba(255, 255, 255, 0.3);
                                                border-radius: 20px;
                                                box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
                                            ">
                                                <div class="card-header border-0 py-3" style="
                                                    background: linear-gradient(135deg, #28a745, #20c997);
                                                ">
                                                    <small class="fw-bold d-flex align-items-center" style="
                                                        color: #ffffff;
                                                        text-transform: uppercase;
                                                        letter-spacing: 1px;
                                                        font-size: 0.85rem;
                                                    ">
                                                        <i class="bi bi-check-circle me-2" style="color: #ffd700;"></i>LATEST RESULT
                                                    </small>
                                                </div>
                                                <div class="card-body text-center py-5">
                                                    <i class="bi bi-trophy fs-1 mb-3" style="color: #6c757d;"></i>
                                                    <p class="text-muted mb-0 fw-semibold">No recent results</p>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Enhanced Primary CTAs -->
                                <div class="hero-cta-section" style="animation: slideInUp 1.2s ease-out 0.6s both;">
                                    <div class="row g-3">
                                        <div class="col-md-4">
                                            <a href="{{ route('fixtures.index') }}" class="btn btn-lg w-100 cta-button position-relative overflow-hidden" style="
                                                background: linear-gradient(135deg, #1b5e20, #2e7d32);
                                                color: #ffffff;
                                                border: none;
                                                border-radius: 15px;
                                                font-weight: 700;
                                                text-transform: uppercase;
                                                letter-spacing: 0.5px;
                                                padding: 1rem 1.5rem;
                                                box-shadow: 0 10px 25px rgba(27, 94, 32, 0.3);
                                                transition: all 0.3s ease;
                                                backdrop-filter: blur(10px);
                                                border: 2px solid rgba(255, 255, 255, 0.1);
                                            " onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 15px 35px rgba(27, 94, 32, 0.4)'; this.style.background='linear-gradient(135deg, #2e7d32, #388e3c)'"
                                               onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 25px rgba(27, 94, 32, 0.3)'; this.style.background='linear-gradient(135deg, #1b5e20, #2e7d32)'">
                                                <i class="bi bi-calendar-event me-2"></i>
                                                <span>View Fixtures</span>
                                                <div class="position-absolute top-0 start-0 w-100 h-100" style="
                                                    background: linear-gradient(45deg, transparent 30%, rgba(255,255,255,0.1) 50%, transparent 70%);
                                                    transform: translateX(-100%);
                                                    transition: transform 0.6s ease;
                                                " onmouseover="this.style.transform='translateX(100%)'"></div>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="#" class="btn btn-lg w-100 cta-button position-relative overflow-hidden" style="
                                                background: linear-gradient(135deg, #ffd700, #ffb300);
                                                color: #1b5e20;
                                                border: none;
                                                border-radius: 15px;
                                                font-weight: 700;
                                                text-transform: uppercase;
                                                letter-spacing: 0.5px;
                                                padding: 1rem 1.5rem;
                                                box-shadow: 0 10px 25px rgba(255, 215, 0, 0.3);
                                                transition: all 0.3s ease;
                                                backdrop-filter: blur(10px);
                                                border: 2px solid rgba(255, 255, 255, 0.2);
                                            " onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 15px 35px rgba(255, 215, 0, 0.4)'; this.style.background='linear-gradient(135deg, #ffb300, #ffc107)'"
                                               onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 25px rgba(255, 215, 0, 0.3)'; this.style.background='linear-gradient(135deg, #ffd700, #ffb300)'">
                                                <i class="bi bi-ticket-perforated me-2"></i>
                                                <span>Buy Tickets</span>
                                                <div class="position-absolute top-0 start-0 w-100 h-100" style="
                                                    background: linear-gradient(45deg, transparent 30%, rgba(255,255,255,0.2) 50%, transparent 70%);
                                                    transform: translateX(-100%);
                                                    transition: transform 0.6s ease;
                                                " onmouseover="this.style.transform='translateX(100%)'"></div>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="{{ route('news.index') }}" class="btn btn-lg w-100 cta-button position-relative overflow-hidden" style="
                                                background: rgba(255, 255, 255, 0.15);
                                                color: #ffffff;
                                                border: 2px solid rgba(255, 255, 255, 0.3);
                                                border-radius: 15px;
                                                font-weight: 700;
                                                text-transform: uppercase;
                                                letter-spacing: 0.5px;
                                                padding: 1rem 1.5rem;
                                                backdrop-filter: blur(15px);
                                                transition: all 0.3s ease;
                                            " onmouseover="this.style.transform='translateY(-3px)'; this.style.background='rgba(255, 255, 255, 0.25)'; this.style.borderColor='rgba(255, 255, 255, 0.5)'"
                                               onmouseout="this.style.transform='translateY(0)'; this.style.background='rgba(255, 255, 255, 0.15)'; this.style.borderColor='rgba(255, 255, 255, 0.3)'">
                                                <i class="bi bi-newspaper me-2"></i>
                                                <span>Latest News</span>
                                                <div class="position-absolute top-0 start-0 w-100 h-100" style="
                                                    background: linear-gradient(45deg, transparent 30%, rgba(255,255,255,0.1) 50%, transparent 70%);
                                                    transform: translateX(-100%);
                                                    transition: transform 0.6s ease;
                                                " onmouseover="this.style.transform='translateX(100%)'"></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--most trending news -->
            <div class="col-lg-4 d-none d-lg-flex align-items-center">
                <div class="stats-panel w-100 p-4 position-relative" style="animation: slideInRight 1.2s ease-out 0.4s both;">
                    <div class="stats-container" style="
                        background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.05));
                        backdrop-filter: blur(20px);
                        border: 1px solid rgba(255, 255, 255, 0.2);
                        border-radius: 25px;
                        padding: 2rem;
                        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
                    ">
                        <div class="text-center mb-4">
                            <h3 class="stats-title mb-2" style="
                                color: #ffffff; 
                                text-shadow: 2px 2px 4px rgba(0,0,0,0.8);
                                font-size: 1.8rem;
                                font-weight: 800;
                            ">Season Stats</h3>
                        
                        
                        <div class="stat-item mb-4 d-flex align-items-center" style="
                            background: rgba(255, 255, 255, 0.1);
                            border-radius: 15px;
                            padding: 1.2rem;
                            transition: all 0.3s ease;
                        " onmouseover="this.style.background='rgba(255, 255, 255, 0.15)'; this.style.transform='translateX(5px)'"
                           onmouseout="this.style.background='rgba(255, 255, 255, 0.1)'; this.style.transform='translateX(0)'">
                            <div class="stat-icon me-3" style="
                                width: 50px; height: 50px;
                                background: linear-gradient(135deg, #007bff, #0056b3);
                                border-radius: 50%;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                            ">
                               <!--write here the most trending news, pull the latest published-->
                               <!-- publish here the latest news --->
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Enhanced Scroll Indicator -->
    <div class="scroll-indicator position-absolute bottom-0 start-50 translate-middle-x mb-4" style="z-index: 10;">
        <div class="scroll-arrow text-center" style="animation: bounce 2s infinite;">
            <div class="scroll-text mb-2" style="
                color: #ffffff;
                font-size: 0.8rem;
                font-weight: 600;
                text-transform: uppercase;
                letter-spacing: 1px;
                opacity: 0.8;
            ">Explore More</div>
            <div class="scroll-icon" style="
                width: 40px;
                height: 40px;
                background: rgba(255, 255, 255, 0.1);
                border: 2px solid rgba(255, 255, 255, 0.3);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0 auto;
                backdrop-filter: blur(10px);
                transition: all 0.3s ease;
            " onmouseover="this.style.background='rgba(255, 215, 0, 0.2)'; this.style.borderColor='rgba(255, 215, 0, 0.5)'"
               onmouseout="this.style.background='rgba(255, 255, 255, 0.1)'; this.style.borderColor='rgba(255, 255, 255, 0.3)'">
                <i class="bi bi-chevron-down" style="color: #ffffff; font-size: 1.2rem;"></i>
            </div>
        </div>
    </div>
</section>

<!-- Sponsors Carousel Section -->
@if($sponsors->count() > 0)
<section class="sponsors-carousel-section py-4 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3 text-center text-md-start mb-3 mb-md-0">
                <h5 class="sponsors-title text-muted mb-0">
                    <i class="bi bi-handshake me-2"></i>Our Partners
                </h5>
            </div>
            <div class="col-md-9">
                <div class="sponsors-slider">
                    <div class="sponsors-track d-flex align-items-center">
                        @foreach($sponsors as $sponsor)
                        <div class="sponsor-slide mx-3">
                            @if($sponsor->logo)
                                <img src="{{ asset('storage/' . $sponsor->logo) }}" 
                                     alt="{{ $sponsor->name }}" 
                                     class="sponsor-logo"
                                     style="max-height: 60px; filter: grayscale(100%); opacity: 0.7;">
                            @else
                                <div class="sponsor-placeholder">
                                    <span class="sponsor-name">{{ $sponsor->name }}</span>
                                </div>
                            @endif
                        </div>
                        @endforeach
                        
                        <!-- Duplicate for seamless loop -->
                        @foreach($sponsors as $sponsor)
                        <div class="sponsor-slide mx-3">
                            @if($sponsor->logo)
                                <img src="{{ asset('storage/' . $sponsor->logo) }}" 
                                     alt="{{ $sponsor->name }}" 
                                     class="sponsor-logo"
                                     style="max-height: 60px; filter: grayscale(100%); opacity: 0.7;">
                            @else
                                <div class="sponsor-placeholder">
                                    <span class="sponsor-name">{{ $sponsor->name }}</span>
                                </div>
                            @endif
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

<!-- 2. Next Match & Latest Result Section -->
<section class="matches-section py-5 bg-light">
    <div class="container">
        <div class="row g-4">
            <!-- Next Match Card -->
            <div class="col-lg-6">
                @if($nextFixture)
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0">
                            <i class="bi bi-calendar-plus me-2"></i>Next Match
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="match-teams text-center mb-4">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <div class="team-info">
                                        <img src="{{ asset('images/logo.png') }}" alt="Buhimba United Saints" class="img-fluid mb-2" style="max-height: 50px;">
                                        <h6 class="fw-bold">{{ $nextFixture->home_team }}</h6>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="vs-section">
                                        <span class="badge bg-secondary fs-6">VS</span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="team-info">
                                        <div class="opponent-logo bg-secondary text-white rounded-circle mx-auto mb-2 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                            {{ substr($nextFixture->away_team, 0, 2) }}
                                        </div>
                                        <h6 class="fw-bold">{{ $nextFixture->away_team }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="match-details">
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <i class="bi bi-calendar3 text-primary me-2"></i>
                                    <strong>Date:</strong> {{ $nextFixture->match_date->format('l, F j, Y') }}
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-clock text-primary me-2"></i>
                                    <strong>Kickoff:</strong> {{ $nextFixture->match_date->format('g:i A') }}
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-geo-alt text-primary me-2"></i>
                                    <strong>Venue:</strong> {{ $nextFixture->venue }}
                                </li>
                                <li class="mb-0">
                                    <i class="bi bi-trophy text-primary me-2"></i>
                                    <strong>Competition:</strong> {{ $nextFixture->competition }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @else
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0">
                            <i class="bi bi-calendar-plus me-2"></i>Next Match
                        </h5>
                    </div>
                    <div class="card-body text-center">
                        <i class="bi bi-calendar-x text-muted" style="font-size: 3rem;"></i>
                        <p class="text-muted mt-3">No upcoming fixtures scheduled</p>
                    </div>
                </div>
                @endif
            </div>
            
            <!-- Latest Result Card -->
            <div class="col-lg-6">
                @if($latestResult)
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-header bg-success text-white">
                        <h5 class="card-title mb-0">
                            <i class="bi bi-check-circle me-2"></i>Latest Result
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="match-teams text-center mb-4">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <div class="team-info">
                                        <img src="{{ asset('images/logo.png') }}" alt="Buhimba United Saints" class="img-fluid mb-2" style="max-height: 50px;">
                                        <h6 class="fw-bold">{{ $latestResult->home_team }}</h6>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="score-section">
                                        <h2 class="fw-bold text-primary mb-0">{{ $latestResult->home_goals }} - {{ $latestResult->away_goals }}</h2>
                                        <small class="text-muted">FINAL</small>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="team-info">
                                        <div class="opponent-logo bg-secondary text-white rounded-circle mx-auto mb-2 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                            {{ substr($latestResult->away_team, 0, 2) }}
                                        </div>
                                        <h6 class="fw-bold">{{ $latestResult->away_team }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="match-details">
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <i class="bi bi-calendar3 text-success me-2"></i>
                                    <strong>Date:</strong> {{ $latestResult->match_date->format('F j, Y') }}
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-geo-alt text-success me-2"></i>
                                    <strong>Venue:</strong> {{ $latestResult->venue }}
                                </li>
                                <li class="mb-0">
                                    <i class="bi bi-trophy text-success me-2"></i>
                                    <strong>Competition:</strong> {{ $latestResult->competition }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @else
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-header bg-success text-white">
                        <h5 class="card-title mb-0">
                            <i class="bi bi-check-circle me-2"></i>Latest Result
                        </h5>
                    </div>
                    <div class="card-body text-center">
                        <i class="bi bi-trophy text-muted" style="font-size: 3rem;"></i>
                        <p class="text-muted mt-3">No recent results available</p>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

<!-- 3. News Highlights Section -->
@if($featuredNews->count() > 0)
<section class="news-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="display-4 fw-bold text-primary mb-3">Latest News</h2>
                <p class="lead text-muted">Stay up to date with the latest happenings at the club</p>
            </div>
        </div>
        
        <div class="row g-4">
            @foreach($featuredNews->take(3) as $article)
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm border-0 news-card">
                    <div class="card-img-wrapper position-relative" style="height: 250px; overflow: hidden;">
                        @if($article->featured_image)
                            <img src="{{ asset('storage/' . $article->featured_image) }}" class="card-img-top h-100 w-100 img-fluid" style="object-fit: cover;" alt="{{ $article->title }}">
                        @else
                            <div class="placeholder-img bg-light d-flex align-items-center justify-content-center h-100">
                                <i class="bi bi-newspaper text-muted" style="font-size: 3rem;"></i>
                            </div>
                        @endif
                        <div class="news-overlay position-absolute bottom-0 start-0 end-0 bg-gradient" style="background: linear-gradient(transparent, rgba(0,0,0,0.7)); height: 50px;"></div>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <div class="news-meta mb-2">
                            <small class="text-muted">
                                <i class="bi bi-calendar3 me-1"></i>{{ $article->published_at->format('M j, Y') }}
                            </small>
                        </div>
                        <h5 class="card-title fw-bold">{{ Str::limit($article->title, 60) }}</h5>
                        <p class="card-text text-muted flex-grow-1">{{ Str::limit(strip_tags($article->content), 120) }}</p>
                        <a href="{{ route('news.show', $article->slug) }}" class="btn btn-outline-primary btn-sm mt-auto">
                            Read More <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="text-center mt-5">
            <a href="{{ route('news.index') }}" class="btn btn-primary btn-lg">
                <i class="bi bi-newspaper me-2"></i>View All News
            </a>
        </div>
    </div>
</section>
@endif

<!-- 4. Player Spotlight Section -->
<section class="players-section py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="display-4 fw-bold text-primary mb-3">Player Spotlight</h2>
                <p class="lead text-muted">Meet our star players making the difference on the pitch</p>
            </div>
        </div>
        
        @if($keyPlayers->count() > 0)
        <div id="playerCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach($keyPlayers->chunk(3) as $index => $chunk)
                <button type="button" data-bs-target="#playerCarousel" data-bs-slide-to="{{ $index }}" 
                        class="{{ $index === 0 ? 'active' : '' }}" aria-label="Slide {{ $index + 1 }}"></button>
                @endforeach
            </div>
            
            <div class="carousel-inner">
                @foreach($keyPlayers->chunk(3) as $index => $playerChunk)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <div class="row g-4">
                        @foreach($playerChunk as $player)
                        <div class="col-lg-4">
                            <div class="card player-card h-100 text-center shadow-sm border-0">
                                <div class="card-body p-4">
                                    <div class="player-image mb-3">
                                        @if($player->image)
                                            <img src="{{ asset('storage/' . $player->image) }}" class="rounded-circle img-fluid" 
                                                 style="width: 120px; height: 120px; object-fit: cover;" alt="{{ $player->name }}">
                                        @else
                                            <div class="player-placeholder bg-primary text-white rounded-circle mx-auto d-flex align-items-center justify-content-center" 
                                                 style="width: 120px; height: 120px; font-size: 2rem;">
                                                {{ substr($player->name, 0, 1) }}
                                            </div>
                                        @endif
                                    </div>
                                    <h5 class="fw-bold text-primary">{{ $player->name }}</h5>
                                    <p class="text-muted mb-2">{{ $player->position }}</p>
                                    <div class="player-number mb-3">
                                        <span class="badge bg-primary fs-6">#{{ $player->shirt_number }}</span>
                                    </div>
                                    <div class="player-stats">
                                        <div class="row text-center">
                                            <div class="col-4">
                                                <div class="stat-item">
                                                    <h6 class="fw-bold text-success mb-0">{{ $player->goals }}</h6>
                                                    <small class="text-muted">Goals</small>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="stat-item">
                                                    <h6 class="fw-bold text-info mb-0">{{ $player->assists }}</h6>
                                                    <small class="text-muted">Assists</small>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="stat-item">
                                                    <h6 class="fw-bold text-warning mb-0">{{ $player->appearances }}</h6>
                                                    <small class="text-muted">Apps</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
            
            <button class="carousel-control-prev" type="button" data-bs-target="#playerCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#playerCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        @else
        <div class="text-center">
            <i class="bi bi-people text-muted" style="font-size: 4rem;"></i>
            <p class="text-muted mt-3">No featured players available</p>
        </div>
        @endif
        
        <div class="text-center mt-5">
            <a href="{{ route('players.index') }}" class="btn btn-primary btn-lg">
                <i class="bi bi-people me-2"></i>View Full Squad
            </a>
        </div>
    </div>
</section>

<!-- 6. Fan Engagement Section -->
<section class="fan-engagement-section py-5 bg-primary text-white">
    <div class="container">
        <div class="row">
            <!-- Newsletter Subscription -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="newsletter-section">
                    <h3 class="fw-bold mb-3">
                        <i class="bi bi-envelope me-2"></i>Stay Connected
                    </h3>
                    <p class="mb-4">Get the latest news, match updates, and exclusive content delivered to your inbox.</p>
                    
                    <form id="newsletterForm" action="{{ route('newsletter.subscribe') }}" method="POST" class="row g-2">
                        @csrf
                        <div class="col-8">
                            <input type="email" class="form-control form-control-lg" name="email" 
                                   placeholder="Enter your email" required>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-warning btn-lg w-100 fw-bold">
                                Subscribe
                            </button>
                        </div>
                    </form>
                    
                    <small class="text-white-50 mt-2 d-block">
                        <i class="bi bi-shield-check me-1"></i>We respect your privacy. Unsubscribe anytime.
                    </small>
                </div>
            </div>
            
            <!-- Social Media -->
            <div class="col-lg-6">
                <div class="social-media-section">
                    <h3 class="fw-bold mb-3">
                        <i class="bi bi-share me-2"></i>Follow Us
                    </h3>
                    <p class="mb-4">Connect with us on social media for live updates and behind-the-scenes content.</p>
                    
                    <div class="social-icons">
                        <a href="#" class="btn btn-outline-light btn-lg me-3 mb-2" target="_blank">
                            <i class="bi bi-facebook"></i>
                            <span class="d-none d-sm-inline ms-2">Facebook</span>
                        </a>
                        <a href="#" class="btn btn-outline-light btn-lg me-3 mb-2" target="_blank">
                            <i class="bi bi-instagram"></i>
                            <span class="d-none d-sm-inline ms-2">Instagram</span>
                        </a>
                        <a href="#" class="btn btn-outline-light btn-lg me-3 mb-2" target="_blank">
                            <i class="bi bi-twitter-x"></i>
                            <span class="d-none d-sm-inline ms-2">Twitter/X</span>
                        </a>
                        <a href="#" class="btn btn-outline-light btn-lg mb-2" target="_blank">
                            <i class="bi bi-youtube"></i>
                            <span class="d-none d-sm-inline ms-2">YouTube</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Professional Hero Section JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Newsletter subscription form
    const newsletterForm = document.getElementById('newsletterForm');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const submitButton = this.querySelector('button[type="submit"]');
            const originalText = submitButton.innerHTML;
            
            submitButton.innerHTML = '<i class="bi bi-hourglass-split me-2"></i>Subscribing...';
            submitButton.disabled = true;
            
            try {
                const response = await fetch('{{ route("newsletter.subscribe") }}', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                });
                
                const result = await response.json();
                
                if (result.success) {
                    alert('Thank you for subscribing!');
                    newsletterForm.reset();
                } else {
                    alert(result.message || 'Subscription failed. Please try again.');
                }
                
            } catch (error) {
                alert('Network error. Please try again later.');
            } finally {
                submitButton.innerHTML = originalText;
                submitButton.disabled = false;
            }
        });
    }
    
    // Sponsors carousel auto-scroll
    const sponsorsTrack = document.querySelector('.sponsors-track');
    if (sponsorsTrack) {
        let scrollPosition = 0;
        const scrollSpeed = 1;
        
        function autoScroll() {
            scrollPosition += scrollSpeed;
            sponsorsTrack.style.transform = `translateX(-${scrollPosition}px)`;
            
            // Reset position when fully scrolled
            if (scrollPosition >= sponsorsTrack.scrollWidth / 2) {
                scrollPosition = 0;
            }
        }
        
        setInterval(autoScroll, 50);
        
        // Pause on hover
        sponsorsTrack.addEventListener('mouseenter', () => clearInterval(autoScroll));
        sponsorsTrack.addEventListener('mouseleave', () => setInterval(autoScroll, 50));
    }
    
    // CTA Button Hover Effects
    document.querySelectorAll('.cta-button').forEach(button => {
        button.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-3px)';
        });
        
        button.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
    
    // Smooth Scroll for Scroll Indicator
    const scrollIndicator = document.querySelector('.scroll-indicator');
    if (scrollIndicator) {
        scrollIndicator.addEventListener('click', function() {
            const nextSection = document.querySelector('.sponsors-carousel-section');
            if (nextSection) {
                nextSection.scrollIntoView({ behavior: 'smooth' });
            }
        });
    }
    
    // Pattern Float Animation
    const heroPattern = document.querySelector('.hero-pattern');
    if (heroPattern) {
        let angle = 0;
        setInterval(() => {
            angle += 0.5;
            heroPattern.style.backgroundPosition = `${Math.sin(angle) * 10}px ${Math.cos(angle) * 10}px`;
        }, 100);
    }
});
</script>

<!-- Professional Hero Section CSS -->
<style>
/* Professional Hero Section Styles */
.hero-section {
    min-height: 100vh;
    position: relative;
}

.hero-background {
    z-index: 1;
}

.hero-content {
    position: relative;
    z-index: 10;
}

.club-logo {
    transition: transform 0.3s ease;
}

.club-logo:hover {
    transform: scale(1.1);
}

.club-name {
    font-size: 2.5rem;
    font-weight: 800;
    letter-spacing: 2px;
}

.club-subtitle {
    font-size: 2rem;
    font-weight: 700;
    letter-spacing: 1px;
}

.club-tagline {
    font-size: 1.1rem;
    letter-spacing: 1px;
}

/* Info Cards */
.info-card {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(10px);
    border-radius: 15px;
    padding: 0;
    border: 1px solid rgba(255, 255, 255, 0.2);
    transition: all 0.3s ease;
}

.info-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
}

.info-card .card-header {
    background: transparent;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    padding: 1rem;
}

.info-card .card-body {
    padding: 1.5rem;
}

.score-display {
    font-size: 1.8rem;
    font-weight: bold;
    color: var(--bs-primary);
}

.score-separator {
    margin: 0 0.5rem;
}

/* Stats Panel */
.stats-panel {
    background: rgba(0, 0, 0, 0.3);
    backdrop-filter: blur(15px);
    border-radius: 20px;
}

.stat-item {
    display: flex;
    align-items: center;
    padding: 1rem;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 10px;
    transition: all 0.3s ease;
}

.stat-item:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: translateX(10px);
}

.stat-icon {
    font-size: 2rem;
    margin-right: 1rem;
}

.stat-number {
    font-size: 2rem;
    font-weight: 800;
    color: white;
    margin-bottom: 0;
}

.stat-label {
    color: rgba(255, 255, 255, 0.8);
    font-size: 0.9rem;
}

/* CTA Buttons */
.cta-button {
    transition: all 0.3s ease;
    border-radius: 10px;
    font-weight: 600;
    position: relative;
    overflow: hidden;
}

.cta-button:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
}

/* Scroll Indicator */
.scroll-indicator {
    cursor: pointer;
    animation: bounce 2s infinite;
}

@keyframes bounce {
    0%, 20%, 50%, 80%, 100% { transform: translateY(0) translateX(-50%); }
    40% { transform: translateY(-10px) translateX(-50%); }
    60% { transform: translateY(-5px) translateX(-50%); }
}

/* Sponsors Carousel */
.sponsors-carousel-section {
    border-top: 1px solid #e9ecef;
}

.sponsors-slider {
    overflow: hidden;
    white-space: nowrap;
}

.sponsors-track {
    display: inline-flex;
    animation: scroll 30s linear infinite;
}

.sponsor-slide {
    flex-shrink: 0;
    transition: all 0.3s ease;
}

.sponsor-logo:hover {
    filter: grayscale(0%) !important;
    opacity: 1 !important;
    transform: scale(1.1);
}

.sponsor-placeholder {
    background: #f8f9fa;
    border: 2px dashed #dee2e6;
    border-radius: 8px;
    padding: 1rem;
    min-width: 120px;
    text-align: center;
}

@keyframes scroll {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}

@keyframes patternFloat {
    0%, 100% { background-position: 0 0, 0 0; }
    50% { background-position: 20px 20px, -20px -20px; }
}

/* Responsive Design */
@media (max-width: 768px) {
    .club-name {
        font-size: 1.8rem;
    }
    
    .club-subtitle {
        font-size: 1.5rem;
    }
    
    .hero-content {
        padding: 2rem 1rem;
    }
    
    .stats-panel {
        margin-top: 2rem;
    }
    
    .match-info-cards .col-md-6 {
        margin-bottom: 1rem;
    }
}

@media (max-width: 576px) {
    .hero-cta-section .btn {
        margin-bottom: 0.5rem;
    }
    
    .stat-item {
        flex-direction: column;
        text-align: center;
    }
    
    .stat-icon {
        margin-right: 0;
        margin-bottom: 0.5rem;
    }
}
</style>
@endsection
