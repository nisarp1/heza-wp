<?php
/*
Template Name: Home
*/
get_header();
?>
<!-- Slider
            ============================================= -->
<section id="slider" class="slider-element bg-light min-vh-60 d-flex align-items-center"
    style="padding-bottom: 60px; padding-top: 60px;">

    <div class="container mt-0 pt-5" style="z-index: 2">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 text-center text-lg-start">
                <h2 class="fw-bold display-4 mb-4 text-dark">Reliable Corporate <span style="color: #E31E24;">Staff &
                        Labor Transportation</span>.</h2>
                <p class="text-muted lead mb-5">We specialize in long-term monthly and yearly contracts for corporate
                    employees and labor workers.</p>

                <div
                    class="d-flex align-items-center justify-content-center justify-content-lg-start position-relative">
                    <!-- Stylized Arrow -->
                    <div class="d-none d-md-block position-absolute"
                        style="top: -30px; left: 220px; transform: rotate(-10deg);">
                        <svg width="100" height="60" viewBox="0 0 100 60" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 50 C 30 40, 60 10, 90 20 M 90 20 L 80 15 M 90 20 L 85 30" stroke="#E31E24"
                                stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" />
                            <text x="60" y="10" fill="#E31E24" font-family="cursive" font-size="14">Book
                                Now!</text>
                        </svg>
                    </div>

                    <a href="https://www.odoo.com/app/fleet" target="_blank"
                        class="button button-large button-rounded button-dark m-0 text-transform-none ls-0 shadow-lg"
                        style="background-color: #E31E24 !important; padding: 15px 40px; font-size: 1.2rem;">
                        Start Booking <i class="bi-arrow-right-circle ms-2"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/new/hero.png" alt="Fleet Management"
                    class="img-fluid" style="max-height: 450px;">
            </div>
        </div>
    </div>

    <div class="svg-separator">
        <div>
            <svg preserveAspectRatio="xMidYMax meet" viewBox="0 0 1600 100" data-height="100">
                <path style="opacity: 1;fill: rgba(255,255,255,0.75);" d="M1040,56c0.5,0,1,0,1.6,0c-16.6-8.9-36.4-15.7-66.4-15.7c-56,0-76.8,23.7-106.9,41C881.1,89.3,895.6,96,920,96
                            C979.5,96,980,56,1040,56z"></path>
                <path style="opacity: 1;fill: rgba(255,255,255,0.75);"
                    d="M1699.8,96l0,10H1946l-0.3-6.9c0,0,0,0-88,0s-88.6-58.8-176.5-58.8c-51.4,0-73,20.1-99.6,36.8 c14.5,9.6,29.6,18.9,58.4,18.9C1699.8,96,1699.8,96,1699.8,96z">
                </path>
                <path style="opacity: 1;fill: rgba(255,255,255,0.75);"
                    d="M1400,96c19.5,0,32.7-4.3,43.7-10c-35.2-17.3-54.1-45.7-115.5-45.7c-32.3,0-52.8,7.9-70.2,17.8 c6.4-1.3,13.6-2.1,22-2.1C1340.1,56,1340.3,96,1400,96z">
                </path>
                <path style="opacity: 1;fill: rgba(255,255,255,0.75);"
                    d="M320,56c6.6,0,12.4,0.5,17.7,1.3c-17-9.6-37.3-17-68.5-17c-60.4,0-79.5,27.8-114,45.2 c11.2,6,24.6,10.5,44.8,10.5C260,96,259.9,56,320,56z">
                </path>
                <path style="opacity: 1;fill: rgba(255,255,255,0.75);"
                    d="M680,96c23.7,0,38.1-6.3,50.5-13.9C699.6,64.8,679,40.3,622.2,40.3c-30,0-49.8,6.8-66.3,15.8 c1.3,0,2.7-0.1,4.1-0.1C619.7,56,620.2,96,680,96z">
                </path>
                <path style="opacity: 1;fill: rgba(255,255,255,0.75);" d="M-40,95.6c28.3,0,43.3-8.7,57.4-18C-9.6,60.8-31,40.2-83.2,40.2c-14.3,0-26.3,1.6-36.8,4.2V106h60V96L-40,95.6
                            z"></path>
                <path style="opacity: 1;fill: rgba(255,255,255,0.3);;"
                    d="M504,73.4c-2.6-0.8-5.7-1.4-9.6-1.4c-19.4,0-19.6,13-39,13c-19.4,0-19.5-13-39-13c-14,0-18,6.7-26.3,10.4 C402.4,89.9,416.7,96,440,96C472.5,96,487.5,84.2,504,73.4z">
                </path>
                <path style="opacity: 1;fill: rgba(255,255,255,0.3);;"
                    d="M1205.4,85c-0.2,0-0.4,0-0.6,0c-19.5,0-19.5-13-39-13s-19.4,12.9-39,12.9c0,0-5.9,0-12.3,0.1 c11.4,6.3,24.9,11,45.5,11C1180.6,96,1194.1,91.2,1205.4,85z">
                </path>
                <path style="opacity: 1;fill: rgba(255,255,255,0.3);;"
                    d="M1447.4,83.9c-2.4,0.7-5.2,1.1-8.6,1.1c-19.3,0-19.6-13-39-13s-19.6,13-39,13c-3,0-5.5-0.3-7.7-0.8 c11.6,6.6,25.4,11.8,46.9,11.8C1421.8,96,1435.7,90.7,1447.4,83.9z">
                </path>
                <path style="opacity: 1;fill: rgba(255,255,255,0.3);;"
                    d="M985.8,72c-17.6,0.8-18.3,13-37,13c-19.4,0-19.5-13-39-13c-18.2,0-19.6,11.4-35.5,12.8 c11.4,6.3,25,11.2,45.7,11.2C953.7,96,968.5,83.2,985.8,72z">
                </path>
                <path style="opacity: 1;fill: rgba(255,255,255,0.3);;"
                    d="M743.8,73.5c-10.3,3.4-13.6,11.5-29,11.5c-19.4,0-19.5-13-39-13s-19.5,13-39,13c-0.9,0-1.7,0-2.5-0.1 c11.4,6.3,25,11.1,45.7,11.1C712.4,96,727.3,84.2,743.8,73.5z">
                </path>
                <path style="opacity: 1;fill: rgba(255,255,255,0.3);;"
                    d="M265.5,72.3c-1.5-0.2-3.2-0.3-5.1-0.3c-19.4,0-19.6,13-39,13c-19.4,0-19.6-13-39-13 c-15.9,0-18.9,8.7-30.1,11.9C164.1,90.6,178,96,200,96C233.7,96,248.4,83.4,265.5,72.3z">
                </path>
                <path style="opacity: 1;fill: rgba(255,255,255,0.3);;"
                    d="M1692.3,96V85c0,0,0,0-19.5,0s-19.6-13-39-13s-19.6,13-39,13c-0.1,0-0.2,0-0.4,0c11.4,6.2,24.9,11,45.6,11 C1669.9,96,1684.8,96,1692.3,96z">
                </path>
                <path style="opacity: 1;fill: rgba(255,255,255,0.3);;"
                    d="M25.5,72C6,72,6.1,84.9-13.5,84.9L-20,85v8.9C0.7,90.1,12.6,80.6,25.9,72C25.8,72,25.7,72,25.5,72z">
                </path>
                <path style="fill: rgb(255, 255, 255);"
                    d="M-40,95.6C20.3,95.6,20.1,56,80,56s60,40,120,40s59.9-40,120-40s60.3,40,120,40s60.3-40,120-40s60.2,40,120,40s60.1-40,120-40s60.5,40,120,40s60-40,120-40s60.4,40,120,40s59.9-40,120-40s60.3,40,120,40s60.2-40,120-40s60.2,40,120,40s59.8,0,59.8,0l0.2,143H-60V96L-40,95.6z">
                </path>
            </svg>
            <div class="bg-white"></div>
        </div>
    </div>

</section>

<div class="section m-0 bg-white" style="padding: 60px 0 0 0;">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-6 mb-4">

                <div class="heading-block border-bottom-0">
                    <h2 class="text-transform-none ls-0 custom-responsive-h2" style="line-height: 1.2">
                        Flexible<br>Corporate
                        Leasing Options</h2>
                </div>
                <span style="color: #BBB;">HEZA FLEET delivers practical travel solutions. Whether you need a
                    full-service transport solution or just the vehicle, we have you covered.<br>
                </span>
                <div class="clear"></div>
                <a href="https://www.odoo.com/app/fleet" target="_blank"
                    class="button button-rounded button-black button-dark ms-0 mt-4">Browse Fleet
                    &
                    Book</a>

            </div>

            <div class="col-lg-4 d-md-none d-lg-block text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/new/modern-fleet.png" alt="Modern Fleet">
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="feature-box fbox-plain mt-0">
                    <div class="fbox-icon">
                        <a href="#"><i class="bi-phone"></i></a>
                    </div>
                    <div class="fbox-content">
                        <h3>Easy Booking Process</h3>
                        <p>Seamless hiring process. Select your vehicle, share your requirements, and get a
                            quote
                            instantly for your specific needs.</p>
                    </div>
                </div>

                <div class="feature-box fbox-plain mt-5">
                    <div class="fbox-icon">
                        <a href="#"><i class="bi-gem"></i></a>
                    </div>
                    <div class="fbox-content">
                        <h3>Fleet Partnership Program</h3>
                        <p>Do you own a bus? Register it under the HEZA FLEET name. We provide the visa and support; you
                            drive and keep the profit. Pay only a small monthly fee for our company support.</p>
                    </div>
                </div>

                <div class="feature-box fbox-plain mt-5">
                    <div class="fbox-icon">
                        <a href="#"><i class="bi-gear-wide-connected"></i></a>
                    </div>
                    <div class="fbox-content">
                        <h3>Reliable Service</h3>
                        <p>We prioritize punctuality and safety, ensuring your workforce arrives on time, every time.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content
            ============================================= -->
<section id="content">

    <div class="content-wrap pb-0" style="padding-top: 1px">


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
                            <h3>Flexible<br>Contracts</h3>
                        </div>
                        <p>Choose between "Bus with Driver" or "Bus Only" (Dry Lease). We adapt to your specific
                            operational requirements.</p>
                    </div>
                </div>
            </div>
        </div> <!-- Moving car on scroll End -->

        <!-- Features Section
                    
    
                    <!-- Revolution Slider
                    ============================================= -->
        <div class="section mb-0 slider-bg-container"
            style="background: #FFF url('<?php echo get_template_directory_uri(); ?>/images/new/slider-bg.png') center 70% no-repeat; background-size: 100% auto; padding: 0; margin-top: 0 !important;">
            <div class="container">
                <div id="rev_slider_424_1_wrapper" class="rev_slider_wrapper my-0 p-0 fullwidthbanner-container mx-auto"
                    data-alias="image-gallery" style="max-width: 1240px; margin: 0 auto !important;">
                    <!-- START REVOLUTION SLIDER 5.2.0 auto mode -->
                    <div id="rev_slider_424_1" class="rev_slider fullwidthabanner" style="display:none;"
                        data-version="5.2.0">
                        <ul>
                            <!-- SLIDE 1: V-Class Luxury Van -->
                            <li data-index="rs-1479" data-transition="slidefromleft" data-slotamount="default"
                                data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                data-easeout="default" data-masterspeed="300"
                                data-thumb="<?php echo get_template_directory_uri(); ?>/images/new/buses/Toyota-Hiace.png"
                                data-rotate="0" data-saveperformance="off" data-param1="Staff Transportation"
                                data-title="Staff Transportation" data-description="">
                                <img src="<?php echo get_template_directory_uri(); ?>/include/rs-plugin/demos/assets/images/dummy.png"
                                    alt="Image"
                                    data-lazyload="<?php echo get_template_directory_uri(); ?>/images/new/buses/Toyota-Hiace.png"
                                    data-bgposition="left center" data-bgfit="contain" data-bgrepeat="no-repeat"
                                    class="rev-slidebg" data-no-retina>

                                <div class="tp-caption font-body ls-2 text-uppercase tp-resizeme"
                                    data-x="['right','right','right','left']" data-hoffset="['30','30','30','30']"
                                    data-y="['top','top','top','top']" data-voffset="['130','130','110','10']"
                                    data-fontsize="['15','15','13','13']"
                                    data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":400,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                    style="z-index: 6; color: #EEE; white-space: nowrap; text-align: right;">
                                    Staff Transportation </div>

                                <div class="tp-caption font-primary fw-bold tp-resizeme"
                                    data-x="['right','right','right','left']" data-hoffset="['30','30','30','30']"
                                    data-y="['top','top','top','top']" data-voffset="['170','170','150','40']"
                                    data-fontsize="['48','48','36','28']" data-width="['auto','auto','auto','auto']"
                                    data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":600,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                    style="z-index: 7; color: #FFF; letter-spacing: 0px; white-space: nowrap; text-align: right;">
                                    Staff Transportation</div>

                                <div class="tp-caption font-body ls-0 tp-resizeme slider-caption-right"
                                    data-x="['right','right','right','left']" data-hoffset="['30','30','30','30']"
                                    data-y="['top','top','top','top']" data-voffset="['290','290','270','140']"
                                    data-width="['360','360','290','320']"
                                    data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                    style="z-index: 8; color: #EEE; white-space: normal; text-align: right !important;">
                                    Comfortable daily commuting for corporate office employees.</div>

                                <a class="tp-caption button button-black button-dark button-circle button-large text-transform-none tp-resizeme"
                                    href="https://www.odoo.com/app/fleet" target="_blank"
                                    data-x="['right','right','right','left']" data-hoffset="['25','25','25','30']"
                                    data-y="['top','top','top','top']" data-voffset="['390','390','370','240']"
                                    data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":1200,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                    style="z-index: 9; text-decoration: none;">Book Now
                                </a>
                            </li>

                            <!-- SLIDE 2: 50-Seater Luxury Coach -->
                            <li data-index="rs-1480" data-transition="slidefromleft" data-slotamount="default"
                                data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                data-easeout="default" data-masterspeed="300"
                                data-thumb="<?php echo get_template_directory_uri(); ?>/images/new/buses/Ashok-leyland.png"
                                data-rotate="0" data-saveperformance="off" data-param1="Labor Transportation"
                                data-title="Labor Transportation" data-description="">
                                <img src="<?php echo get_template_directory_uri(); ?>/include/rs-plugin/demos/assets/images/dummy.png"
                                    alt="Image"
                                    data-lazyload="<?php echo get_template_directory_uri(); ?>/images/new/buses/Ashok-leyland.png"
                                    data-bgposition="left center" data-bgfit="contain" data-bgrepeat="no-repeat"
                                    class="rev-slidebg" data-no-retina>

                                <div class="tp-caption font-body ls-2 text-uppercase tp-resizeme"
                                    data-x="['right','right','right','left']" data-hoffset="['30','30','30','30']"
                                    data-y="['top','top','top','top']" data-voffset="['130','130','110','10']"
                                    data-fontsize="['15','15','13','13']"
                                    data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":400,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                    style="z-index: 6; color: #EEE; white-space: nowrap; text-align: right;">
                                    Labor Transportation </div>

                                <div class="tp-caption font-primary fw-bold tp-resizeme"
                                    data-x="['right','right','right','left']" data-hoffset="['30','30','30','30']"
                                    data-y="['top','top','top','top']" data-voffset="['170','170','150','40']"
                                    data-fontsize="['48','48','36','28']" data-width="['auto','auto','auto','auto']"
                                    data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":600,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                    style="z-index: 7; color: #FFF; letter-spacing: 0px; white-space: nowrap; text-align: right;">
                                    Labor Transportation</div>

                                <div class="tp-caption font-body ls-0 tp-resizeme slider-caption-right"
                                    data-x="['right','right','right','left']" data-hoffset="['30','30','30','30']"
                                    data-y="['top','top','top','top']" data-voffset="['290','290','270','140']"
                                    data-width="['360','360','290','320']"
                                    data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                    style="z-index: 8; color: #EEE; white-space: normal; text-align: right !important;">
                                    Efficient and safe transport solutions specifically for workforce teams.</div>

                                <a class="tp-caption button button-black button-dark button-circle button-large text-transform-none tp-resizeme"
                                    href="https://www.odoo.com/app/fleet" target="_blank"
                                    data-x="['right','right','right','left']" data-hoffset="['25','25','25','30']"
                                    data-y="['top','top','top','top']" data-voffset="['390','390','370','240']"
                                    data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":1200,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                    style="z-index: 9; text-decoration: none;">Book Now
                                </a>
                            </li>

                            <!-- SLIDE 3: Toyota Coaster -->
                            <li data-index="rs-1481" data-transition="slidefromleft" data-slotamount="default"
                                data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                data-easeout="default" data-masterspeed="300"
                                data-thumb="<?php echo get_template_directory_uri(); ?>/images/new/buses/Toyota-coaster.png"
                                data-rotate="0" data-saveperformance="off" data-param1="Bus with Driver"
                                data-title="Bus with Driver" data-description="">
                                <img src="<?php echo get_template_directory_uri(); ?>/include/rs-plugin/demos/assets/images/dummy.png"
                                    alt="Image"
                                    data-lazyload="<?php echo get_template_directory_uri(); ?>/images/new/buses/Toyota-coaster.png"
                                    data-bgposition="left center" data-bgfit="contain" data-bgrepeat="no-repeat"
                                    class="rev-slidebg" data-no-retina>

                                <div class="tp-caption font-body ls-2 text-uppercase tp-resizeme"
                                    data-x="['right','right','right','left']" data-hoffset="['30','30','30','30']"
                                    data-y="['top','top','top','top']" data-voffset="['130','130','110','10']"
                                    data-fontsize="['15','15','13','13']"
                                    data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":400,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                    style="z-index: 6; color: #EEE; white-space: nowrap; text-align: right;">
                                    Bus with Driver </div>

                                <div class="tp-caption font-primary fw-bold tp-resizeme"
                                    data-x="['right','right','right','left']" data-hoffset="['30','30','30','30']"
                                    data-y="['top','top','top','top']" data-voffset="['170','170','150','40']"
                                    data-fontsize="['48','48','36','28']" data-width="['auto','auto','auto','auto']"
                                    data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":600,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                    style="z-index: 7; color: #FFF; letter-spacing: 0px; white-space: nowrap; text-align: right;">
                                    Bus with Driver</div>

                                <div class="tp-caption font-body ls-0 tp-resizeme slider-caption-right"
                                    data-x="['right','right','right','left']" data-hoffset="['30','30','30','30']"
                                    data-y="['top','top','top','top']" data-voffset="['290','290','270','140']"
                                    data-width="['360','360','290','320']"
                                    data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                    style="z-index: 8; color: #EEE; white-space: normal; text-align: right !important;">
                                    We provide the bus along with a professional driver to handle logistics.</div>

                                <a class="tp-caption button button-black button-dark button-circle button-large text-transform-none tp-resizeme"
                                    href="https://www.odoo.com/app/fleet" target="_blank"
                                    data-x="['right','right','right','left']" data-hoffset="['25','25','25','30']"
                                    data-y="['top','top','top','top']" data-voffset="['390','390','370','240']"
                                    data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":1200,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                    style="z-index: 9; text-decoration: none;">Book Now
                                </a>
                            </li>

                            <!-- SLIDE 4: VIP Party Bus -->
                            <li data-index="rs-1482" data-transition="slidefromleft" data-slotamount="default"
                                data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                data-easeout="default" data-masterspeed="300"
                                data-thumb="<?php echo get_template_directory_uri(); ?>/images/new/buses/Mitsubishi-Rosa.png"
                                data-rotate="0" data-saveperformance="off" data-param1="Bus Only (Dry Lease)"
                                data-title="Bus Only (Dry Lease)" data-description="">
                                <img src="<?php echo get_template_directory_uri(); ?>/include/rs-plugin/demos/assets/images/dummy.png"
                                    alt="Image"
                                    data-lazyload="<?php echo get_template_directory_uri(); ?>/images/new/buses/Mitsubishi-Rosa.png"
                                    data-bgposition="left center" data-bgfit="contain" data-bgrepeat="no-repeat"
                                    class="rev-slidebg" data-no-retina>

                                <div class="tp-caption font-body ls-2 text-uppercase tp-resizeme"
                                    data-x="['right','right','right','left']" data-hoffset="['30','30','30','30']"
                                    data-y="['top','top','top','top']" data-voffset="['130','130','110','10']"
                                    data-fontsize="['15','15','13','13']"
                                    data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":400,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                    style="z-index: 6; color: #EEE; white-space: nowrap; text-align: right;">
                                    Bus Only (Dry Lease) </div>

                                <div class="tp-caption font-primary fw-bold tp-resizeme"
                                    data-x="['right','right','right','left']" data-hoffset="['30','30','30','30']"
                                    data-y="['top','top','top','top']" data-voffset="['170','170','150','40']"
                                    data-fontsize="['48','48','36','28']" data-width="['auto','auto','auto','auto']"
                                    data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":600,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                    style="z-index: 7; color: #FFF; letter-spacing: 0px; white-space: nowrap; text-align: right;">
                                    Bus Only (Dry Lease)</div>

                                <div class="tp-caption font-body ls-0 tp-resizeme slider-caption-right"
                                    data-x="['right','right','right','left']" data-hoffset="['30','30','30','30']"
                                    data-y="['top','top','top','top']" data-voffset="['290','290','270','140']"
                                    data-width="['360','360','290','320']"
                                    data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                    style="z-index: 8; color: #EEE; white-space: normal; text-align: right !important;">
                                    If you have your own driver, we supply only the bus to meet your fleet needs.</div>

                                <a class="tp-caption button button-black button-dark button-circle button-large text-transform-none tp-resizeme"
                                    href="https://www.odoo.com/app/fleet" target="_blank"
                                    data-x="['right','right','right','left']" data-hoffset="['25','25','25','30']"
                                    data-y="['top','top','top','top']" data-voffset="['390','390','370','240']"
                                    data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":1200,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                    style="z-index: 9; text-decoration: none;">Book Now
                                </a>
                            </li>

                            <!-- SLIDE 5: Executive Staff Shuttle -->
                            <li data-index="rs-1483" data-transition="slidefromleft" data-slotamount="default"
                                data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                data-easeout="default" data-masterspeed="300"
                                data-thumb="<?php echo get_template_directory_uri(); ?>/images/new/buses/School-Bus.png"
                                data-rotate="0" data-saveperformance="off" data-param1="Standard Minibuses"
                                data-title="Standard Minibuses" data-description="">
                                <img src="<?php echo get_template_directory_uri(); ?>/include/rs-plugin/demos/assets/images/dummy.png"
                                    alt="Image"
                                    data-lazyload="<?php echo get_template_directory_uri(); ?>/images/new/buses/School-Bus.png"
                                    data-bgposition="left center" data-bgfit="contain" data-bgrepeat="no-repeat"
                                    class="rev-slidebg" data-no-retina>

                                <div class="tp-caption font-body ls-2 text-uppercase tp-resizeme"
                                    data-x="['right','right','right','left']" data-hoffset="['30','30','30','30']"
                                    data-y="['top','top','top','top']" data-voffset="['130','130','110','10']"
                                    data-fontsize="['15','15','13','13']"
                                    data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":400,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                    style="z-index: 6; color: #EEE; white-space: nowrap; text-align: right;">
                                    Standard Minibuses </div>

                                <div class="tp-caption font-primary fw-bold tp-resizeme"
                                    data-x="['right','right','right','left']" data-hoffset="['30','30','30','30']"
                                    data-y="['top','top','top','top']" data-voffset="['170','170','150','40']"
                                    data-fontsize="['48','48','36','28']" data-width="['auto','auto','auto','auto']"
                                    data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":600,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                    style="z-index: 7; color: #FFF; letter-spacing: 0px; white-space: nowrap; text-align: right;">
                                    Standard Minibuses</div>

                                <div class="tp-caption font-body ls-0 tp-resizeme slider-caption-right"
                                    data-x="['right','right','right','left']" data-hoffset="['30','30','30','30']"
                                    data-y="['top','top','top','top']" data-voffset="['290','290','270','140']"
                                    data-width="['360','360','290','320']"
                                    data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                    style="z-index: 8; color: #EEE; white-space: normal; text-align: right !important;">
                                    Ideal for medium-sized groups requiring consistent daily service.</div>

                                <a class="tp-caption button button-black button-dark button-circle button-large text-transform-none tp-resizeme"
                                    href="https://www.odoo.com/app/fleet" target="_blank"
                                    data-x="['right','right','right','left']" data-hoffset="['25','25','25','30']"
                                    data-y="['top','top','top','top']" data-voffset="['390','390','370','240']"
                                    data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":1200,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                    style="z-index: 9; text-decoration: none;">Book Now
                                </a>
                            </li>

                            <!-- SLIDE 6: City Tour Bus -->
                            <li data-index="rs-1484" data-transition="slidefromleft" data-slotamount="default"
                                data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                data-easeout="default" data-masterspeed="300"
                                data-thumb="<?php echo get_template_directory_uri(); ?>/images/new/buses/Ashok-leyland.png"
                                data-rotate="0" data-saveperformance="off" data-param1="Join Our Partnership"
                                data-title="Join Our Partnership" data-description="">
                                <img src="<?php echo get_template_directory_uri(); ?>/include/rs-plugin/demos/assets/images/dummy.png"
                                    alt="Image"
                                    data-lazyload="<?php echo get_template_directory_uri(); ?>/images/new/buses/Ashok-leyland.png"
                                    data-bgposition="left center" data-bgfit="contain" data-bgrepeat="no-repeat"
                                    class="rev-slidebg" data-no-retina>

                                <div class="tp-caption font-body ls-2 text-uppercase tp-resizeme"
                                    data-x="['right','right','right','right']" data-hoffset="['50','50','30','30']"
                                    data-y="['top','top','top','top']" data-voffset="['130','130','110','10']"
                                    data-fontsize="['15','15','13','13']"
                                    data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":400,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                    style="z-index: 6; color: #EEE; white-space: nowrap; text-align: right;">
                                    Join Our Partnership </div>

                                <div class="tp-caption font-primary fw-bold tp-resizeme"
                                    data-x="['right','right','right','right']" data-hoffset="['50','50','30','30']"
                                    data-y="['top','top','top','top']" data-voffset="['170','170','150','40']"
                                    data-fontsize="['48','48','36','28']" data-width="['auto','auto','auto','auto']"
                                    data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":600,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                    style="z-index: 7; color: #FFF; letter-spacing: 0px; white-space: nowrap; text-align: right;">
                                    Join Our Partnership</div>

                                <div class="tp-caption font-body ls-0 tp-resizeme slider-caption-right"
                                    data-x="['right','right','right','right']" data-hoffset="['50','50','30','30']"
                                    data-y="['top','top','top','top']" data-voffset="['290','290','270','240']"
                                    data-width="['360','360','290','210']"
                                    data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                    style="z-index: 8; color: #EEE; white-space: normal; text-align: right !important;">
                                    Own a bus? Join our fleet program, get a visa, and start your own transport
                                    business.</div>

                                <a class="tp-caption button button-black button-dark button-circle button-large text-transform-none tp-resizeme"
                                    href="https://www.odoo.com/app/fleet" target="_blank"
                                    data-x="['right','right','right','right']" data-hoffset="['50','50','30','30']"
                                    data-y="['top','top','top','top']" data-voffset="['390','390','370','240']"
                                    data-frames='[{"from":"y:20px;opacity:0;","speed":2000,"to":"o:1;","delay":1200,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                    style="z-index: 9; text-decoration: none;">Book Now
                                </a>
                            </li>
                        </ul>
                        <div class="tp-bannertimer d-none"></div>
                    </div>
                </div><!-- END REVOLUTION SLIDER -->
            </div>
        </div>





        <!-- Featured Section
                    ============================================= -->
        <div class="section m-0"
            style="background: #FFF url('<?php echo get_template_directory_uri(); ?>/images/new/our-fleet-bg.png') left bottom no-repeat; background-size: cover; padding: 0 0 100px 0;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-9">
                        <div class="heading-block">
                            <h3 class="custom-responsive-h3" style="line-height: 56px; letter-spacing: -2px">Our
                                Fleet<br>Your Fleet</h3>
                        </div>
                        <p>We focus on utility and reliability. While we do not offer luxury buses at the moment, our
                            fleet is maintained to high standards for daily staff and labor transport.</p>

                        <div class="row mt-5">
                            <div class="col-md-6">
                                <!-- Feature Box 1 -->
                                <div class="feature-box fbox-plain media-box">
                                    <div class="fbox-icon" style="position: relative;">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                                viewBox="0 0 50 50">
                                                <path d="M34 17a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" fill="#E31E24" />
                                                <path d="M12 24a4 4 0 1 1-8 0 4 4 0 0 1 8 0Z" fill="#E31E24" />
                                                <path d="M46 24a4 4 0 1 1-8 0 4 4 0 0 1 8 0Z" fill="#E31E24" />
                                                <path d="M25 30H4a4 4 0 0 0-4 4v4a4 4 0 0 0 4 4h21V30Z"
                                                    fill="#E31E24" />
                                                <path d="M46 30H25v12h21a4 4 0 0 0 4-4v-4a4 4 0 0 0-4-4Z"
                                                    fill="#E31E24" />
                                                <path d="M12 30h14c6.627 0 12 5.373 12 12H24c-6.627 0-12-5.373-12-12Z"
                                                    fill="#E31E24" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="fbox-content" style="margin-top: 25px">
                                        <h3>Skilled Professionals.</h3>
                                        <p class="fw-light" style="color: #666;">Our drivers are highly trained,
                                            licensed, and experienced professionals dedicated to your safety and
                                            comfort. Punctual, polite, and knowledgeable about Dubai's roads.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Feature Box 2 -->
                                <div class="feature-box fbox-plain media-box">
                                    <div class="fbox-icon" style="position: relative;">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                                viewBox="0 0 50 50">
                                                <path
                                                    d="M28 16c0 5.523-4.477 10-10 10S8 21.523 8 16 12.477 6 18 6s10 4.477 10 10Z"
                                                    fill="#E31E24" />
                                                <path
                                                    d="M43 24a5 5 0 1 1-10 0 5 5 0 0 1 10 0Zm-27 7h26a4 4 0 0 1 4 4v5a4 4 0 0 1-4 4H16V31Z"
                                                    fill="#E31E24" />
                                                <path d="M4 31h16c7.18 0 13 5.82 13 13H17C9.82 44 4 38.18 4 31Z"
                                                    fill="#E31E24" />
                                                <path
                                                    d="M23.549 12.128 22.425 11l-5.532 5.556-3.319-3.335-1.123 1.129a1.552 1.552 0 0 0 0 2.188L16.892 21l6.657-6.685a1.55 1.55 0 0 0 0-2.187Z"
                                                    fill="#fff" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="fbox-content" style="margin-top: 25px">
                                        <h3>24/7 Customer Support.</h3>
                                        <p class="fw-light" style="color: #666;">We are always here for you. Our
                                            dedicated support team is available round-the-clock to assist with
                                            bookings, inquiries, or any on-road requirements.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div> <!-- Featured end -->

        <!-- Bus Rental Services Section
                    ============================================= -->
        <!-- Bus Rental Services Section
                    ============================================= -->
        <div class="section m-0"
            style="background: linear-gradient(90deg, #f9f9f9 0%, #f9f9f9 50%, #f1f1f1 50%, #f1f1f1 100%); padding: 60px 0;">
            <div class="container">
                <div class="row align-items-center col-mb-50">
                    <!-- Half Section 1 -->
                    <div class="col-lg-6">
                        <div class="pe-lg-5">
                            <div style="margin-bottom: 20px;">
                                <i class="bi-calendar-event display-4" style="color: #E31E24;"></i>
                            </div>
                            <div class="heading-block border-0" style="margin-bottom: 20px;">
                                <h3 class="fw-normal text-dark">Need a Bus for Your Team?</h3>
                            </div>
                            <p class="text-muted">From corporate staff to labor camps, we provide reliable bus rental
                                services across Dubai.</p>
                            <a href="<?php echo home_url('/contact-us'); ?>"
                                class="button button-rounded button-outline button-dark m-0">Get
                                Quote</a>
                        </div>
                    </div>
                    <!-- Half Section 2 -->
                    <div class="col-lg-6">
                        <div class="ps-lg-5">
                            <div style="margin-bottom: 20px;">
                                <i class="bi-clock-history display-4" style="color: #E31E24;"></i>
                            </div>
                            <div class="heading-block border-0" style="margin-bottom: 20px;">
                                <h3 class="fw-normal text-dark">24/7 Support</h3>
                            </div>
                            <p class="text-muted">Professional drivers, modern buses, and round-the-clock
                                support. Whether it's airport
                                transfers, city tours, or special events, we're here to serve you.</p>
                            <a href="<?php echo home_url('/contact-us'); ?>"
                                class="button button-rounded button-outline button-dark m-0">Contact
                                Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Before Footer Section
                    ============================================= -->
        <div class="section m-0"
            style="background: linear-gradient(to right, rgba(227, 30, 36, 0.4) 15%, rgba(227, 30, 36, 0.1) 100%), url('<?php echo get_template_directory_uri(); ?>/images/new/footer-bg.jpg') center bottom / cover no-repeat; height: 770px">
            <div class="container">
                <div class="dark" style="max-width: 570px; text-align: left; padding-top: 50px;">
                    <div class="heading-block dark mb-4 border-0">
                        <h2 class="text-transform-none fw-medium">Ready to Experience Excellence?</h2>
                        <p style="color: #DDD; margin-top: 10px">Join thousands of satisfied customers who trust
                            HEZA FLEET for their transportation needs. From corporate events to tourist
                            excursions, we provide reliable, comfortable, and professional bus rental services
                            across Dubai and the UAE.</p>
                    </div>
                    <a href="<?php echo home_url('/contact-us'); ?>" class="text-uppercase fw-bold ls-2 text-white"
                        style="font-size: 12px; border-bottom: 1px solid #FFF">Get Your Quote Today</a> &rarr;
                </div>
            </div>
        </div>
    </div>
</section><!-- #content end -->

<?php get_footer(); ?>