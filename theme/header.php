<?php
/**
 * The header for Autotrader theme
 *
 *
 * @package Autotrader
 */
?>
<!doctype html>
<html <?php language_attributes()?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<title>Autotrader theme</title>

	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/bootstrap.css'; ?>">
	<?php wp_head(); ?>

</head>

<body>
<div id="page" class="site container">
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();

				?>

				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Autotrader Theme</a></h1>
				<?php

			$autotrader_description = get_bloginfo( 'description', 'display' );
			if ( $autotrader_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $autotrader_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<a class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" href="<?php echo esc_url( home_url( '/' ) ); ?>">Welcome</a>
			<a class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" href="<?php echo get_template_directory_uri() ?>/about-us.php">About Us</a>
			<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'autotrader' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
