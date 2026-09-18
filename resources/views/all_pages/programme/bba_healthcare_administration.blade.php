@extends('layouts.app')

@section('CDOE', 'Online BBA in Healthcare Services & Administration at TMU – Admissions Open')

@section('content')

    <link rel="stylesheet" href="{{ asset('/assets/css/programme.css') }}">
    <div class="programme-banner">
        <picture>
            <source media="(max-width: 767px)" srcset="{{ asset('assets/img/programmes/online_bba_healthcare_mobile.webp') }}">
            <source media="(max-width: 991px)" srcset="{{ asset('assets/img/programmes/online_bba_healthcare_tablet.webp') }}">
            <img src="{{ asset('assets/img/programmes/online_bba_healthcare_desktop.webp') }}" alt="Online BBA in Healthcare Services & Administration" fetchpriority="high" decoding="async" class="w-100">
        </picture>
        <div class="banner-title d-none d-md-block">
            <p>Online BBA in <br> <span>Healthcare Services & Administration</span></p>
            <p class="d-none d-lg-block">Combine business education with healthcare management through an Online BBA in Healthcare Services & Administration. Develop skills in hospital operations, administration, leadership, and healthcare services with flexible learning.</p>
        </div>
    </div>

    <div class="course-single-area pd-top-60 pd-bottom-90">
        <div class="section-header">
            <h1 style="font-size:2.5rem;">Online BBA in <span class="highlight" style="color:#ff7900">Healthcare Services & Administration <br> Programme Details</span></h1>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="course-course-detaila-inner">

                    {{-- Section 1: Description & Programme Details --}}
                    <div class="course-section container" id="description-section">
                        <div class="course-details-content">
                            <p>An <b>Online BBA in Healthcare Services & Administration at <a href="https://www.tmu.ac.in/" target="_blank" rel="noopener">TMU</a></b> is a three-year undergraduate programme that combines business management principles with healthcare administration. The programme is designed for students who want to build careers in the management and administrative side of the healthcare sector. It helps students understand how hospitals, clinics, diagnostic centres and other healthcare organisations are managed and how different departments work together to deliver efficient patient services.</p>
                            <p>Through an online learning format, students can study business and healthcare concepts remotely while developing skills in communication, leadership, problem-solving, and decision-making. Depending on the university, the curriculum may also include subjects related to healthcare technology, digital healthcare, data management, and quality standards. After completing an Online BBA in Healthcare Services & Administration, graduates can explore roles such as Hospital Administrator, Healthcare Operations Executive, Healthcare Marketing Executive, and Healthcare Services Coordinator.</p>

                            <h2 class="mt-5 mb-3" style="font-size: 1.85rem; font-weight: 700; color: #001d4a;">Why Choose Online BBA in Healthcare Services & Administration</h2>
                            <div class="row pt-2">
                                <div class="col-sm-6">
                                    <ul class="single-list-wrap">
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Flexible online learning
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Learn healthcare management skills
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Understand hospital operations
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Build administration expertise
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 mt-3 mt-sm-0">
                                    <ul class="single-list-wrap">
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Explore diverse healthcare careers
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Balance studies with other commitments
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Develop industry-ready business skills
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Growing healthcare career opportunities
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
                                            <h3 class="mb-0 text-white">Online BBA Fee Details</h3>
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
                            <h2>Online BBA in Healthcare Services & Administration <span class="highlight">Admissions Open 2026</span></h2>
                        </div>
                        <div class="course-details-content">
                            <p>Admissions are now open for the 2026 batch of the TMU Online BBA in Healthcare Services & Administration—a specialized undergraduate programme designed to prepare future healthcare administrators, hospital operations specialists, and medical services leaders with industry-aligned skills and flexible digital learning.</p>
                        </div>
                    </div>

                    {{-- Degree Highlight Section --}}
                    <section class="degree-highlight-section">
                        <div class="container-fluid px-4 px-md-5">
                            <div class="degree-content-wrapper">

                                <div class="degree-benefits-col">
                                    <h2 class="degree-main-title">
                                        Get a UGC Entitled Online BBA Degree from a <span class="highlight-underline">NAAC A University</span>
                                    </h2>

                                    <div class="benefits-list">
                                        <div class="benefit-item">
                                            <div class="benefit-icon">
                                                <i class="fas fa-award"></i>
                                            </div>
                                            <div class="benefit-text">
                                                <h4>Degree from Top Ranked University</h4>
                                                <p>Get a prestigious degree on completion of your Online BBA course from India's top-ranked University recognized for excellence.</p>
                                            </div>
                                        </div>

                                        <div class="benefit-item">
                                            <div class="benefit-icon">
                                                <i class="fas fa-globe-americas"></i>
                                            </div>
                                            <div class="benefit-text">
                                                <h4>Universally Accepted & Recognized</h4>
                                                <p>The Degree is duly Entitled by UGC - Distance Education Bureau (DEB) and recognized across government, private, and global organizations.</p>
                                            </div>
                                        </div>

                                        <div class="benefit-item">
                                            <div class="benefit-icon">
                                                <i class="fas fa-equals"></i>
                                            </div>
                                            <div class="benefit-text">
                                                <h4>No Difference From Campus Program Degree</h4>
                                                <p>The online degree holds equal academic weight and validity, treated at par with regular on-campus undergraduate degrees.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="degree-image-col">
                                    <img src="{{ asset('assets/img/degree.webp') }}"
                                        alt="Sample Online BBA Degree Certificate" class="sample-degree-image">
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
                                    <p>Our top-class recruiters list gives you the assurance that you'll get placed in premier hospitals, healthcare providers, diagnostic networks, and healthcare MNCs.</p>
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
                                <h2>Career Paths After Online BBA in Healthcare Services & Administration</h2>
                                <p>An Online BBA in Healthcare Services & Administration prepares graduates for management and administrative roles across hospitals, clinics, diagnostic centres, healthcare companies, and insurance organisations. Some common job roles include:</p>
                            </div>

                            <div class="career-paths-content">

                                <div class="career-paths-image-col">
                                    <img src="{{ asset('assets/img/programmes/prog-img-4.jpg') }}"
                                        alt="Professionals in healthcare administration and hospital services" class="career-image">
                                </div>

                                <div class="career-paths-list-col">
                                    <ul class="career-path-list pl-3">
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Medical Office Manager</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Patient Services Executive</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Healthcare Quality Executive</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Medical Records & Health Information Executive</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Healthcare Business Development Executive</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Hospital Marketing Executive</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Healthcare HR Executive</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Insurance & Healthcare Claims Executive</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Healthcare Project Coordinator</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Hospital Front Office Manager</li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </section>

                    {{-- Eligibility Section --}}
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
                                                <span>Passed Class 12th or equivalent examination from a recognised board.</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle"></i>
                                                <span>Students from any stream (Science, Commerce, or Arts) can apply.</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle"></i>
                                                <span>Generally, 45–50% aggregate marks in Class 12th (relaxation of 5% for reserved category candidates as per university norms).</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle"></i>
                                                <span>There is generally no upper age limit for admission.</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle"></i>
                                                <span>Prior work experience is usually not required; students appearing in Class 12 final examinations are also eligible to apply.</span>
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
                                                01. What is an Online BBA in Healthcare Services & Administration?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-one" class="collapse show" aria-labelledby="ff-one"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            It is a three-year undergraduate programme that combines business management with healthcare administration and services.
                                        </div>
                                    </div>
                                </div>

                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-two">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-two"
                                                aria-expanded="false" aria-controls="f-two">
                                                02. What are the career options after an Online BBA in Healthcare Services & Administration?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-two" class="collapse" aria-labelledby="ff-two" data-parent="#faq-accordion">
                                        <div class="card-body">
                                            Graduates can work in hospital administration, healthcare operations, patient services, healthcare quality, medical records, and healthcare business development.
                                        </div>
                                    </div>
                                </div>

                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-three">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-three"
                                                aria-expanded="false" aria-controls="f-three">
                                                03. Can I work in a hospital after completing an Online BBA in Healthcare Services & Administration?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-three" class="collapse" aria-labelledby="ff-three"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            Yes. Graduates can apply for administrative and management-support roles in hospitals, clinics, diagnostic centres, and other healthcare organisations.
                                        </div>
                                    </div>
                                </div>

                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-four">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-four"
                                                aria-expanded="false" aria-controls="f-four">
                                                04. What is the scope of BBA Healthcare Services & Administration?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-four" class="collapse" aria-labelledby="ff-four"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            The course offers career opportunities in hospital management, healthcare operations, insurance, healthcare consulting, diagnostics, and other healthcare services.
                                        </div>
                                    </div>
                                </div>

                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-five">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-five"
                                                aria-expanded="false" aria-controls="f-five">
                                                05. Is an Online BBA in Healthcare Services & Administration a good career option?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-five" class="collapse" aria-labelledby="ff-five"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            It can be suitable for students interested in combining business management with healthcare administration and operations.
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

@endsection
