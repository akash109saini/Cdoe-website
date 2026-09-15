@extends('layouts.app')

@section('CDOE', 'Home | TMU')

@section('content')

    <link rel="stylesheet" href="{{ asset('/assets/css/programme.css') }}">
    <!-- breadcrumb start -->
    <div class="programme-banner">
        <picture>
            <source media="(max-width: 767px)" srcset="{{ asset('assets/img/programmes/mobile-banner.webp') }}">
            <source media="(max-width: 991px)" srcset="{{ asset('assets/img/programmes/tab-banner.webp') }}">
            <img src="{{ asset('assets/img/programmes/finance-banner.webp') }}" alt="Online MBA in Hospital & Healthcare Management" fetchpriority="high" decoding="async" class="w-100">
        </picture>
        <div class="banner-title">
            <p>Online MBA in<br> <span>Hospital & Healthcare Management</span></p>
            <p class="d-none d-lg-block">Build your expertise in healthcare management and turn your leadership skills into meaningful career opportunities with an Online MBA in Hospital & Healthcare Management. Learn healthcare operations, hospital administration and strategic management through flexible online learning.</p>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- course-single area start -->
    <div class="course-single-area pd-top-60 pd-bottom-90">
        <div class="section-header">
            <h1 style="font-size:2.5rem;">Online MBA <br><span class="highlight" style="color:#ff7900">Hospital & Healthcare Management Programme Details</span></h1>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="course-course-detaila-inner">

                    {{-- Start Sequential Content --}}

                    {{-- Section 1: Description --}}
                    <div class="course-section container" id="description-section">
                        <div class="course-details-content">
                            <p>An Online MBA in Hospital & Healthcare Management is a postgraduate management programme that is designed for students and professionals who want to build careers in hospital administration and healthcare management. The programme combines core MBA subjects with specialised healthcare management topics such as hospital administration, healthcare operations, healthcare finance, human resource management, quality management, healthcare marketing, strategic planning, and patient service management.</p>
                            <p>Through online learning, students can study programme materials, attend classes, complete assignments, and develop management skills without the need to attend a traditional on-campus programme. The programme can prepare graduates for roles in hospitals, healthcare organisations, diagnostic centres, healthcare companies, insurance firms, and other healthcare-related institutions, particularly in areas involving administration, operations, and management.</p>
                            <h3 class="mt-4 mb-3" style="font-size: 1.8rem; font-weight: 700; color: #001d4a;">Why Choose an Online MBA in Hospital & Healthcare Management</h3>
                            <div class="row pt-2">
                                <div class="col-sm-6">
                                    <ul class="single-list-wrap">
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Flexible Online Learning
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Career Growth Opportunities
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Healthcare Management Skills
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Hospital Administration Knowledge
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 mt-3 mt-sm-0">
                                    <ul class="single-list-wrap">
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Industry-Relevant Curriculum
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Work-Study Flexibility
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Healthcare Sector Exposure
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Management Skills Development
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ========== Fee Structure & Scholarship Section Start ========== -->
                    <section class="compact-fee-section px-1 px-lg-5 mt-5">
                        <div class="container-fluid compact-fee-container px-3 px-lg-5">
                            
                            <div class="career-paths-header text-center mb-4">
                                <h2>Fee Structure & <span>Scholarships</span></h2>
                            </div>

                            <div class="row">
                                <!-- Fee Structure Column -->
                                <div class="col-lg-6 mb-4 mb-lg-0">
                                    <div class="card h-100 compact-card">
                                        <div class="compact-card-header text-white text-center py-3" style="background-color: #001D4A; border-bottom: none;">
                                            <h3 class="mb-0 text-white">Fee Details</h3>
                                        </div>
                                        <div class="compact-card-body d-flex flex-column justify-content-between h-100">
                                            <div>
                                                <div class="table-responsive">
                                                    <table class="table align-middle mb-0 compact-table">
                                                        <thead class="table-light">
                                                            <tr>
                                                                <th scope="col" style="color: #001D4A; font-weight: 600;">Fee Component</th>
                                                                <th scope="col" class="text-end" style="color: #001D4A; font-weight: 600;">Amount (Rs.)</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Registration Fee (One-Time)</td>
                                                                <td class="text-end fw-semibold">Rs. 1,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tuition Fee (Per Semester)</td>
                                                                <td class="text-end fw-semibold">Rs. 20,700</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Examination Fee (Per Semester)</td>
                                                                <td class="text-end fw-semibold">Rs. 1,000</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Scholarship Column -->
                                <div class="col-lg-6">
                                    <div class="card h-100 compact-card">
                                        <div class="compact-card-header text-white text-center py-3" style="background-color: #FF6600; border-bottom: none;">
                                            <h3 class="mb-0 text-white">Scholarship</h3>
                                        </div>
                                        <div class="compact-card-body d-flex flex-column justify-content-between h-100">
                                            <div>
                                                <div class="text-center mb-2 p-2" style="background-color: rgba(255,102,0,0.05); border-radius: 8px; border: 1px solid rgba(255,102,0,0.1);">
                                                    <p class="text-muted mb-0" style="font-size: 11px;">25% scholarship on tuition fees per semester is available for:</p>
                                                </div>
                                                
                                                <div class="d-flex flex-column gap-2">
                                                    <div class="d-flex align-items-center scholarship-item-compact">
                                                        <div class="flex-shrink-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; border-radius: 50%; background-color: rgba(255,102,0,0.1); color: #FF6600;">
                                                            <i class="fas fa-graduation-cap"></i>
                                                        </div>
                                                        <div class="ms-2" style="margin-left: 10px;">
                                                            <h6 class="mb-0">TMU Faculty & Staff</h6>
                                                            <span class="text-muted" style="font-size: 11px;">All faculty & staff members of the university.</span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="d-flex align-items-center scholarship-item-compact">
                                                        <div class="flex-shrink-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; border-radius: 50%; background-color: rgba(255,102,0,0.1); color: #FF6600;">
                                                            <i class="fas fa-user-graduate"></i>
                                                        </div>
                                                        <div class="ms-2" style="margin-left: 10px;">
                                                            <h6 class="mb-0">Existing TMU Students</h6>
                                                            <span class="text-muted" style="font-size: 11px;">Currently enrolled students pursuing other programs.</span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="d-flex align-items-center scholarship-item-compact">
                                                        <div class="flex-shrink-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; border-radius: 50%; background-color: rgba(255,102,0,0.1); color: #FF6600;">
                                                            <i class="fas fa-users"></i>
                                                        </div>
                                                        <div class="ms-2" style="margin-left: 10px;">
                                                            <h6 class="mb-0">TMU Alumni</h6>
                                                            <span class="text-muted" style="font-size: 11px;">Graduated students of Teerthanker Mahaveer University.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="alert alert-light border-0 mb-0 mt-2 py-2" style="background-color: #f8f9fa; border-radius: 8px;">
                                                <p class="text-muted mb-0" style="font-size: 11px; line-height: 1.4; text-align: center;"><i class="fas fa-info-circle me-1" style="color: #001D4A;"></i> Candidates must provide valid TMU ID or alumni proof to avail of the scholarship at the time of admission.</p>
                                            </div>
                                            <div class="text-center mb-2 p-2" style="background-color: rgba(255,102,0,0.05); border-radius: 8px; border: 1px solid rgba(255,102,0,0.1);">
                                                <p class="text-muted mb-0" style="font-size: 11px;"><i class="fa-solid fa-star"></i> The fees may change over time. Kindly confirm from the admission cell before taking admission.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- ========== Fee Structure & Scholarship Section End ========== -->

                    <!-- ========== Degree Highlight Section Start ========== -->
                    <section class="m-5 degree-highlight-section">
                        <div class="container-fluid px-4 px-md-5">
                            <div class="degree-content-wrapper">

                                <!-- Left Column: Benefits Text -->
                                <div class="degree-benefits-col">
                                    <h2 class="degree-main-title">
                                        Get a UGC Entitled Online MBA Degree from a <span class="highlight-underline">NAAC A University</span>
                                    </h2>

                                    <div class="benefits-list">
                                        <!-- Benefit 1 -->
                                        <div class="benefit-item">
                                            <div class="benefit-icon">
                                                <i class="fas fa-award"></i>
                                            </div>
                                            <div class="benefit-text">
                                                <h4>Degree from Top Ranked University</h4>
                                                <p>Get high-stature degree on completion of your Online MBA course from India's top most University recognised for excellence.</p>
                                            </div>
                                        </div>

                                        <!-- Benefit 2 -->
                                        <div class="benefit-item">
                                            <div class="benefit-icon">
                                                <i class="fas fa-globe-americas"></i>
                                            </div>
                                            <div class="benefit-text">
                                                <h4>Universally Accepted & Recognized</h4>
                                                <p>The Degree is duly Entitled by UGC - Distance Education Bureau.</p>
                                            </div>
                                        </div>

                                        <!-- Benefit 3 -->
                                        <div class="benefit-item">
                                            <div class="benefit-icon">
                                                <i class="fas fa-equals"></i>
                                            </div>
                                            <div class="benefit-text">
                                                <h4>No Difference From Campus Program Degree</h4>
                                                <p>The degree is recognized by regulatory bodies and treated at par with regular campus-based program degrees.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Right Column: Degree Image -->
                                <div class="degree-image-col">
                                    <img src="{{ asset('assets/img/degree.webp') }}" alt="Sample Online MBA Degree Certificate (Landscape)" class="sample-degree-image">
                                </div>

                            </div>
                        </div>
                    </section>
                    <!-- ========== Degree Highlight Section End ========== -->

                    <!-- ========== Recruiters Section Start ========== -->
                    <section class="recruiters-section">
                        <div class="container">

                            <!-- Section Title -->
                            <div class="recruiter-title-container">
                                <div class="section-header">
                                    <h2>Teerthanker Mahaveer University Online, <br><span class="highlight">Open Doors. World Wide.</span></h2>
                                    <p>Our top-class recruiters list gives you the assurance that you'll get placed in leading MNCs and work with renowned brands.</p>
                                    <span class="title-underline"></span>
                                </div>
                            </div>

                            <!-- Recruiter Logos Grid -->
                            <div class="recruiter-logo-grid">
                                @php
                                    $altTexts = [
                                        1 => 'Wipro Logo',
                                        2 => 'Vistara Logo',
                                        3 => 'Videocon Logo',
                                        4 => 'VFS Global Logo',
                                        5 => 'Pantaloons Logo',
                                        6 => 'Amazon India Logo',
                                        7 => 'Tata Strive Logo',
                                        8 => 'Tally Logo',
                                        9 => 'Skyway Communications Logo',
                                        10 => 'Safety Circle Logo',
                                        11 => 'Royal Bank of Scotland Logo',
                                        12 => 'Paytm Logo',
                                        13 => 'OM Logistics Ltd Logo',
                                        14 => 'OYO Logo',
                                        15 => 'Neva Clothing Logo',
                                        16 => 'Max Life Insurance Logo',
                                        17 => 'Overseas Logo',
                                        18 => 'Tripat Infoways Logo',
                                        19 => 'LIC Logo',
                                        20 => 'Kotak Mahindra Bank Logo',
                                        21 => 'Karvy Stock Broking Logo',
                                        22 => 'Indigo Logo',
                                        23 => 'Globe Toyota Logo',
                                        24 => 'Recruiter Logo 24',
                                        25 => 'Recruiter Logo 25',
                                        26 => 'Recruiter Logo 26',
                                        27 => 'Recruiter Logo 27',
                                        28 => 'Recruiter Logo 28',
                                        29 => 'Recruiter Logo 29',
                                        30 => 'Recruiter Logo 30',
                                        31 => 'Recruiter Logo 31',
                                        32 => 'Recruiter Logo 32',
                                    ];
                                @endphp

                                @for ($i = 1; $i <= 32; $i++)
                                    <div class="recruiter-item">
                                        <img src="{{ asset('assets/img/recruiters/' . $i . '.jpg') }}"
                                             alt="{{ $altTexts[$i] ?? 'Recruiter Logo ' . $i }}" class="recruiter-logo"
                                             onerror="this.style.display='none'; this.parentElement.style.display='none';">
                                    </div>
                                @endfor
                            </div> <!-- End Recruiter Logos Grid -->

                        </div> <!-- End Container -->
                    </section>
                    <!-- ========== Recruiters Section End ========== -->

                    <!-- ========== Career Paths Section Start ========== -->
                    <section class="career-paths-section px-1 px-lg-5">
                        <div class="container-fluid">

                            <!-- Section Header -->
                            <div class="career-paths-header">
                                <h2>Career Paths After <span>Online MBA in Hospital & Healthcare Management</span></h2>
                                <p>An Online MBA in Hospital & Healthcare Management can prepare graduates for management and administrative roles across hospitals, clinics, healthcare organisations, diagnostic centres and other healthcare institutions. <br> Here are some of the most popular career paths you can pursue after earning an online MBA in Hospital & Healthcare Management:</p>
                            </div>

                            <!-- Content Grid (Image + List) -->
                            <div class="career-paths-content">

                                <!-- Image Column -->
                                <div class="career-paths-image-col">
                                    <img src="{{ asset('assets/img/programmes/prog-img-4.jpg') }}" alt="Healthcare management professionals discussing career paths" class="career-image">
                                </div>

                                <!-- List Column -->
                                <div class="career-paths-list-col">
                                    <ul class="career-path-list pl-3">
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Hospital Administrator
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Healthcare Manager
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Hospital Operations Manager
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Healthcare Consultant
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Healthcare Marketing Manager
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Healthcare HR Manager
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Medical Practice Manager
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Healthcare Quality Manager
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Hospital Finance Manager
                                        </li>
                                        <li class="career-path-item">
                                            <i class="fas fa-check-circle"></i> Healthcare Business Development Manager
                                        </li>
                                    </ul>
                                </div>

                            </div> <!-- End Content Grid -->

                        </div> <!-- End Container -->
                    </section>
                    <!-- ========== Career Paths Section End ========== -->

                    <!-- ========== Eligibility Section Start ========== -->
                    <section class="career-paths-section px-1 px-lg-5">
                        <div class="container-fluid px-3 px-lg-5">
                            <div class="eligibility-card">
                                <div class="eligibility-content">

                                    <!-- Text Content -->
                                    <div class="eligibility-text">
                                        <h2 class="eligibility-title">Who Can Apply</h2>
                                        <p class="eligibility-subtitle">Eligibility Criteria</p>
                                        <ul class="eligibility-list">
                                            <li>
                                                <i class="fas fa-check-circle"></i>
                                                <span>Bachelor’s degree from a recognised university.</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle"></i>
                                                <span>Minimum qualifying marks as specified by the university.</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle"></i>
                                                <span>Candidates from any academic stream can apply.</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle"></i>
                                                <span>Work experience may be preferred for some programmes, but is not always mandatory.</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle"></i>
                                                <span>Admission is subject to the university’s eligibility requirements.</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Decorative Graphic -->
                                    <div class="eligibility-graphic">
                                        <img src="{{ asset('assets/img/programmes/who-can-apply.png') }}" alt="Who Can Apply" style="margin-top:-3rem;">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- ========== Eligibility Section End ========== -->

                    {{-- Section 3: FAQ --}}
                    <div class="course-section mt-5 container" id="faq-section">
                        <h2 class="section-title text-center">Frequently Asked Questions (FAQs)</h2>
                        <div class="course-details-content mt-3">
                            <div id="faq-accordion" class="accordion-area mt-4">
                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="faq-h-1">
                                        <h5 class="mb-0">
                                            <button class="btn-link" data-toggle="collapse" data-target="#faq-c-1" aria-expanded="true" aria-controls="faq-c-1">
                                                01. Can I do an MBA in Hospital Management online?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="faq-c-1" class="collapse show" aria-labelledby="faq-h-1" data-parent="#faq-accordion">
                                        <div class="card-body">
                                            Ans. Yes, you can pursue an Online MBA in Hospital & Healthcare Management. It covers areas such as hospital administration, healthcare operations, finance, HR and strategic management.
                                        </div>
                                    </div>
                                </div>

                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="faq-h-2">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#faq-c-2" aria-expanded="false" aria-controls="faq-c-2">
                                                02. Which MBA is best for Hospital Management?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="faq-c-2" class="collapse" aria-labelledby="faq-h-2" data-parent="#faq-accordion">
                                        <div class="card-body">
                                            Ans. An MBA in Hospital & Healthcare Management is a suitable choice for students who want to build a career in hospital administration, healthcare operations and management.
                                        </div>
                                    </div>
                                </div>

                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="faq-h-3">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#faq-c-3" aria-expanded="false" aria-controls="faq-c-3">
                                                03. Is an online MBA accepted by companies?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="faq-c-3" class="collapse" aria-labelledby="faq-h-3" data-parent="#faq-accordion">
                                        <div class="card-body">
                                            Ans. Yes, an online MBA from a UGC-recognised university is generally accepted for employment and career advancement, subject to the employer's requirements.
                                        </div>
                                    </div>
                                </div>

                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="faq-h-4">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#faq-c-4" aria-expanded="false" aria-controls="faq-c-4">
                                                04. Who can pursue an Online MBA in Hospital & Healthcare Management?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="faq-c-4" class="collapse" aria-labelledby="faq-h-4" data-parent="#faq-accordion">
                                        <div class="card-body">
                                            Ans. Graduates from any recognised discipline can generally pursue this programme, subject to the university's eligibility criteria.
                                        </div>
                                    </div>
                                </div>

                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="faq-h-5">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#faq-c-5" aria-expanded="false" aria-controls="faq-c-5">
                                                05. What jobs can I get after an Online MBA in Hospital Management?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="faq-c-5" class="collapse" aria-labelledby="faq-h-5" data-parent="#faq-accordion">
                                        <div class="card-body">
                                            Ans. Graduates can work as Hospital Administrators, Healthcare Managers, Hospital Operations Managers, Healthcare Consultants and Healthcare Marketing Managers.
                                        </div>
                                    </div>
                                </div>

                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="faq-h-6">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#faq-c-6" aria-expanded="false" aria-controls="faq-c-6">
                                                06. Is an Online MBA in Hospital Management worth it?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="faq-c-6" class="collapse" aria-labelledby="faq-h-6" data-parent="#faq-accordion">
                                        <div class="card-body">
                                            Ans. It can be a useful option for those interested in healthcare management, especially for professionals who want to study while continuing their jobs.
                                        </div>
                                    </div>
                                </div>

                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="faq-h-7">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#faq-c-7" aria-expanded="false" aria-controls="faq-c-7">
                                                07. What subjects are taught in an Online MBA in Hospital Management?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="faq-c-7" class="collapse" aria-labelledby="faq-h-7" data-parent="#faq-accordion">
                                        <div class="card-body">
                                            Ans. Common subjects include hospital administration, healthcare operations, healthcare finance, human resource management, healthcare marketing and strategic management.
                                        </div>
                                    </div>
                                </div>

                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="faq-h-8">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#faq-c-8" aria-expanded="false" aria-controls="faq-c-8">
                                                08. Can I pursue an Online MBA in Hospital Management while working?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="faq-c-8" class="collapse" aria-labelledby="faq-h-8" data-parent="#faq-accordion">
                                        <div class="card-body">
                                            Ans. Yes. The flexible format of online learning allows working professionals to pursue their MBA alongside their jobs.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- End Sequential Content --}}

                </div>
            </div>
        </div>
    </div>
    <!-- course-single area end -->

@endsection
