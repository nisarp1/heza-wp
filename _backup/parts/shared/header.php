<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta name="author" content="SemiColonWeb">
	<meta name="description"
		content="HEZA FLEET - Dubai's premier bus rental service. Professional transportation solutions for corporate events, tourist services, and special occasions. Modern fleet, reliable service, competitive pricing.">

	<!-- Font Imports -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Mukta+Vaani:wght@300;400;500;600;700&family=Open+Sans:wght@300;400;600;700;800;900&display=swap"
		rel="stylesheet">

	<!-- Core Style -->
	<link rel="stylesheet" href="style.css">

	<!-- Font Icons -->
	<link rel="stylesheet" href="css/font-icons.css">
	<link rel="stylesheet" href="demos/car/css/car-icons/style.css">

	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

	<!-- Plugins/Components CSS -->
	<link rel="stylesheet" href="css/swiper.css">
	<link rel="stylesheet" href="css/components/bs-select.css">
	<link rel="stylesheet" href="include/rs-plugin/css/settings.css" media="screen">
	<link rel="stylesheet" href="include/rs-plugin/css/layers.css">
	<link rel="stylesheet" href="include/rs-plugin/css/navigation.css">

	<!-- Niche Demos -->
	<link rel="stylesheet" href="demos/car/car.css?v=2">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/custom.css?v=3">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon
	============================================= -->
	<link rel="icon" type="image/png" href="images/new/favicon.png">

	<!-- Document Title
	============================================= -->
	<title><?php echo isset($page_title) ? $page_title : "HEZA FLEET - Dubai's Premier Bus Rental Service"; ?></title>



</head>

<body class="stretched side-push-panel"
	data-loader-html="<div><img src='demos/car/images/page-loader.gif' alt='Loader'></div>">

	<!-- Side Panel Overlay -->
	<div class="body-overlay"></div>

	<!-- Side Panel -->
	<div id="side-panel">

		<div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="bi-x-lg"></i></a></div>

		<div class="side-panel-wrap">

			<div class="widget">

				<a href="index.html"><img src="images/new/logo-white.png" alt="Canvas Logo" height="50"></a>

				<h4 class="mb-2">Professional Transport Solutions</h4>
				<p>Our core service is staff transportation, offering long-term monthly and yearly contracts. We provide
					buses either with or without drivers, depending on your needs. If your company has its own driver,
					we supply only the bus. If you require both, we provide the bus along with a driver.</p>
				<a href="services.php" class="button button-small button-rounded m-0 mb-4">View Services</a>

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
						<a href="index.php">
							<img class="logo-default" src="images/new/logo.png" alt="Canvas Logo">
							<img class="logo-dark" src="images/new/logo.png" alt="Canvas Logo">
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
								<span><a href="mailto:bookings@hezafleet.ae" target="_top" class="fw-medium"
										style="color: #E31E24;">bookings@hezafleet.ae</a></span>
							</div>
						</li>
						<li>
							<div class="he-text fw-normal">
								<span class="d-flex flex-row align-items-center">
									<a href="#" class="fw-medium me-2" style="text-decoration: none; line-height: 0;">
										<img src="https://flagcdn.com/24x18/gb.png"
											srcset="https://flagcdn.com/48x36/gb.png 2x, https://flagcdn.com/72x54/gb.png 3x"
											width="24" height="18" alt="English"
											style="border: 1px solid #ddd; border-radius: 2px; display: block;">
									</a>
									<span class="text-muted me-2">|</span>
									<a href="#" class="fw-medium me-2"
										style="text-decoration: none; line-height: 0; opacity: 0.6;">
										<img src="https://flagcdn.com/24x18/ae.png"
											srcset="https://flagcdn.com/48x36/ae.png 2x, https://flagcdn.com/72x54/ae.png 3x"
											width="24" height="18" alt="Arabic"
											style="border: 1px solid #ddd; border-radius: 2px; display: block;">
									</a>
									<span class="text-muted me-2">|</span>
									<a href="#" class="fw-medium"
										style="text-decoration: none; line-height: 0; opacity: 0.6;">
										<img src="https://flagcdn.com/24x18/cn.png"
											srcset="https://flagcdn.com/48x36/cn.png 2x, https://flagcdn.com/72x54/cn.png 3x"
											width="24" height="18" alt="Chinese"
											style="border: 1px solid #ddd; border-radius: 2px; display: block;">
									</a>
								</span>
							</div>
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
								<a href="contact-us.php" class="header-quote-link m-0">Get a
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
								<li
									class="menu-item <?php echo (isset($active_menu) && $active_menu === 'home') ? 'current' : ''; ?>">
									<a class="menu-link" href="index.php">
										<div>Home</div>
									</a>
								</li>
								<li
									class="menu-item sub-menu <?php echo (isset($active_menu) && $active_menu === 'about') ? 'current' : ''; ?>">
									<a class="menu-link" href="about-us.php">
										<div>About Us<i class="sub-menu-indicator fa-solid fa-caret-down"></i></div>
									</a>
									<ul class="sub-menu-container" style="">
										<li class="menu-item">
											<a class="menu-link" href="about-us.php">
												<div>Company Profile</div>
											</a>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="about-us.php#mission">
												<div>Our Mission</div>
											</a>
										</li>
									</ul>
									<button class="sub-menu-trigger fa-solid fa-chevron-right"><span
											class="visually-hidden">Open Sub-Menu</span></button>
								</li>
								<li
									class="menu-item sub-menu <?php echo (isset($active_menu) && $active_menu === 'services') ? 'current' : ''; ?>">
									<a class="menu-link" href="services.php">
										<div>Services<i class="sub-menu-indicator fa-solid fa-caret-down"></i></div>
									</a>
									<ul class="sub-menu-container" style="">
										<li class="menu-item">
											<a class="menu-link" href="services.php">
												<div>Staff Transport</div>
											</a>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="services.php">
												<div>Labor Transport</div>
											</a>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="services.php">
												<div>School Bus Rental</div>
											</a>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="services.php">
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


								<li
									class="menu-item <?php echo (isset($active_menu) && $active_menu === 'partnership') ? 'current' : ''; ?>">
									<a class="menu-link" href="partnership-program.php">
										<div>Partnership Program</div>
									</a>
								</li>

								<li
									class="menu-item <?php echo (isset($active_menu) && $active_menu === 'contact') ? 'current' : ''; ?>">
									<a class="menu-link" href="contact-us.php">
										<div>Contact Us</div>
									</a>
								</li>
								<li class="menu-item"><a class="menu-link" href="https://www.odoo.com/app/fleet"
										target="_blank" style="color: #E31E24 !important;">
										<div><i class="bi-person-circle"></i> Login</div>
									</a></li>
							</ul>

						</nav><!-- #primary-menu end -->

						<form class="top-search-form" action="search.html" method="get">
							<input type="text" name="q" class="form-control" value=""
								placeholder="Type &amp; Hit Enter.." autocomplete="off">
						</form>

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->