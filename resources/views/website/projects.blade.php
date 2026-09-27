@extends('website.layouts.main')
@section('main')
   <!-- ================= Our Projects Area Start ================= -->
<section class="se-projects-area section-padding30 mt-150">

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

        <!-- Section Heading -->
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-9">

                <div class="section-tittle text-center mb-60">

                    <div class="front-text">
                        <h2>Our Expertise</h2>
                    </div>

                    <span class="back-text">Expertise</span>

                    <p class="se-section-intro">
                        Professional AutoCAD design and technical drafting
                        solutions for architectural, building and mechanical projects.
                    </p>

                </div>

            </div>
        </div>


        <!-- Expertise Cards -->
        <div class="row">

            <!-- 2D Drawings -->
            <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                <div class="se-expertise-card">

                    <div class="se-card-top">
                        <span class="se-card-number">01</span>

                        <div class="se-expertise-icon">
                            <i class="bi bi-easel"></i>
                        </div>
                    </div>

                    <div class="se-card-content">

                        <h3>2D AutoCAD Drawings</h3>

                        <p>
                            Precise and detailed 2D technical drawings
                            prepared to meet project specifications and
                            professional drafting standards.
                        </p>

                    </div>

                    <div class="se-card-line"></div>

                    <span class="se-card-label">TECHNICAL DRAWING</span>

                </div>
            </div>


            <!-- Building Plans -->
            <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                <div class="se-expertise-card">

                    <div class="se-card-top">
                        <span class="se-card-number">02</span>

                        <div class="se-expertise-icon">
                            <i class="fas fa-building"></i>
                        </div>
                    </div>

                    <div class="se-card-content">

                        <h3>Building Plans</h3>

                        <p>
                            Detailed building layouts, floor plans and
                            architectural drawings designed for practical
                            construction requirements.
                        </p>

                    </div>

                    <div class="se-card-line"></div>

                    <span class="se-card-label">ARCHITECTURAL DESIGN</span>

                </div>
            </div>


            <!-- Mechanical Designs -->
            <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                <div class="se-expertise-card">

                    <div class="se-card-top">
                        <span class="se-card-number">03</span>

                        <div class="se-expertise-icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                    </div>

                    <div class="se-card-content">

                        <h3>Mechanical Designs</h3>

                        <p>
                            Accurate mechanical drawings and component
                            designs developed with attention to dimensions,
                            details and technical requirements.
                        </p>

                    </div>

                    <div class="se-card-line"></div>

                    <span class="se-card-label">MECHANICAL DESIGN</span>

                </div>
            </div>


            <!-- Technical Drafting -->
            <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                <div class="se-expertise-card">

                    <div class="se-card-top">
                        <span class="se-card-number">04</span>

                        <div class="se-expertise-icon">
                            <i class="bi bi-compass"></i>
                        </div>
                    </div>

                    <div class="se-card-content">

                        <h3>Technical Drafting</h3>

                        <p>
                            Organized and accurate technical drafting
                            solutions developed according to specific
                            project requirements.
                        </p>

                    </div>

                    <div class="se-card-line"></div>

                    <span class="se-card-label">TECHNICAL DRAFTING</span>

                </div>
            </div>

        </div>

    </div>

</section>

<style>
/* ==========================================
   SUSHIL ENTERPRISES - EXPERTISE
   Primary Color: red
========================================== */

.se-expertise-area {
    position: relative;
    background: #f8f8f8;
    overflow: hidden;
}

.se-section-intro {
    max-width: 700px;
    margin: 18px auto 0;
    color: #666;
    font-size: 15px;
    line-height: 1.8;
}


/* Expertise Card */

.se-expertise-card {
    position: relative;
    height: 100%;
    min-height: 340px;
    padding: 32px 28px;

    background: #fff;
    border: 1px solid #e8e8e8;

    transition: all 0.35s ease;
    overflow: hidden;
}


/* Technical Corner */

.se-expertise-card::before {
    content: "";
    position: absolute;

    top: 0;
    right: 0;

    width: 55px;
    height: 55px;

    border-top: 2px solid red;
    border-right: 2px solid red;

    opacity: 0.8;
}

.se-expertise-card::after {
    content: "";
    position: absolute;

    bottom: 0;
    left: 0;

    width: 45px;
    height: 45px;

    border-left: 2px solid red;
    border-bottom: 2px solid red;

    opacity: 0.6;
}


/* Hover */

.se-expertise-card:hover {
    transform: translateY(-8px);

    border-color: red;

    box-shadow: 0 18px 45px rgba(0, 0, 0, 0.09);
}


/* Card Top */

.se-card-top {
    display: flex;
    align-items: center;
    justify-content: space-between;

    margin-bottom: 30px;
}


/* Number */

.se-card-number {
    font-size: 13px;
    font-weight: 600;

    letter-spacing: 2px;

    color: red;
}


/* Icon */

.se-expertise-icon {
    width: 58px;
    height: 58px;

    display: flex;
    align-items: center;
    justify-content: center;

    background: #fff4ef;

    border: 1px solid #ffd7c8;

    color: red;

    font-size: 23px;

    transition: all 0.35s ease;
}


/* Icon Hover */

.se-expertise-card:hover .se-expertise-icon {
    background: red;
    color: #fff;

    border-color: red;

    transform: rotate(-5deg);
}


/* Content */

.se-card-content h3 {
    margin-bottom: 15px;

    font-size: 21px;
    font-weight: 600;

    color: #222;

    line-height: 1.35;
}

.se-card-content p {
    margin-bottom: 25px;

    color: #777;

    font-size: 14px;
    line-height: 1.8;
}


/* Bottom Line */

.se-card-line {
    width: 38px;
    height: 2px;

    background: red;

    margin-bottom: 13px;

    transition: width 0.35s ease;
}

.se-expertise-card:hover .se-card-line {
    width: 65px;
}


/* Label */

.se-card-label {
    font-size: 10px;
    font-weight: 600;

    letter-spacing: 1.5px;

    color: #999;
}
</style>

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
