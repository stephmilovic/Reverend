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
				<script src="http://code.jquery.com/jquery-latest.min.js"></script>

			<script type="text/javascript" src="/wp-content/themes/Reverend/scrollmagic/js/jquery.scrollmagic.js"></script>
	<script type="text/javascript" src="/wp-content/themes/Reverend/scrollmagic/js/TweenMax.min.js"></script>


		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<header class="header" id="header-home" role="banner">
				<div id="home-headings">
					<h4>You may <span class="cursive">kiss</span> the bride.</h4>
					<p class="home">Meet Your Chicago Wedding Officiant</p>		
				</div>
				<span class="inner"></span>

					<?php //<span id="head-img" role="img" aria-label-"Chicago wedding officiant"> ?>
					<div id="inner-header" class="wrap clearfix">
						
					<script>
						$(document).ready(function($) {
							
							// build tween
							var tween = new TimelineMax ()
								.add([
									TweenMax.to("#container #header-home", 1, {backgroundPosition: "-40% 0", ease: Linear.easeNone}),
									TweenMax.to("#container #home-headings", 1, {backgroundPosition: "-500% 0", ease: Linear.easeNone}),
								]);

							// build scene
							var scene2 = new ScrollScene({triggerElement: "#container", duration: 2000, offset: 450})
											.setTween(tween)
											.setPin("#container")
											.addTo(controller);

							// show indicators (requires debug extension)
							scene2.addIndicators();
						});
					</script>



						<nav role="navigation" id="stick-nav">
							<?php bones_main_nav(); ?>
							<div id="slickness">
						</div>
					<script>
						$(document).ready(function($) {


							// build scene
							var scene = new ScrollScene({triggerElement: "#inner-header", triggerHook: "onLeave"})
								.setPin("#inner-header")
								.addTo(controller);

							// show indicators (requires debug extension)
							scene.addIndicators();
						});
					</script>
						</nav>


					</div>
				</span>
			</header>


