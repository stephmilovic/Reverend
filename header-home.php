<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<link href='http://fonts.googleapis.com/css?family=Raleway|Lato:300,400,700,300italic,400italic,700italic|Parisienne' rel='stylesheet' >
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<header class="header" role="banner">
				<h4>You may <span class="cursive">kiss</span> the bride.</h4>
				<p class="home">Meet Your Chicago Wedding Officiant</p>		
				<span class="inner"></span>

					<?php //<span id="head-img" role="img" aria-label-"Chicago wedding officiant"> ?>
					<div id="inner-header" class="wrap clearfix">
						<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
						<?php // if you'd like to use the site description you can un-comment it below ?>
						<?php // bloginfo('description'); ?>
						<nav role="navigation">
							<?php bones_main_nav(); ?>
							<div id="slickness">
						</div>
						</nav>
						

					</div>
				</span>
			</header>
