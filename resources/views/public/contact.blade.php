@extends('layouts.public')

@section('title', 'Contact Us - Buhimba United Saints FC')
@section('description', 'Get in touch with Buhimba United Saints FC. Contact information, location, and inquiry form for fans, media, and business inquiries.')

@section('content')
<!-- Enhanced Hero Section with Background -->
<section class="contact-hero position-relative text-white py-5 overflow-hidden">
    <div class="hero-background"></div>
    <div class="hero-overlay"></div>
    <div class="hero-pattern"></div>
    <div class="container position-relative">
        <div class="row align-items-center min-vh-50">
            <div class="col-lg-8">
                <div class="hero-content" data-aos="fade-right">
                    <h1 class="display-3 fw-bold mb-4">Get In Touch</h1>
                    <p class="lead mb-4 fs-4">We'd love to hear from you! Whether you're a fan, potential partner, or member of the media, our team is here to help.</p>

                </div>
            </div>
            <div class="col-lg-4 text-lg-end">
                <div class="hero-card bg-white bg-opacity-15 backdrop-blur rounded-4 p-4" data-aos="fade-left">
                    <div class="d-flex align-items-center mb-3">
                        <div class="icon-circle bg-warning bg-opacity-20 rounded-circle p-3 me-3">
                            <i class="bi bi-clock text-warning fs-4"></i>
                        </div>
                        <div>
                            <h5 class="mb-1 fw-bold">Office Hours</h5>
                            <small class="opacity-75">We're here to help</small>
                        </div>
                    </div>
                    <div class="office-hours">
                        <div class="d-flex justify-content-between py-2 border-bottom border-white border-opacity-25">
                            <span class="fw-semibold">Mon - Fri</span>
                            <span>8:00 - 17:00</span>
                        </div>
                        <div class="d-flex justify-content-between py-2">
                            <span class="fw-semibold">Saturday</span>
                            <span>9:00 - 13:00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Enhanced Contact Form Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5">
                <div class="contact-form-wrapper" data-aos="fade-right">
                    <div class="section-header mb-5">
                        <h2 class="display-6 fw-bold text-dark mb-3">Send us a Message</h2>
                        <p class="lead text-muted">We'd love to hear from you. Fill out the form below and we'll get back to you as soon as possible.</p>
                    </div>

                    <!-- Enhanced Contact Form -->
                    <div class="contact-form-card bg-white rounded-4 shadow-lg border-0 p-5">
                        <form action="{{ route('contact.submit') }}" method="POST" class="contact-form">
                            @csrf
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control form-control-lg border-2" id="name" name="name" placeholder="Your Full Name" required>
                                        <label for="name">Full Name <span class="text-danger">*</span></label>
                                        <div class="form-icon">
                                            <i class="bi bi-person text-muted"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control form-control-lg border-2" id="email" name="email" placeholder="your@email.com" required>
                                        <label for="email">Email Address <span class="text-danger">*</span></label>
                                        <div class="form-icon">
                                            <i class="bi bi-envelope text-muted"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-4 mt-2">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="tel" class="form-control form-control-lg border-2" id="phone" name="phone" placeholder="+256 700 000 000">
                                        <label for="phone">Phone Number</label>
                                        <div class="form-icon">
                                            <i class="bi bi-telephone text-muted"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select form-select-lg border-2" id="subject" name="subject" required>
                                            <option value="">Choose a subject</option>
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
                                        <label for="subject">Subject <span class="text-danger">*</span></label>
                                        <div class="form-icon">
                                            <i class="bi bi-tag text-muted"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4">
                                <div class="form-floating">
                                    <textarea class="form-control border-2" id="message" name="message" style="height: 150px" placeholder="Tell us about your inquiry..." required></textarea>
                                    <label for="message">Your Message <span class="text-danger">*</span></label>
                                    <div class="form-icon">
                                        <i class="bi bi-chat-dots text-muted"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" id="newsletter" name="newsletter" value="1">
                                    <label class="form-check-label text-muted" for="newsletter">
                                        <i class="bi bi-envelope-plus me-2 text-primary"></i>
                                        Subscribe to our newsletter for club updates and latest news
                                    </label>
                                </div>

                                <div class="form-check mb-4">
                                    <input class="form-check-input" type="checkbox" id="privacy" name="privacy" required>
                                    <label class="form-check-label text-muted" for="privacy">
                                        <i class="bi bi-shield-check me-2 text-success"></i>
                                        I agree to the <a href="#" class="text-decoration-none text-primary fw-semibold">Privacy Policy</a>
                                        and <a href="#" class="text-decoration-none text-primary fw-semibold">Terms of Service</a>
                                        <span class="text-danger">*</span>
                                    </label>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg px-5 py-3 rounded-pill shadow-sm">
                                    <i class="bi bi-send me-2"></i>Send Message
                                    <i class="bi bi-arrow-right ms-2"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <!-- Enhanced Contact Information Cards -->
                <div class="contact-info">
                    <!-- Main Office -->
                    <div class="contact-card bg-white rounded-4 shadow-sm border-0 overflow-hidden mb-4" data-aos="fade-left" data-aos-delay="100">
                        <div class="card-header bg-gradient-primary text-white p-4 border-0">
                            <div class="d-flex align-items-center">
                                <div class="icon-circle bg-white bg-opacity-20 rounded-circle p-3 me-3">
                                    <i class="bi bi-building text-white fs-4"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1 fw-bold">Main Office</h5>
                                    <small class="opacity-75">General Inquiries</small>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <div class="contact-info">
                                <div class="info-item d-flex align-items-start mb-3">
                                    <div class="icon-wrapper bg-primary bg-opacity-10 rounded-circle p-2 me-3 mt-1">
                                        <i class="bi bi-geo-alt text-primary"></i>
                                    </div>
                                    <div>
                                        <div class="fw-semibold text-dark">Address</div>
                                        <div class="text-muted small">
                                            Buhimba United Saints FC<br>
                                            Kigaaya Playground, Kigaaya LC1<br>
                                            Buhimba Town Council, Kikuube District<br>
                                            Uganda
                                        </div>
                                    </div>
                                </div>
                                <div class="info-item d-flex align-items-start mb-3">
                                    <div class="icon-wrapper bg-success bg-opacity-10 rounded-circle p-2 me-3 mt-1">
                                        <i class="bi bi-telephone text-success"></i>
                                    </div>
                                    <div>
                                        <div class="fw-semibold text-dark">Phone</div>
                                        <div class="text-muted small">
                                            <a href="tel:+256700123456" class="text-decoration-none text-muted">+256 700 123 456</a><br>
                                            <a href="tel:+256752987654" class="text-decoration-none text-muted">+256 752 987 654</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-item d-flex align-items-start">
                                    <div class="icon-wrapper bg-warning bg-opacity-10 rounded-circle p-2 me-3 mt-1">
                                        <i class="bi bi-envelope text-warning"></i>
                                    </div>
                                    <div>
                                        <div class="fw-semibold text-dark">Email</div>
                                        <div class="text-muted small">
                                            <a href="mailto:info@buhimbasaints.com" class="text-decoration-none text-muted">info@buhimbasaints.com</a><br>
                                            <a href="mailto:admin@buhimbasaints.com" class="text-decoration-none text-muted">admin@buhimbasaints.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent p-4 border-0">
                            <a href="mailto:info@buhimbasaints.com" class="btn btn-outline-primary w-100 rounded-3">
                                <i class="bi bi-envelope me-2"></i>Send Email
                            </a>
                        </div>
                    </div>

                    <!-- Media Contact -->
                    <div class="contact-card bg-white rounded-4 shadow-sm border-0 overflow-hidden mb-4" data-aos="fade-left" data-aos-delay="200">
                        <div class="card-header bg-gradient-success text-white p-4 border-0">
                            <div class="d-flex align-items-center">
                                <div class="icon-circle bg-white bg-opacity-20 rounded-circle p-3 me-3">
                                    <i class="bi bi-camera text-white fs-4"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1 fw-bold">Media Relations</h5>
                                    <small class="opacity-75">Press & Media Inquiries</small>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <div class="contact-info">
                                <div class="info-item d-flex align-items-start mb-3">
                                    <div class="icon-wrapper bg-success bg-opacity-10 rounded-circle p-2 me-3 mt-1">
                                        <i class="bi bi-person text-success"></i>
                                    </div>
                                    <div>
                                        <div class="fw-semibold text-dark">Media Officer</div>
                                        <div class="text-muted">Keren Atukunda</div>
                                    </div>
                                </div>
                                <div class="info-item d-flex align-items-start mb-3">
                                    <div class="icon-wrapper bg-primary bg-opacity-10 rounded-circle p-2 me-3 mt-1">
                                        <i class="bi bi-telephone text-primary"></i>
                                    </div>
                                    <div>
                                        <div class="fw-semibold text-dark">Direct Line</div>
                                        <a href="tel:+256701234567" class="text-decoration-none text-muted">+256 701 234 567</a>
                                    </div>
                                </div>
                                <div class="info-item d-flex align-items-start">
                                    <div class="icon-wrapper bg-warning bg-opacity-10 rounded-circle p-2 me-3 mt-1">
                                        <i class="bi bi-envelope text-warning"></i>
                                    </div>
                                    <div>
                                        <div class="fw-semibold text-dark">Media Email</div>
                                        <a href="mailto:media@buhimbasaints.com" class="text-decoration-none text-muted">media@buhimbasaints.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent p-4 border-0">
                            <a href="mailto:media@buhimbasaints.com" class="btn btn-outline-success w-100 rounded-3">
                                <i class="bi bi-camera me-2"></i>Media Inquiry
                            </a>
                        </div>
                    </div>



                    <!-- Social Media -->
                    <div class="contact-card bg-white rounded-4 shadow-sm border-0 overflow-hidden" data-aos="fade-left" data-aos-delay="400">
                        <div class="card-header bg-gradient-dark text-white p-4 border-0">
                            <div class="d-flex align-items-center">
                                <div class="icon-circle bg-white bg-opacity-20 rounded-circle p-3 me-3">
                                    <i class="bi bi-share text-white fs-4"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1 fw-bold">Follow Us</h5>
                                    <small class="opacity-75">Stay connected</small>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-4 text-center">
                            <div class="social-links d-grid gap-2">
                                <a href="#" class="btn btn-outline-primary btn-sm d-flex align-items-center justify-content-center">
                                    <i class="bi bi-facebook me-2"></i> Facebook
                                </a>
                                <a href="#" class="btn btn-outline-info btn-sm d-flex align-items-center justify-content-center">
                                    <i class="bi bi-twitter me-2"></i> Twitter
                                </a>
                                <a href="#" class="btn btn-outline-danger btn-sm d-flex align-items-center justify-content-center">
                                    <i class="bi bi-instagram me-2"></i> Instagram
                                </a>
                                <a href="#" class="btn btn-outline-danger btn-sm d-flex align-items-center justify-content-center">
                                    <i class="bi bi-youtube me-2"></i> YouTube
                                </a>
                            </div>
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
                                Tickets can be purchased at the stadium box office, Soon we shall open up selling via online. Season tickets are also available for dedicated supporters.
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
                                for information about upcoming trials and requirements.
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
                                to discuss sponsorship packages and partnership opportunities.
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
                                and through our online store opening soon. We offer jerseys, scarves, caps, and other club items.
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
    /* Enhanced Contact Page Styles */

    /* Hero Section */
    .contact-hero {
        min-height: 60vh;
        position: relative;
        overflow: hidden;
    }

    .hero-background {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        z-index: 1;
    }

    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.4);
        z-index: 2;
    }

    .hero-pattern {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image:
            radial-gradient(circle at 25% 25%, rgba(255, 255, 255, 0.1) 2px, transparent 0),
            radial-gradient(circle at 75% 75%, rgba(255, 255, 255, 0.1) 2px, transparent 0);
        background-size: 50px 50px;
        z-index: 2;
    }

    .hero-content {
        z-index: 3;
        position: relative;
    }

    .hero-stats .stat-item {
        text-align: center;
    }

    .hero-card {
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .min-vh-50 {
        min-height: 50vh;
    }

    /* Contact Form Enhancements */
    .contact-form-card {
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: 1px solid rgba(0, 0, 0, 0.05) !important;
    }

    .form-floating {
        position: relative;
    }

    .form-floating .form-icon {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        z-index: 10;
        pointer-events: none;
    }

    .form-floating .form-control,
    .form-floating .form-select {
        border-radius: 12px;
        border: 2px solid #e9ecef;
        transition: all 0.3s ease;
        padding-right: 45px;
    }

    .form-floating .form-control:focus,
    .form-floating .form-select:focus {
        border-color: #0d6efd;
        box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.15);
        transform: translateY(-2px);
    }

    .form-floating label {
        color: #6c757d;
        font-weight: 500;
    }

    .form-check-input:checked {
        background-color: #198754;
        border-color: #198754;
    }

    .btn-primary {
        background: linear-gradient(135deg, #0d6efd 0%, #0b5ed7 100%);
        border: none;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(13, 110, 253, 0.3);
    }

    /* Contact Cards */
    .contact-card {
        transition: all 0.3s ease;
        border: 1px solid rgba(0, 0, 0, 0.05) !important;
    }

    .contact-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1) !important;
    }

    .bg-gradient-primary {
        background: linear-gradient(135deg, #0d6efd 0%, #0b5ed7 100%);
    }

    .bg-gradient-success {
        background: linear-gradient(135deg, #198754 0%, #157347 100%);
    }

    .bg-gradient-warning {
        background: linear-gradient(135deg, #ffc107 0%, #ffca2c 100%);
    }

    .bg-gradient-dark {
        background: linear-gradient(135deg, #212529 0%, #495057 100%);
    }

    .icon-circle {
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .icon-wrapper {
        width: 35px;
        height: 35px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .info-item {
        transition: all 0.2s ease;
    }

    .info-item:hover {
        transform: translateX(5px);
    }

    /* Social Links */
    .social-links .btn {
        transition: all 0.3s ease;
        border-width: 2px;
    }

    .social-links .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    /* Map and Location */
    .map-container {
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .location-info .d-flex:hover {
        transform: translateX(5px);
        transition: all 0.3s ease;
    }

    /* FAQ Section */
    .accordion-button:not(.collapsed) {
        background: linear-gradient(135deg, #198754 0%, #157347 100%);
        color: white;
    }

    .accordion-button:focus {
        box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
    }

    .accordion-item {
        border: none;
        margin-bottom: 1rem;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .accordion-button {
        border-radius: 10px !important;
        font-weight: 600;
    }

    /* Hours Table */
    .hours-table {
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.9) 0%, rgba(248, 249, 250, 0.9) 100%);
        border-radius: 10px;
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
    }

    /* Contact Items */
    .contact-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 1rem;
        transition: all 0.3s ease;
    }

    .contact-item:hover {
        transform: translateX(5px);
    }

    .contact-item:last-child {
        margin-bottom: 0;
    }

    /* Call to Action */
    .bg-club-green {
        background: linear-gradient(135deg, #198754 0%, #157347 100%);
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

    .animate-fade-in-up {
        animation: fadeInUp 0.6s ease forwards;
    }

    /* Loading Spinner */
    .spin {
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .contact-hero {
            min-height: 50vh;
        }

        .hero-content h1 {
            font-size: 2.5rem !important;
        }

        .hero-stats {
            flex-direction: column;
            align-items: center;
            gap: 2rem !important;
        }

        .contact-item {
            flex-direction: column;
            text-align: center;
        }

        .contact-item i {
            margin-bottom: 0.5rem;
        }

        .form-floating .form-icon {
            display: none;
        }

        .contact-form-card {
            padding: 2rem !important;
        }
    }

    @media (max-width: 576px) {
        .hero-content h1 {
            font-size: 2rem !important;
        }

        .hero-content .lead {
            font-size: 1.1rem !important;
        }

        .contact-form-card {
            padding: 1.5rem !important;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    // Enhanced Form Interactions and Animations
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize AOS (Animate On Scroll) if available
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true,
                offset: 100
            });
        }

        // Contact Form Enhancements
        const contactForm = document.querySelector('.contact-form');

        if (contactForm) {
            // Add floating label animations
            const formFloatingElements = contactForm.querySelectorAll('.form-floating input, .form-floating select, .form-floating textarea');

            formFloatingElements.forEach(element => {
                // Add focus effects
                element.addEventListener('focus', function() {
                    this.parentElement.classList.add('focused');
                });

                element.addEventListener('blur', function() {
                    if (!this.value) {
                        this.parentElement.classList.remove('focused');
                    }
                });

                // Check if already has value on page load
                if (element.value) {
                    element.parentElement.classList.add('focused');
                }
            });

            // Form validation with enhanced UX
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();

                const requiredFields = contactForm.querySelectorAll('[required]');
                let isValid = true;

                // Clear previous validation states
                contactForm.querySelectorAll('.is-invalid').forEach(field => {
                    field.classList.remove('is-invalid');
                });

                // Validate each required field
                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        isValid = false;
                        field.classList.add('is-invalid');

                        // Add shake animation to invalid fields
                        field.style.animation = 'shake 0.5s ease-in-out';
                        setTimeout(() => {
                            field.style.animation = '';
                        }, 500);
                    } else {
                        field.classList.add('is-valid');
                    }
                });

                // Email validation
                const emailField = contactForm.querySelector('input[type="email"]');
                if (emailField && emailField.value) {
                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailRegex.test(emailField.value)) {
                        isValid = false;
                        emailField.classList.add('is-invalid');
                        emailField.classList.remove('is-valid');
                    }
                }

                // Phone validation (basic)
                const phoneField = contactForm.querySelector('input[type="tel"]');
                if (phoneField && phoneField.value) {
                    const phoneRegex = /^[\+]?[0-9\s\-\(\)]{10,}$/;
                    if (!phoneRegex.test(phoneField.value)) {
                        isValid = false;
                        phoneField.classList.add('is-invalid');
                        phoneField.classList.remove('is-valid');
                    }
                }

                if (isValid) {
                    // Simulate form submission with loading state
                    const submitBtn = contactForm.querySelector('button[type="submit"]');
                    const originalText = submitBtn.innerHTML;

                    submitBtn.innerHTML = '<i class="bi bi-spinner spin me-2"></i>Sending Message...';
                    submitBtn.disabled = true;
                    submitBtn.classList.add('loading');

                    // Simulate API call
                    setTimeout(() => {
                        // Success animation
                        submitBtn.innerHTML = '<i class="bi bi-check-circle me-2"></i>Message Sent!';
                        submitBtn.classList.remove('btn-primary');
                        submitBtn.classList.add('btn-success');

                        // Show success message
                        showNotification('Thank you for your message! We will get back to you within 24 hours.', 'success');

                        // Reset form after delay
                        setTimeout(() => {
                            contactForm.reset();
                            submitBtn.innerHTML = originalText;
                            submitBtn.disabled = false;
                            submitBtn.classList.remove('btn-success', 'loading');
                            submitBtn.classList.add('btn-primary');

                            // Clear validation states
                            contactForm.querySelectorAll('.is-valid, .is-invalid').forEach(field => {
                                field.classList.remove('is-valid', 'is-invalid');
                            });
                        }, 3000);
                    }, 2000);
                } else {
                    showNotification('Please fill in all required fields correctly.', 'error');
                }
            });
        }

        // Enhanced Contact Card Interactions
        const contactCards = document.querySelectorAll('.contact-card');
        contactCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Social Links Hover Effects
        const socialLinks = document.querySelectorAll('.social-links .btn');
        socialLinks.forEach(link => {
            link.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-3px) scale(1.05)';
            });

            link.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Notification System
        function showNotification(message, type = 'info') {
            // Remove existing notifications
            const existingNotifications = document.querySelectorAll('.notification');
            existingNotifications.forEach(notification => notification.remove());

            const notification = document.createElement('div');
            notification.className = `notification alert alert-${type === 'error' ? 'danger' : type} alert-dismissible fade show position-fixed`;
            notification.style.cssText = `
            top: 20px;
            right: 20px;
            z-index: 9999;
            min-width: 300px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
            border: none;
            border-radius: 10px;
        `;

            notification.innerHTML = `
            <div class="d-flex align-items-center">
                <i class="bi bi-${type === 'success' ? 'check-circle' : type === 'error' ? 'exclamation-triangle' : 'info-circle'} me-3 fs-5"></i>
                <div>${message}</div>
                <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert"></button>
            </div>
        `;

            document.body.appendChild(notification);

            // Auto remove after 5 seconds
            setTimeout(() => {
                if (notification.parentNode) {
                    notification.classList.remove('show');
                    setTimeout(() => notification.remove(), 150);
                }
            }, 5000);
        }

        // FAQ Accordion Enhancements
        const accordionButtons = document.querySelectorAll('.accordion-button');
        accordionButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Add smooth scroll to accordion item
                setTimeout(() => {
                    this.scrollIntoView({
                        behavior: 'smooth',
                        block: 'nearest'
                    });
                }, 300);
            });
        });

        // Smooth scrolling for anchor links
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

        // Map interaction
        window.openMap = function() {
            const address = "Kigaaya Playground, Kigaaya LC1, Buhimba Town Council, Kikuube District, Uganda";
            const encodedAddress = encodeURIComponent(address);
            const mapUrl = `https://www.google.com/maps/search/?api=1&query=${encodedAddress}`;
            window.open(mapUrl, '_blank');
        };
    });

    // Add CSS animations
    const style = document.createElement('style');
    style.textContent = `
    @keyframes shake {
        0%, 100% { transform: translateX(0); }
        25% { transform: translateX(-5px); }
        75% { transform: translateX(5px); }
    }
    
    .form-floating.focused label {
        color: #0d6efd !important;
    }
    
    .btn.loading {
        pointer-events: none;
    }
    
    .notification {
        animation: slideInRight 0.3s ease-out;
    }
    
    @keyframes slideInRight {
        from {
            transform: translateX(100%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
`;
    document.head.appendChild(style);
</script>
@endpush