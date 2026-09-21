@extends('/website/layouts/main')

@section('main')

<!-- Breadcrumb Start -->
<div class="breadcrumb-area">
    <div class="breadcrumb-bg d-flex align-items-center"
        style="background-image: url('{{ asset('website/assets/img/gallery/services_details.png') }}');">

        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap">
                        <h2>About Us</h2>

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ url('/') }}">Home</a>
                                </li>

                                <li class="breadcrumb-item active" aria-current="page">
                                    About Us
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Breadcrumb End -->

<style>
/* Short Breadcrumb */
.breadcrumb-area {
    width: 100%;
    margin-top: 150px;
}

.breadcrumb-bg {
    min-height: 180px;
    height: 180px;
    background-size: cover;
    background-position: center;
    position: relative;
}

/* Light Transparent Overlay */
.breadcrumb-bg::before {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.15);
}

.breadcrumb-bg .container {
    position: relative;
    z-index: 2;
}

.hero-cap h2 {
    color: #fff;
    font-size: 36px;
    margin-bottom: 8px;
}

.hero-cap .breadcrumb {
    background: transparent;
    padding: 0;
    margin: 0;
}

.hero-cap .breadcrumb-item,
.hero-cap .breadcrumb-item a {
    color: #fff;
    font-size: 14px;
}

.hero-cap .breadcrumb-item a {
    text-decoration: none;
}

.hero-cap .breadcrumb-item.active {
    color: #ddd;
}

.hero-cap .breadcrumb-item + .breadcrumb-item::before {
    color: #fff;
    content: "/";
}

/* Mobile */
@media (max-width: 767px) {
    .breadcrumb-bg {
        min-height: 140px;
        height: 140px;
    }

    .hero-cap h2 {
        font-size: 28px;
    }
}
</style>
<section class="about-area section-padding">
    <div class="container">


    <div class="row align-items-center">

        <!-- Image -->
        <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
            <div class="about-img">
                <img src="{{asset('website/images/slider/banner02.png')}}"
                     alt="Sushil Enterprises AutoCAD Design"
                     class="img-fluid">
            </div>
        </div>

        <!-- Content -->
        <div class="col-lg-6 col-md-6">
            <div class="about-caption">

                <div class="section-tittle mb-25">
                    <span>About Sushil Enterprises</span>
                    <h2>Professional AutoCAD Design & Drafting Solutions</h2>
                </div>

                <p>
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
                    and mechanical drawings, our focus is on accuracy,
                    clarity and practical design solutions.
                </p>

                <a href="{{ url('/contact') }}" class="btn btn-primary mt-3">
                    Get In Touch
                </a>

            </div>
        </div>

    </div>

</div>


</section>
<!-- ================ About Hero Section End ================ -->

<!-- ================ What We Do Section Start ================ -->

<section class="about-details section-padding">
    <div class="container">


    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">

            <div class="section-tittle mb-50">
                <span>What We Do</span>
                <h2>Designing Ideas Into Detailed Drawings</h2>

                <p>
                    We transform concepts, measurements and requirements into
                    clear and precise AutoCAD drawings suitable for planning,
                    fabrication and project execution.
                </p>
            </div>

        </div>
    </div>


    <div class="row">

        <!-- Building Design -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="single-about-box text-center">

                <div class="about-icon mb-25">
                    <i class="ti-home"></i>
                </div>

                <h3>Building Design</h3>

                <p>
                    Detailed building plans, floor layouts, elevations,
                    sections and other architectural drawings using AutoCAD.
                </p>

            </div>
        </div>


        <!-- Mechanical Design -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="single-about-box text-center">

                <div class="about-icon mb-25">
                    <i class="ti-settings"></i>
                </div>

                <h3>Machine Design</h3>

                <p>
                    Accurate mechanical drawings, machine components,
                    fabrication drawings and technical layouts for
                    manufacturing requirements.
                </p>

            </div>
        </div>


        <!-- 2D Drafting -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="single-about-box text-center">

                <div class="about-icon mb-25">
                    <i class="ti-ruler-pencil"></i>
                </div>

                <h3>2D CAD Drafting</h3>

                <p>
                    Professional 2D CAD drafting with proper dimensions,
                    annotations, measurements and technical details.
                </p>

            </div>
        </div>

    </div>

</div>


</section>
<!-- ================ What We Do Section End ================ -->

<!-- ================ Our Expertise Section Start ================ -->

<section class="about-area section-padding bg-light">
    <div class="container">


    <div class="row align-items-center">

        <div class="col-lg-6">

            <div class="section-tittle mb-30">
                <span>Our Expertise</span>
                <h2>Accurate Designs For Real-World Projects</h2>
            </div>

            <p>
                At Sushil Enterprises, we understand that a good drawing is
                an important part of a successful project. Our designs are
                prepared with attention to dimensions, proportions,
                technical details and project requirements.
            </p>

            <p>
                Whether it is a residential building layout, commercial
                project, machine component or fabrication drawing, we aim
                to provide drawings that are easy to understand and ready
                for the next stage of work.
            </p>

            <div class="about-list mt-30">

                <p>
                    <i class="ti-check-box"></i>
                    Detailed AutoCAD 2D Drawings
                </p>

                <p>
                    <i class="ti-check-box"></i>
                    Building Plans & Floor Layouts
                </p>

                <p>
                    <i class="ti-check-box"></i>
                    Mechanical & Machine Drawings
                </p>

                <p>
                    <i class="ti-check-box"></i>
                    Dimensioned Technical Drawings
                </p>

                <p>
                    <i class="ti-check-box"></i>
                    Fabrication & Manufacturing Drawings
                </p>

            </div>

        </div>


        <div class="col-lg-6 mt-4 mt-lg-0">

            <div class="about-img">
                <img src="{{ asset('website/assets/img/gallery/about2.jpg') }}"
                     alt="AutoCAD Technical Drawing"
                     class="img-fluid">
            </div>

        </div>

    </div>

</div>


</section>
<!-- ================ Our Expertise Section End ================ -->

<!-- ================ Why Choose Us Section Start ================ -->

<section class="about-area section-padding">
    <div class="container">


    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">

            <div class="section-tittle mb-50">
                <span>Why Sushil Enterprises</span>
                <h2>Our Approach To Every Project</h2>
            </div>

        </div>
    </div>


    <div class="row">

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="single-about-box text-center">
                <i class="ti-ruler-alt-2"></i>
                <h3>Precision</h3>
                <p>
                    Accurate measurements, dimensions and technical details
                    in every drawing.
                </p>
            </div>
        </div>


        <div class="col-lg-3 col-md-6 mb-4">
            <div class="single-about-box text-center">
                <i class="ti-layout"></i>
                <h3>Clear Design</h3>
                <p>
                    Clean and easy-to-understand drawings prepared according
                    to project requirements.
                </p>
            </div>
        </div>


        <div class="col-lg-3 col-md-6 mb-4">
            <div class="single-about-box text-center">
                <i class="ti-time"></i>
                <h3>Timely Work</h3>
                <p>
                    We focus on completing design and drafting work within
                    the agreed project timeline.
                </p>
            </div>
        </div>


        <div class="col-lg-3 col-md-6 mb-4">
            <div class="single-about-box text-center">
                <i class="ti-comments"></i>
                <h3>Client Focused</h3>
                <p>
                    We understand project requirements and work closely with
                    clients throughout the design process.
                </p>
            </div>
        </div>

    </div>

</div>


</section>
<!-- ================ Why Choose Us Section End ================ -->

<!-- ================ CTA Section Start ================ -->

<section class="about-cta section-padding">
    <div class="container">


    <div class="row justify-content-center text-center">

        <div class="col-lg-8">

            <div class="section-tittle">

                <span>Let's Work Together</span>

                <h2>
                    Have a Design Requirement?
                </h2>

                <p>
                    Share your building, machine or drafting requirements
                    with us and let us create a detailed AutoCAD design
                    for your project.
                </p>

                <a href="{{ url('/contact') }}"
                   class="btn btn-primary mt-20">
                    Contact Us
                </a>

            </div>

        </div>

    </div>

</div>


</section>
<!-- ================ CTA Section End ================ -->

@endsection
