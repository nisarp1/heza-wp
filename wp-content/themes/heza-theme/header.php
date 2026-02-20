<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="author" content="SemiColonWeb">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/new/favicon.png">

    <?php wp_head(); ?>
</head>

<body <?php body_class('stretched side-push-panel'); ?>
    data-loader-html="<div><img src='<?php echo get_template_directory_uri(); ?>/demos/car/images/page-loader.gif' alt='Loader'></div>">

    <!-- Side Panel Overlay -->
    <div class="body-overlay"></div>

    <!-- Side Panel -->
    <div id="side-panel">

        <div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="bi-x-lg"></i></a></div>

        <div class="side-panel-wrap">

            <div class="widget">

                <a href="<?php echo home_url(); ?>"><img
                        src="<?php echo get_template_directory_uri(); ?>/images/new/logo-white.png" alt="Canvas Logo"
                        height="50"></a>

                <h4 class="mb-2">Professional Transport Solutions</h4>
                <p>Our core service is staff transportation, offering long-term monthly and yearly contracts. We provide
                    buses either with or without drivers, depending on your needs. If your company has its own driver,
                    we supply only the bus. If you require both, we provide the bus along with a driver.</p>
                <a href="<?php echo home_url('/services'); ?>" class="button button-small button-rounded m-0 mb-4">View
                    Services</a>

                <div class="widget quick-contact-widget form-widget border-0 pt-0">
                    <h4>Quick Contact</h4>
                    <div class="form-result"></div>
                    <form id="quick-contact-form" name="quick-contact-form" action="include/form.php" method="post"
                        class="quick-contact-form mb-0">
                        <div class="form-process">
                            <div class="css3-spinner">
                                <div class="css3-spinner-scaler"></div>
                            </div>
                        </div>
                        <input type="text" class="required form-control mb-2" id="quick-contact-form-name"
                            name="quick-contact-form-name" value="" placeholder="Full Name">
                        <input type="text" class="required form-control email mb-2" id="quick-contact-form-email"
                            name="quick-contact-form-email" value="" placeholder="Email Address">
                        <textarea class="required form-control mb-2 short-textarea" id="quick-contact-form-message"
                            name="quick-contact-form-message" rows="4" cols="30" placeholder="Message"></textarea>
                        <input type="text" class="d-none" id="quick-contact-form-botcheck"
                            name="quick-contact-form-botcheck" value="">
                        <input type="hidden" name="prefix" value="quick-contact-form-">
                        <button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit"
                            class="button button-small button-3d m-0" value="submit">Send Email</button>
                    </form>
                </div>

            </div>

        </div>

    </div>

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper">

        <!-- Header
        ============================================= -->
        <header id="header" class="header-size-sm bg-white" data-sticky-shrink="false" data-bs-theme="light">
            <div class="container">
                <div class="header-row">

                    <!-- Logo
                        ============================================= -->
                    <div id="logo" class="ms-auto ms-md-0">
                        <a href="<?php echo home_url(); ?>">
                            <img class="logo-default"
                                src="<?php echo get_template_directory_uri(); ?>/images/new/logo.png" alt="Canvas Logo">
                            <img class="logo-dark" src="<?php echo get_template_directory_uri(); ?>/images/new/logo.png"
                                alt="Canvas Logo">
                        </a>
                    </div><!-- #logo end -->

                    <ul class="header-extras d-none d-sm-flex mx-auto mx-md-0 mb-4 mb-md-0">
                        <li>
                            <i class="i-plain bi-telephone m-0" style="color: #E31E24;"></i>
                            <div class="he-text fw-normal">
                                Call Us:
                                <span><a href="tel:+971-55-690-5903" class="fw-medium" style="color: #E31E24;">+971 55
                                        690
                                        5903</a></span>
                            </div>
                        </li>
                        <li>
                            <i class="i-plain bi-envelope m-0" style="color: #E31E24;"></i>
                            <div class="he-text fw-normal">
                                Email Us:
                                <span><a href="mailto:bookings@hezafleet.com" target="_top" class="fw-medium"
                                        style="color: #E31E24;">bookings@hezafleet.com</a></span>
                            </div>
                        </li>
                        <li>
                            <?php echo do_shortcode('[gtranslate]'); ?>
                        </li>
                    </ul>

                </div>
            </div>

            <div id="header-wrap" class="">
                <div class="container">
                    <div class="header-row justify-content-between flex-row-reverse flex-lg-row top-search-parent">

                        <div class="header-misc">

                            <!-- Top Search
                            ============================================= -->
                            <div id="top-search" class="header-misc-icon">
                                <a href="#" id="top-search-trigger"><i class="uil uil-search"></i><i
                                        class="bi-x-lg"></i></a>
                            </div><!-- #top-search end -->

                            <!-- Header Buttons
                            ============================================= -->
                            <div class="header-buttons d-none d-sm-inline-block">
                                <a href="<?php echo home_url('/contact-us'); ?>" class="header-quote-link m-0">Get a
                                    Quote</a>
                            </div>

                        </div>

                        <div class="primary-menu-trigger">
                            <button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
                                <span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
                            </button>
                        </div>

                        <!-- Primary Navigation
                        ============================================= -->
                        <nav class="primary-menu with-arrows primary-menu-init">

                            <ul class="menu-container">
                                <li class="menu-item <?php echo is_front_page() ? 'current' : ''; ?>">
                                    <a class="menu-link" href="<?php echo home_url(); ?>">
                                        <div>Home</div>
                                    </a>
                                </li>
                                <li class="menu-item sub-menu <?php echo is_page('about-us') ? 'current' : ''; ?>">
                                    <a class="menu-link" href="<?php echo home_url('/about-us'); ?>">
                                        <div>About Us<i class="sub-menu-indicator fa-solid fa-caret-down"></i></div>
                                    </a>
                                    <ul class="sub-menu-container" style="">
                                        <li class="menu-item">
                                            <a class="menu-link" href="<?php echo home_url('/about-us'); ?>">
                                                <div>Company Profile</div>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="<?php echo home_url('/about-us'); ?>#mission">
                                                <div>Our Mission</div>
                                            </a>
                                        </li>
                                    </ul>
                                    <button class="sub-menu-trigger fa-solid fa-chevron-right"><span
                                            class="visually-hidden">Open Sub-Menu</span></button>
                                </li>
                                <li class="menu-item sub-menu <?php echo is_page('services') ? 'current' : ''; ?>">
                                    <a class="menu-link" href="<?php echo home_url('/services'); ?>">
                                        <div>Services<i class="sub-menu-indicator fa-solid fa-caret-down"></i></div>
                                    </a>
                                    <ul class="sub-menu-container" style="">
                                        <li class="menu-item">
                                            <a class="menu-link" href="<?php echo home_url('/services'); ?>">
                                                <div>Staff Transport</div>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="<?php echo home_url('/services'); ?>">
                                                <div>Labor Transport</div>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="<?php echo home_url('/services'); ?>">
                                                <div>School Bus Rental</div>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="<?php echo home_url('/services'); ?>">
                                                <div>Bus on Demand</div>
                                            </a>
                                        </li>
                                    </ul>
                                    <button class="sub-menu-trigger fa-solid fa-chevron-right"><span
                                            class="visually-hidden">Open Sub-Menu</span></button>
                                </li>
                                <li class="menu-item sub-menu"><a class="menu-link" href="#">
                                        <div>Fleets & Models<i class="sub-menu-indicator fa-solid fa-caret-down"></i>
                                        </div>
                                    </a>
                                    <ul class="sub-menu-container not-dark" data-class="up-lg:not-dark"
                                        data-bs-theme="light">
                                        <li class="menu-item"><a class="menu-link" href="https://www.odoo.com/app/fleet"
                                                target="_blank">
                                                <div>Staff Transport</div>
                                            </a></li>
                                        <li class="menu-item"><a class="menu-link" href="https://www.odoo.com/app/fleet"
                                                target="_blank">
                                                <div>Standard Buses</div>
                                            </a></li>
                                        <li class="menu-item"><a class="menu-link" href="https://www.odoo.com/app/fleet"
                                                target="_blank">
                                                <div>Minibuses</div>
                                            </a></li>
                                    </ul>
                                    <button class="sub-menu-trigger fa-solid fa-chevron-right"><span
                                            class="visually-hidden">Open Sub-Menu</span></button>
                                </li>


                                <li class="menu-item <?php echo is_page('partnership-program') ? 'current' : ''; ?>">
                                    <a class="menu-link" href="<?php echo home_url('/partnership-program'); ?>">
                                        <div>Partnership Program</div>
                                    </a>
                                </li>

                                <li class="menu-item <?php echo is_page('contact-us') ? 'current' : ''; ?>">
                                    <a class="menu-link" href="<?php echo home_url('/contact-us'); ?>">
                                        <div>Contact Us</div>
                                    </a>
                                </li>
                                <li class="menu-item"><a class="menu-link" href="https://www.odoo.com/app/fleet"
                                        target="_blank" style="color: #E31E24 !important;">
                                        <div><i class="bi-person-circle"></i> Login</div>
                                    </a></li>
                            </ul>

                        </nav><!-- #primary-menu end -->

                        <form class="top-search-form" action="<?php echo home_url(); ?>" method="get">
                            <input type="text" name="s" class="form-control" value=""
                                placeholder="Type &amp; Hit Enter.." autocomplete="off">
                        </form>

                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header><!-- #header end -->