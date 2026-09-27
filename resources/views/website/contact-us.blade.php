@extends('website.layouts.main')
@section('main')
<!-- Contact Introduction Section -->
<section class="contact-intro py-5">
    <div class="container">
        <div class="row align-items-center g-4">

            <div class="col-lg-7">
                <span class="contact-subtitle">
                    LET'S WORK TOGETHER
                </span>

                <h2 class="contact-title">
                    Have a <span>Project</span> in Mind?
                </h2>

                <p class="contact-text">
                    Whether you need architectural drawings, 2D drafting,
                    building layouts or technical CAD documentation,
                    we are ready to understand your requirements and
                    provide a practical drafting solution.
                </p>

                <p class="contact-text mb-0">
                    Share your project details with us and our team will
                    get back to you to discuss your requirements.
                </p>
            </div>

            <div class="col-lg-5">
                <div class="contact-highlight">
                    <div class="highlight-icon">
                       <i class="bi bi-vector-pen"></i>
                    </div>

                    <h4>Professional CAD Solutions</h4>

                    <p>
                        Accurate drawings, clear documentation and
                        detail-focused drafting for your project.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Quick Contact Section -->
{{--<section class="quick-contact py-5">
    <div class="container">

        <div class="text-center mb-5">
            <span class="contact-subtitle">
                GET IN TOUCH
            </span>

            <h2 class="contact-title">
                Contact <span>Sushil Enterprises</span>
            </h2>

            <p class="contact-text mx-auto">
                Choose your preferred way to connect with us regarding
                your AutoCAD, drafting or technical drawing requirements.
            </p>
        </div>


        <div class="row g-4">

            <!-- Call -->
            <div class="col-lg-3 col-md-6">
                <div class="contact-card">

                    <div class="contact-icon">
                        <i class="bi bi-telephone"></i>
                    </div>

                    <h4>Call Us</h4>

                    <p>
                        Speak directly with our team
                        about your project.
                    </p>

                    <a href="tel:9453175157">
                        +91 9453175157
                    </a>

                </div>
            </div>


            <!-- WhatsApp -->
            <div class="col-lg-3 col-md-6">
                <div class="contact-card">

                    <div class="contact-icon">
                        <i class="bi bi-whatsapp"></i>
                    </div>

                    <h4>WhatsApp</h4>

                    <p>
                        Send your project requirements
                        directly through WhatsApp.
                    </p>

                    <a href="https://wa.me/9453175157"
                       target="_blank">
                        Chat With Us
                    </a>

                </div>
            </div>


            <!-- Email -->
            <div class="col-lg-3 col-md-6">
                <div class="contact-card">

                    <div class="contact-icon">
                        <i class="bi bi-envelope"></i>
                    </div>

                    <h4>Email Us</h4>

                    <p>
                        Send your requirements and
                        project details by email.
                    </p>

                    <a href="mailto:info@sushilenterprises.com">
                        Send Email
                    </a>

                </div>
            </div>


            <!-- Working Hours -->
            <div class="col-lg-3 col-md-6">
                <div class="contact-card">

                    <div class="contact-icon">
                        <i class="bi bi-clock"></i>
                    </div>

                    <h4>Working Hours</h4>

                    <p>
                        Monday – Saturday
                    </p>

                    <strong>
                        10:00 AM – 7:00 PM
                    </strong>

                </div>
            </div>

        </div>

    </div>
</section>--}}
 <!-- =========================================================
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

<!-- =========================================
     Location & Map Section
========================================= -->

<section class="location-map-section py-5">

    <div class="container">

        <div class="row g-0 align-items-stretch">

            <!-- Location Information -->
            <div class="col-lg-5">

                <div class="location-content">

                    <span class="location-subtitle">
                        FIND US
                    </span>

                    <h2>
                        Our <span>Location</span>
                    </h2>

                    <p class="location-description">
                        Visit Sushil Enterprises for professional AutoCAD,
                        2D drafting, technical drawing and CAD documentation
                        services. We are available to discuss your project
                        requirements and provide suitable drafting solutions.
                    </p>


                    <!-- Address -->
                    <div class="location-item">

                        <div class="location-icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>

                        <div>
                            <h4>Our Office</h4>

                            <p>
                                28/B, Gopal Nagar, Krishna Nagar,<br>
                                Alambagh, Lucknow Uttar pradesh, India.
                            </p>
                        </div>

                    </div>


                    <!-- Phone -->
                    <div class="location-item">

                        <div class="location-icon">
                            <i class="bi bi-telephone"></i>
                        </div>

                        <div>
                            <h4>Call Us</h4>

                            <a href="tel:9453175157">
                                +91 9453175157
                            </a>
                        </div>

                    </div>


                    <!-- Email -->
                    <div class="location-item">

                        <div class="location-icon">
                            <i class="bi bi-envelope"></i>
                        </div>

                        <div>
                            <h4>Email</h4>

                            <a href="mailto:info@sushilInterprise.com">
                                info@sushilInterprise.com
                            </a>
                        </div>

                    </div>


                    <!-- Get Direction Button -->
                    <a href="https://www.google.com/maps/dir/?api=1&destination=26.799556564945938,80.88707157450065"
   target="_blank"
   class="location-button">

    <i class="bi bi-arrow-up-right-circle"></i>
    Get Directions

</a>

                </div>

            </div>


            <!-- Google Map -->
            <div class="col-lg-7">

                <div class="map-wrapper">

                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3561.26917339256!2d80.88707157450065!3d26.799556564945938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bff0595480e8d%3A0x7fc6b6b46ebf9798!2sShri%20Krishna%20Lawn's!5e0!3m2!1sen!2sin!4v1790506167228!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>

                </div>

            </div>

        </div>

    </div>

</section>
<style>
/* =========================================
   Location & Map Section
========================================= */

.location-map-section {
    background: #f5f5f5;
}


/* Main Location Content */

.location-content {
    height: 100%;

    padding: 50px 45px;

    background: #212529;
    border-left: 5px solid #ff5f13;
}


/* Subtitle */

.location-subtitle {
    display: inline-block;

    margin-bottom: 10px;

    font-size: 12px;
    font-weight: 700;

    letter-spacing: 2px;

    color: #ff5f13;
}


/* Heading */

.location-content h2 {
    margin-bottom: 18px;

    color: #fff;

    font-size: 38px;
    font-weight: 700;
}

.location-content h2 span {
    color: #ff5f13;
}


/* Description */

.location-description {
    margin-bottom: 35px;

    color: #c8c8c8;

    font-size: 14px;
    line-height: 1.8;
}


/* Location Item */

.location-item {
    display: flex;
    align-items: flex-start;

    gap: 18px;

    margin-bottom: 25px;
}


/* Icon */

.location-icon {
    flex: 0 0 48px;

    width: 48px;
    height: 48px;

    display: flex;
    align-items: center;
    justify-content: center;

    background: #ff5f13;
    color: #fff;

    font-size: 20px;
}


/* Item Content */

.location-item h4 {
    margin: 0 0 5px;

    color: #fff;

    font-size: 16px;
    font-weight: 600;
}

.location-item p {
    margin: 0;

    color: #bdbdbd;

    font-size: 14px;
    line-height: 1.6;
}

.location-item a {
    color: #bdbdbd;

    font-size: 14px;

    text-decoration: none;

    transition: color 0.3s ease;
}

.location-item a:hover {
    color: #ff5f13;
}


/* Get Direction Button */

.location-button {
    display: inline-flex;
    align-items: center;
    gap: 10px;

    margin-top: 10px;

    padding: 12px 22px;

    background: #ff5f13;
    color: #fff;

    font-size: 14px;
    font-weight: 600;

    text-decoration: none;

    transition: all 0.3s ease;
}

.location-button:hover {
    background: #ff5f13;
    color: #fff;

    transform: translateY(-2px);
}


/* =========================================
   Map
========================================= */

.map-wrapper {
    height: 100%;
    min-height: 500px;

    background: #ddd;
}

.map-wrapper iframe {
    display: block;

    width: 100%;
    height: 100%;

    min-height: 500px;
}


/* =========================================
   Responsive
========================================= */

@media (max-width: 991px) {

    .location-content {
        padding: 40px 30px;
    }

    .location-content h2 {
        font-size: 32px;
    }

    .map-wrapper,
    .map-wrapper iframe {
        min-height: 400px;
    }

}


@media (max-width: 767px) {

    .location-content {
        padding: 35px 25px;
    }

    .location-content h2 {
        font-size: 28px;
    }

    .location-description {
        font-size: 13px;
    }

    .map-wrapper,
    .map-wrapper iframe {
        min-height: 350px;
    }

}
/* =========================================
   Contact Page
========================================= */

.contact-intro {
    background: #f5f5f5;
    margin-top:150px;
}


/* Section Heading */

.contact-subtitle {
    display: inline-block;
    margin-bottom: 10px;

    font-size: 13px;
    font-weight: 700;
    letter-spacing: 2px;

    color: #ff5f13;
}

.contact-title {
    margin-bottom: 18px;

    font-size: 42px;
    line-height: 1.2;
    font-weight: 700;

    color: #212529;
}

.contact-title span {
    color: #ff5f13;
}

.contact-text {
    max-width: 700px;

    color: #666;
    font-size: 15px;
    line-height: 1.8;
}


/* Highlight Box */

.contact-highlight {
    padding: 40px 35px;

    background: #212529;
    border-left: 5px solid #ff5f13;

    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.10);
}

.highlight-icon {
    width: 60px;
    height: 60px;

    display: flex;
    align-items: center;
    justify-content: center;

    margin-bottom: 22px;

    background: #ff5f13;
    color: #fff;

    font-size: 26px;
}

.contact-highlight h4 {
    margin-bottom: 12px;

    color: #fff;
    font-size: 22px;
    font-weight: 700;
}

.contact-highlight p {
    margin: 0;

    color: #cfcfcf;
    font-size: 14px;
    line-height: 1.8;
}


/* =========================================
   Quick Contact
========================================= */

.quick-contact {
    background: #fff;
}

.quick-contact .contact-text {
    max-width: 650px;
}


/* Contact Cards */

.contact-card {
    height: 100%;

    padding: 32px 25px;

    text-align: center;

    background: #fff;

    border: 1px solid #e5e5e5;

    transition: all 0.35s ease;
}

.contact-card:hover {
    transform: translateY(-7px);

    border-color: #ff5f13;

    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
}


/* Contact Icon */

.contact-icon {
    width: 60px;
    height: 60px;

    display: flex;
    align-items: center;
    justify-content: center;

    margin: 0 auto 20px;

    background: #212529;
    color: #ff5f13;

    font-size: 25px;

    transition: all 0.35s ease;
}

.contact-card:hover .contact-icon {
    background: #ff5f13;
    color: #fff;
}


/* Card Content */

.contact-card h4 {
    margin-bottom: 12px;

    font-size: 20px;
    font-weight: 700;

    color: #212529;
}

.contact-card p {
    margin-bottom: 15px;

    color: #777;

    font-size: 14px;
    line-height: 1.7;
}

.contact-card a,
.contact-card strong {
    color: #ff5f13;

    font-size: 14px;
    font-weight: 600;

    text-decoration: none;
}


/* =========================================
   Responsive
========================================= */

@media (max-width: 991px) {

    .contact-title {
        font-size: 36px;
    }

}

@media (max-width: 767px) {

    .contact-title {
        font-size: 30px;
    }

    .contact-highlight {
        padding: 30px 25px;
    }

}
</style>

@endsection