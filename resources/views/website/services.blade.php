@extends('website.layouts.main')
@section('main')

<!-- About Area Start -->
<!-- About Sushil Enterprises Area Start -->
<section class="sw-about-area section-padding2 mt-150">
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


@endsection