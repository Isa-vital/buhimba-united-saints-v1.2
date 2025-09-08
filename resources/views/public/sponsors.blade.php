@extends('layouts.public')

@section('title', 'Our Sponsors - Buhimba United Saints FC')
@section('description', 'Meet our valued sponsors and partners who support Buhimba United Saints FC. Join our community of supporters.')

@section('content')
<!-- Professional Hero Section -->
<section class="position-relative overflow-hidden" style="
    background: linear-gradient(135deg, rgba(27, 94, 32, 0.9) 0%, rgba(0, 0, 0, 0.8) 30%, rgba(27, 94, 32, 0.9) 100%),
                url('{{ asset('images/hero-background.jpg') }}');
    background-size: cover;
    background-position: center center;
    background-attachment: fixed;
    color: #ffffff;
    min-height: 100vh;
">
    <!-- Animated Gradient Overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="
        background: linear-gradient(45deg, 
            rgba(27, 94, 32, 0.3) 0%, 
            rgba(0, 0, 0, 0.6) 25%, 
            rgba(27, 94, 32, 0.4) 50%, 
            rgba(0, 0, 0, 0.6) 75%, 
            rgba(27, 94, 32, 0.3) 100%);
        animation: gradientShift 8s ease-in-out infinite;
    "></div>
    
    <!-- Floating Geometric Elements -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="z-index: 1;">
        <div class="position-absolute" style="
            top: 15%; 
            right: 10%; 
            width: 120px; 
            height: 120px; 
            background: rgba(255, 215, 0, 0.1); 
            border: 2px solid rgba(255, 215, 0, 0.3);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        "></div>
        <div class="position-absolute" style="
            bottom: 20%; 
            left: 8%; 
            width: 80px; 
            height: 80px; 
            background: rgba(255, 255, 255, 0.08); 
            border: 2px solid rgba(255, 255, 255, 0.2);
            transform: rotate(45deg);
            animation: float 8s ease-in-out infinite reverse;
        "></div>
        <div class="position-absolute" style="
            top: 40%; 
            left: 5%; 
            width: 60px; 
            height: 60px; 
            background: rgba(27, 94, 32, 0.2); 
            border-radius: 10px;
            animation: float 7s ease-in-out infinite;
        "></div>
    </div>
    
    <div class="container position-relative d-flex align-items-center" style="z-index: 3; min-height: 100vh;">
        <div class="row w-100">
            <!-- Main Content -->
            <div class="col-lg-7 col-xl-6">
                <div class="mb-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="me-3" style="
                            width: 60px; 
                            height: 60px; 
                            background: linear-gradient(135deg, #ffd700, #ffb300);
                            border-radius: 50%;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            box-shadow: 0 10px 30px rgba(255, 215, 0, 0.3);
                        ">
                            <i class="bi bi-handshake fs-4" style="color: #1b5e20;"></i>
                        </div>
                        <div>
                            <span class="badge px-3 py-2" style="
                                background: linear-gradient(135deg, rgba(255, 215, 0, 0.9), rgba(255, 179, 0, 0.9));
                                color: #1b5e20;
                                font-weight: 600;
                                font-size: 0.9rem;
                                border-radius: 25px;
                                text-transform: uppercase;
                                letter-spacing: 0.5px;
                            ">Partnership Excellence</span>
                        </div>
                    </div>
                    
                    <h1 class="display-3 fw-bold mb-4" style="
                        color: #ffffff; 
                        text-shadow: 3px 3px 8px rgba(0,0,0,0.8);
                        line-height: 1.1;
                        font-family: 'Arial Black', Arial, sans-serif;
                    ">
                        Our <span style="
                            background: linear-gradient(135deg, #ffd700, #ffb300);
                            -webkit-background-clip: text;
                            -webkit-text-fill-color: transparent;
                            background-clip: text;
                        ">Valued</span><br>
                        Sponsors
                    </h1>
                    
                    <p class="lead mb-4" style="
                        color: #f8f9fa; 
                        text-shadow: 2px 2px 4px rgba(0,0,0,0.8);
                        font-size: 1.3rem;
                        line-height: 1.6;
                        max-width: 500px;
                    ">
                        Trusted partners driving excellence and supporting the beautiful game at Buhimba United Saints FC
                    </p>
                    
                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="#partnerships" class="btn btn-lg px-4 py-3" style="
                            background: linear-gradient(135deg, #ffd700, #ffb300);
                            color: #1b5e20;
                            border: none;
                            border-radius: 50px;
                            font-weight: 700;
                            text-transform: uppercase;
                            letter-spacing: 0.5px;
                            box-shadow: 0 8px 25px rgba(255, 215, 0, 0.4);
                            transition: all 0.3s ease;
                        " onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 12px 35px rgba(255, 215, 0, 0.6)'"
                           onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 25px rgba(255, 215, 0, 0.4)'">
                            <i class="bi bi-eye me-2"></i>View Partners
                        </a>
                        <a href="#become-partner" class="btn btn-lg px-4 py-3" style="
                            background: transparent;
                            color: #ffffff;
                            border: 2px solid #ffffff;
                            border-radius: 50px;
                            font-weight: 600;
                            text-transform: uppercase;
                            letter-spacing: 0.5px;
                            transition: all 0.3s ease;
                        " onmouseover="this.style.background='rgba(255,255,255,0.1)'; this.style.transform='translateY(-2px)'"
                           onmouseout="this.style.background='transparent'; this.style.transform='translateY(0)'">
                            <i class="bi bi-plus-circle me-2"></i>Join Us
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Stats Card -->
            <div class="col-lg-5 col-xl-6 d-flex align-items-center justify-content-lg-end">
                <div class="w-100" style="max-width: 400px;">
                    <div class="card border-0 shadow-2xl" style="
                        background: linear-gradient(135deg, rgba(255, 255, 255, 0.95), rgba(248, 249, 250, 0.95));
                        backdrop-filter: blur(20px);
                        border-radius: 20px;
                        overflow: hidden;
                    ">
                        <!-- Card Header -->
                        <div class="card-header border-0 text-center py-4" style="
                            background: linear-gradient(135deg, #1b5e20, #2e7d32);
                            color: #ffffff;
                        ">
                            <h4 class="mb-0 fw-bold" style="
                                color: #ffffff;
                                text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
                            ">Partnership Impact</h4>
                        </div>
                        
                        <!-- Card Body -->
                        <div class="card-body p-4">
                            <div class="row text-center">
                                <div class="col-6 mb-3">
                                    <div class="p-3">
                                        <div class="fs-2 fw-bold mb-2" style="color: #1b5e20;">{{ $sponsors->count() }}</div>
                                        <div class="small text-uppercase fw-bold" style="color: #6c757d; letter-spacing: 0.5px;">Active Partners</div>
                                    </div>
                                </div>
                                <div class="col-6 mb-3">
                                    <div class="p-3">
                                        <div class="fs-2 fw-bold mb-2" style="color: #ffd700;">
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                        <div class="small text-uppercase fw-bold" style="color: #6c757d; letter-spacing: 0.5px;">Premium Quality</div>
                                    </div>
                                </div>
                            </div>
                            
                            <hr class="my-3" style="border-color: #e9ecef;">
                            
                            <div class="text-center">
                                <p class="mb-3" style="color: #495057; font-weight: 500;">
                                    <i class="bi bi-trophy me-2" style="color: #ffd700;"></i>
                                    Building Success Together
                                </p>
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="me-3">
                                        <i class="bi bi-graph-up fs-4" style="color: #28a745;"></i>
                                    </div>
                                    <small style="color: #6c757d; font-weight: 500;">
                                        Connecting brands with passionate football fans across Uganda
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="position-absolute bottom-0 start-50 translate-middle-x mb-4" style="z-index: 3;">
        <div class="text-center">
            <div class="mb-2">
                <small style="color: rgba(255,255,255,0.8); font-weight: 500; text-transform: uppercase; letter-spacing: 1px;">Scroll to explore</small>
            </div>
            <div style="
                width: 30px;
                height: 50px;
                border: 2px solid rgba(255,255,255,0.5);
                border-radius: 25px;
                position: relative;
                margin: 0 auto;
            ">
                <div style="
                    width: 4px;
                    height: 8px;
                    background: #ffffff;
                    border-radius: 2px;
                    position: absolute;
                    top: 8px;
                    left: 50%;
                    transform: translateX(-50%);
                    animation: scroll 2s infinite;
                "></div>
            </div>
        </div>
    </div>
</section>

@if($sponsors->count() > 0)
    @php
        $sponsorTypes = $sponsors->groupBy('sponsor_type');
    @endphp

    @foreach(['Main', 'Official', 'Technical', 'Community'] as $type)
        @if(isset($sponsorTypes[$type]) && $sponsorTypes[$type]->count() > 0)
            <section class="py-5 @if($loop->even) bg-light @endif">
                <div class="container">
                    <div class="row mb-4">
                        <div class="col">
                            <h2 class="fw-bold mb-3" style="color: #1b5e20; text-shadow: 1px 1px 2px rgba(0,0,0,0.1);">
                                <i class="bi bi-{{ 
                                    $type == 'Main' ? 'star-fill' : 
                                    ($type == 'Official' ? 'award' : 
                                    ($type == 'Technical' ? 'gear' : 'people')) 
                                }} me-2" style="color: #ffd700;"></i>
                                {{ $type }} {{ $type == 'Main' ? 'Sponsor' : ($sponsorTypes[$type]->count() > 1 ? 'Partners' : 'Partner') }}
                            </h2>
                            @if($type == 'Main')
                                <p style="color: #495057;">Our primary sponsor providing essential support for club operations</p>
                            @elseif($type == 'Official')
                                <p style="color: #495057;">Official partners supporting various aspects of our club</p>
                            @elseif($type == 'Technical')
                                <p style="color: #495057;">Technical partners providing equipment and expertise</p>
                            @else
                                <p style="color: #495057;">Community partners supporting local initiatives</p>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        @foreach($sponsorTypes[$type] as $sponsor)
                            <div class="col-lg-{{ $type == 'Main' ? '12' : '6' }} col-md-6 mb-4">
                                <div class="card sponsor-card h-100 shadow-sm {{ $type == 'Main' ? 'border-3' : '' }}" style="{{ $type == 'Main' ? 'border-color: #1b5e20 !important;' : '' }}">
                                    @if($type == 'Main')
                                        <div class="card-header text-center" style="background: linear-gradient(135deg, #1b5e20, #2e7d32); color: #ffffff;">
                                            <h5 class="mb-0 fw-bold" style="color: #ffffff; text-shadow: 1px 1px 2px rgba(0,0,0,0.5);">
                                                <i class="bi bi-star-fill me-2" style="color: #ffd700;"></i>Main Sponsor
                                            </h5>
                                        </div>
                                    @endif

                                    <div class="card-body text-center {{ $type == 'Main' ? 'py-5' : '' }}">
                                        <!-- Sponsor Logo -->
                                        <div class="sponsor-logo-container mb-4">
                                            @if($sponsor->logo)
                                                <img src="{{ asset('storage/' . $sponsor->logo) }}" 
                                                     alt="{{ $sponsor->company_name }}" 
                                                     class="sponsor-logo {{ $type == 'Main' ? 'sponsor-logo-main' : 'sponsor-logo-regular' }}">
                                            @else
                                                <div class="sponsor-logo-placeholder bg-light d-flex align-items-center justify-content-center {{ $type == 'Main' ? 'sponsor-logo-main' : 'sponsor-logo-regular' }}">
                                                    <i class="bi bi-building text-muted fs-1"></i>
                                                </div>
                                            @endif
                                        </div>

                                        <!-- Sponsor Details -->
                                        <h{{ $type == 'Main' ? '3' : '5' }} class="fw-bold mb-3" style="{{ $type == 'Main' ? 'color: #1b5e20;' : 'color: #212529;' }}">
                                            {{ $sponsor->company_name }}
                                        </h{{ $type == 'Main' ? '3' : '5' }}>

                                        @if($sponsor->industry)
                                            <p style="color: #6c757d;" class="mb-3">{{ $sponsor->industry }}</p>
                                        @endif

                                        @if($sponsor->description)
                                            <p class="mb-4" style="color: #495057;">{{ $sponsor->description }}</p>
                                        @endif

                                        <!-- Partnership Duration -->
                                        @if($sponsor->partnership_start || $sponsor->partnership_end)
                                            <div class="mb-3">
                                                <small style="color: #6c757d;">
                                                    <i class="bi bi-calendar me-1"></i>
                                                    Partnership: 
                                                    @if($sponsor->partnership_start)
                                                        {{ \Carbon\Carbon::parse($sponsor->partnership_start)->format('Y') }}
                                                    @endif
                                                    @if($sponsor->partnership_end)
                                                        - {{ \Carbon\Carbon::parse($sponsor->partnership_end)->format('Y') }}
                                                    @else
                                                        - Present
                                                    @endif
                                                </small>
                                            </div>
                                        @endif

                                        <!-- Sponsor Value -->
                                        @if($sponsor->value && $type == 'Main')
                                            <div class="mb-3">
                                                <span class="badge bg-success fs-6">
                                                    UGX {{ number_format($sponsor->value) }}
                                                </span>
                                            </div>
                                        @endif

                                        <!-- Contact Information -->
                                        @if($sponsor->website || $sponsor->email)
                                            <div class="sponsor-contact mt-4 pt-3 border-top">
                                                @if($sponsor->website)
                                                    <a href="{{ $sponsor->website }}" target="_blank" class="btn btn-sm me-2 mb-2" style="background-color: #1b5e20; color: #ffffff; border-color: #1b5e20;">
                                                        <i class="bi bi-globe me-1"></i>Website
                                                    </a>
                                                @endif
                                                @if($sponsor->email)
                                                    <a href="mailto:{{ $sponsor->email }}" class="btn btn-sm mb-2" style="background-color: transparent; color: #1b5e20; border: 1px solid #1b5e20;">
                                                        <i class="bi bi-envelope me-1"></i>Email
                                                    </a>
                                                @endif
                                            </div>
                                        @endif

                                        <!-- Social Media -->
                                        @if($sponsor->social_media)
                                            <div class="sponsor-social mt-3">
                                                @if(isset($sponsor->social_media['facebook']) && $sponsor->social_media['facebook'])
                                                    <a href="{{ $sponsor->social_media['facebook'] }}" target="_blank" class="btn btn-outline-primary btn-sm me-1">
                                                        <i class="bi bi-facebook"></i>
                                                    </a>
                                                @endif
                                                @if(isset($sponsor->social_media['twitter']) && $sponsor->social_media['twitter'])
                                                    <a href="{{ $sponsor->social_media['twitter'] }}" target="_blank" class="btn btn-outline-info btn-sm me-1">
                                                        <i class="bi bi-twitter"></i>
                                                    </a>
                                                @endif
                                                @if(isset($sponsor->social_media['linkedin']) && $sponsor->social_media['linkedin'])
                                                    <a href="{{ $sponsor->social_media['linkedin'] }}" target="_blank" class="btn btn-outline-primary btn-sm">
                                                        <i class="bi bi-linkedin"></i>
                                                    </a>
                                                @endif
                                            </div>
                                        @endif
                                    </div>

                                    @if($sponsor->achievements || $sponsor->contribution_details)
                                        <div class="card-footer" style="background-color: #f8f9fa;">
                                            @if($sponsor->achievements)
                                                <small style="color: #6c757d;">
                                                    <i class="bi bi-trophy me-1"></i>
                                                    <strong>Achievements:</strong> {{ implode(', ', $sponsor->achievements) }}
                                                </small>
                                            @endif
                                            @if($sponsor->contribution_details)
                                                <small style="color: #6c757d;" class="d-block mt-2">
                                                    <i class="bi bi-info-circle me-1"></i>
                                                    {{ $sponsor->contribution_details }}
                                                </small>
                                            @endif
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
    @endforeach

    <!-- Sponsorship Benefits -->
    <section class="py-5" style="background: linear-gradient(135deg, #1b5e20 0%, #2e7d32 100%); color: #ffffff;">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-4" style="color: #ffffff; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">Partnership Benefits</h2>
                    <p class="lead mb-5" style="color: #f8f9fa; text-shadow: 1px 1px 2px rgba(0,0,0,0.5);">
                        Join our family of partners and connect with passionate football fans across Uganda
                    </p>
                    
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <i class="bi bi-eye fs-2 mb-3" style="color: #ffd700;"></i>
                            <h5 style="color: #ffffff;">Visibility</h5>
                            <p style="color: #f8f9fa;">Gain exposure to thousands of passionate football fans</p>
                        </div>
                        <div class="col-md-4 mb-4">
                            <i class="bi bi-people fs-2 mb-3" style="color: #ffd700;"></i>
                            <h5 style="color: #ffffff;">Community</h5>
                            <p style="color: #f8f9fa;">Connect with the local community and build brand loyalty</p>
                        </div>
                        <div class="col-md-4 mb-4">
                            <i class="bi bi-graph-up fs-2 mb-3" style="color: #ffd700;"></i>
                            <h5 style="color: #ffffff;">Growth</h5>
                            <p style="color: #f8f9fa;">Associate your brand with success and sporting excellence</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@else
    <!-- No Sponsors -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <i class="bi bi-handshake fs-1 mb-3" style="color: #6c757d;"></i>
                    <h3 style="color: #6c757d;">Partnership Opportunities</h3>
                    <p style="color: #6c757d;">We're looking for partners to join our journey. Contact us to explore opportunities.</p>
                    <a href="{{ route('contact') }}" class="btn" style="background-color: #1b5e20; color: #ffffff; border-color: #1b5e20;">Get in Touch</a>
                </div>
            </div>
        </div>
    </section>
@endif

<!-- Become a Sponsor -->
<section class="py-5 @if($sponsors->count() > 0) bg-light @endif">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="fw-bold mb-3" style="color: #1b5e20;">Become a Partner</h2>
                <p class="lead mb-4" style="color: #495057;">
                    Join Buhimba United Saints FC's journey and connect your brand with one of Uganda's 
                    most exciting football clubs. We offer various partnership packages to suit different businesses.
                </p>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-check-circle fs-4 me-3" style="color: #28a745;"></i>
                            <div>
                                <h6 class="mb-1 fw-bold" style="color: #212529;">Brand Exposure</h6>
                                <small style="color: #6c757d;">Reach thousands of fans</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-check-circle fs-4 me-3" style="color: #28a745;"></i>
                            <div>
                                <h6 class="mb-1 fw-bold" style="color: #212529;">Community Impact</h6>
                                <small style="color: #6c757d;">Support local sports development</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-check-circle fs-4 me-3" style="color: #28a745;"></i>
                            <div>
                                <h6 class="mb-1 fw-bold" style="color: #212529;">Networking</h6>
                                <small style="color: #6c757d;">Connect with other businesses</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-check-circle fs-4 me-3" style="color: #28a745;"></i>
                            <div>
                                <h6 class="mb-1 fw-bold" style="color: #212529;">Hospitality</h6>
                                <small style="color: #6c757d;">Exclusive match day experiences</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 text-lg-center">
                <div class="card" style="border: 2px solid #1b5e20;">
                    <div class="card-body text-center">
                        <i class="bi bi-handshake fs-1 mb-3" style="color: #1b5e20;"></i>
                        <h5 class="fw-bold mb-3" style="color: #212529;">Ready to Partner?</h5>
                        <p class="mb-4" style="color: #6c757d;">Contact us to discuss partnership opportunities</p>
                        <a href="{{ route('contact') }}" class="btn btn-lg" style="background-color: #1b5e20; color: #ffffff; border-color: #1b5e20;">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partnership Packages -->
<section class="py-5">
    <div class="container">
        <h2 class="fw-bold text-center mb-5" style="color: #1b5e20;">Partnership Packages</h2>
        
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="bi bi-star text-warning fs-2 mb-3"></i>
                        <h5 class="fw-bold" style="color: #212529;">Bronze</h5>
                        <p style="color: #6c757d;">Community Partner</p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check me-2" style="color: #28a745;"></i><span style="color: #495057;">Logo on website</span></li>
                            <li><i class="bi bi-check me-2" style="color: #28a745;"></i><span style="color: #495057;">Social media mentions</span></li>
                            <li><i class="bi bi-check me-2" style="color: #28a745;"></i><span style="color: #495057;">Newsletter inclusion</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="bi bi-star-fill text-warning fs-2 mb-3"></i>
                        <h5 class="fw-bold" style="color: #212529;">Silver</h5>
                        <p style="color: #6c757d;">Official Partner</p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check me-2" style="color: #28a745;"></i><span style="color: #495057;">All Bronze benefits</span></li>
                            <li><i class="bi bi-check me-2" style="color: #28a745;"></i><span style="color: #495057;">Stadium advertising</span></li>
                            <li><i class="bi bi-check me-2" style="color: #28a745;"></i><span style="color: #495057;">Match day hospitality</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100 text-center" style="border: 2px solid #ffc107;">
                    <div class="card-body">
                        <i class="bi bi-award text-warning fs-2 mb-3"></i>
                        <h5 class="fw-bold" style="color: #212529;">Gold</h5>
                        <p style="color: #6c757d;">Premium Partner</p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check me-2" style="color: #28a745;"></i><span style="color: #495057;">All Silver benefits</span></li>
                            <li><i class="bi bi-check me-2" style="color: #28a745;"></i><span style="color: #495057;">Shirt sponsorship</span></li>
                            <li><i class="bi bi-check me-2" style="color: #28a745;"></i><span style="color: #495057;">Player appearances</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100 text-center" style="border: 2px solid #1b5e20;">
                    <div class="card-body">
                        <i class="bi bi-trophy fs-2 mb-3" style="color: #1b5e20;"></i>
                        <h5 class="fw-bold" style="color: #212529;">Platinum</h5>
                        <p style="color: #6c757d;">Main Sponsor</p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check me-2" style="color: #28a745;"></i><span style="color: #495057;">All Gold benefits</span></li>
                            <li><i class="bi bi-check me-2" style="color: #28a745;"></i><span style="color: #495057;">Naming rights</span></li>
                            <li><i class="bi bi-check me-2" style="color: #28a745;"></i><span style="color: #495057;">Exclusive category</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
.min-vh-60 {
    min-height: 60vh;
    display: flex;
    align-items: center;
}

.sponsor-card {
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.sponsor-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
}

.sponsor-logo {
    max-width: 100%;
    height: auto;
    object-fit: contain;
}

.sponsor-logo-main {
    max-height: 150px;
    width: auto;
}

.sponsor-logo-regular {
    max-height: 100px;
    width: auto;
}

.sponsor-logo-placeholder {
    border: 2px dashed #dee2e6;
    border-radius: 8px;
}

.sponsor-logo-container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 80px;
}

/* Hero section responsiveness */
@media (max-width: 768px) {
    .sponsor-logo-main {
        max-height: 100px;
    }
    
    .sponsor-logo-regular {
        max-height: 80px;
    }
    
    .min-vh-60 {
        min-height: 50vh;
    }
    
    /* Disable fixed background on mobile for better performance */
    .hero-bg-mobile {
        background-attachment: scroll !important;
    }
}

@media (max-width: 576px) {
    .min-vh-60 {
        min-height: 40vh;
    }
}

/* Fallback for when background image doesn't load */
.hero-fallback {
    background: linear-gradient(135deg, #1b5e20 0%, #2e7d32 100%) !important;
}
</style>
@endpush
