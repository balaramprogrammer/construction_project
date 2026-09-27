@extends('/website/layouts/main')
@section('main')
<style>
.bg-light {
    background-color: #e8eef6 !important;
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
        <div class="col-lg-6 col-md-6 mt-5">
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
                <img src="{{ asset('website/images/slider/exprience01.png') }}"
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
<section class="se-about-cta section-padding">
    <div class="container">

        <div class="se-cta-wrapper">

            <!-- Decorative Technical Elements -->
            <div class="se-cta-grid"></div>
            <div class="se-cta-corner se-cta-corner-top"></div>
            <div class="se-cta-corner se-cta-corner-bottom"></div>

            <div class="row align-items-center">

                <!-- Content -->
                <div class="col-lg-8">

                    <div class="se-cta-content">

                        <span class="se-cta-label">
                            <i class="fas fa-drafting-compass"></i>
                            LET'S WORK TOGETHER
                        </span>

                        <h2>
                            Have a Design
                            <span>Requirement?</span>
                        </h2>

                        <p>
                            Share your building, architectural, mechanical,
                            or technical drafting requirements with us.
                            Our team will create accurate and professional
                            AutoCAD drawings tailored to your project.
                        </p>

                    </div>

                </div>


                <!-- CTA -->
                <div class="col-lg-4">

                    <div class="se-cta-action">

                        <a href="{{ url('/contact') }}" class="se-cta-btn">
                            <span>Discuss Your Project</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>

                        <small>
                            Get in touch with our design team
                        </small>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>

<style>
/* ==========================================
   SUSHIL ENTERPRISES
   PROFESSIONAL CTA SECTION
   Primary Color: #ff5f13
========================================== */

.se-about-cta {
    position: relative;
    background: #f7f7f7;
    overflow: hidden;
}


/* CTA Wrapper */

.se-cta-wrapper {
    position: relative;

    padding: 70px 70px;

    background: #1f1f1f;

    overflow: hidden;

    border-left: 4px solid #ff5f13;

    box-shadow: 0 15px 45px rgba(0, 0, 0, 0.10);
}


/* Technical Grid */

.se-cta-grid {
    position: absolute;

    top: 0;
    right: 0;

    width: 45%;
    height: 100%;

    opacity: 0.08;

    background-image:
        linear-gradient(#ffffff 1px, transparent 1px),
        linear-gradient(90deg, #ffffff 1px, transparent 1px);

    background-size: 35px 35px;

    pointer-events: none;
}


/* Orange Glow */

.se-cta-wrapper::before {
    content: "";

    position: absolute;

    width: 250px;
    height: 250px;

    right: -100px;
    top: -120px;

    border-radius: 50%;

    background: #ff5f13;

    opacity: 0.10;

    pointer-events: none;
}


/* Technical Corners */

.se-cta-corner {
    position: absolute;

    width: 45px;
    height: 45px;

    pointer-events: none;
}

.se-cta-corner-top {
    top: 20px;
    right: 20px;

    border-top: 1px solid #ff5f13;
    border-right: 1px solid #ff5f13;
}

.se-cta-corner-bottom {
    bottom: 20px;
    left: 20px;

    border-left: 1px solid #ff5f13;
    border-bottom: 1px solid #ff5f13;
}


/* CTA Label */

.se-cta-label {
    display: inline-flex;

    align-items: center;

    gap: 10px;

    margin-bottom: 18px;

    color: #ff5f13;

    font-size: 12px;
    font-weight: 600;

    letter-spacing: 2px;
}

.se-cta-label i {
    font-size: 15px;
}


/* Heading */

.se-cta-content h2 {
    margin-bottom: 20px;

    color: #ffffff;

    font-size: 42px;
    font-weight: 600;

    line-height: 1.2;
}

.se-cta-content h2 span {
    color: #ff5f13;
}


/* Description */

.se-cta-content p {
    max-width: 680px;

    margin-bottom: 0;

    color: #bdbdbd;

    font-size: 15px;

    line-height: 1.9;
}


/* CTA Action */

.se-cta-action {
    position: relative;

    display: flex;

    flex-direction: column;

    align-items: flex-start;

    justify-content: center;

    padding-left: 25px;

    z-index: 2;
}


/* CTA Button */

.se-cta-btn {
    display: inline-flex;

    align-items: center;

    gap: 22px;

    padding: 16px 22px 16px 25px;

    background: #ff5f13;

    color: #ffffff;

    font-size: 14px;
    font-weight: 600;

    text-decoration: none;

    transition: all 0.3s ease;
}

.se-cta-btn i {
    width: 34px;
    height: 34px;

    display: flex;

    align-items: center;
    justify-content: center;

    background: rgba(255, 255, 255, 0.15);

    transition: all 0.3s ease;
}


.se-cta-btn:hover {
    background: #ffffff;

    color: #1f1f1f;

    transform: translateY(-3px);

    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.20);
}

.se-cta-btn:hover i {
    background: #ff5f13;

    color: #ffffff;

    transform: translateX(4px);
}


/* Small Text */

.se-cta-action small {
    margin-top: 14px;

    color: #888;

    font-size: 12px;
}


/* ==========================================
   RESPONSIVE
========================================== */

@media (max-width: 991px) {

    .se-cta-wrapper {
        padding: 55px 45px;
    }

    .se-cta-content h2 {
        font-size: 36px;
    }

    .se-cta-action {
        padding-left: 0;
        margin-top: 30px;
    }

}


@media (max-width: 767px) {

    .se-cta-wrapper {
        padding: 45px 30px;

        border-left-width: 3px;
    }

    .se-cta-content h2 {
        font-size: 30px;
    }

    .se-cta-content p {
        font-size: 14px;
    }

    .se-cta-grid {
        width: 70%;
    }

}


@media (max-width: 575px) {

    .se-cta-wrapper {
        padding: 40px 22px;
    }

    .se-cta-content h2 {
        font-size: 27px;
    }

    .se-cta-label {
        font-size: 10px;

        letter-spacing: 1.5px;
    }

    .se-cta-btn {
        width: 100%;

        justify-content: space-between;
    }

}
</style>


</section>
<!-- ================ CTA Section End ================ -->

@endsection
