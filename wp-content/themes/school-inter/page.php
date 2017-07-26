<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package school-inter
 */

get_header(); ?>

<section>
	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'page' );
		//Special for page "preparation": add slider, video container, help block
		if (($post->post_name)== 'preparation'):
			get_template_part('template-parts/content', 'preparation');
		endif;
		//Special for page "school_program": add slider, video container, help block
		if (($post->post_name)== 'school_program'):
			get_template_part('template-parts/content', 'program');
		endif;
		//Special for page "foreign": add slider, video container
		if (($post->post_name)== 'foreign'):
			get_template_part('template-parts/content', 'foreign');
		endif;
		// Special for page "school_travel" : add share links and comments
		 if (($post->post_name)== 'school_travel'):?>
		<div class="share-block">
		<?php get_template_part('template-parts/content', 'share');?>
		</div>
		<div class="someClass">
		<?php get_template_part('template-parts/comment', 'form'); ?>
		</div>
		<?php $commentsNumber = get_comments_number($post->ID);
				if($commentsNumber > 0 ): ?>
		<h3>Отзывы</h3>
			<hr>
			<?php get_template_part( 'template-parts/comment', 'list' );
			endif;?>
		<div class="travel-bus"></div>
			<?php else:
				if ( comments_open() || get_comments_number() ) :
				comments_template();
				endif;
			endif;
	endwhile; // End of the loop.
	?>
</section>
<?php
get_footer();
