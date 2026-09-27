@extends('/website/layouts/main')
@section('main')

<!-- ==========================================
     SUSHIL ENTERPRISES — HOW WE WORK
     High-End Modern Engineering Design
     Primary Color: #ff5f13
========================================== -->
<section class="se-how-work-area mt-5">
    <div class="container">
        <div class="row align-items-center gy-5">

            <!-- Left: High-Tech Showcase Image -->
            <div class="col-lg-5">
                <div class="se-work-image-container">
                    <div class="se-cad-image-box">
                        <div class="se-cad-overlay"></div>
                        <img src="{{asset('website/assets/img/gallery/work.png')}}" alt="AutoCAD Design Process" class="se-work-img">
                        
                        <!-- Glass Badge Top Right -->
                        <div class="se-top-badge">
                            <span class="se-pulse-dot"></span>
                            <span>2D/3D CAD PRECISION</span>
                        </div>

                        <!-- Floating Experience Badge Bottom -->
                        <div class="se-glass-counter-card">
                            <div class="se-counter-number">10+</div>
                            <div class="se-counter-text">
                                <h4>Years of Design Excellence</h4>
                                <p>Delivered 1,200+ high-precision AutoCAD blueprints.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Process Timeline -->
            <div class="col-lg-7 mt-5">
                <div class="se-section-header">
                    <span class="se-badge-label">
                        <i class="fa-solid fa-compass-drafting"></i> Our Work Process
                    </span>
                    <h2 class="se-main-title">How We Bring Your <span class="se-highlight">CAD Visions To Life</span></h2>
                    <p class="se-main-subtitle">
                        From initial requirement specifications to final error-free DWG/PDF delivery, we execute every project with mathematical precision.
                    </p>
                </div>

                <div class="se-timeline-wrapper">
                    <div class="se-timeline-line"></div>

                    <!-- Step 01 -->
                    <div class="se-process-card">
                        <div class="se-step-number">01</div>
                        <div class="se-step-content">
                            <div class="se-step-head">
                                <h3>Requirement Analysis & Discovery</h3>
                                <span class="se-phase-tag">Phase 01</span>
                            </div>
                            <p>We analyze your project dimensions, architectural sketches, technical constraints, and specific CAD drafting requirements.</p>
                        </div>
                    </div>

                    <!-- Step 02 -->
                    <div class="se-process-card">
                        <div class="se-step-number">02</div>
                        <div class="se-step-content">
                            <div class="se-step-head">
                                <h3>Strategic Planning & Approach</h3>
                                <span class="se-phase-tag">Phase 02</span>
                            </div>
                            <p>We structure layer standards, unit scales, line weights, and project timeline to ensure complete alignment before drafting.</p>
                        </div>
                    </div>

                    <!-- Step 03 -->
                    <div class="se-process-card">
                        <div class="se-step-number">03</div>
                        <div class="se-step-content">
                            <div class="se-step-head">
                                <h3>Precision AutoCAD Drafting</h3>
                                <span class="se-phase-tag">Phase 03</span>
                            </div>
                            <p>Our senior CAD engineers draft accurate, industry-compliant 2D layouts and 3D models with meticulous attention to detail.</p>
                        </div>
                    </div>

                    <!-- Step 04 -->
                    <div class="se-process-card">
                        <div class="se-step-number">04</div>
                        <div class="se-step-content">
                            <div class="se-step-head">
                                <h3>Quality Audit & Client Review</h3>
                                <span class="se-phase-tag">Phase 04</span>
                            </div>
                            <p>We run strict dimension verifications and technical cross-checks, inviting your feedback to refine every single drawing.</p>
                        </div>
                    </div>

                    <!-- Step 05 -->
                    <div class="se-process-card">
                        <div class="se-step-number">05</div>
                        <div class="se-step-content">
                            <div class="se-step-head">
                                <h3>Final CAD Deliverable Handoff</h3>
                                <span class="se-phase-tag">Final Stage</span>
                            </div>
                            <p>Receive organized DWG, DXF, PDF, and print-ready files structured according to international CAD standards.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<style>
/* ==========================================
   HIGH-END PROCESS SECTION STYLES
========================================== */

.se-how-work-area {
    padding: 90px 0;
    background: #ffffff;
    position: relative;
    font-family: 'Plus Jakarta Sans', sans-serif;
}

/* Image Showcase Styling */
.se-work-image-container {
    position: relative;
}

.se-cad-image-box {
    position: relative;
    border-radius: 24px;
    overflow: hidden;
    background-color: #0b0f19;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
}

.se-cad-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(15,23,42,0) 0%, rgba(15,23,42,0.85) 100%);
    z-index: 2;
}

.se-work-img {
    width: 100%;
    height: 540px;
    object-fit: cover;
    display: block;
    opacity: 0.9;
    transition: transform 0.6s ease;
}

.se-cad-image-box:hover .se-work-img {
    transform: scale(1.04);
}

.se-top-badge {
    position: absolute;
    top: 20px;
    right: 20px;
    z-index: 3;
    background: rgba(15, 23, 42, 0.8);
    backdrop-filter: blur(12px);
    border: 1px solid rgba(255, 255, 255, 0.15);
    padding: 8px 16px;
    border-radius: 12px;
    color: #ffffff;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.5px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.se-pulse-dot {
    width: 8px;
    height: 8px;
    background-color: #10b981;
    border-radius: 50%;
    box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.3);
}

.se-glass-counter-card {
    position: absolute;
    bottom: 24px;
    left: 24px;
    right: 24px;
    z-index: 3;
    background: rgba(15, 23, 42, 0.85);
    backdrop-filter: blur(16px);
    border: 1px solid rgba(255, 255, 255, 0.15);
    padding: 20px;
    border-radius: 20px;
    display: flex;
    align-items: center;
    gap: 16px;
}

.se-counter-number {
    width: 56px;
    height: 56px;
    background: linear-gradient(135deg, #ff5f13 0%, #ff7b39 100%);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
    font-size: 22px;
    font-weight: 800;
    flex-shrink: 0;
    box-shadow: 0 10px 20px rgba(255, 95, 19, 0.3);
}

.se-counter-text h4 {
    margin: 0;
    color: #ffffff;
    font-size: 16px;
    font-weight: 700;
}

.se-counter-text p {
    margin: 4px 0 0 0;
    color: #cbd5e1;
    font-size: 12px;
}

/* Header Right */
.se-badge-label {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 6px 14px;
    background: rgba(255, 95, 19, 0.08);
    border: 1px solid rgba(255, 95, 19, 0.2);
    color: #ff5f13;
    font-size: 12px;
    font-weight: 800;
    border-radius: 30px;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 12px;
}

.se-main-title {
    font-size: 38px;
    font-weight: 800;
    color: #0f172a;
    line-height: 1.2;
    margin-bottom: 12px;
}

.se-highlight {
    background: linear-gradient(135deg, #ff5f13, #ff8544);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.se-main-subtitle {
    color: #64748b;
    font-size: 15px;
    line-height: 1.7;
    margin-bottom: 32px;
}

/* Timeline Cards */
.se-timeline-wrapper {
    position: relative;
    padding-left: 10px;
}

.se-timeline-line {
    position: absolute;
    top: 25px;
    bottom: 25px;
    left: 36px;
    width: 2px;
    background: #e2e8f0;
    z-index: 1;
}

.se-process-card {
    position: relative;
    z-index: 2;
    background: #ffffff;
    border: 1px solid #f1f5f9;
    border-radius: 20px;
    padding: 20px;
    margin-bottom: 16px;
    display: flex;
    align-items: flex-start;
    gap: 20px;
    transition: all 0.3s ease;
}

.se-process-card:hover {
    transform: translateX(8px);
    border-color: rgba(255, 95, 19, 0.3);
    box-shadow: 0 15px 30px -10px rgba(255, 95, 19, 0.1);
}

.se-step-number {
    width: 52px;
    height: 52px;
    border-radius: 16px;
    background: #ffffff;
    border: 2px solid #e2e8f0;
    color: #64748b;
    font-weight: 800;
    font-size: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    transition: all 0.3s ease;
}

.se-process-card:hover .se-step-number {
    background: linear-gradient(135deg, #ff5f13 0%, #ff7b39 100%);
    border-color: #ff5f13;
    color: #ffffff;
    box-shadow: 0 8px 16px rgba(255, 95, 19, 0.3);
}

.se-step-content {
    flex-grow: 1;
}

.se-step-head {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 4px;
}

.se-step-head h3 {
    margin: 0;
    font-size: 18px;
    font-weight: 700;
    color: #0f172a;
    transition: color 0.3s ease;
}

.se-process-card:hover .se-step-head h3 {
    color: #ff5f13;
}

.se-phase-tag {
    font-size: 11px;
    font-weight: 700;
    color: #94a3b8;
}

.se-step-content p {
    margin: 0;
    color: #64748b;
    font-size: 14px;
    line-height: 1.6;
}

/* Responsive Overrides */
@media (max-width: 991px) {
    .se-main-title { font-size: 30px; }
    .se-work-img { height: 420px; }
}
@media (max-width: 575px) {
    .se-process-card { padding: 16px; gap: 14px; }
    .se-step-number { width: 44px; height: 44px; font-size: 15px; }
    .se-step-head h3 { font-size: 16px; }
    .se-timeline-line { left: 30px; }
}
</style>

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
<!-- Tools & Expertise Section -->
<section class="tools-expertise-section py-5">
    <div class="container">

        <!-- Section Heading -->
        <div class="section-heading text-center mb-5">

            <span class="section-subtitle">
                OUR CAPABILITIES
            </span>

            <h2 class="section-title">
                Tools <span>&amp;</span> Expertise
            </h2>

            <p class="section-description">
                We use professional CAD tools and technical drafting
                expertise to create accurate, clear and practical drawings.
            </p>

        </div>


        <!-- Expertise Cards -->
        <div class="row g-4">

            <!-- AutoCAD -->
            <div class="col-lg-3 col-md-6">

                <div class="expertise-card">

                    <span class="expertise-number">01</span>

                    <div class="expertise-icon">
                        <i class="bi bi-vector-pen"></i>
                    </div>

                    <h3>AutoCAD</h3>

                    <p>
                        Professional AutoCAD drafting for accurate
                        architectural, building and mechanical design
                        requirements.
                    </p>

                    <div class="expertise-line"></div>

                </div>

            </div>


            <!-- 2D Drafting -->
            <div class="col-lg-3 col-md-6">

                <div class="expertise-card">

                    <span class="expertise-number">02</span>

                    <div class="expertise-icon">
                        <i class="bi bi-rulers"></i>
                    </div>

                    <h3>2D Drafting</h3>

                    <p>
                        Detailed 2D drawings, floor plans, layouts and
                        technical drafts prepared with precision and clarity.
                    </p>

                    <div class="expertise-line"></div>

                </div>

            </div>


            <!-- Technical Drawing -->
            <div class="col-lg-3 col-md-6">

                <div class="expertise-card">

                    <span class="expertise-number">03</span>

                    <div class="expertise-icon">
                        <i class="bi bi-diagram-3"></i>
                    </div>

                    <h3>Technical Drawing</h3>

                    <p>
                        Clear and practical technical drawings designed
                        to communicate dimensions, layouts and specifications.
                    </p>

                    <div class="expertise-line"></div>

                </div>

            </div>


            <!-- CAD Documentation -->
            <div class="col-lg-3 col-md-6">

                <div class="expertise-card">

                    <span class="expertise-number">04</span>

                    <div class="expertise-icon">
                        <i class="bi bi-file-earmark-text"></i>
                    </div>

                    <h3>CAD Documentation</h3>

                    <p>
                        Organized CAD documentation with accurate drawings,
                        dimensions and technical details for project use.
                    </p>

                    <div class="expertise-line"></div>

                </div>

            </div>

        </div>

    </div>
</section>
<style>
/* =========================================
   Tools & Expertise
========================================= */

.tools-expertise-section {
    position: relative;
    background: #f5f5f5;
    overflow: hidden;
}


/* Section Heading */

.section-heading {
    max-width: 760px;
    margin: 0 auto;
}

.section-subtitle {
    display: inline-block;
    margin-bottom: 10px;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 2px;
    color: #ff0019;
}

.section-title {
    margin: 0 0 15px;
    font-size: 42px;
    line-height: 1.2;
    font-weight: 700;
    color: #222;
}

.section-title span {
    color: #ff0019;
}

.section-description {
    margin: 0;
    color: #666;
    font-size: 16px;
    line-height: 1.8;
}


/* =========================================
   Expertise Card
========================================= */

.expertise-card {
    position: relative;
    height: 100%;
    padding: 35px 28px 30px;
    background: #ffffff;
    border: 1px solid #e5e5e5;
    overflow: hidden;

    transition: all 0.35s ease;
}


/* Red Left Border */

.expertise-card::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;

    width: 4px;
    height: 0;

    background: #ff0019;

    transition: height 0.35s ease;
}


/* Hover */

.expertise-card:hover {
    transform: translateY(-8px);

    border-color: #ff0019;

    box-shadow: 0 18px 40px rgba(0, 0, 0, 0.10);
}

.expertise-card:hover::before {
    height: 100%;
}


/* =========================================
   Icon
========================================= */

.expertise-icon {
    width: 65px;
    height: 65px;

    display: flex;
    align-items: center;
    justify-content: center;

    margin-bottom: 25px;

    background: #212529;
    color: #ff0019;

    font-size: 28px;

    transition: all 0.35s ease;
}


.expertise-card:hover .expertise-icon {
    background: #ff0019;
    color: #ffffff;

    transform: rotate(-3deg);
}


/* =========================================
   Number
========================================= */

.expertise-number {
    position: absolute;

    top: 25px;
    right: 25px;

    font-size: 42px;
    line-height: 1;

    font-weight: 700;

    color: #eeeeee;

    transition: color 0.35s ease;
}

.expertise-card:hover .expertise-number {
    color: #f8d7da;
}


/* =========================================
   Content
========================================= */

.expertise-card h3 {
    margin-bottom: 14px;

    font-size: 21px;
    font-weight: 700;

    color: #222;
}

.expertise-card p {
    margin: 0;

    min-height: 85px;

    font-size: 14px;
    line-height: 1.8;

    color: #6a6a6a;
}


/* =========================================
   Bottom Line
========================================= */

.expertise-line {
    width: 35px;
    height: 2px;

    margin-top: 25px;

    background: #ff0019;

    transition: width 0.35s ease;
}

.expertise-card:hover .expertise-line {
    width: 70px;
}


/* =========================================
   Responsive
========================================= */

@media (max-width: 991px) {

    .section-title {
        font-size: 36px;
    }

    .expertise-card {
        padding: 30px 25px;
    }
}


@media (max-width: 767px) {

    .section-title {
        font-size: 30px;
    }

    .section-description {
        font-size: 14px;
    }

    .expertise-card {
        padding: 28px 22px;
    }

    .expertise-card p {
        min-height: auto;
    }
}
</style>
@endsection