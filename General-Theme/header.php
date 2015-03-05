<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php bloginfo( 'name' ); ?><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="page" class="site-page">
		<header class="site-header">
			<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ) ?>"><?php bloginfo( 'name' ); ?></a>
			</h1>
			<p class="site-desc"><?php bloginfo( 'description' ); ?></p>

			<?php wp_nav_menu ( array (
					'theme_location'    => 'header',
					'menu_class'        => 'nav-header',
					'fallback_cb'       => false
			) ); ?>
		</header>

		<?php if ( get_header_image() ) : ?>
		<div class="header-image">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="<?php header_image() ?>" alt="">
			</a>
		</div>
		<?php endif; ?>

		<div id="main" class="site-main">
