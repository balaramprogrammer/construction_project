@extends('website.layouts.main')
@section('main')
<link rel="stylesheet" href="{{ asset('website/assets/css/slider.css') }}">
<section class="autocad-slider">

    <div class="slides">

        <!-- Slide 1 -->
        <div class="slide active"
             style="background-image: url({{asset('website/images/slider/banner02.png')}});">

            <div class="slide-overlay"></div>

            <div class="slider-container">

                <div class="hero-content">

                    <span class="hero-small-title">
                        PROFESSIONAL AUTOCAD DESIGN
                    </span>

                    <h1>
                        AutoCAD Design
                        <span>Services</span>
                    </h1>

                    <p>
                        Professional and accurate AutoCAD design
                        services for residential and commercial projects.
                    </p>

                    <div class="hero-buttons">
                        <a href="services.html" class="btn-primary">
                            Our Services
                        </a>

                        <a href="contact.html" class="btn-outline">
                            Get a Quote
                        </a>
                    </div>

                </div>

            </div>
        </div>


        <!-- Slide 2 -->
        <div class="slide"
             style="background-image: url({{asset('website/images/slider/banner03.png')}})">

            <div class="slide-overlay"></div>

            <div class="slider-container">

                <div class="hero-content">

                    <span class="hero-small-title">
                        ACCURATE ARCHITECTURAL DRAWINGS
                    </span>

                    <h1>
                        2D & 3D
                        <span>Floor Plans</span>
                    </h1>

                    <p>
                        Detailed floor plans, architectural drawings
                        and professional CAD drafting solutions.
                    </p>

                    <div class="hero-buttons">
                        <a href="services.html" class="btn-primary">
                            View Services
                        </a>

                        <a href="contact.html" class="btn-outline">
                            Contact Us
                        </a>
                    </div>

                </div>

            </div>
        </div>


        <!-- Slide 3 -->
        <div class="slide"
             style="background-image: url({{asset('website/images/slider/slide-1-structural-design.png')}});">

            <div class="slide-overlay"></div>

            <div class="slider-container">

                <div class="hero-content">

                    <span class="hero-small-title">
                        PROFESSIONAL CAD DRAFTING
                    </span>

                    <h1>
                        Your Ideas,
                        <span>Our Designs</span>
                    </h1>

                    <p>
                        From architectural drawings to structural,
                        electrical and plumbing CAD designs.
                    </p>

                    <div class="hero-buttons">
                        <a href="portfolio.html" class="btn-primary">
                            Our Portfolio
                        </a>

                        <a href="contact.html" class="btn-outline">
                            Get Started
                        </a>
                    </div>

                </div>

            </div>
        </div>

    </div>


    <!-- Previous Button -->
    <button class="slider-btn prev" onclick="changeSlide(-1)">
        &#10094;
    </button>

    <!-- Next Button -->
    <button class="slider-btn next" onclick="changeSlide(1)">
        &#10095;
    </button>


    <!-- Dots -->
    <div class="slider-dots">

        <span class="dot active"
              onclick="goToSlide(0)"></span>

        <span class="dot"
              onclick="goToSlide(1)"></span>

        <span class="dot"
              onclick="goToSlide(2)"></span>

    </div>

</section>
        <!-- slider Area End-->
      
<!-- ================= Services Area Start ================= -->
<section class="se-services-area section-padding30">

    <div class="container">

        <!-- Section Heading -->
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-9">

                <div class="section-tittle text-center mb-60">
                    <div class="front-text">
                        <h2>Our Services</h2>
                    </div>
                    <p class="se-services-intro">
                        Professional AutoCAD design and drafting solutions
                        for building, architectural and mechanical requirements.
                    </p>
                </div>

            </div>
        </div>


        <!-- Services -->
        <div class="row">


            <!-- Service 1 -->
            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">

                <div class="se-service-card">

                    <div class="se-service-image">

                        <img src="{{ asset('website/assets/img/service/services/drawing07.jpg') }}"
                             alt="Building Design and AutoCAD Layout">

                        <div class="se-service-number">01</div>

                    </div>

                    <div class="se-service-content">

                        <div class="se-service-icon">
                            <i class="fas fa-building"></i>
                        </div>

                        <h3>
                            <a href="{{ url('/services') }}">
                                Building Design
                            </a>
                        </h3>

                        <p>
                            Accurate building layouts, floor plans and
                            architectural drawings prepared according to
                            project requirements.
                        </p>

                        <a href="{{ url('/services') }}" class="se-service-link">
                            Explore Service
                            <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </div>

            <!-- Service 2 -->
            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">

                <div class="se-service-card">

                    <div class="se-service-image">

                        <img src="{{ asset('website/assets/img/service/services/drawing02.jpg') }}"
                             alt="Architectural AutoCAD Drawing">

                        <div class="se-service-number">02</div>

                    </div>

                    <div class="se-service-content">

                        <div class="se-service-icon">
                            <i class="bi bi-compass"></i>
                        </div>

                        <h3>
                            <a href="{{ url('/services') }}">
                                Architectural Drawing
                            </a>
                        </h3>

                        <p>
                            Detailed 2D architectural drawings that help
                            visualize spaces, layouts and project concepts
                            before execution.
                        </p>

                        <a href="{{ url('/services') }}" class="se-service-link">
                            Explore Service
                            <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </div>


            <!-- Service 3 -->
            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">

                <div class="se-service-card">

                    <div class="se-service-image">

                        <img src="{{ asset('website/assets/img/service/services/drawing03.jpg') }}"
                             alt="Mechanical AutoCAD Design">

                        <div class="se-service-number">03</div>

                    </div>

                    <div class="se-service-content">

                        <div class="se-service-icon">
                            <i class="fas fa-cogs"></i>
                        </div>

                        <h3>
                            <a href="{{ url('/services') }}">
                                Mechanical Design
                            </a>
                        </h3>

                        <p>
                            Technical mechanical drawings and machine
                            component designs prepared with practical
                            engineering details.
                        </p>

                        <a href="{{ url('/services') }}" class="se-service-link">
                            Explore Service
                            <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </div>


            <!-- Service 4 -->
            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">

                <div class="se-service-card">

                    <div class="se-service-image">

                        <img src="{{ asset('website/assets/img/service/services/drawing05.jpg') }}"
                             alt="AutoCAD Floor Plan">

                        <div class="se-service-number">04</div>

                    </div>

                    <div class="se-service-content">

                        <div class="se-service-icon">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>

                        <h3>
                            <a href="{{ url('/services') }}">
                                Floor Plans & Layouts
                            </a>
                        </h3>

                        <p>
                            Clear and detailed floor plans designed to
                            provide better understanding of spaces,
                            dimensions and layouts.
                        </p>

                        <a href="{{ url('/services') }}" class="se-service-link">
                            Explore Service
                            <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </div>


            <!-- Service 5 -->
            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">

                <div class="se-service-card">

                    <div class="se-service-image">

                        <img src="{{ asset('website/assets/img/service/services/drawing06.jpg') }}"
                             alt="Machine Component AutoCAD Drawing">

                        <div class="se-service-number">05</div>

                    </div>

                    <div class="se-service-content">

                        <div class="se-service-icon">
                            <i class="bi bi-wrench-adjustable"></i>
                        </div>

                        <h3>
                            <a href="{{ url('/services') }}">
                                Machine Components
                            </a>
                        </h3>

                        <p>
                            Precise component drawings with dimensions and
                            technical details for machine and mechanical
                            requirements.
                        </p>

                        <a href="{{ url('/services') }}" class="se-service-link">
                            Explore Service
                            <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </div>


            <!-- Service 6 -->
            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">

                <div class="se-service-card">

                    <div class="se-service-image">

                        <img src="{{ asset('website/assets/img/service/services/technical-drawing.png') }}"
                             alt="Technical AutoCAD Drawing">

                        <div class="se-service-number">06</div>

                    </div>

                    <div class="se-service-content">

                        <div class="se-service-icon">
                            <i class="fas fa-file-alt"></i>
                        </div>

                        <h3>
                            <a href="{{ url('/services') }}">
                                Technical Drafting
                            </a>
                        </h3>

                        <p>
                            Well-organized 2D technical drawings focused on
                            clarity, accuracy and practical project needs.
                        </p>

                        <a href="{{ url('/services') }}" class="se-service-link">
                            Explore Service
                            <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </div>

        </div>


        <!-- Bottom CTA -->
        <div class="row justify-content-center mt-25">

            <div class="col-xl-8 col-lg-9">

                <div class="se-services-cta text-center">

                    <p>
                        Have a specific AutoCAD design requirement?
                    </p>

                    <a href="{{ url('/contact') }}" class="btn red-btn2">
                        Discuss Your Project
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- ================= Services Area End ================= -->




<!-- About Area Start -->
<!-- About Sushil Enterprises Area Start -->
<section class="sw-about-area section-padding2">
    <div class="container">

        <div class="row align-items-center">

            <!-- Left Image -->
            <div class="col-xl-6 col-lg-6 mb-50">

                <div class="sw-about-image">

                    <img src="{{ asset('website/assets/img/gallery/about.png') }}"
                         alt="Sushil Enterprises AutoCAD Design">

                    <!-- Small Design Badge -->
                    <div class="sw-about-badge">
                        <div class="sw-about-badge-icon">
                           <i class="bi bi-compass"></i>
                        </div>

                        <div>
                            <strong>AutoCAD</strong>
                            <span>Design & Drafting</span>
                        </div>
                    </div>

                </div>

            </div>


            <!-- Right Content -->
            <div class="col-xl-6 col-lg-6 mb-50">

                <div class="sw-about-content">

                    <!-- Section Title -->
                    <div class="sw-about-heading">

                        <span class="sw-small-title">
                            <i class="fas fa-building"></i>
                            ABOUT SUSHIL ENTERPRISES
                        </span>

                        <h2>
                            Professional AutoCAD
                            <br>
                            Design & Drafting Solutions
                        </h2>

                    </div>


                    <p class="sw-about-lead">
                        <strong>Sushil Enterprises</strong> provides professional
                        AutoCAD-based design and drafting services for building,
                        architectural and mechanical design requirements.
                    </p>

                    <p>
                        We create accurate and detailed 2D drawings and technical
                        designs that help architects, engineers, contractors and
                        businesses visualize their projects before execution.
                    </p>

                    <p>
                        From building layouts and floor plans to machine components
                        and mechanical drawings, our focus is on accuracy, clarity
                        and practical design solutions.
                    </p>


                    <!-- Highlights -->
                    <div class="sw-about-points">

                        <div class="sw-about-point">
                            <i class="fas fa-check"></i>
                            <span>Accurate 2D Technical Drawings</span>
                        </div>

                        <div class="sw-about-point">
                            <i class="fas fa-check"></i>
                            <span>Building & Architectural Designs</span>
                        </div>

                        <div class="sw-about-point">
                            <i class="fas fa-check"></i>
                            <span>Mechanical & Machine Component Designs</span>
                        </div>

                        <div class="sw-about-point">
                            <i class="fas fa-check"></i>
                            <span>Practical & Clear Design Solutions</span>
                        </div>

                    </div>


                    <a href="{{ url('/about-us') }}" class="btn red-btn2 mt-20">
                        Read More
                    </a>

                </div>

            </div>

        </div>

    </div>
</section>
<!-- About Sushil Enterprises Area End -->
<!-- About Area End -->
<!-- Why Choose Us Area Start -->
<section class="sw-why-area section-padding2">
    <div class="container">

        <!-- Section Heading -->
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-9">
                <div class="section-tittle text-center mb-70">
                    <div class="front-text">
                        <h2>Why Choose Us</h2>
                    </div>
                    <span class="back-text">Why Us</span>

                    <p class="mt-25">
                        At Sushil Enterprises, we focus on accurate, clear and
                        practical AutoCAD designs that help turn project ideas
                        into detailed technical drawings.
                    </p>
                </div>
            </div>
        </div>

        <div class="row align-items-center">

            <!-- Left Content -->
            <div class="col-xl-5 col-lg-5 mb-50">

                <div class="sw-why-content">

                    <span class="sw-small-title">
                        <i class="bi bi-wrench-adjustable"></i>
                        PROFESSIONAL CAD SERVICES
                    </span>

                    <h3>
                        Accurate Designs.
                        <br>
                        Practical Solutions.
                    </h3>

                    <p>
                        Sushil Enterprises provides AutoCAD-based design and
                        drafting solutions for building, architectural and
                        mechanical requirements.
                    </p>

                    <p>
                        We prepare detailed 2D drawings with attention to
                        accuracy, clarity and project requirements, helping
                        architects, engineers, contractors and businesses
                        visualize their projects before execution.
                    </p>

                    <a href="{{ url('/contact') }}" class="btn red-btn2 mt-15">
                        Get In Touch
                    </a>

                </div>

            </div>

            <!-- Right Features -->
            <div class="col-xl-7 col-lg-7">

                <div class="row">

                    <!-- Feature 1 -->
                    <div class="col-md-6 mb-30">
                        <div class="sw-feature">

                            <div class="sw-feature-icon">
                              <i class="bi bi-wrench-adjustable"></i>
                            </div>

                            <div class="sw-feature-content">
                                <h4>Accurate Designs</h4>
                                <p>
                                    Precise and detailed AutoCAD drawings
                                    prepared with attention to technical
                                    requirements.
                                </p>
                            </div>

                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="col-md-6 mb-30">
                        <div class="sw-feature">

                            <div class="sw-feature-icon">
                                <i class="fas fa-building"></i>
                            </div>

                            <div class="sw-feature-content">
                                <h4>Building Design</h4>
                                <p>
                                    Building layouts, floor plans and
                                    architectural drawings based on project
                                    requirements.
                                </p>
                            </div>

                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class="col-md-6 mb-30">
                        <div class="sw-feature">

                            <div class="sw-feature-icon">
                                <i class="fas fa-cogs"></i>
                            </div>

                            <div class="sw-feature-content">
                                <h4>Mechanical Design</h4>
                                <p>
                                    Detailed machine components and mechanical
                                    drawings designed with practical details.
                                </p>
                            </div>

                        </div>
                    </div>

                    <!-- Feature 4 -->
                    <div class="col-md-6 mb-30">
                        <div class="sw-feature">

                            <div class="sw-feature-icon">
                                <i class="bi bi-compass"></i>
                            </div>

                            <div class="sw-feature-content">
                                <h4>Detailed Drafting</h4>
                                <p>
                                    Clear and organized 2D technical drawings
                                    for better project planning and execution.
                                </p>
                            </div>

                        </div>
                    </div>

                    <!-- Feature 5 -->
                    <div class="col-md-6 mb-30">
                        <div class="sw-feature">

                            <div class="sw-feature-icon">
                                <i class="fas fa-lightbulb"></i>
                            </div>

                            <div class="sw-feature-content">
                                <h4>Practical Solutions</h4>
                                <p>
                                    Design solutions focused on real project
                                    requirements and practical applications.
                                </p>
                            </div>

                        </div>
                    </div>

                    <!-- Feature 6 -->
                    <div class="col-md-6 mb-30">
                        <div class="sw-feature">

                            <div class="sw-feature-icon">
                                <i class="fas fa-handshake"></i>
                            </div>

                            <div class="sw-feature-content">
                                <h4>Client Focused</h4>
                                <p>
                                    We understand project needs and work closely
                                    with clients throughout the design process.
                                </p>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>
<!-- Why Choose Us Area End -->
      
<!-- ================= Our Projects Area Start ================= -->
<section class="se-projects-area section-padding30">

    <div class="container">

        <!-- Section Heading -->
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-9">

                <div class="section-tittle text-center mb-60">
                    <div class="front-text">
                        <h2>Our Projects</h2>
                    </div>

                    <span class="back-text">Projects</span>

                    <p class="se-projects-intro">
                        Explore some of our AutoCAD design and drafting work,
                        including building layouts, architectural drawings
                        and mechanical design projects.
                    </p>
                </div>

            </div>
        </div>


        <!-- Projects Grid -->
        <div class="row">


            <!-- Project 01 -->
            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">

                <div class="se-project-card">

                    <div class="se-project-image">

                        <img src="{{ asset('website/assets/img/service/services/drawing01.jpg') }}"
                             alt="Building AutoCAD Drawing">

                        <div class="se-project-overlay">

                            <span class="se-project-category">
                                Building Design
                            </span>

                            <h3>Building Layout</h3>

                            <a href="{{ asset('website/assets/img/service/services/drawing01.jpg') }}"
                               class="se-project-view"
                               target="_blank">
                                <i class="fas fa-plus"></i>
                            </a>

                        </div>

                        <span class="se-project-number">01</span>

                    </div>

                </div>

            </div>


            <!-- Project 02 -->
            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">

                <div class="se-project-card">

                    <div class="se-project-image">

                        <img src="{{ asset('website/assets/img/service/services/drawing02.jpg') }}"
                             alt="Architectural AutoCAD Drawing">

                        <div class="se-project-overlay">

                            <span class="se-project-category">
                                Architectural Design
                            </span>

                            <h3>Architectural Drawing</h3>

                            <a href="{{ asset('website/assets/img/service/services/drawing02.jpg') }}"
                               class="se-project-view"
                               target="_blank">
                                <i class="fas fa-plus"></i>
                            </a>

                        </div>

                        <span class="se-project-number">02</span>

                    </div>

                </div>

            </div>


            <!-- Project 03 -->
            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">

                <div class="se-project-card">

                    <div class="se-project-image">

                        <img src="{{ asset('website/assets/img/service/services/drawing03.jpg') }}"
                             alt="Floor Plan AutoCAD Drawing">

                        <div class="se-project-overlay">

                            <span class="se-project-category">
                                Floor Plan
                            </span>

                            <h3>Floor Plan Design</h3>

                            <a href="{{ asset('website/assets/img/service/services/drawing03.jpg') }}"
                               class="se-project-view"
                               target="_blank">
                                <i class="fas fa-plus"></i>
                            </a>

                        </div>

                        <span class="se-project-number">03</span>

                    </div>

                </div>

            </div>


            <!-- Project 04 -->
            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">

                <div class="se-project-card">

                    <div class="se-project-image">

                        <img src="{{ asset('website/assets/img/service/services/drawing04.jpg') }}"
                             alt="Mechanical AutoCAD Drawing">

                        <div class="se-project-overlay">

                            <span class="se-project-category">
                                Mechanical Design
                            </span>

                            <h3>Mechanical Drawing</h3>

                            <a href="{{ asset('website/assets/img/service/services/drawing04.jpg') }}"
                               class="se-project-view"
                               target="_blank">
                                <i class="fas fa-plus"></i>
                            </a>

                        </div>

                        <span class="se-project-number">04</span>

                    </div>

                </div>

            </div>


            <!-- Project 05 -->
            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">

                <div class="se-project-card">

                    <div class="se-project-image">

                        <img src="{{ asset('website/assets/img/service/services/drawing05.jpg') }}"
                             alt="Machine Component AutoCAD Drawing">

                        <div class="se-project-overlay">

                            <span class="se-project-category">
                                Machine Design
                            </span>

                            <h3>Machine Component</h3>

                            <a href="{{ asset('website/assets/img/service/services/drawing05.jpg') }}"
                               class="se-project-view"
                               target="_blank">
                                <i class="fas fa-plus"></i>
                            </a>

                        </div>

                        <span class="se-project-number">05</span>

                    </div>

                </div>

            </div>


            <!-- Project 06 -->
            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">

                <div class="se-project-card">

                    <div class="se-project-image">

                        <img src="{{ asset('website/assets/img/service/services/drawing06.jpg') }}"
                             alt="Technical AutoCAD Drawing">

                        <div class="se-project-overlay">

                            <span class="se-project-category">
                                Technical Drafting
                            </span>

                            <h3>Technical Drawing</h3>

                            <a href="{{ asset('website/assets/img/service/services/drawing06.jpg') }}"
                               class="se-project-view"
                               target="_blank">
                                <i class="fas fa-plus"></i>
                            </a>

                        </div>

                        <span class="se-project-number">06</span>

                    </div>

                </div>

            </div>

        </div>


        <!-- Bottom Button -->
        <div class="row justify-content-center mt-20">

            <div class="col-auto">

                <a href="{{ url('/projects') }}" class="btn red-btn2">
                    View All Projects
                </a>

            </div>

        </div>

    </div>

</section>
<!-- =========================================================
     1. OUR EXPERTISE
========================================================= -->
<section class="se-expertise-area section-padding30">

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-9">

                <div class="section-tittle text-center mb-60">
                    <div class="front-text">
                        <h2>Our Expertise</h2>
                    </div>

                    <span class="back-text">Expertise</span>

                    <p class="se-section-intro">
                        Our expertise covers building, architectural and
                        mechanical AutoCAD design and technical drafting.
                    </p>
                </div>

            </div>
        </div>


        <div class="row">

            <!-- 2D Drawings -->
            <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                <div class="se-stat-card">

                    <div class="se-stat-icon">
                      <i class="bi bi-easel"></i>
                    </div>

                    <div class="se-stat-number">2D</div>

                    <h3>2D Drawings</h3>

                    <p>
                        Clear and detailed technical drawings
                        prepared in AutoCAD.
                    </p>

                </div>
            </div>


            <!-- Building Plans -->
            <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                <div class="se-stat-card">

                    <div class="se-stat-icon">
                        <i class="fas fa-building"></i>
                    </div>

                    <div class="se-stat-number">01</div>

                    <h3>Building Plans</h3>

                    <p>
                        Professional layouts and floor plans
                        for building projects.
                    </p>

                </div>
            </div>


            <!-- Mechanical Designs -->
            <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                <div class="se-stat-card">

                    <div class="se-stat-icon">
                        <i class="fas fa-cogs"></i>
                    </div>

                    <div class="se-stat-number">02</div>

                    <h3>Mechanical Designs</h3>

                    <p>
                        Detailed drawings for machines and
                        mechanical components.
                    </p>

                </div>
            </div>


            <!-- Technical Drafting -->
            <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                <div class="se-stat-card">

                    <div class="se-stat-icon">
                        <i class="bi bi-compass"></i>
                    </div>

                    <div class="se-stat-number">03</div>

                    <h3>Technical Drafting</h3>

                    <p>
                        Accurate and organized technical
                        drafting for project requirements.
                    </p>

                </div>
            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     2. HOW WE WORK
========================================================= -->
<section class="se-work-area section-padding30">

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-9">

                <div class="section-tittle text-center mb-60">
                    <div class="front-text">
                        <h2>How We Work</h2>
                    </div>

                    <span class="back-text">Process</span>

                    <p class="se-section-intro">
                        A simple and organized approach to take your
                        project from an initial idea to final drawing.
                    </p>
                </div>

            </div>
        </div>


        <div class="se-work-grid">

            <!-- Discuss -->
            <div class="se-work-item">

                <div class="se-work-icon">
                    <i class="fas fa-comments"></i>
                    <span>01</span>
                </div>

                <h3>Discuss</h3>

                <p>
                    We understand your project requirements,
                    ideas, dimensions and design expectations.
                </p>

            </div>


            <!-- Design -->
            <div class="se-work-item">

                <div class="se-work-icon">
                  <i class="bi bi-vector-pen"></i>
                    <span>02</span>
                </div>

                <h3>Design</h3>

                <p>
                    We create accurate AutoCAD drawings based
                    on the discussed project requirements.
                </p>

            </div>


            <!-- Review -->
            <div class="se-work-item">

                <div class="se-work-icon">
                    <i class="fas fa-search"></i>
                    <span>03</span>
                </div>

                <h3>Review</h3>

                <p>
                    Drawings are reviewed and required changes
                    are incorporated according to feedback.
                </p>

            </div>


            <!-- Deliver -->
            <div class="se-work-item">

                <div class="se-work-icon">
                   <i class="bi bi-folder-symlink"></i>
                    <span>04</span>
                </div>

                <h3>Deliver</h3>

                <p>
                    After final approval, the completed drawings
                    are prepared and delivered.
                </p>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     4. CALL TO ACTION
========================================================= -->
<section class="se-cta-area">

    <div class="container">

        <div class="se-cta-box">

            <div class="se-cta-icon">
              <i class="bi bi-compass"></i>
            </div>

            <div class="se-cta-content">

                <span>LET'S WORK TOGETHER</span>

                <h2>Have a Design Requirement?</h2>

                <p>
                    Let us turn your ideas into accurate and professional
                    AutoCAD designs.
                </p>

            </div>

            <div class="se-cta-button">

                <a href="{{ url('/contact') }}" class="btn red-btn2">
                    Get In Touch
                </a>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     5. CONTACT / ENQUIRY FORM
========================================================= -->
<section class="se-enquiry-area section-padding30">

    <div class="container">

        <div class="row align-items-center">

            <!-- Left Content -->
            <div class="col-xl-5 col-lg-5 mb-50">

                <div class="se-enquiry-content">

                    <span class="se-enquiry-small-title">
                        <i class="fas fa-paper-plane"></i>
                        START YOUR PROJECT
                    </span>

                    <h2>
                        Tell Us About
                        <br>
                        Your Project
                    </h2>

                    <p>
                        Have a building, architectural or mechanical
                        design requirement? Share your project details
                        with us and our team will understand your
                        requirements.
                    </p>


                    <div class="se-contact-info">

                        <div class="se-contact-item">

                            <div class="se-contact-icon">
                               <i class="bi bi-telephone-fill"></i>
                            </div>

                            <div>
                                <span>Call Us</span>
                                <strong>+91 9453175157</strong>
                            </div>

                        </div>


                        <div class="se-contact-item">

                            <div class="se-contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>

                            <div>
                                <span>Email Us</span>
                                <strong>info@sushilInterprise.com</strong>
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- Form -->
            <div class="col-xl-7 col-lg-7">

                <div class="se-enquiry-form">

                    <div class="se-form-heading">

                        <h3>Send An Enquiry</h3>

                        <p>
                            Fill in the details below and tell us
                            what you need.
                        </p>

                    </div>


                    <form action="#" method="POST">

                        @csrf

                        <div class="row">

                            <!-- Name -->
                            <div class="col-md-6">

                                <div class="se-form-group">

                                    <label>
                                        Your Name
                                    </label>

                                    <input type="text"
                                           name="name"
                                           placeholder="Enter your name"
                                           required>

                                </div>

                            </div>


                            <!-- Phone -->
                            <div class="col-md-6">

                                <div class="se-form-group">

                                    <label>
                                        Phone Number
                                    </label>

                                    <input type="tel"
                                           name="phone"
                                           placeholder="Enter phone number"
                                           required>

                                </div>

                            </div>


                            <!-- Email -->
                            <div class="col-md-6">

                                <div class="se-form-group">

                                    <label>
                                        Email Address
                                    </label>

                                    <input type="email"
                                           name="email"
                                           placeholder="Enter email address">

                                </div>

                            </div>


                            <!-- Service -->
                            <div class="col-md-6">

                                <div class="se-form-group">

                                    <label>
                                        Select Service
                                    </label>

                                    <select name="service" required style="
                                        background: #ffffff !important;
                                        color: #000000 !important;
                                    ">

                                        <option value="">
                                            Select a service
                                        </option>

                                        <option value="building-design">
                                            Building Design
                                        </option>

                                        <option value="architectural-drawing">
                                            Architectural Drawing
                                        </option>

                                        <option value="mechanical-design">
                                            Mechanical Design
                                        </option>

                                        <option value="floor-plan">
                                            Floor Plans & Layouts
                                        </option>

                                        <option value="machine-component">
                                            Machine Component Design
                                        </option>

                                        <option value="technical-drafting">
                                            Technical Drafting
                                        </option>

                                    </select>

                                </div>

                            </div>


                            <!-- Project Requirement -->
                            <div class="col-12">

                                <div class="se-form-group">

                                    <label>
                                        Project Requirement
                                    </label>

                                    <textarea name="project_requirement"
                                              rows="5"
                                              placeholder="Tell us about your project and requirements..."
                                              required></textarea>

                                </div>

                            </div>


                            <!-- Submit -->
                            <div class="col-12">

                                <button type="submit"
                                        class="btn red-btn2 se-submit-btn">

                                    Submit Enquiry
                                    <i class="fas fa-arrow-right"></i>

                                </button>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= Our Projects Area End ================= -->

@php
    $steps = [
        [
            'title' => 'Understand requirements',
            'text'  => 'We discuss your project and collect the sizes, drawings and technical requirements before any work starts.',
        ],
        [
            'title' => 'Plan the layout',
            'text'  => 'We prepare an initial layout so you can see the direction of the design early.',
        ],
        [
            'title' => 'Draft in AutoCAD',
            'text'  => 'Detailed 2D drawings are prepared with accurate dimensions and clear technical details.',
        ],
        [
            'title' => 'Review and revise',
            'text'  => 'We go through the drawings with you and make the changes needed to match your requirements.',
        ],
        [
            'title' => 'Deliver final drawings',
            'text'  => 'You receive well-organized AutoCAD drawings, ready for planning and execution.',
        ],
    ];
@endphp

<!-- Design Process Area Start -->
<section class="pr-process" aria-labelledby="pr-process-title">
  <div class="pr-wrap">

    <div class="pr-head">
      <div>
        <span class="pr-label">Process</span>
        <h2 id="pr-process-title">Our Design Process</h2>
      </div>
      <p>
        From understanding your requirements to delivering detailed AutoCAD
        drawings, we follow a clear and systematic design process.
      </p>
    </div>

    <ol class="pr-steps">
      @foreach ($steps as $step)
        <li class="pr-step">
          <div class="pr-dim" aria-hidden="true">
            <span class="pr-num">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
          </div>
          <div class="pr-body">
            <h3>{{ $step['title'] }}</h3>
            <p>{{ $step['text'] }}</p>
          </div>
        </li>
      @endforeach
    </ol>

  </div>
</section>


      
        <script>

    let currentSlide = 0;

    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');

    let slideInterval;


    function showSlide(index) {

        // Loop slides
        if (index >= slides.length) {
            currentSlide = 0;
        }

        else if (index < 0) {
            currentSlide = slides.length - 1;
        }

        else {
            currentSlide = index;
        }


        // Remove active
        slides.forEach(function(slide) {
            slide.classList.remove('active');
        });


        dots.forEach(function(dot) {
            dot.classList.remove('active');
        });


        // Add active
        slides[currentSlide].classList.add('active');

        dots[currentSlide].classList.add('active');

    }


    // Next / Previous
    function changeSlide(direction) {

        showSlide(currentSlide + direction);

        resetAutoSlide();

    }


    // Go to specific slide
    function goToSlide(index) {

        showSlide(index);

        resetAutoSlide();

    }


    // Automatic Slider
    function startAutoSlide() {

        slideInterval = setInterval(function() {

            showSlide(currentSlide + 1);

        }, 5000);

    }


    // Reset timer
    function resetAutoSlide() {

        clearInterval(slideInterval);

        startAutoSlide();

    }


    // Start
    startAutoSlide();

</script>
@endsection