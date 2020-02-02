<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tous_Albatros
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-body">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'tous-albatros' ); ?></a>

		<header id="masthead" class="site-header">
			<div class="site-branding">
				<?php
				the_custom_logo();
				?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'tous-albatros' ); ?></button>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->

		<?php if ( is_front_page() || is_home() ) : ?>
			<div class="site-banner">
				<h1 class="site-title">
					Tous <span class="blue">Albatros</span>
				</h1>
				<?php
				$tous_albatros_description = get_bloginfo( 'description', 'display' );
				if ( $tous_albatros_description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $tous_albatros_description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
				</div>
		<?php endif; ?>

		<div id="content" class="site-content">
