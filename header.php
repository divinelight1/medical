<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="" style="overflow: hidden;"><!--<![endif]-->
<head>
	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

	<title><?php bloginfo('name'); ?></title>

	<!-- Standard Favicon -->
	<link rel="icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/images//favicon.ico" />

	<!-- For iPhone 4 Retina display: -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/images//apple-touch-icon-114x114-precomposed.png">

	<!-- For iPad: -->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/images//apple-touch-icon-72x72-precomposed.png">

	<!-- For iPhone: -->
	<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_directory'); ?>/images//apple-touch-icon-57x57-precomposed.png">

	<!-- Library - Loader CSS -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/libraries/loader/loaders.min.css">


	<!-- Library - Google Font Familys -->
	<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Philosopher:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

	<!-- Library - Bootstrap v3.3.5 -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/libraries/bootstrap/bootstrap.min.css">

	<!-- Font Icons -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/libraries/fonts/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/libraries/fonts/elegant-icons.css">

	<!-- Library - OWL Carousel V.2.0 beta -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/libraries/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/libraries/owl-carousel/owl.theme.css">

	<!-- Library - Animate CSS -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/libraries/animate/animate.min.css">

	<!-- Library - Magnific Popup -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/libraries/magnific-popup/magnific-popup.css">

	<!-- Custom - Common CSS -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/plugins.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/navigation-menu.css">

	 <!-- Compiled and minified CSS materialize -->
<!--   	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
 -->
	<!--[if IE]>
		<link rel="stylesheet" type="text/css" href="css/all-ie-only.css" />
	<![endif]-->

	<!-- Custom - Theme CSS -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/shortcodes.css">



	<!--[if lt IE 9]>
		<script src="js/html5/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

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
							<p><?php bloginfo('description'); ?></p>
						</div>
						<div class="col-md-6 text-right" style="padding-right: 0;">
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
						<!-- <div class="col-md-4 logo-block pull-left"> -->
							<?php dynamic_sidebar( 'logo' ); ?>

						<!-- </div> -->
						<div class="col-md-4 text-center hide-on-mobile">
							<!-- <div class="location"> -->
								<!-- <h3> <img src="images/location-ic.png" alt="Location" />  Our Location</h3> -->
								<!-- <p>E44 - Web Corner, Melbourne - 18</p> -->
								<?php dynamic_sidebar( 'middletext' ); ?>
							<!-- </div> -->

						</div>
						<div class="col-md-4 text-right pull-right hide-on-mobile">
							<!-- <div class="phone">
								<h3 class="head-h3" style="font-size: 28px !important;"> <img src="images/phone-ic.png" alt="phone" /> (+1)800 433 633</h3>
								<p>Call Us Now- 24/7 Support</p>
							</div> -->
							<?php dynamic_sidebar( 'righttext' ); ?>
						</div>
					</div>
				</div><!-- Container -->
			</div><!-- Logo Block /- -->

		</header>
