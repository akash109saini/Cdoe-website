@extends('layouts.app')

@section('CDOE', 'Online BCA in AI & Data Science | Syllabus, Fees, Careers')

@section('content')

    <link rel="stylesheet" href="{{ asset('/assets/css/programme.css') }}">
    <div class="programme-banner">
        <picture>
            <source media="(max-width: 767px)" srcset="{{ asset('assets/img/programmes/online_bca_ai_data_science_mobile.webp') }}">
            <source media="(max-width: 991px)" srcset="{{ asset('assets/img/programmes/online_bca_ai_data_science_tablet.webp') }}">
            <img src="{{ asset('assets/img/programmes/online_bca_ai_data_science_desktop.webp') }}" alt="Online BCA in AI & Data Science" fetchpriority="high" decoding="async" class="w-100">
        </picture>
        <div class="banner-title d-none d-md-block">
            <p>Online BCA in <br> <span>AI & Data Science</span></p>
            <p class="d-none d-lg-block">Step into the future of technology with an Online BCA in AI & Data Science. Master intelligent algorithms, big data, machine learning, and predictive analytics to solve complex industry challenges.</p>
        </div>
    </div>

    <div class="course-single-area pd-top-60 pd-bottom-90">
        <div class="section-header">
            <h1 style="font-size:2.5rem;">Online BCA in <span class="highlight" style="color:#ff7900">AI & Data Science <br> Programme Details</span></h1>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="course-course-detaila-inner">

                    {{-- Section 1: Description & Programme Details --}}
                    <div class="course-section container" id="description-section">
                        <div class="course-details-content">
                            <p>The <b>Online BCA in AI & Data Science</b> at <a href="https://www.tmu.ac.in/" target="_blank" rel="noopener">TMU</a> is an innovative undergraduate degree program tailored for aspiring computer scientists aiming to specialize in Artificial Intelligence and Big Data Analytics. The curriculum blends core computer science foundations—software engineering, database architecture, and algorithms—with cutting-edge advancements in machine learning, neural networks, and business intelligence.</p>
                            <p>Students gain real-world proficiency with languages such as Python, R, and SQL, working on projects that involve automated decision-making, natural language processing, computer vision, and statistical modeling. With data powering every major global industry, skilled AI and data specialists are at the forefront of digital transformation.</p>
                            <p>Delivered through TMU Online’s state-of-the-art virtual learning environment, this program offers students and working professionals the flexibility to build high-demand technological expertise while gaining a recognized, UGC-entitled degree.</p>

                            <h2 class="mt-5 mb-3" style="font-size: 1.85rem; font-weight: 700; color: #001d4a;">Why Choose an Online BCA in AI & Data Science?</h2>
                            <p class="mb-4">Artificial intelligence and big data are redefining the technological landscape across IT, finance, healthcare, and e-commerce. The Online BCA in AI & Data Science prepares students with deep conceptual knowledge and hands-on toolsets in key domains:</p>
                            <div class="row pt-2">
                                <div class="col-sm-6">
                                    <ul class="single-list-wrap">
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Artificial Intelligence foundations and algorithms
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Machine learning models and supervised/unsupervised learning
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Big Data technologies and data warehousing
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Python and R programming for data science
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Statistical methods and predictive analytics
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 mt-3 mt-sm-0">
                                    <ul class="single-list-wrap">
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Deep learning frameworks and neural networks
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Natural Language Processing (NLP) & Computer Vision
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Database management systems (SQL & NoSQL)
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> Data visualization with Tableau and Power BI
                                        </li>
                                        <li class="single-list-inner style-check-box">
                                            <i class="fa fa-check"></i> AI ethics, governance, and cloud AI platforms
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
                            <h2>Online BCA in AI & Data Science <span class="highlight">Admissions Open 2026</span></h2>
                        </div>
                        <div class="course-details-content">
                            <p>Admissions open for the 2026 batch of the TMU Online BCA in AI & Data Science—a forward-looking degree program preparing students for top roles in artificial intelligence, machine learning, and business data analytics. Benefit from live expert sessions, virtual coding labs, and self-paced digital courseware.</p>
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
                                    <p>Our top-class recruiters list gives you the assurance that you'll get placed in leading MNCs, tech enterprises, and global AI firms.</p>
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
                                <h2>Career Paths After BCA <span>AI & Data Science</span></h2>
                                <p>With organizations across all industries relying on intelligent systems and data analytics, graduates possess strong career versatility across technology firms, analytics consultancies, financial institutions, and multinational corporations:</p>
                            </div>

                            <div class="career-paths-content">
                                <div class="career-paths-image-col">
                                    <img src="{{ asset('assets/img/programmes/prog-img-4.jpg') }}"
                                        alt="Career Paths in AI and Data Science" class="career-image">
                                </div>

                                <div class="career-paths-list-col">
                                    <ul class="career-path-list pl-3">
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Artificial Intelligence Engineer</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Data Scientist / Data Analyst</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Machine Learning Engineer</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Business Intelligence Analyst</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Big Data Engineer</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> NLP Specialist</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Computer Vision Engineer</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Database Architect</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Python / AI Software Developer</li>
                                        <li class="career-path-item"><i class="fas fa-check-circle"></i> Predictive Analytics Consultant</li>
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
                                                <span>Passed 10+2 or equivalent examination from a recognised educational board.</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle"></i>
                                                <span>Candidates should have completed Class 12 with English as a compulsory subject.</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle"></i>
                                                <span>Students from Science, Commerce, or Arts streams with an interest in computing are eligible to apply.</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle"></i>
                                                <span>Basic aptitude in mathematics and logical problem-solving is advantageous.</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle"></i>
                                                <span>Candidates appearing for their Class 12 final examination may also apply as per university admission guidelines.</span>
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
                                                01. What is BCA in AI & Data Science?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="f-one" class="collapse show" aria-labelledby="ff-one"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            It is a specialized 3-year undergraduate degree combining core computer applications with artificial intelligence, machine learning, statistical modeling, and big data analytics.
                                        </div>
                                    </div>
                                </div>

                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-two">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-two"
                                                aria-expanded="false" aria-controls="f-two">
                                                02. Is BCA in AI & Data Science a good career choice?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-two" class="collapse" aria-labelledby="ff-two" data-parent="#faq-accordion">
                                        <div class="card-body">
                                            Yes, AI and Data Science are among the highest-demand disciplines globally, offering high-paying career trajectories in tech, fintech, healthcare, and enterprise software.
                                        </div>
                                    </div>
                                </div>

                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-three">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-three"
                                                aria-expanded="false" aria-controls="f-three">
                                                03. What career opportunities are available after completing this degree?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-three" class="collapse" aria-labelledby="ff-three"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            Graduates can work as AI Engineers, Machine Learning Associates, Data Scientists, Business Intelligence Analysts, Data Analysts, or pursue advanced postgraduate studies like MCA or M.Sc. Data Science.
                                        </div>
                                    </div>
                                </div>

                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-four">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-four"
                                                aria-expanded="false" aria-controls="f-four">
                                                04. Which programming languages are covered in the curriculum?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-four" class="collapse" aria-labelledby="ff-four"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            The curriculum covers Python, R, SQL, Java/C++, along with popular data science and machine learning libraries such as NumPy, Pandas, Scikit-learn, TensorFlow, and Power BI.
                                        </div>
                                    </div>
                                </div>

                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-five">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-five"
                                                aria-expanded="false" aria-controls="f-five">
                                                05. Can I pursue this programme directly after 12th standard?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-five" class="collapse" aria-labelledby="ff-five"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            Yes, students who have completed 10+2 from a recognised educational board meeting the university eligibility criteria can enroll directly.
                                        </div>
                                    </div>
                                </div>

                                <div class="card single-faq-inner style-header-bg">
                                    <div class="card-header" id="ff-six">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-six"
                                                aria-expanded="false" aria-controls="f-six">
                                                06. Does TMU Online provide placement support?
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="f-six" class="collapse" aria-labelledby="ff-six"
                                        data-parent="#faq-accordion">
                                        <div class="card-body">
                                            Yes, TMU Online provides dedicated career services, resume workshops, mock interviews, and access to recruitment drives with leading MNCs and tech employers.
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
          "name": "Online BCA in AI & Data Science",
          "description": "Pursue an Online BCA in AI & Data Science from TMU. Explore AI models, machine learning, Python, data analytics, career paths, and eligibility.",
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
              "name": "What is BCA in AI & Data Science?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "It is a specialized 3-year undergraduate degree combining core computer applications with artificial intelligence, machine learning, statistical modeling, and big data analytics."
              }
            },
            {
              "@type": "Question",
              "name": "Is BCA in AI & Data Science a good career choice?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, AI and Data Science are among the highest-demand disciplines globally, offering high-paying career trajectories in tech, fintech, healthcare, and enterprise software."
              }
            },
            {
              "@type": "Question",
              "name": "What career opportunities are available after completing this degree?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Graduates can work as AI Engineers, Machine Learning Associates, Data Scientists, Business Intelligence Analysts, Data Analysts, or pursue advanced postgraduate studies like MCA or M.Sc. Data Science."
              }
            },
            {
              "@type": "Question",
              "name": "Which programming languages are covered in the curriculum?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The curriculum covers Python, R, SQL, Java/C++, along with popular data science and machine learning libraries such as NumPy, Pandas, Scikit-learn, TensorFlow, and Power BI."
              }
            },
            {
              "@type": "Question",
              "name": "Can I pursue this programme directly after 12th standard?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, students who have completed 10+2 from a recognised educational board meeting the university eligibility criteria can enroll directly."
              }
            },
            {
              "@type": "Question",
              "name": "Does TMU Online provide placement support?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, TMU Online provides dedicated career services, resume workshops, mock interviews, and access to recruitment drives with leading MNCs and tech employers."
              }
            }
          ]
        }
      ]
    }
    </script>

@endsection
