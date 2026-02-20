<?php
$page_title = "Contact Us - HEZA FLEET";
$active_menu = "contact";
include('parts/shared/header.php');
?>

<!-- Page Title
============================================= -->
<section class="page-title dark"
    style="padding: 160px 0; background: url('images/new/page-banners/2.png') center center no-repeat; background-size: cover;">
    <div class="container z-3 position-relative">
        <div class="page-title-row">

            <div class="page-title-content">
                <h1 class="text-white"
                    style="color: #FFFFFF !important; opacity: 1 !important; text-shadow: 0 2px 10px rgba(0,0,0,0.5);">
                    Contact Us</h1>
            </div>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php" class="text-white"
                            style="color: #FFFFFF !important; opacity: 1 !important; text-shadow: 0 1px 3px rgba(0,0,0,0.5);">Home</a>
                    </li>
                    <li class="breadcrumb-item active text-white" aria-current="page"
                        style="color: #FFFFFF !important; opacity: 1 !important; text-shadow: 0 1px 3px rgba(0,0,0,0.5);">
                        Contact</li>
                </ol>
            </nav>

        </div>
    </div>

    <div class="video-wrap h-100 position-absolute top-0 start-0 z-2">
        <div class="video-overlay" style="background-color: rgba(0,0,0,0.6);"></div>
    </div>
</section><!-- .page-title end -->

<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap pb-0">
        <div class="container">

            <div class="row">
                <!-- Contact Form -->
                <div class="col-lg-7">
                    <div class="heading-block">
                        <h2>Get in Touch</h2>
                        <p>We're here to support your business operations. Whether you need a quote for staff
                            transportation, labor camp logistics, or want to join our fleet partnership program, our
                            team is ready to assist you.</p>
                    </div>

                    <div class="form-widget">
                        <div class="form-result"></div>

                        <form class="row mb-0" id="template-contactform" name="template-contactform"
                            action="include/form.php" method="post">

                            <div class="form-process">
                                <div class="css3-spinner">
                                    <div class="css3-spinner-scaler"></div>
                                </div>
                            </div>

                            <div class="col-md-4 form-group">
                                <label for="template-contactform-name">Name <small>*</small></label>
                                <input type="text" id="template-contactform-name" name="template-contactform-name"
                                    value="" class="form-control border-form-control required">
                            </div>

                            <div class="col-md-4 form-group">
                                <label for="template-contactform-email">Email <small>*</small></label>
                                <input type="email" id="template-contactform-email" name="template-contactform-email"
                                    value="" class="required email form-control border-form-control">
                            </div>

                            <div class="col-md-4 form-group">
                                <label for="template-contactform-phone">Phone</label>
                                <input type="text" id="template-contactform-phone" name="template-contactform-phone"
                                    value="" class="form-control border-form-control">
                            </div>

                            <div class="w-100"></div>

                            <div class="col-md-12 form-group">
                                <label for="template-contactform-subject">Subject <small>*</small></label>
                                <input type="text" id="template-contactform-subject" name="subject" value=""
                                    class="required form-control border-form-control">
                            </div>

                            <div class="col-12 form-group">
                                <label for="template-contactform-message">Message <small>*</small></label>
                                <textarea class="required form-control border-form-control"
                                    id="template-contactform-message" name="template-contactform-message" rows="5"
                                    cols="30"></textarea>
                            </div>

                            <div class="col-12 form-group d-none">
                                <input type="text" id="template-contactform-botcheck"
                                    name="template-contactform-botcheck" value=""
                                    class="form-control border-form-control">
                            </div>

                            <div class="col-12 form-group">
                                <button class="button button-3d m-0" type="submit" id="template-contactform-submit"
                                    name="template-contactform-submit" value="submit">Send Message</button>
                            </div>

                            <input type="hidden" name="prefix" value="template-contactform-">

                        </form>
                    </div>
                </div>

                <!-- Sidebar Contact Info -->
                <div class="col-lg-4 offset-lg-1">
                    <!-- Address Card -->
                    <div class="card h-100 mb-4">
                        <div class="card-body">
                            <h4 class="mb-3 color">Contact Details:</h4>

                            <div class="d-flex align-items-start mb-3">
                                <i class="bi-geo-alt fs-4 me-3 color"></i>
                                <div>
                                    <h5 class="mb-1">Address:</h5>
                                    <p class="mb-0 text-muted">Al Muraqabat C23, Reef Mall,<br>Office Number L1 / 6A,
                                        Dubai, UAE
                                    </p>
                                </div>
                            </div>

                            <div class="d-flex align-items-start mb-3">
                                <i class="bi-telephone fs-4 me-3 color"></i>
                                <div>
                                    <h5 class="mb-1">Phone:</h5>
                                    <p class="mb-0"><a href="tel:+971556905903" class="text-muted">+971 55 690 5903</a>
                                    </p>
                                </div>
                            </div>

                            <div class="d-flex align-items-start mb-3">
                                <i class="bi-envelope fs-4 me-3 color"></i>
                                <div>
                                    <h5 class="mb-1">Email:</h5>
                                    <p class="mb-0"><a href="mailto:bookings@hezafleet.ae"
                                            class="text-muted">bookings@hezafleet.ae</a></p>
                                </div>
                            </div>

                            <div class="d-flex align-items-start">
                                <i class="bi-whatsapp fs-4 me-3 color"></i>
                                <div>
                                    <h5 class="mb-1">WhatsApp:</h5>
                                    <p class="mb-0"><a href="https://wa.me/971556905903" class="text-muted">Chat with
                                            us</a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Full Width Map -->
        <div class="section m-0 p-0 w-100" style="height: 500px;">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115494.39800880373!2d55.1583!3d25.1279!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2sDubai%2C%20United%20Arab%20Emirates!5e0!3m2!1sen!2sae!4v1703836000000!5m2!1sen!2sae"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </div>
</section><!-- #content end -->

<?php include('parts/shared/footer.php'); ?>