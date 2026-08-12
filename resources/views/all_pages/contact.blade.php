@extends('layouts.app')

@section('CDOE', 'Contact Us | TMU Online')

@section('content')

<!-- Award-Winning Corporate UI Styles -->
<style>
    /* Hero Banner with Floating Glass Pills & Gradient Typography */
    .contact-hero {
        position: relative;
        background: linear-gradient(135deg, rgba(0, 45, 98, 0.94) 0%, rgba(12, 30, 75, 0.90) 100%), 
                    url('/assets/img/bread-crum.jpg') center/cover no-repeat;
        padding-top: 175px;
        padding-bottom: 100px;
        color: #ffffff;
        overflow: hidden;
    }

    @media (max-width: 768px) {
        .contact-hero {
            padding-top: 140px;
            padding-bottom: 75px;
        }
    }

    /* Ambient Decorative Floating Glow */
    .contact-hero::before {
        content: '';
        position: absolute;
        top: -30%;
        right: -10%;
        width: 500px;
        height: 500px;
        background: radial-gradient(circle, rgba(255, 121, 0, 0.25) 0%, rgba(255, 121, 0, 0) 70%);
        border-radius: 50%;
        pointer-events: none;
    }

    .contact-hero .status-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(255, 255, 255, 0.12);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        color: #ffffff;
        padding: 6px 18px;
        border-radius: 30px;
        font-size: 0.85rem;
        font-weight: 600;
        margin-bottom: 20px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .status-badge .dot-indicator {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background-color: #10B981;
        box-shadow: 0 0 10px #10B981;
        animation: pulseGreen 2s infinite;
    }

    @keyframes pulseGreen {
        0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.7); }
        70% { transform: scale(1); box-shadow: 0 0 0 8px rgba(16, 185, 129, 0); }
        100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(16, 185, 129, 0); }
    }

    .contact-hero h1 {
        font-size: 3.2rem;
        font-weight: 800;
        color: #ffffff;
        margin-bottom: 16px;
        letter-spacing: -0.5px;
    }

    .contact-hero h1 span.text-gradient {
        background: linear-gradient(135deg, #FF9933 0%, #FF7900 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .contact-hero p {
        font-size: 1.15rem;
        color: rgba(255, 255, 255, 0.9);
        max-width: 720px;
        margin: 0 auto 28px auto;
        line-height: 1.6;
    }

    .hero-stats-strip {
        display: flex;
        justify-content: center;
        gap: 24px;
        flex-wrap: wrap;
    }

    .hero-stat-pill {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(0, 0, 0, 0.25);
        border: 1px solid rgba(255, 255, 255, 0.15);
        padding: 8px 18px;
        border-radius: 12px;
        font-size: 0.9rem;
        color: #ffffff;
    }

    .hero-stat-pill i {
        color: #FF7900;
    }

    /* Floating Contact Cards Overlap */
    .info-card-wrapper {
        margin-top: -55px;
        position: relative;
        z-index: 20;
        margin-bottom: 70px;
    }

    .contact-info-card {
        background: #ffffff;
        border: 1px solid rgba(226, 232, 240, 0.8);
        border-radius: 20px;
        padding: 36px 28px;
        height: 100%;
        box-shadow: 0 16px 40px rgba(0, 45, 98, 0.06);
        transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .contact-info-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, #FF7900, #FF9933);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .contact-info-card:hover {
        transform: translateY(-8px) scale(1.01);
        box-shadow: 0 24px 50px rgba(0, 45, 98, 0.12);
        border-color: rgba(255, 121, 0, 0.35);
    }

    .contact-info-card:hover::before {
        opacity: 1;
    }

    .info-card-icon {
        width: 64px;
        height: 64px;
        border-radius: 18px;
        background: linear-gradient(135deg, #FF7900 0%, #E06000 100%);
        color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.6rem;
        margin-bottom: 22px;
        box-shadow: 0 10px 22px rgba(255, 121, 0, 0.3);
        transition: transform 0.3s ease;
    }

    .contact-info-card:hover .info-card-icon {
        transform: scale(1.1) rotate(-4deg);
    }

    .contact-info-card h4 {
        font-size: 1.3rem;
        font-weight: 800;
        color: #002D62;
        margin-bottom: 14px;
    }

    .contact-info-card p, .contact-info-card a {
        font-size: 0.96rem;
        color: #4A5568;
        line-height: 1.65;
        text-decoration: none;
        transition: color 0.25s ease;
    }

    .contact-info-card a:hover {
        color: #FF7900;
    }

    /* Main Section Styling */
    .contact-main-section {
        padding-bottom: 90px;
    }

    .contact-form-box {
        background: #ffffff;
        border: 1px solid #E2E8F0;
        border-radius: 24px;
        padding: 44px 40px;
        box-shadow: 0 20px 45px rgba(0, 45, 98, 0.07);
        position: relative;
    }

    @media (max-width: 576px) {
        .contact-form-box {
            padding: 30px 22px;
        }
    }

    .form-heading-badge {
        display: inline-block;
        font-size: 0.75rem;
        font-weight: 800;
        color: #FF7900;
        background: #FFF7F0;
        padding: 4px 12px;
        border-radius: 6px;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        margin-bottom: 12px;
    }

    .form-heading-title {
        font-size: 2.1rem;
        font-weight: 800;
        color: #002D62;
        margin-bottom: 10px;
        letter-spacing: -0.4px;
    }

    .form-heading-desc {
        font-size: 0.98rem;
        color: #64748B;
        margin-bottom: 32px;
        line-height: 1.6;
    }

    /* Clean Corporate Form Field Styling */
    .form-group-custom {
        margin-bottom: 22px;
    }

    .form-group-custom label {
        display: block;
        font-size: 0.85rem;
        font-weight: 700;
        color: #1E293B;
        margin-bottom: 8px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .form-input-container {
        position: relative;
    }

    .form-input-container .input-icon {
        position: absolute;
        left: 16px;
        top: 50%;
        transform: translateY(-50%);
        color: #94A3B8;
        font-size: 1.15rem;
        transition: color 0.25s ease;
        pointer-events: none;
        z-index: 5;
    }

    .form-input-container.textarea-container .input-icon {
        top: 20px;
        transform: none;
    }

    .corporate-input {
        width: 100%;
        height: 52px;
        padding: 12px 16px 12px 48px;
        border: 1.5px solid #CBD5E1;
        border-radius: 12px;
        font-size: 0.96rem;
        font-weight: 500;
        color: #0F172A;
        background-color: #F8FAFC;
        transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
        outline: none;
    }

    textarea.corporate-input {
        height: 125px;
        padding-top: 14px;
        resize: vertical;
    }

    .corporate-input::placeholder {
        color: #94A3B8;
        font-weight: 400;
    }

    .corporate-input:focus {
        background-color: #ffffff;
        border-color: #FF7900;
        box-shadow: 0 0 0 4px rgba(255, 121, 0, 0.14);
    }

    .form-input-container:focus-within .input-icon {
        color: #FF7900;
    }

    select.corporate-input {
        appearance: none;
        -webkit-appearance: none;
        cursor: pointer;
        padding-right: 36px;
        padding-left: 44px;
        font-size: 0.92rem;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .select-chevron {
        position: absolute;
        right: 16px;
        top: 50%;
        transform: translateY(-50%);
        color: #94A3B8;
        font-size: 0.9rem;
        pointer-events: none;
        transition: transform 0.25s ease, color 0.25s ease;
    }

    .form-input-container:focus-within .select-chevron {
        color: #FF7900;
        transform: translateY(-50%) rotate(180deg);
    }

    /* Submit Button */
    .btn-submit-custom {
        background: linear-gradient(135deg, #FF7900 0%, #E06000 100%);
        color: #ffffff;
        border: none;
        border-radius: 12px;
        padding: 16px 36px;
        font-size: 1.05rem;
        font-weight: 800;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        cursor: pointer;
        width: 100%;
        box-shadow: 0 10px 25px rgba(255, 121, 0, 0.32);
        transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        position: relative;
        overflow: hidden;
    }

    .btn-submit-custom::after {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.6s ease;
    }

    .btn-submit-custom:hover::after {
        left: 100%;
    }

    .btn-submit-custom:hover {
        transform: translateY(-3px);
        box-shadow: 0 14px 32px rgba(255, 121, 0, 0.45);
    }

    .btn-submit-custom i {
        transition: transform 0.25s ease;
    }

    .btn-submit-custom:hover i {
        transform: translateX(4px);
    }

    /* Map & Hotline Box */
    .map-box-container {
        background: #ffffff;
        border: 1px solid #E2E8F0;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 20px 45px rgba(0, 45, 98, 0.07);
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .map-box-container iframe {
        width: 100%;
        flex-grow: 1;
        min-height: 380px;
        border: none;
    }

    .map-content-footer {
        padding: 24px;
        background: #ffffff;
        border-top: 1px solid #F1F5F9;
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .hotline-highlight-box {
        background: #FFF7F0;
        border: 1px solid rgba(255, 121, 0, 0.2);
        border-radius: 16px;
        padding: 18px 20px;
        display: flex;
        align-items: center;
        gap: 16px;
        margin-bottom: 0;
    }

    .hotline-icon {
        width: 48px;
        height: 48px;
        border-radius: 12px;
        background: #FF7900;
        color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.3rem;
        flex-shrink: 0;
    }

    .hotline-details span {
        display: block;
        font-size: 0.78rem;
        font-weight: 700;
        color: #64748B;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .hotline-details a {
        font-size: 1.2rem;
        font-weight: 800;
        color: #002D62;
        text-decoration: none;
    }

    .btn-get-directions {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 0.84rem;
        font-weight: 700;
        color: #FF7900;
        background-color: transparent;
        border: 1.5px solid #FF7900;
        border-radius: 30px;
        padding: 8px 20px;
        margin-top: 8px;
        margin-bottom: 14px;
        text-decoration: none;
        transition: all 0.25s ease;
    }

    .btn-get-directions:hover {
        background-color: #FF7900;
        color: #ffffff;
        box-shadow: 0 4px 12px rgba(255, 121, 0, 0.35);
        transform: translateY(-1px);
    }

    /* FAQ Section */
    .contact-faq-section {
        background: #F8FAFC;
        padding: 90px 0;
        border-top: 1px solid #E2E8F0;
    }

    .contact-faq-section h2 {
        font-size: 2.2rem;
        font-weight: 800;
        color: #002D62;
        margin-bottom: 12px;
    }

    .contact-faq-section p.subtitle {
        color: #64748B;
        font-size: 1.05rem;
        margin-bottom: 45px;
    }

    .accordion-item-custom {
        background: #ffffff;
        border: 1px solid #E2E8F0;
        border-radius: 16px !important;
        margin-bottom: 16px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 45, 98, 0.03);
    }

    .accordion-button-custom {
        width: 100%;
        padding: 20px 24px;
        background: #ffffff;
        border: none;
        text-align: left;
        font-size: 1.05rem;
        font-weight: 700;
        color: #002D62;
        display: flex;
        align-items: center;
        justify-content: space-between;
        cursor: pointer;
        transition: color 0.2s ease;
    }

    .accordion-button-custom:hover {
        color: #FF7900;
    }

    .accordion-body-custom {
        padding: 0 24px 24px 24px;
        font-size: 0.96rem;
        color: #475569;
        line-height: 1.65;
    }
</style>

<!-- Hero Section -->
<section class="contact-hero text-center">
    <div class="container position-relative" style="z-index: 5;">
        <h1>Contact Us</h1>
        <p>Have questions about our UGC & DEB approved online degree programmes? Reach out to our dedicated academic counselors and university support staff.</p>
        <div class="breadcrumb-nav">
            <a href="{{ route('home') }}">Home</a>
            <i class="bi bi-chevron-right" style="font-size: 10px;"></i>
            <span>Contact Us</span>
        </div>
    </div>
</section>

<!-- 3 Floating Contact Cards -->
<section class="info-card-wrapper">
    <div class="container">
        <div class="row g-4">
            
            <!-- Admission Helpline Card -->
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-card">
                    <div class="info-card-icon">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <h4>Admission Helplines</h4>
                    <p class="mb-1">Toll Free: <a href="tel:18002701490" class="fw-bold text-dark">1800 270 1490</a></p>
                    <p class="mb-1">Direct Call: <a href="tel:+918679007289">+91 8679007289</a></p>
                    <p class="mb-0">Counselor Support: <a href="tel:+919520942111">+91 9520942111</a></p>
                </div>
            </div>

            <!-- Email Address Card -->
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-card">
                    <div class="info-card-icon">
                        <i class="bi bi-envelope-paper-fill"></i>
                    </div>
                    <h4>Official Mail Desk</h4>
                    <p class="mb-1">General Inquiries:</p>
                    <p class="mb-2"><a href="mailto:director.cdoe@tmu.ac.in" class="fw-bold">director.cdoe@tmu.ac.in</a></p>
                    <p class="mb-1">Admissions Desk:</p>
                    <p class="mb-0"><a href="mailto:admissions@tmuonline.ac.in">admissions@tmuonline.ac.in</a></p>
                </div>
            </div>

            <!-- University Campus Card -->
            <div class="col-lg-4 col-md-12">
                <div class="contact-info-card">
                    <div class="info-card-icon">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <h4>University Address</h4>
                    <p class="mb-0">Centre for Distance and Online Education (CDOE),<br>
                    Teerthanker Mahaveer University,<br>
                    Delhi Road, NH-9, Moradabad,<br>
                    Uttar Pradesh - 244001</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Form & Interactive Map Split -->
<section class="contact-main-section">
    <div class="container">
        <div class="row g-4 align-items-stretch">
            
            <!-- Left Column: Enquiry Form -->
            <div class="col-lg-7">
                <div class="contact-form-box">
                    <h3 class="form-heading-title">Send Us An Enquiry</h3>
                    <p class="form-heading-desc">Submit your details below. An expert academic advisor will connect with you to guide you through programme details, fees, and admission procedures.</p>

                    <!-- Dynamic Alert Container -->
                    <div id="alertContainer">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert" style="border-left: 4px solid #10B981 !important; background: #ECFDF5; color: #065F46; border-radius: 12px;">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="bi bi-check-circle-fill fs-5"></i>
                                    <div><strong>Success!</strong> {{ session('success') }}</div>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm mb-4" role="alert" style="border-left: 4px solid #EF4444 !important; background: #FEF2F2; color: #991B1B; border-radius: 12px;">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="bi bi-exclamation-triangle-fill fs-5"></i>
                                    <div><strong>Error!</strong> {{ session('error') }}</div>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                    </div>

                    <form id="contactForm" action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        
                        <div class="row">
                            <!-- Full Name -->
                            <div class="col-md-6 form-group-custom">
                                <label for="name">Full Name <span class="text-danger">*</span></label>
                                <div class="form-input-container">
                                    <i class="bi bi-person-fill input-icon"></i>
                                    <input type="text" name="name" id="name" class="corporate-input" placeholder="e.g. Rahul Sharma" value="{{ old('name') }}" required>
                                </div>
                                <small class="text-danger mt-1 d-block js-error" id="error-name">@error('name') {{ $message }} @enderror</small>
                            </div>

                            <!-- Mobile Number -->
                            <div class="col-md-6 form-group-custom">
                                <label for="mobile">Mobile Number <span class="text-danger">*</span></label>
                                <div class="form-input-container">
                                    <i class="bi bi-telephone-fill input-icon"></i>
                                    <input type="tel" name="mobile" id="mobile" class="corporate-input" placeholder="e.g. 9876543210" value="{{ old('mobile') }}" required>
                                </div>
                                <small class="text-danger mt-1 d-block js-error" id="error-mobile">@error('mobile') {{ $message }} @enderror</small>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Email Address -->
                            <div class="col-md-6 form-group-custom">
                                <label for="email">Email Address <span class="text-danger">*</span></label>
                                <div class="form-input-container">
                                    <i class="bi bi-envelope-fill input-icon"></i>
                                    <input type="email" name="email" id="email" class="corporate-input" placeholder="e.g. rahul@example.com" value="{{ old('email') }}" required>
                                </div>
                                <small class="text-danger mt-1 d-block js-error" id="error-email">@error('email') {{ $message }} @enderror</small>
                            </div>

                            <!-- Interested Programme -->
                            <div class="col-md-6 form-group-custom">
                                <label for="programme">Interested Programme</label>
                                <div class="form-input-container">
                                    <i class="bi bi-mortarboard-fill input-icon"></i>
                                    @php
                                        $allProgrammes = $programmes ?? \App\Http\Controllers\CDOEController::getProgrammes();
                                    @endphp
                                    <select name="programme" id="programme" class="corporate-input">
                                        <option value="" disabled selected>-- Select Programme --</option>
                                        @foreach($allProgrammes as $prog)
                                            <option value="{{ $prog }}" {{ old('programme') == $prog ? 'selected' : '' }}>{{ $prog }}</option>
                                        @endforeach
                                    </select>
                                    <i class="bi bi-chevron-down select-chevron"></i>
                                </div>
                                <small class="text-danger mt-1 d-block js-error" id="error-programme">@error('programme') {{ $message }} @enderror</small>
                            </div>
                        </div>

                        <!-- Message -->
                        <div class="form-group-custom">
                            <label for="message">Message / Specific Questions <span class="text-danger">*</span></label>
                            <div class="form-input-container textarea-container">
                                <i class="bi bi-chat-left-text-fill input-icon"></i>
                                <textarea name="message" id="message" class="corporate-input" placeholder="Type your questions or queries here..." required>{{ old('message') }}</textarea>
                            </div>
                            <small class="text-danger mt-1 d-block js-error" id="error-message">@error('message') {{ $message }} @enderror</small>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn-submit-custom mt-2" id="btnSubmit">
                            <span>Submit Enquiry</span>
                            <i class="bi bi-arrow-right"></i>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Right Column: Interactive Map & Direct Helpline Pill -->
            <div class="col-lg-5">
                <div class="map-box-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3495.5674178737963!2d78.65602607518603!3d28.821962275453853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390afdf565c6bc21%3A0xefb0ce367e3f2602!2sTeerthanker%20Mahaveer%20University!5e0!3m2!1sen!2sjp!4v1786448447994!5m2!1sen!2sjp" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                    
                    <div class="map-content-footer">
                        <!-- Direct Hotline Highlight Box -->
                        <div class="hotline-highlight-box">
                            <div class="hotline-icon">
                                <i class="bi bi-telephone-outbound-fill"></i>
                            </div>
                            <div class="hotline-details">
                                <span>Toll-Free Helpline</span>
                                <a href="tel:18002701490">1800 270 1490</a>
                            </div>
                        </div>

                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 pt-2">
                            <div>
                                <h6 class="fw-bold text-dark mb-0" style="font-size: 0.95rem;">TMU Campus Moradabad</h6>
                                <small class="text-muted d-block mb-1">Delhi Road, NH-9, Uttar Pradesh 244001</small>
                                <a href="https://maps.app.goo.gl/bFZpPcBhheLFtWMx6" target="_blank" rel="noopener noreferrer" class="btn-get-directions">
                                    <i class="bi bi-box-arrow-up-right"></i> Get Directions
                                </a>
                            </div>

                            <!-- Vector Social Cards -->
                            <div class="modern-social-wrapper">
                                <a href="https://www.facebook.com/TMUOnlineUniversity" target="_blank" rel="noopener noreferrer" class="modern-social-card facebook" aria-label="Facebook">
                                    <svg class="social-svg" viewBox="0 0 24 24">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                    </svg>
                                </a>
                                <a href="https://www.linkedin.com/company/tmu-online" target="_blank" rel="noopener noreferrer" class="modern-social-card linkedin" aria-label="LinkedIn">
                                    <svg class="social-svg" viewBox="0 0 24 24">
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                    </svg>
                                </a>
                                <a href="https://www.instagram.com/tmu.online/" target="_blank" rel="noopener noreferrer" class="modern-social-card instagram" aria-label="Instagram">
                                    <svg class="social-svg" viewBox="0 0 24 24">
                                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const floatingInputs = document.querySelectorAll('.floating-input');
        
        floatingInputs.forEach(input => {
            const wrapper = input.closest('.floating-field-wrapper');
            if (!wrapper) return;
            
            function checkValue() {
                if (input.value && input.value.trim() !== '') {
                    wrapper.classList.add('has-value');
                } else {
                    wrapper.classList.remove('has-value');
                }
            }
            
            checkValue();
            input.addEventListener('input', checkValue);
            input.addEventListener('change', checkValue);
            input.addEventListener('blur', checkValue);
        });

        // AJAX Contact Form Handling
        const contactForm = document.getElementById('contactForm');
        const alertContainer = document.getElementById('alertContainer');
        const btnSubmit = document.getElementById('btnSubmit');

        if (contactForm) {
            contactForm.addEventListener('submit', function (e) {
                e.preventDefault();

                // Clear previous error messages & alerts
                if (alertContainer) alertContainer.innerHTML = '';
                document.querySelectorAll('.js-error').forEach(el => el.textContent = '');

                // Disable submit button & show spinner state
                const originalBtnHtml = btnSubmit.innerHTML;
                btnSubmit.disabled = true;
                btnSubmit.innerHTML = '<span>Submitting...</span> <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>';

                const formData = new FormData(contactForm);
                const csrfTokenInput = contactForm.querySelector('input[name="_token"]');

                fetch(contactForm.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': csrfTokenInput ? csrfTokenInput.value : ''
                    }
                })
                .then(async response => {
                    const data = await response.json().catch(() => ({}));

                    if (response.ok && data.success) {
                        if (alertContainer) {
                            alertContainer.innerHTML = `
                                <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert" style="border-left: 4px solid #10B981 !important; background: #ECFDF5; color: #065F46; border-radius: 12px;">
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="bi bi-check-circle-fill fs-5"></i>
                                        <div><strong>Success!</strong> ${data.message}</div>
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            `;
                        }
                        contactForm.reset();
                        if (alertContainer) alertContainer.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                    } else if (response.status === 422 && data.errors) {
                        Object.keys(data.errors).forEach(field => {
                            const errorEl = document.getElementById('error-' + field);
                            if (errorEl) {
                                errorEl.textContent = data.errors[field][0];
                            }
                        });
                    } else {
                        const errorMsg = data.message || 'Something went wrong while submitting your enquiry. Please try again.';
                        if (alertContainer) {
                            alertContainer.innerHTML = `
                                <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm mb-4" role="alert" style="border-left: 4px solid #EF4444 !important; background: #FEF2F2; color: #991B1B; border-radius: 12px;">
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="bi bi-exclamation-triangle-fill fs-5"></i>
                                        <div><strong>Error!</strong> ${errorMsg}</div>
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            `;
                        }
                    }
                })
                .catch(error => {
                    if (alertContainer) {
                        alertContainer.innerHTML = `
                            <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm mb-4" role="alert" style="border-left: 4px solid #EF4444 !important; background: #FEF2F2; color: #991B1B; border-radius: 12px;">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="bi bi-exclamation-triangle-fill fs-5"></i>
                                    <div><strong>Error!</strong> Connection error. Please try again.</div>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        `;
                    }
                })
                .finally(() => {
                    btnSubmit.disabled = false;
                    btnSubmit.innerHTML = originalBtnHtml;
                });
            });
        }
    });
</script>

@endsection
