<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Awesome Theme
 */

get_header(); ?>

	<div class="row" data-equalizer><!-- Foundation .row start -->

		<div class="large-9 medium-8 columns" data-equalizer-watch><!-- Foundation .columns start -->

			<section id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'awesome-theme' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					</header><!-- .page-header -->

					<?php /* Start the Loop */ ?>
					<ul class="large-block-grid-2"><!-- Foundation block grid start -->
					<?php while ( have_posts() ) : the_post(); ?>

						<li><!-- Foundation block grid item start -->
						<?php
						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'content', 'search' );
						?>
						</li><!-- Foundation block grid item end -->

					<?php endwhile; ?>
					</ul><!-- Foundation block grid end -->

					<?php awesome_theme_paging_nav(); ?>

				<?php else : ?>

					<?php get_template_part( 'content', 'none' ); ?>

				<?php endif; ?>

				</main><!-- #main -->
			</section><!-- #primary -->

		</div><!-- Foundation .columns end -->

		<div class="large-3 medium-4 columns sidebar" data-equalizer-watch><!-- Foundation .columns start -->
			
			<?php get_sidebar(); ?>

		</div><!-- Foundation .columns end -->

	</div><!-- Foundation .row end -->
	
<?php get_footer(); ?>
