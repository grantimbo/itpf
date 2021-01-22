<!doctype html>
<html <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">

		<?php if ( is_front_page() ) : ?>
			<title><?php bloginfo('name'); ?> &mdash; <?php bloginfo('description'); ?></title>
		<?php else : ?>
			<title><?php bloginfo('name'); ?> &mdash; <?php wp_title(''); ?></title>
		<?php endif; ?>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		

		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/icon.ico" rel="shortcut icon">
	    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet" disabled>


		<script>
			window.fbAsyncInit = function() {
				FB.init({
				appId            : '153590798408172',
				autoLogAppEvents : true,
				xfbml            : true,
				version          : 'v9.0'
				});
			};
		</script>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>

		<?php wp_head(); ?>
		
	</head>
	<body <?php body_class(); ?>>
		<header class="header clear">
			<div class="wrap">
				<div class="mobile-menu-wrap">
					<header class="header clear">
					<a class="icon-cross mobile-menu" href="#" rel="nofollow"></a>
					<a class="logo" href="<?php echo site_url(); ?>"><img src="<?php echo bloginfo('template_url'); ?>/img/logo-black.webp" alt="Into Profits" width="200" height="23"></a>
					<?php head_nav(); ?>
					</header>
				</div>
				<a class="icon-menu mobile-menu" href="#" rel="nofollow"></a>
				<a class="logo" href="<?php echo site_url(); ?>"><img src="<?php echo bloginfo('template_url'); ?>/img/logo-black.webp" alt="Into Profits" width="200" height="23"></a>
				<div class="desktop-menu-wrap">
					<?php head_nav(); ?>
				</div>
			</div>
		</header>