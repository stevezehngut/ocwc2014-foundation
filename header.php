<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Awesome Theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Foundation .off-canvas-wrap start -->

<div class="off-canvas-wrap" data-offcanvas>
	<div class="inner-wrap">

	<nav class="tab-bar hide-for-large-only">
      <section class="left-small">
        <a class="left-off-canvas-toggle menu-icon" ><span></span></a>
      </section>
    </nav>

	<!-- Off Canvas Menu -->
	<aside class="left-off-canvas-menu">
		<ul>
			<?php wp_nav_menu( array( 
				'theme_location' => 'primary', 
				'container' => '', 
				'menu_class' => '', 
				'menu_id' => '', 
				'items_wrap' => '%3$s',
				'depth' => 1
			) ); ?>
		</ul>
	</aside>

<!-- Foundation .off-canvas-wrap end -->

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'awesome-theme' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<div class="row"><!-- Foundation .row start -->
				<div class="small-12 columns"><!-- Foundation .columns start -->
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				</div><!-- Foundation .columns end -->
			</div><!-- Foundation .row end -->
		</div>

		<!-- Foundation top-bar navigation start -->
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="row show-for-large-only">
				<div class="small-12 columns">
					<nav class="top-bar hide-for-small" data-topbar>
						<section class="top-bar-section">
						<?php wp_nav_menu( array( 
							'theme_location' => 'primary', 
							'menu_id' => 'top-nav',
						) ); ?>
						</section>
					</nav><!-- #site-navigation -->
				</div>
			</div>
		</nav><!-- .row -->
		<!-- Foundation top-bar navigation end -->

		<?php /* // Commenting out underscores nav ?>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle"><?php _e( 'Primary Menu', 'awesome-theme' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
		*/ ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
