@extends('layouts.public')

@section('title', 'Contact Us - Buhimba United Saints FC')
@section('description', 'Get in touch with Buhimba United Saints FC. Contact information, location, and inquiry form for fans, media, and business inquiries.')

@section('content')
<!-- Page Header -->
<section class="bg-club-green text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">Contact Us</h1>
                <p class="lead mb-0">Get in touch with Buhimba United Saints FC. We'd love to hear from you!</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <div class="bg-white bg-opacity-20 rounded p-3">
                    <h5 class="mb-1">
                        <i class="bi bi-clock me-2"></i>Office Hours
                    </h5>
                    <div class="fw-bold">Mon - Fri: 8:00 - 17:00</div>
                    <small>Saturday: 9:00 - 13:00</small>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Information -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5">
                <h2 class="fw-bold text-club-green mb-4">Send us a Message</h2>
                
                <!-- Contact Form -->
                <form action="{{ route('contact.submit') }}" method="POST" class="contact-form">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label fw-semibold">Full Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label fw-semibold">Email Address <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="phone" class="form-label fw-semibold">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="subject" class="form-label fw-semibold">Subject <span class="text-danger">*</span></label>
                            <select class="form-select" id="subject" name="subject" required>
                                <option value="">Select Subject</option>
                                <option value="general">General Inquiry</option>
                                <option value="media">Media & Press</option>
                                <option value="sponsorship">Sponsorship Opportunity</option>
                                <option value="tickets">Ticket Information</option>
                                <option value="fan">Fan Club & Membership</option>
                                <option value="youth">Youth Development</option>
                                <option value="careers">Career Opportunities</option>
                                <option value="community">Community Programs</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="message" class="form-label fw-semibold">Message <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="message" name="message" rows="6" 
                                  placeholder="Please provide details about your inquiry..." required></textarea>
                    </div>
                    
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="newsletter" name="newsletter" value="1">
                            <label class="form-check-label" for="newsletter">
                                Subscribe to our newsletter for club updates and news
                            </label>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="privacy" name="privacy" required>
                            <label class="form-check-label" for="privacy">
                                I agree to the <a href="#" class="text-club-green">Privacy Policy</a> and <a href="#" class="text-club-green">Terms of Service</a> <span class="text-danger">*</span>
                            </label>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-club-primary btn-lg">
                        <i class="bi bi-send me-2"></i>Send Message
                    </button>
                </form>
            </div>
            
            <div class="col-lg-4">
                <!-- Contact Information Cards -->
                <div class="contact-info">
                    <!-- Main Office -->
                    <div class="card mb-4 border-club-green">
                        <div class="card-header bg-club-green text-white">
                            <h5 class="mb-0 fw-bold">
                                <i class="bi bi-building me-2"></i>Main Office
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="contact-item mb-3">
                                <i class="bi bi-geo-alt text-club-green fs-5 me-3"></i>
                                <div>
                                    <strong>Address:</strong><br>
                                    Buhimba United Saints FC<br>
                                    Kigaaya Playground, Kigaaya LC1<br>
                                    Buhimba Town Council, Kikuube District<br>
                                    Uganda
                                </div>
                            </div>
                            
                            <div class="contact-item mb-3">
                                <i class="bi bi-telephone text-club-green fs-5 me-3"></i>
                                <div>
                                    <strong>Phone:</strong><br>
                                    +256 700 123 456<br>
                                    +256 752 987 654
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <i class="bi bi-envelope text-club-green fs-5 me-3"></i>
                                <div>
                                    <strong>Email:</strong><br>
                                    info@buhimbasaints.com<br>
                                    admin@buhimbasaints.com
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Media Contact -->
                    <div class="card mb-4">
                        <div class="card-header bg-light">
                            <h6 class="mb-0 fw-bold text-club-green">
                                <i class="bi bi-camera me-2"></i>Media Inquiries
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="contact-item">
                                <i class="bi bi-person text-club-green fs-5 me-3"></i>
                                <div>
                                    <strong>Media Officer:</strong><br>
                                    Sarah Namukasa<br>
                                    media@buhimbasaints.com<br>
                                    +256 701 234 567
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Business Contact -->
                    <div class="card mb-4">
                        <div class="card-header bg-light">
                            <h6 class="mb-0 fw-bold text-club-green">
                                <i class="bi bi-briefcase me-2"></i>Business & Partnerships
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="contact-item">
                                <i class="bi bi-person text-club-green fs-5 me-3"></i>
                                <div>
                                    <strong>Business Manager:</strong><br>
                                    John Kasozi<br>
                                    business@buhimbasaints.com<br>
                                    +256 702 345 678
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="card">
                        <div class="card-header bg-light">
                            <h6 class="mb-0 fw-bold text-club-green">
                                <i class="bi bi-share me-2"></i>Follow Us
                            </h6>
                        </div>
                        <div class="card-body text-center">
                            <div class="social-links">
                                <a href="#" class="btn btn-outline-primary btn-sm me-2 mb-2">
                                    <i class="bi bi-facebook"></i> Facebook
                                </a>
                                <a href="#" class="btn btn-outline-info btn-sm me-2 mb-2">
                                    <i class="bi bi-twitter"></i> Twitter
                                </a>
                                <a href="#" class="btn btn-outline-danger btn-sm me-2 mb-2">
                                    <i class="bi bi-instagram"></i> Instagram
                                </a>
                                <a href="#" class="btn btn-outline-danger btn-sm mb-2">
                                    <i class="bi bi-youtube"></i> YouTube
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Location & Map -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <h2 class="fw-bold text-club-green mb-4">Find Us</h2>
                <p class="lead mb-4">
                    Located in Kikuube District, Buhimba Town Council at Kigaaya LC1, our playground and offices are easily accessible 
                    for fans, visitors, and business partners.
                </p>
                
                <div class="location-info">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-car-front text-club-green fs-4 me-3"></i>
                                <div>
                                    <h6 class="mb-1 fw-bold">By Car</h6>
                                    <small class="text-muted">Free parking available</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-bus-front text-club-green fs-4 me-3"></i>
                                <div>
                                    <h6 class="mb-1 fw-bold">Public Transport</h6>
                                    <small class="text-muted">Regular bus services</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-bicycle text-club-green fs-4 me-3"></i>
                                <div>
                                    <h6 class="mb-1 fw-bold">Cycling</h6>
                                    <small class="text-muted">Bike-friendly routes</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-person-walking text-club-green fs-4 me-3"></i>
                                <div>
                                    <h6 class="mb-1 fw-bold">Walking</h6>
                                    <small class="text-muted">10 min from town center</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Operating Hours -->
                <div class="mt-4">
                    <h5 class="fw-bold text-club-green mb-3">Operating Hours</h5>
                    <div class="hours-table">
                        <div class="row border-bottom py-2">
                            <div class="col-6"><strong>Monday - Friday</strong></div>
                            <div class="col-6">8:00 AM - 5:00 PM</div>
                        </div>
                        <div class="row border-bottom py-2">
                            <div class="col-6"><strong>Saturday</strong></div>
                            <div class="col-6">9:00 AM - 1:00 PM</div>
                        </div>
                        <div class="row py-2">
                            <div class="col-6"><strong>Sunday</strong></div>
                            <div class="col-6">Closed (Match Days Open)</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <!-- Map Placeholder -->
                <div class="map-container">
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-center text-white" 
                         style="height: 400px;">
                        <div class="text-center">
                            <i class="bi bi-geo-alt fs-1 mb-3"></i>
                            <h4>Interactive Map</h4>
                            <p>Buhimba Stadium Location</p>
                            <button class="btn btn-light" onclick="openMap()">
                                <i class="bi bi-geo-alt me-2"></i>Get Directions
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5">
    <div class="container">
        <h2 class="fw-bold text-club-green text-center mb-5">Frequently Asked Questions</h2>
        
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" 
                                    data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                How can I purchase match tickets?
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="faq1" 
                             data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Tickets can be purchased at the stadium box office, through our official website, 
                                or from authorized vendors. Season tickets are also available for dedicated supporters.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                                    data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                How can I join the youth academy?
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2" 
                             data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Our youth academy holds trials annually. Contact our youth development coordinator 
                                at youth@buhimbasaints.com for information about upcoming trials and requirements.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                                    data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                Are stadium tours available?
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3" 
                             data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes! Stadium tours are available on non-match days. Please contact us to schedule 
                                a tour. Group discounts are available for schools and organizations.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                                    data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                How can I become a sponsor or partner?
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="faq4" 
                             data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We welcome partnerships with businesses of all sizes. Contact our business manager 
                                at business@buhimbasaints.com to discuss sponsorship packages and partnership opportunities.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                                    data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                Where can I buy official merchandise?
                            </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="faq5" 
                             data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Official club merchandise is available at the stadium shop, during match days, 
                                and through our online store. We offer jerseys, scarves, caps, and other club items.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 bg-club-green text-white">
    <div class="container text-center">
        <h2 class="fw-bold mb-3">Ready to Get Involved?</h2>
        <p class="lead mb-4">
            Whether you're a fan, potential partner, or member of the media, 
            we're here to help and answer your questions.
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="{{ route('fixtures.index') }}" class="btn btn-light btn-lg">
                <i class="bi bi-calendar me-2"></i>Match Tickets
            </a>
            <a href="{{ route('sponsors.index') }}" class="btn btn-outline-light btn-lg">
                <i class="bi bi-handshake me-2"></i>Partnership
            </a>
            <a href="{{ route('news.index') }}" class="btn btn-outline-light btn-lg">
                <i class="bi bi-newspaper me-2"></i>Latest News
            </a>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
.contact-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 1rem;
}

.contact-item:last-child {
    margin-bottom: 0;
}

.contact-form .form-control,
.contact-form .form-select {
    border-radius: 8px;
    border: 2px solid #e9ecef;
    transition: border-color 0.3s ease;
}

.contact-form .form-control:focus,
.contact-form .form-select:focus {
    border-color: var(--bs-club-green);
    box-shadow: 0 0 0 0.2rem rgba(var(--bs-success-rgb), 0.25);
}

.map-container {
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

.hours-table .row {
    margin: 0;
}

.accordion-button:not(.collapsed) {
    background-color: var(--bs-club-green);
    color: white;
}

.accordion-button:focus {
    box-shadow: 0 0 0 0.25rem rgba(var(--bs-success-rgb), 0.25);
}

@media (max-width: 768px) {
    .contact-item {
        flex-direction: column;
        text-align: center;
    }
    
    .contact-item i {
        margin-bottom: 0.5rem;
    }
}
</style>
@endpush

@push('scripts')
<script>
// Form submission handling
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.querySelector('.contact-form');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Basic form validation
            const requiredFields = contactForm.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('is-invalid');
                } else {
                    field.classList.remove('is-invalid');
                }
            });
            
            if (isValid) {
                // Simulate form submission
                const submitBtn = contactForm.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerHTML;
                
                submitBtn.innerHTML = '<i class="bi bi-spinner spin me-2"></i>Sending...';
                submitBtn.disabled = true;
                
                setTimeout(() => {
                    alert('Thank you for your message! We will get back to you soon.');
                    contactForm.reset();
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                }, 2000);
            }
        });
    }
});

// Map function
function openMap() {
    // This would normally open Google Maps or another mapping service
    alert('Opening map with directions to Buhimba Stadium...');
}

// Add spinner animation
const style = document.createElement('style');
style.textContent = `
    .spin {
        animation: spin 1s linear infinite;
    }
    
    @keyframes spin {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
`;
document.head.appendChild(style);
</script>
@endpush
