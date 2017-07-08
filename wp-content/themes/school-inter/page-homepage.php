<?php
/**
 * The template for displaying main page
 * Template Name: Homepage
 *
 * @package school-inter
 */

get_header(); ?>

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'home' );

			endwhile; // End of the loop.
			?>
<?php
get_footer();
