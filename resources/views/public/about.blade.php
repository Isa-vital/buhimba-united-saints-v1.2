@extends('layouts.public')

@section('title', 'About Us - Buhimba United Saints FC')
@section('description', 'Learn about Buhimba United Saints FC history, mission, values, and our journey in Ugandan football.')

@section('content')
<!-- Hero Section -->
<section class="bg-club-green text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-4" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">About Buhimba United Saints FC</h1>
                <p class="lead mb-4" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.6);">
                    A professional football club based in Kikuube District, competing in the StarTimes FUFA Premier League,
                    the top tier of Uganda football.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <div class="stat-item">
                        <h3 class="fw-bold mb-1" style="color: #ffd700; text-shadow: 1px 1px 2px rgba(0,0,0,0.8);">2018</h3>
                        <small style="color: #e9ecef;">Founded</small>
                    </div>
                    <div class="stat-item">
                        <h3 class="fw-bold mb-1" style="color: #ffd700; text-shadow: 1px 1px 2px rgba(0,0,0,0.8);">2025</h3>
                        <small style="color: #e9ecef;">UPL Promotion</small>
                    </div>
                    <div class="stat-item">
                        <h3 class="fw-bold mb-1" style="color: #ffd700; text-shadow: 1px 1px 2px rgba(0,0,0,0.8);">Champions</h3>
                        <small style="color: #e9ecef;">Kitara Region 2023/24</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <img src="{{ asset('images/logo.png') }}" alt="Buhimba United Saints FC" 
                     class="img-fluid" style="max-height: 300px; filter: drop-shadow(0 0 20px rgba(255,215,0,0.5));">
            </div>
        </div>
    </div>
</section>

<!-- Club History -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="fw-bold text-club-green mb-4">Our History</h2>
                <div class="history-content">
                    <p class="lead">
                        <strong>Buhimba United Saints Football Club</strong> is a professional football club based in 
                        <strong>Kikuube District, Buhimba Town Council, Kigaaya LC1, Uganda</strong>. The club competes 
                        in the <strong>StarTimes FUFA Premier League</strong>, the top tier of Uganda football.
                    </p>
                    
                    <p>
                        <strong>Founded in 2018</strong>, the club has competed favorably in all stages of Uganda football, 
                        building a reputation for excellence and determination throughout our journey.
                    </p>
                    
                    <p>
                        Since our formation, we have played our home games at <strong>Kigaaya Playground</strong>, 
                        our beloved home ground that has witnessed countless memorable moments in our club's history.
                    </p>
                    
                    <p>
                        Buhimba United Saints is one of the most valuable and widely supported clubs in the 
                        <strong>Bunyoro Region</strong>, with a passionate fanbase that stands behind the team 
                        through every match.
                    </p>

                    <!-- Recent Achievements -->
                    <div class="achievements-highlight mt-4 p-4 bg-light rounded">
                        <h4 class="fw-bold text-club-green mb-3">Recent Achievements</h4>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="achievement-item">
                                    <i class="bi bi-trophy-fill text-warning fs-4 me-2"></i>
                                    <strong>Kitara Region League Champions 2023/2024</strong><br>
                                    <small class="text-muted">Defeated Rwenzori Lions FC 1-0, courtesy of Kunya Reagan's decisive goal</small>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="achievement-item">
                                    <i class="bi bi-award-fill text-success fs-4 me-2"></i>
                                    <strong>UPL Promotion 2025</strong><br>
                                    <small class="text-muted">Finished third to earn promotion to the Uganda Premier League, behind Calvary FC and Gaddafi FC</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Timeline -->
                <div class="timeline mt-5">
                    <h4 class="fw-bold text-club-green mb-4">Key Milestones</h4>
                    
                    <div class="timeline-item mb-4">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="timeline-date bg-club-green text-white rounded p-2 text-center">
                                    <strong>2018</strong>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <h6 class="fw-bold">Club Foundation</h6>
                                <p class="text-muted">Buhimba United Saints FC was officially founded in Kikuube District, beginning our journey in Uganda football.</p>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-item mb-4">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="timeline-date bg-warning text-dark rounded p-2 text-center">
                                    <strong>2023/24</strong>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <h6 class="fw-bold">Kitara Region League Champions</h6>
                                <p class="text-muted">Won the championship by defeating Rwenzori Lions FC 1-0, with Kunya Reagan scoring the winning goal.</p>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-item mb-4">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="timeline-date bg-success text-white rounded p-2 text-center">
                                    <strong>2025</strong>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <h6 class="fw-bold">UPL Promotion</h6>
                                <p class="text-muted">Finished third to earn promotion to the StarTimes FUFA Premier League, behind Calvary FC and Gaddafi FC.</p>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-item mb-4">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="timeline-date bg-info text-white rounded p-2 text-center">
                                    <strong>2018-2024</strong>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <h6 class="fw-bold">Competitive Growth</h6>
                                <p class="text-muted">Competed favorably in all stages of Uganda football, building our reputation and fan base in the Bunyoro Region.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <!-- Quick Facts -->
                <div class="card border-0 shadow-lg mb-4" style="border-left: 5px solid #1b5e20 !important;">
                    <div class="card-header text-white" style="background: linear-gradient(135deg, #1b5e20, #2e7d2e);">
                        <h5 class="mb-0 fw-bold">
                            <i class="bi bi-info-circle me-2"></i>Quick Facts
                        </h5>
                    </div>
                    <div class="card-body bg-light">
                        <div class="fact-item mb-3 d-flex align-items-center">
                            <i class="bi bi-calendar-check text-success me-3 fs-5"></i>
                            <div>
                                <strong>Founded:</strong> <span class="text-primary">2018</span>
                            </div>
                        </div>
                        <div class="fact-item mb-3 d-flex align-items-center">
                            <i class="bi bi-trophy text-warning me-3 fs-5"></i>
                            <div>
                                <strong>League:</strong> <span class="text-primary">StarTimes FUFA Premier League</span>
                            </div>
                        </div>
                        <div class="fact-item mb-3 d-flex align-items-center">
                            <i class="bi bi-geo-alt text-danger me-3 fs-5"></i>
                            <div>
                                <strong>Home Ground:</strong> <span class="text-primary">Kigaaya Playground</span>
                            </div>
                        </div>
                        <div class="fact-item mb-3 d-flex align-items-center">
                            <i class="bi bi-people text-info me-3 fs-5"></i>
                            <div>
                                <strong>Capacity:</strong> <span class="text-primary">5,000</span>
                            </div>
                        </div>
                        <div class="fact-item mb-3 d-flex align-items-center">
                            <i class="bi bi-palette text-primary me-3 fs-5"></i>
                            <div>
                                <strong>Colors:</strong> 
                                <span class="badge me-1" style="background-color: #1b5e20; color: white;">Green</span>
                                <span class="badge me-1" style="background-color: white; color: #333; border: 1px solid #ddd;">White</span>
                                <span class="badge" style="background-color: #87ceeb; color: #333;">Light Blue</span>
                            </div>
                        </div>
                        <div class="fact-item mb-3 d-flex align-items-center">
                            <i class="bi bi-star text-warning me-3 fs-5"></i>
                            <div>
                                <strong>Nickname:</strong> <span class="text-primary fw-bold">The Saints</span>
                            </div>
                        </div>
                        <div class="fact-item mb-3 d-flex align-items-center">
                            <i class="bi bi-heart text-danger me-3 fs-5"></i>
                            <div>
                                <strong>Ownership:</strong> <span class="text-primary">Community</span>
                            </div>
                        </div>
                        <div class="fact-item d-flex align-items-center">
                            <i class="bi bi-quote text-success me-3 fs-5"></i>
                            <div>
                                <strong>Motto:</strong> <span class="text-primary fst-italic">"One Team • One Dream"</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Achievements -->
                <div class="card border-0 shadow-lg" style="border-left: 5px solid #ffd700 !important;">
                    <div class="card-header text-dark" style="background: linear-gradient(135deg, #ffd700, #ffed4e);">
                        <h5 class="mb-0 fw-bold">
                            <i class="bi bi-trophy me-2"></i>Major Achievements
                        </h5>
                    </div>
                    <div class="card-body bg-light">
                        <div class="achievement-item mb-3 p-3 rounded" style="background: rgba(255, 215, 0, 0.1); border-left: 4px solid #ffd700;">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-award text-warning me-3 fs-4"></i>
                                <div>
                                    <strong class="text-success">Kitara Region League Champions</strong><br>
                                    <small class="text-muted">2023/2024 Season</small>
                                </div>
                            </div>
                        </div>
                        <div class="achievement-item mb-3 p-3 rounded" style="background: rgba(27, 94, 32, 0.1); border-left: 4px solid #1b5e20;">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-arrow-up-circle text-success me-3 fs-4"></i>
                                <div>
                                    <strong class="text-success">UPL Promotion</strong><br>
                                    <small class="text-muted">Earned 2025 Premier League spot</small>
                                </div>
                            </div>
                        </div>
                        <div class="achievement-item mb-3 p-3 rounded" style="background: rgba(135, 206, 235, 0.1); border-left: 4px solid #87ceeb;">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-people text-info me-3 fs-4"></i>
                                <div>
                                    <strong class="text-info">Community Impact Award</strong><br>
                                    <small class="text-muted">2023 - Community Development</small>
                                </div>
                            </div>
                        </div>
                        <div class="achievement-item p-3 rounded" style="background: rgba(40, 167, 69, 0.1); border-left: 4px solid #28a745;">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-star text-success me-3 fs-4"></i>
                                <div>
                                    <strong class="text-success">Most Valuable Club</strong><br>
                                    <small class="text-muted">Bunyoro Region Recognition</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission, Vision & Values -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center border-0 shadow-lg">
                    <div class="card-body p-4">
                        <div class="icon-circle mb-3 mx-auto d-flex align-items-center justify-content-center" 
                             style="width: 80px; height: 80px; background: linear-gradient(135deg, #1b5e20, #2e7d2e); border-radius: 50%;">
                            <i class="bi bi-target text-white fs-1"></i>
                        </div>
                        <h4 class="fw-bold text-club-green mb-3">Our Mission</h4>
                        <p class="text-muted">
                            To compete at the highest level of Ugandan football while developing 
                            local talent from our community and contributing positively to the 
                            Bunyoro Region through the beautiful game of football.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center border-0 shadow-lg">
                    <div class="card-body p-4">
                        <div class="icon-circle mb-3 mx-auto d-flex align-items-center justify-content-center" 
                             style="width: 80px; height: 80px; background: linear-gradient(135deg, #87ceeb, #4fc3f7); border-radius: 50%;">
                            <i class="bi bi-eye text-white fs-1"></i>
                        </div>
                        <h4 class="fw-bold text-info mb-3">Our Vision</h4>
                        <p class="text-muted">
                            To become the most respected and successful community-owned football club 
                            in Uganda, known for our unity, excellence, and commitment to developing 
                            world-class talent while serving our community.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center border-0 shadow-lg">
                    <div class="card-body p-4">
                        <div class="icon-circle mb-3 mx-auto d-flex align-items-center justify-content-center" 
                             style="width: 80px; height: 80px; background: linear-gradient(135deg, #1b5e20, #2e7d2e); border-radius: 50%;">
                            <i class="bi bi-heart text-white fs-1"></i>
                        </div>
                        <h4 class="fw-bold text-club-green mb-3">Our Values</h4>
                        <div class="text-start">
                            <div class="value-item mb-2 d-flex align-items-center">
                                <i class="bi bi-check-circle text-success me-2"></i>
                                <span><strong>Unity:</strong> One Team, One Dream</span>
                            </div>
                            <div class="value-item mb-2 d-flex align-items-center">
                                <i class="bi bi-check-circle text-success me-2"></i>
                                <span><strong>Passion:</strong> Love for the beautiful game</span>
                            </div>
                            <div class="value-item mb-2 d-flex align-items-center">
                                <i class="bi bi-check-circle text-success me-2"></i>
                                <span><strong>Excellence:</strong> Striving for greatness</span>
                            </div>
                            <div class="value-item mb-2 d-flex align-items-center">
                                <i class="bi bi-check-circle text-success me-2"></i>
                                <span><strong>Community:</strong> Serving our people</span>
                            </div>
                            <div class="value-item d-flex align-items-center">
                                <i class="bi bi-check-circle text-success me-2"></i>
                                <span><strong>Integrity:</strong> Fair play always</span>
                            </div>
                        </div>
                        <div class="mt-4 p-3 rounded" style="background: linear-gradient(135deg, rgba(27, 94, 32, 0.1), rgba(135, 206, 235, 0.1));">
                            <h6 class="fw-bold text-primary mb-1">Our Motto</h6>
                            <p class="fst-italic text-success mb-0 fw-bold">"One Team • One Dream"</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Management & Structure -->
<section class="py-5">
    <div class="container">
        <h2 class="fw-bold text-club-green text-center mb-5">Club Structure</h2>
        
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <i class="bi bi-person-badge text-club-green fs-2 mb-3"></i>
                        <h5 class="fw-bold">Executive</h5>
                        <p class="text-muted">Strategic leadership and governance of the club</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <i class="bi bi-people text-club-green fs-2 mb-3"></i>
                        <h5 class="fw-bold">Technical Team</h5>
                        <p class="text-muted">Coaches and support staff developing our players</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <i class="bi bi-gear text-club-green fs-2 mb-3"></i>
                        <h5 class="fw-bold">Operations</h5>
                        <p class="text-muted">Day-to-day management and logistics</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <i class="bi bi-heart text-club-green fs-2 mb-3"></i>
                        <h5 class="fw-bold">Community</h5>
                        <p class="text-muted">Outreach and supporter engagement programs</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Community Impact -->
<section class="py-5 bg-club-green text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4">Community Impact</h2>
                <p class="lead mb-4">
                    At Buhimba United Saints FC, we believe in giving back to the community 
                    that supports us. Our impact extends far beyond the football pitch.
                </p>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-people-fill fs-4 me-3"></i>
                            <div>
                                <h6 class="mb-1 fw-bold">Youth Football Academy</h6>
                                <small>Scouting and Nurturing young Talents</small>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-heart-pulse fs-4 me-3"></i>
                            <div>
                                <h6 class="mb-1 fw-bold">Health Initiatives</h6>
                                <small>Community health and wellness programs</small>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            
        </div>
    </div>
</section>

<!-- Home Ground & Facilities -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="fw-bold text-club-green mb-4">
                    <i class="bi bi-geo-alt me-2"></i>Our Home - Kigaaya Playground
                </h2>
                <p class="lead mb-4">
                    Kigaaya Playground is more than just our home ground – it's the heart of our community 
                    where dreams come alive and memories are made. Located in Kigaaya LC1, this is where 
                    the Saints create magic on the pitch.
                </p>
                
                <div class="text-center mb-4">
                    <img src="{{ asset('images/kigaaya_playground.jpg') }}" alt="Kigaaya Playground" 
                         class="img-fluid rounded shadow" style="max-height: 400px; filter: drop-shadow(0 0 15px rgba(0,0,0,0.3));">
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card border-0 shadow-lg" style="border-left: 5px solid #ADD8E6 !important;">
                    <div class="card-header text-white" style="background: linear-gradient(135deg, #1b5e20, #2e7d2e);">
                        <h5 class="mb-0 fw-bold">
                            <i class="bi bi-info-circle me-2"></i>Ground Information
                        </h5>
                    </div>
                    <div class="card-body bg-light">
                        <div class="info-item mb-3 d-flex align-items-center">
                            <i class="bi bi-people text-primary me-3 fs-5"></i>
                            <div>
                                <strong>Capacity:</strong> <span class="text-success">5,000</span>
                            </div>
                        </div>
                        <div class="info-item mb-3 d-flex align-items-center">
                            <i class="bi bi-calendar-check text-warning me-3 fs-5"></i>
                            <div>
                                <strong>Opened:</strong> <span class="text-success"></span>
                            </div>
                        </div>
                        <div class="info-item mb-3 d-flex align-items-center">
                            <i class="bi bi-grass text-success me-3 fs-5"></i>
                            <div>
                                <strong>Surface:</strong> <span class="text-success">Natural Grass</span>
                            </div>
                        </div>
                        <div class="info-item mb-3 d-flex align-items-center">
                            <i class="bi bi-rulers text-info me-3 fs-5"></i>
                            <div>
                                <strong>Dimensions:</strong> <span class="text-success">105m x 68m</span>
                            </div>
                        </div>
                        <div class="info-item d-flex align-items-start">
                            <i class="bi bi-geo-alt text-danger me-3 fs-5 mt-1"></i>
                            <div>
                                <strong>Location:</strong><br>
                                <span class="text-success">Kigaaya LC1<br>
                                Buhimba Town Council<br>
                                Kikuube District</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="fw-bold text-club-green mb-3">Join Our Journey</h2>
        <p class="lead mb-4">
            Be part of the Buhimba United Saints FC family. Whether as a fan, partner, or community member,
            there are many ways to get involved and support our mission.
        </p>
        
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="{{ route('contact') }}" class="btn btn-club-primary btn-lg">
                <i class="bi bi-envelope me-2"></i>Contact Us
            </a>
            <a href="{{ route('fixtures.index') }}" class="btn btn-outline-club-green btn-lg">
                <i class="bi bi-calendar me-2"></i>View Fixtures
            </a>
            <a href="{{ route('players.index') }}" class="btn btn-outline-club-green btn-lg">
                <i class="bi bi-people me-2"></i>Meet Our Team
            </a>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
.stat-item {
    text-align: center;
    min-width: 80px;
    padding: 10px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 10px;
    backdrop-filter: blur(5px);
    transition: transform 0.3s ease;
}

.stat-item:hover {
    transform: translateY(-5px);
    background: rgba(255, 255, 255, 0.2);
}

.timeline-item {
    border-left: 3px solid var(--bs-club-green);
    padding-left: 20px;
    margin-left: 15px;
    position: relative;
    transition: all 0.3s ease;
}

.timeline-item:hover {
    border-left-color: #ffd700;
    transform: translateX(10px);
}

.timeline-item::before {
    content: '';
    position: absolute;
    left: -8px;
    top: 10px;
    width: 12px;
    height: 12px;
    background-color: var(--bs-club-green);
    border-radius: 50%;
    transition: all 0.3s ease;
}

.timeline-item:hover::before {
    background-color: #ffd700;
    transform: scale(1.2);
}

.timeline-date {
    font-size: 0.9rem;
    transition: all 0.3s ease;
    cursor: pointer;
}

.timeline-date:hover {
    transform: scale(1.05);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.fact-item, .achievement-item, .info-item {
    padding: 0.8rem 0;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.fact-item:hover, .achievement-item:hover, .info-item:hover {
    background: rgba(27, 94, 32, 0.05);
    border-radius: 8px;
    padding-left: 10px;
    margin: 0 -10px;
}

.fact-item:last-child, 
.achievement-item:last-child, 
.info-item:last-child {
    border-bottom: none;
}

.card {
    transition: all 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1) !important;
}

.icon-circle {
    transition: all 0.3s ease;
}

.card:hover .icon-circle {
    transform: scale(1.1) rotate(10deg);
}

.value-item {
    transition: all 0.3s ease;
    padding: 5px;
    border-radius: 5px;
}

.value-item:hover {
    background: rgba(27, 94, 32, 0.1);
    transform: translateX(10px);
}

.bg-club-green {
    background: linear-gradient(135deg, #1b5e20, #2e7d2e) !important;
}

.text-club-green {
    color: #1b5e20 !important;
}

.achievement-item {
    transition: all 0.3s ease;
}

.achievement-item:hover {
    transform: scale(1.02);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

/* Enhanced responsive design */
@media (max-width: 768px) {
    .timeline-item {
        margin-left: 0;
        border-left: none;
        padding-left: 0;
        border-bottom: 2px solid var(--bs-club-green);
        padding-bottom: 15px;
        margin-bottom: 20px;
    }
    
    .timeline-item::before {
        display: none;
    }
    
    .timeline-date {
        margin-bottom: 1rem;
    }
    
    .stat-item {
        margin-bottom: 10px;
    }
    
    .display-4 {
        font-size: 2rem !important;
    }
    
    .lead {
        font-size: 1.1rem !important;
    }
}

/* Color scheme enhancements */
:root {
    --bs-club-green: #1b5e20;
    --bs-club-light-blue: #87ceeb;
    --bs-club-white: #ffffff;
}

/* Custom gradients for club colors */
.club-gradient {
    background: linear-gradient(135deg, #1b5e20, #87ceeb, #ffffff);
}

/* Animations */
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

.card {
    animation: fadeInUp 0.6s ease-out;
}

.timeline-item {
    animation: fadeInUp 0.8s ease-out;
}

/* Logo glow effect enhancement */
img[alt*="logo"] {
    transition: all 0.3s ease;
}

img[alt*="logo"]:hover {
    filter: drop-shadow(0 0 30px rgba(255,215,0,0.8)) !important;
    transform: scale(1.05);
}
</style>
@endpush
