@extends('layouts.public')

@section('title', 'Coaching Staff - Buhimba United Saints FC')
@section('description', 'Meet the coaching staff and technical team of Buhimba United Saints FC. Our experienced professionals leading the team to success.')

@section('content')
<!-- Page Header -->
<section class="bg-club-green text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">Coaching Staff</h1>
                <p class="lead mb-0">The experienced professionals behind Buhimba United Saints FC's success</p>
            </div>
        </div>
    </div>
</section>

@if($staff->count() > 0)
    <!-- Technical Staff -->
    <section class="py-5">
        <div class="container">
            <h2 class="fw-bold text-club-green mb-4">
                <i class="bi bi-people-fill me-2"></i>
                Technical Team
            </h2>
            <div class="row">
                @foreach($staff as $member)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card staff-card h-100 shadow-sm">
                            <div class="card-body text-center">
                                <!-- Staff Photo -->
                                <div class="mb-3">
                                    @if($member->photo)
                                        <img src="{{ asset('storage/' . $member->photo) }}" 
                                             alt="{{ $member->full_name }}" 
                                             class="rounded-circle mx-auto d-block"
                                             style="width: 120px; height: 120px; object-fit: cover;">
                                    @else
                                        <div class="bg-club-green text-white rounded-circle mx-auto d-flex align-items-center justify-content-center" 
                                             style="width: 120px; height: 120px; font-size: 2rem; font-weight: bold;">
                                            {{ substr($member->first_name, 0, 1) }}{{ substr($member->last_name, 0, 1) }}
                                        </div>
                                    @endif
                                </div>

                                <!-- Staff Details -->
                                <h5 class="card-title fw-bold mb-2">{{ $member->full_name }}</h5>
                                <p class="text-club-green fw-semibold mb-2">{{ $member->role }}</p>
                                
                                @if($member->specialization)
                                    <p class="text-muted mb-3">{{ $member->specialization }}</p>
                                @endif

                                @if($member->years_of_experience)
                                    <div class="mb-3">
                                        <span class="badge bg-success">{{ $member->years_of_experience }} years experience</span>
                                    </div>
                                @endif

                                @if($member->certifications)
                                    <div class="mb-3">
                                        <h6 class="fw-semibold text-club-green">Certifications</h6>
                                        @foreach($member->certifications as $cert)
                                            <span class="badge bg-light text-dark me-1 mb-1">{{ $cert }}</span>
                                        @endforeach
                                    </div>
                                @endif

                                @if($member->education)
                                    <div class="mb-3">
                                        <h6 class="fw-semibold text-club-green">Education</h6>
                                        <small class="text-muted">{{ $member->education }}</small>
                                    </div>
                                @endif

                                @if($member->previous_clubs)
                                    <div class="mb-3">
                                        <h6 class="fw-semibold text-club-green">Previous Experience</h6>
                                        @foreach($member->previous_clubs as $club)
                                            <div class="small text-muted mb-1">{{ $club }}</div>
                                        @endforeach
                                    </div>
                                @endif

                                @if($member->languages)
                                    <div class="mb-3">
                                        <h6 class="fw-semibold text-club-green">Languages</h6>
                                        <small class="text-muted">{{ implode(', ', $member->languages) }}</small>
                                    </div>
                                @endif

                                @if($member->achievements)
                                    <div class="mb-3">
                                        <h6 class="fw-semibold text-club-green">Achievements</h6>
                                        @foreach($member->achievements as $achievement)
                                            <div class="small text-muted mb-1">
                                                <i class="bi bi-trophy text-warning me-1"></i>{{ $achievement }}
                                            </div>
                                        @endforeach
                                    </div>
                                @endif

                                <!-- Contact Info -->
                                @if($member->email || $member->phone)
                                    <div class="mt-3 pt-3 border-top">
                                        @if($member->email)
                                            <div class="small text-muted mb-1">
                                                <i class="bi bi-envelope me-1"></i>{{ $member->email }}
                                            </div>
                                        @endif
                                        @if($member->phone)
                                            <div class="small text-muted">
                                                <i class="bi bi-phone me-1"></i>{{ $member->phone }}
                                            </div>
                                        @endif
                                    </div>
                                @endif
                            </div>

                            @if($member->biography)
                                <div class="card-footer bg-light">
                                    <small class="text-muted">{{ Str::limit($member->biography, 150) }}</small>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Management Structure -->
    @php
        $management = $staff->where('role', 'Head Coach')->first();
        $assistants = $staff->whereIn('role', ['Assistant Coach', 'Goalkeeper Coach', 'Fitness Coach']);
        $support = $staff->whereIn('role', ['Physiotherapist', 'Team Doctor', 'Kit Manager', 'Analyst']);
    @endphp

    @if($management || $assistants->count() > 0 || $support->count() > 0)
        <section class="py-5 bg-light">
            <div class="container">
                <h2 class="fw-bold text-club-green mb-4">
                    <i class="bi bi-diagram-3 me-2"></i>
                    Team Structure
                </h2>
                
                <div class="row">
                    <!-- Head Coach -->
                    @if($management)
                        <div class="col-md-12 mb-4">
                            <div class="text-center">
                                <h4 class="text-club-green fw-bold">{{ $management->role }}</h4>
                                <h5>{{ $management->full_name }}</h5>
                            </div>
                        </div>
                    @endif

                    <!-- Assistant Coaches -->
                    @if($assistants->count() > 0)
                        <div class="col-md-6 mb-4">
                            <h5 class="text-club-green fw-bold mb-3">Coaching Team</h5>
                            @foreach($assistants as $assistant)
                                <div class="d-flex align-items-center mb-2">
                                    <div class="bg-club-green text-white rounded-circle d-flex align-items-center justify-content-center me-3" 
                                         style="width: 40px; height: 40px; font-size: 0.9rem;">
                                        {{ substr($assistant->first_name, 0, 1) }}{{ substr($assistant->last_name, 0, 1) }}
                                    </div>
                                    <div>
                                        <div class="fw-semibold">{{ $assistant->full_name }}</div>
                                        <small class="text-muted">{{ $assistant->role }}</small>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif

                    <!-- Support Staff -->
                    @if($support->count() > 0)
                        <div class="col-md-6 mb-4">
                            <h5 class="text-club-green fw-bold mb-3">Support Team</h5>
                            @foreach($support as $member)
                                <div class="d-flex align-items-center mb-2">
                                    <div class="bg-secondary text-white rounded-circle d-flex align-items-center justify-content-center me-3" 
                                         style="width: 40px; height: 40px; font-size: 0.9rem;">
                                        {{ substr($member->first_name, 0, 1) }}{{ substr($member->last_name, 0, 1) }}
                                    </div>
                                    <div>
                                        <div class="fw-semibold">{{ $member->full_name }}</div>
                                        <small class="text-muted">{{ $member->role }}</small>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </section>
    @endif

@else
    <!-- No Staff Available -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <i class="bi bi-people fs-1 text-muted mb-3"></i>
                    <h3 class="text-muted">Staff Information Coming Soon</h3>
                    <p class="text-muted">Coaching staff profiles are being updated. Check back soon for complete team information.</p>
                    <a href="{{ route('home') }}" class="btn btn-club-primary">Return Home</a>
                </div>
            </div>
        </div>
    </section>
@endif

<!-- Philosophy Section -->
<section class="bg-club-green text-white py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="fw-bold mb-4">Our Philosophy</h2>
                <p class="lead mb-4">
                    At Buhimba United Saints FC, we believe in developing not just skilled players, but complete individuals. 
                    Our coaching philosophy emphasizes technical excellence, tactical discipline, physical fitness, and mental strength.
                </p>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <i class="bi bi-lightning-charge fs-2 mb-2"></i>
                        <h5>Intensity</h5>
                        <small>High-energy, passionate football</small>
                    </div>
                    <div class="col-md-3 mb-3">
                        <i class="bi bi-people fs-2 mb-2"></i>
                        <h5>Unity</h5>
                        <small>Team spirit and collaboration</small>
                    </div>
                    <div class="col-md-3 mb-3">
                        <i class="bi bi-award fs-2 mb-2"></i>
                        <h5>Excellence</h5>
                        <small>Striving for continuous improvement</small>
                    </div>
                    <div class="col-md-3 mb-3">
                        <i class="bi bi-heart fs-2 mb-2"></i>
                        <h5>Respect</h5>
                        <small>For the game, opponents, and community</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-5">
    <div class="container text-center">
        <h2 class="fw-bold text-club-green mb-3">Join Our Team</h2>
        <p class="lead mb-4">Interested in coaching opportunities or want to contribute to our technical team?</p>
        <a href="{{ route('contact') }}" class="btn btn-club-primary btn-lg">Get in Touch</a>
    </div>
</section>
@endsection
