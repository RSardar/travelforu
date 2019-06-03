<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">
			<!-- header -->
			<header class="header clear" role="banner">
				<div class="container">
				<div class="row m-0 align-items-center">
				<div class="col-lg-2 pl-0 col-md-12 ">
						<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->
				</div>
				<div class="col-lg-7 text-right">
						<!-- nav -->
					<nav class="nav navbar-expand-lg navbar-light" role="navigation">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<?php header_nav(); ?>
	</div>

					</nav>
					<!-- /nav -->
					</div>
					<div class="col-lg-3">
						<div class="header_socials">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a> </li>
								<li><a href="#"><i class="fab fa-twitter"></i></a> </li>
								<li><a href="#"><i class="fab fa-instagram"></i></a> </li>
							</ul>
						</div>
					</div>
</div></div>
			</header>
			<!-- /header -->
