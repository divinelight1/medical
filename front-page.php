<?php include('header.php'); ?>
<body data-offset="200" data-spy="scroll" data-target=".ow-navigation" style="overflow: hidden;
    background: #EEF5FC;">
	<!-- Loader -->
	<div id="site-loader" class="load-complete">
		<div class="loader">
			<div class="loader-inner ball-clip-rotate">
				<div></div>
			</div>
		</div>
	</div><!-- Loader /- -->
	<div id="test-popup" class="white-popup mfp-hide">



  		<!-- Log in form -->
						<form class="appoinment-form">
							<h3><img src="images/appoinment.png" alt="appoinment"/>Log In</h3>
              <?php wp_login_form( $args );
              $args = array(
                'echo'           => true,
                'remember'       => true,
                'redirect'       => ( is_ssl() ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
                'form_id'        => 'loginform',
                'id_username'    => 'user_login',
                'id_password'    => 'user_pass',
                'id_remember'    => 'rememberme',
                'id_submit'      => 'wp-submit',
                'label_username' => __( 'Username' ),
                'label_password' => __( 'Password' ),
                'label_remember' => __( 'Remember Me' ),
                'label_log_in'   => __( 'Log In' ),
                'value_username' => '',
                'value_remember' => false
              );
              ?>
						</form><!-- log in form /- -->
	</div>
	<a id="top"></a>
	<!-- Main Container -->
	<div class="col-md-9 " style="padding: 0;
    overflow-y: scroll;
    height: 100vh;">
	<!-- Header -->
		<header class="header-main">
			<!-- Top Header -->
			<div class="top-header container-fluid no-padding">
				<!-- Container -->
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<p>We believe every interaction with our patients is an opportunity!</p>
						</div>
						<div class="col-md-6 text-right" style="">
							<a class="main-button-s open-popup-link" href="#test-popup" title="Book Appointment">Login</a>
							<a class="main-button-s " href="#" title="Book Appointment">Register</a>
						</div>
					</div>
				</div><!-- container /- -->
			</div><!-- Top Header /- -->
			<!-- Logo Block -->
			<div class="middle-header container-fluid no-padding">
				<!-- Container -->
				<div class="container">
					<div class="row">
						<div class="col-md-4 logo-block pull-left">
							<a href="#" title="Logo"><img src="images/logo.png" alt="Logo" /></a>
						</div>
						<div class="col-md-4 text-center hide-on-mobile">
							<div class="location">
								<h3><img src="images/location-ic.png" alt="Location" /> Our Location</h3>
								<p>E44 - Web Corner, Melbourne - 18</p>
							</div>

						</div>
						<div class="col-md-4 text-right pull-right hide-on-mobile">
							<div class="phone">
								<h3 class="head-h3"><img src="images/phone-ic.png" alt="phone" /> (+1)800 433 633</h3>
								<p>Call Us Now- 24/7 Support</p>
							</div>
						</div>
					</div>
				</div><!-- Container -->
			</div><!-- Logo Block /- -->

		</header>

			<!-- Banner Section -->
		<div id="home-banner" class="container-fluid no-padding banner-section home-banner">
			<!-- Container -->
			<div class="container">
				<div id="main-carousel" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<div class="col-md-6 col-sm-6 no-padding">
								<div class="banner-left">
									<span>The Best Hospitality WP Theme Forever!</span>
									<h3>we care for your health</h3>
									<p>Qualified Staff With Expertise in Services We Offer for more Resonable cost with love, Just explore about More!</p>
									<!-- <a href="#">View Our Services<i class="fa fa-plus"></i></a> -->
								</div>
							</div>
							<div class="col-md-6 col-sm-6 no-padding">
								<!-- <div class="banner-right">
									<img src="images/banner-main.png" alt="banner-main"/>
								</div> -->
							</div>
						</div>
						<div class="item">
							<div class="col-md-6 col-sm-6 no-padding">
								<div class="banner-left">
									<span>The Best Hospitality WP Theme Forever!</span>
									<h3>we care for your health</h3>
									<p>Qualified Staff With Expertise in Services We Offer for more Resonable cost with love, Just explore about More!</p>
									<!-- <a href="#">View Our Services<i class="fa fa-plus"></i></a> -->
								</div>
							</div>
							<div class="col-md-6 col-sm-6 no-padding">
								<!-- <div class="banner-right">
									<img src="images/banner-main.png" alt="banner-main"/>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</div><!-- Container /- -->


		</div><!-- Banner Section /- -->



	</div><!-- Main Container -->


<?php include('footer.php'); ?>
