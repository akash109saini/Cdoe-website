@extends('layouts.app')

@section('CDOE', 'Online BCA in Healthcare IT & Bioinformatics | Careers')

@section('content')

    <link rel="stylesheet" href="{{ asset('/assets/css/programme.css') }}">
    <div class="programme-banner">
        <picture>
            <source media="(max-width: 767px)" srcset="{{ asset('assets/img/programmes/online_bca_healthcare_bioinformatics_mobile.webp') }}">
            <source media="(max-width: 991px)" srcset="{{ asset('assets/img/programmes/online_bca_healthcare_bioinformatics_tablet.webp') }}">
            <img src="{{ asset('assets/img/programmes/online_bca_healthcare_bioinformatics_desktop.webp') }}" alt="Online BCA in Healthcare IT & Bioinformatics" fetchpriority="high" decoding="async" class="w-100">
        </picture>
        <div class="banner-title d-none d-md-block">
            <p>Online BCA in <br> <span>Healthcare IT & Bioinformatics</span></p>
            <p class="d-none d-lg-block">Transform your interest in technology into a career in healthcare. An Online BCA in Healthcare IT & Bioinformatics combines IT, health data, and bioinformatics to prepare you for the rapidly evolving world of digital healthcare.</p>
        </div>
    </div>

    <div class="course-single-area pd-top-60 pd-bottom-90">
        <div class="section-header">
            <h1 style="font-size:2.5rem;">Online BCA in <span class="highlight" style="color:#ff7900">Healthcare IT & Bioinformatics <br> Programme Details</span></h1>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="course-course-detaila-inner">

                    {{-- Section 1: Description & Programme Details --}}
                    <div class="course-section container" id="description-section">
                        <div class="course-details-content">
                            <p>The <b>Online BCA in Healthcare IT & Bioinformatics</b> at <a href="https://www.tmu.ac.in/" target="_blank" rel="noopener">TMU</a> is an interdisciplinary undergraduate programme designed for students interested in the intersection of computer applications, healthcare technology, data, and biological sciences. The programme combines core IT concepts with emerging applications in healthcare information systems and bioinformatics.</p>
                            <p>With the growing use of digital health records, healthcare data platforms, laboratory information systems, medical databases, and computational approaches to biological data, technology professionals are playing an increasingly important role in modern healthcare.</p>
                            <p>The programme enables students to develop a foundation in computer applications while gaining specialised knowledge relevant to healthcare technology and bioinformatics. The flexible online learning format allows students to pursue their degree while developing industry-oriented technical and analytical skills.</p>

                            <h2 class="mt-5 mb-3" style="font-size: 1.85rem; font-weight: 700; color: #001d4a;">Why Choose an Online BCA in Healthcare IT & Bioinformatics?</h2>
                            <p class="mb-4">Healthcare is becoming increasingly technology-driven, creating a need for professionals who understand computing as well as healthcare data and information systems. The Online BCA in Healthcare IT & Bioinformatics focuses on the application of technology to healthcare and biological data. Students can develop skills in areas such as:</p>
                            <div class="row pt-2">
                                <div class="col-sm-6">
                                    <ul class="single-list-wrap">
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Computer programming and applications
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Healthcare Information Technology
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Health information systems
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Healthcare databases
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Bioinformatics fundamentals
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 mt-3 mt-sm-0">
                                    <ul class="single-list-wrap">
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Biological data analysis
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Data management and analytics
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Digital healthcare technologies
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Information security and data privacy
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Emerging healthcare technologies
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
                                            <h3 class="mb-0 text-white">Online BCA Fee Details</h3>
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
                                                                <td class="text-end fw-semibold">Rs. 12,600</td>
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

                    {{-- Admissions Open Section --}}
                    <div class="course-section container pd-top-30 pd-bottom-30 text-center" id="admissions-open-section">
                        <div class="section-header mt-5 mb-0">
                            <h2>Online BCA in Healthcare IT & Bioinformatics <span class="highlight">Admissions Open 2026</span></h2>
                        </div>
                        <div class="course-details-content">
                            <p>Admissions open for the 2026 batch of the TMU Online BCA in Healthcare IT & Bioinformatics—an interdisciplinary programme bridging computer applications, health informatics, and computational biology. TMU Online provides a flexible, 100% online learning environment with high academic standards and practical healthcare IT application.</p>
                        </div>
                    </div>

                    {{-- Degree Highlight Section --}}
                    <section class="degree-highlight-section">
                        <div class="container-fluid px-4 px-md-5">
                            <div class="degree-content-wrapper">

                                <div class="degree-benefits-col">
                                    <h2 class="degree-main-title">
                                        Get a UGC Entitled Online BCA Degree from a <span class="highlight-underline">NAAC A University</span>
                                    </h2>

                                    <div class="benefits-list">
                                        <div class="benefit-item">
                                            <div class="benefit-icon">
                                                <i class="fas fa-award"></i>
                                            </div>
                                            <div class="benefit-text">
                                                <h4>Degree from Top Ranked University</h4>
                                                <p>Get high-stature degree on completion of your Online BCA course from India's top most University recognised for excellence.</p>
                                            </div>
                                        </div>

                                        <div class="benefit-item">
                                            <div class="benefit-icon">
                                                <i class="fas fa-globe-americas"></i>
                                            </div>
                                            <div class="benefit-text">
                                                <h4>Universally Accepted & Recognized</h4>
                                                <p>The Degree is duly Entitled by UGC - Distance Education Bureau.</p>
                                            </div>
                                        </div>

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

                                <div class="degree-image-col">
                                    <img src="{{ asset('assets/img/degree.webp') }}"
                                        alt="Sample Online BCA Degree Certificate" class="sample-degree-image">
                                </div>

                            </div>
                        </div>
                    </section>

                    {{-- Recruiters Section --}}
                    <section class="recruiters-section">
                        <div class="container">
                            <div class="recruiter-title-container">
                                <div class="section-header">
                                    <h2>Teerthanker Mahaveer University Online, <br><span class="highlight">Open Doors. World Wide.</span></h2>
                                    <p>Our top-class recruiters list gives you the assurance that you'll get placed in leading MNCs, hospital chains, and health-tech brands.</p>
                                    <span class="title-underline"></span>
                                </div>
                            </div>

                            <div class="recruiter-logo-grid">
                                @php
                                    $altTexts = [
                                        1 => 'Wipro Logo', 2 => 'Vistara Logo', 3 => 'Videocon Logo', 4 => 'VFS Global Logo',
                                        5 => 'Pantaloons Logo', 6 => 'Amazon India Logo', 7 => 'Tata Strive Logo', 8 => 'Tally Logo',
                                        9 => 'Skyway Communications Logo', 10 => 'Safety Circle Logo', 11 => 'Royal Bank of Scotland Logo',
                                        12 => 'Paytm Logo', 13 => 'OM Logistics Ltd Logo', 14 => 'OYO Logo', 15 => 'Neva Clothing Logo',
                                        16 => 'Max Life Insurance Logo', 17 => 'Overseas Logo', 18 => 'Tripat Infoways Logo',
                                        19 => 'LIC Logo', 20 => 'Kotak Mahindra Bank Logo', 21 => 'Karvy Stock Broking Logo',
                                        22 => 'Indigo Logo', 23 => 'Globe Toyota Logo', 24 => 'HCL Technologies Logo',
                                        25 => 'Genpact Logo', 26 => 'Fortis Healthcare Logo', 27 => 'Feedback Infra Logo',
                                        28 => 'Ernst & Young Logo', 29 => 'Dell Logo', 30 => 'Concentrix Logo',
                                        31 => 'Axis Bank Logo', 32 => 'Accenture Logo',
                                    ];
                                @endphp

                                @for ($i = 1; $i <= 32; $i++)
                                    <div class="recruiter-item">
                                        <img src="{{ asset('assets/img/recruiters/' . $i . '.jpg') }}"
                                            alt="{{ $altTexts[$i] ?? 'Recruiter Logo ' . $i }}" class="recruiter-logo"
                                            onerror="this.style.display='none'; this.parentElement.style.display='none';">
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </section>

                    {{-- Career Paths Section --}}
                    <section class="career-paths-section px-1 px-lg-5">
                        <div class="container-fluid">
                            <div class="career-paths-header">
                                <h2>Career Paths After BCA <span>Healthcare IT & Bioinformatics</span></h2>
                                <p>The interdisciplinary nature of the programme can help graduates explore opportunities across healthcare technology, IT, data management, and related sectors. Potential career roles include:</p>
                            </div>

                            <div class="career-paths-content">
                                <div class="career-paths-image-col">
                                    <img src="{{ asset('assets/img/programmes/prog-img-4.jpg') }}"
                                        alt="Career Paths in Healthcare IT and Bioinformatics" class="career-image">
                                </div>

                                <div class="career-paths-list-col">
                                    <ul class="career-path-list pl-3">
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Healthcare IT Executive</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Healthcare Data Analyst</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Health Information Management Associate</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Healthcare Technology Support Executive</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Bioinformatics Associate</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Junior Bioinformatics Analyst</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Database Administrator</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Data Management Associate</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Healthcare Software Support Associate</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Clinical Data Associate</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>

                    {{-- Eligibility Criteria Section --}}
                    <section class="career-paths-section px-1 px-lg-5">
                        <div class="container-fluid px-3 px-lg-5">
                            <div class="eligibility-card">
                                <div class="eligibility-content">
                                    <div class="eligibility-text">
                                        <h2 class="eligibility-title">Who Can Apply</h2>
                                        <p class="eligibility-subtitle">Eligibility Criteria</p>
                                        <ul class="eligibility-list">
                                            <li>
                                                <i class="fas fa-check-circle"></i>
                                                <span>Passed 10+2 or equivalent examination from a recognised board.</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle"></i>
                                                <span>Candidates should have completed Class 12 with English as a subject.</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle"></i>
                                                <span>Students from Science, Commerce, or other eligible streams may apply, subject to university requirements.</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle"></i>
                                                <span>Basic knowledge of computers and biology/healthcare can be helpful.</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle"></i>
                                                <span>Candidates appearing for their Class 12 final examination may apply as per university admission rules.</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="eligibility-graphic">
                                        <img src="{{ asset('assets/img/programmes/who-can-apply.png') }}" alt="Eligibility requirements illustration"
                                            style="margin-top:-3rem;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    {{-- Section: FAQ --}}
                    <div class="course-section mt-5 container" id="faq-section">
                        <h2 class="section-title text-center">FAQ</h2>
                        <div class="course-details-content mt-3">
                            <div id="faq-accordion" class="accordion-area mt-4">
                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-one">
                                        <h5 class="mb-0">
                                            <button class="btn-link" data-toggle="collapse" data-target="#f-one"
                                                aria-expanded="true" aria-controls="f-one">
                                                01. What is BCA in Healthcare IT & Bioinformatics?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="f-one" class="collapse show" aria-labelledby="ff-one"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            It is a computer applications programme that combines IT, healthcare technologies, databases, and bioinformatics to support healthcare and biological data management.
                                        </div>
                                    </div>
                                </div>

                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-two">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-two"
                                                aria-expanded="false" aria-controls="f-two">
                                                02. Is BCA in Healthcare IT & Bioinformatics a good career option?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-two" class="collapse" aria-labelledby="ff-two" data-parent="#faq-accordion">
                                        <div class="card-body">
                                            It can provide career opportunities in healthcare IT, health data management, bioinformatics, medical software, and healthcare technology.
                                        </div>
                                    </div>
                                </div>

                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-three">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-three"
                                                aria-expanded="false" aria-controls="f-three">
                                                03. What are the career options after BCA in Healthcare IT & Bioinformatics?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-three" class="collapse" aria-labelledby="ff-three"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            Graduates can work as Healthcare IT Analyst, Bioinformatics Analyst, Health Data Analyst, Clinical Data Coordinator, Healthcare Software Developer, or Database Administrator.
                                        </div>
                                    </div>
                                </div>

                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-four">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-four"
                                                aria-expanded="false" aria-controls="f-four">
                                                04. What subjects are covered in this BCA programme?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-four" class="collapse" aria-labelledby="ff-four"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            The programme may cover programming, databases, healthcare information systems, bioinformatics, data analysis, biotechnology concepts, and health data management.
                                        </div>
                                    </div>
                                </div>

                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-five">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-five"
                                                aria-expanded="false" aria-controls="f-five">
                                                05. Can I pursue BCA in Healthcare IT & Bioinformatics after Class 12?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-five" class="collapse" aria-labelledby="ff-five"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            Yes, students who meet the university's eligibility requirements can apply after completing Class 12.
                                        </div>
                                    </div>
                                </div>

                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-six">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-six"
                                                aria-expanded="false" aria-controls="f-six">
                                                06. Do I need a Biology background for this BCA programme?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-six" class="collapse" aria-labelledby="ff-six"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            A Biology background may be helpful for understanding bioinformatics and healthcare concepts, but eligibility depends on the university's admission requirements.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- SEO Schema Markup --}}
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Course",
          "name": "Online BCA in Healthcare IT & Bioinformatics",
          "description": "Explore Online BCA in Healthcare IT & Bioinformatics, covering healthcare technology, bioinformatics, eligibility, skills, careers and future scope.",
          "provider": {
            "@type": "EducationalOrganization",
            "name": "Teerthanker Mahaveer University Centre for Distance and Online Education",
            "url": "https://tmuonline.ac.in"
          },
          "educationalCredentialAwarded": "Bachelor of Computer Applications (BCA)",
          "occupationalCredentialAwarded": "Undergraduate Degree",
          "hasCourseInstance": {
            "@type": "CourseInstance",
            "courseMode": "Online",
            "duration": "P3Y"
          }
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is BCA in Healthcare IT & Bioinformatics?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "It is a computer applications programme that combines IT, healthcare technologies, databases, and bioinformatics to support healthcare and biological data management."
              }
            },
            {
              "@type": "Question",
              "name": "Is BCA in Healthcare IT & Bioinformatics a good career option?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "It can provide career opportunities in healthcare IT, health data management, bioinformatics, medical software, and healthcare technology."
              }
            },
            {
              "@type": "Question",
              "name": "What are the career options after BCA in Healthcare IT & Bioinformatics?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Graduates can work as Healthcare IT Analyst, Bioinformatics Analyst, Health Data Analyst, Clinical Data Coordinator, Healthcare Software Developer, or Database Administrator."
              }
            },
            {
              "@type": "Question",
              "name": "What subjects are covered in this BCA programme?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The programme may cover programming, databases, healthcare information systems, bioinformatics, data analysis, biotechnology concepts, and health data management."
              }
            },
            {
              "@type": "Question",
              "name": "Can I pursue BCA in Healthcare IT & Bioinformatics after Class 12?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, students who meet the university's eligibility requirements can apply after completing Class 12."
              }
            },
            {
              "@type": "Question",
              "name": "Do I need a Biology background for this BCA programme?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "A Biology background may be helpful for understanding bioinformatics and healthcare concepts, but eligibility depends on the university's admission requirements."
              }
            }
          ]
        }
      ]
    }
    </script>

@endsection
