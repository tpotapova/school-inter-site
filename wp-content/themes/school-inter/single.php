<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package school-inter
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<section>
		<?php
		while ( have_posts() ) : the_post();
			$category = get_the_category( $post->ID )[0];
			if ($category->slug == 'course') {
				get_template_part( 'template-parts/content-course', get_post_format() );
			}
			else if ($category->slug == 'news') {
				get_template_part( 'template-parts/content-news', get_post_format() );
			}
			else {
				get_template_part( 'template-parts/content', get_post_format() );
			}
			// If comments are open or we have at least one comment, load up the comment template.
			/*if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;*/

		endwhile; // End of the loop.
		?>
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
