<?php
/*
Template Name: Services
*/
get_header();
?>

<!-- Page Title
============================================= -->
<section class="page-title dark"
    style="padding: 160px 0; background: url('<?php echo get_template_directory_uri(); ?>/images/new/page-banners/3.png') center center no-repeat; background-size: cover;">
    <div class="container z-3 position-relative">
        <div class="page-title-row">

            <div class="page-title-content">
                <h1 class="text-white"
                    style="color: #FFFFFF !important; opacity: 1 !important; text-shadow: 0 2px 10px rgba(0,0,0,0.5);">
                    Our Services</h1>
            </div>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>" class="text-white"
                            style="color: #FFFFFF !important; opacity: 1 !important; text-shadow: 0 1px 3px rgba(0,0,0,0.5);">Home</a>
                    </li>
                    <li class="breadcrumb-item active text-white" aria-current="page"
                        style="color: #FFFFFF !important; opacity: 1 !important; text-shadow: 0 1px 3px rgba(0,0,0,0.5);">
                        Services</li>
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

            <div class="heading-block center bottommargin-lg">
                <h2>Corporate Fleet Solutions</h2>
                <span>Specialized in staff and labor transport with flexible leasing options to suit your business
                    needs.</span>
            </div>

            <div class="row col-mb-50 mb-0">

                <!-- Corporate Transport -->
                <div class="col-md-6 col-lg-3" id="corporate">
                    <div class="feature-box fbox-center fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><i class="bi-briefcase text-color"></i></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Staff Transportation</h3>
                            <p>Comfortable and punctual daily transport for your office employees, ensuring they arrive
                                ready to work.</p>
                        </div>
                    </div>
                </div>

                <!-- Tourist Services -->
                <div class="col-md-6 col-lg-3" id="tourist">
                    <div class="feature-box fbox-center fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><i class="bi-map text-color"></i></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Labor Transportation</h3>
                            <p>Cost-effective and safe mobility solutions for your workforce and labor teams, fully
                                compliant with regulations.</p>
                        </div>
                    </div>
                </div>

                <!-- Base Camp Trips -->
                <div class="col-md-6 col-lg-3" id="events">
                    <div class="feature-box fbox-center fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><i class="bi-compass text-color"></i></a>
                        </div>
                        <div class="fbox-content">
                            <span class="badge mb-2 d-inline-block fw-normal" style="background-color: #E31E24;">Leasing
                                Options</span>
                            <h3>Flexible Contracts</h3>
                            <p>Choose between Dry Lease (Bus Only) or Wet Lease (Bus with Driver) to suit your
                                operations.</p>
                        </div>
                    </div>
                </div>

                <!-- Corporate Team Events -->
                <div class="col-md-6 col-lg-3" id="team-events">
                    <div class="feature-box fbox-center fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><i class="bi-people text-color"></i></a>
                        </div>
                        <div class="fbox-content">
                            <span class="badge mb-2 d-inline-block fw-normal" style="background-color: #E31E24;">Partner
                                With Us</span>
                            <h3>Fleet Partnership Program</h3>
                            <p>Register your bus with us and earn steady income while we handle the management and
                                operations.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- Moving car on scroll
        ============================================= -->
        <div class="section m-0" style="padding: 100px 0;">
            <div class="running-car mt-6">
                <img class="car" src="<?php echo get_template_directory_uri(); ?>/images/new/sliding-bus.png"
                    alt="Sliding Bus">
                <img class="wheel"
                    src="<?php echo get_template_directory_uri(); ?>/demos/car/images/moving-car/car-tier.png"
                    alt="Image">
            </div>
            <div class="container">
                <div class="row" style="position: relative;">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="heading-block h-large">
                            <h3>Detailed<br>Logistics</h3>
                        </div>
                        <p>From daily staff shuttles to long-term labor transport, our fleet moves your business. We
                            offer tailored monthly and yearly contracts designed to meet the specific logistics of your
                            company. Reliability, safety, and efficiency, 24/7/365.</p>
                    </div>
                </div>
            </div>
        </div> <!-- Moving car on scroll End -->

        <!-- Call to Action -->
        <div class="section m-0"
            style="background: #FFF url('<?php echo get_template_directory_uri(); ?>/images/new/section-bg.jpg') left bottom no-repeat; background-size: cover; padding: 120px 0;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="h2 fw-bold mb-4">Need a Custom Transport Solution?</h2>
                        <a href="<?php echo home_url('/contact-us'); ?>"
                            class="button button-color button-large button-rounded">Contact Us
                            Today</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section><!-- #content end -->

<?php get_footer(); ?>