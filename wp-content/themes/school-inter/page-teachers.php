<?php
/**

 * Template Name: Teachers
 *
 * @package school-inter
 */

get_header(); ?>

<div class="teachers-content">
	<?php $args = array ( 'posts_per_page' => 25, 'category_name' => 'teachers','order'=> 'ASC',);
	$teachers_posts = get_posts($args);
	foreach ( $teachers_posts as $post ) :
        setup_postdata( $post ); ?>
			<div class="row-fluid">
				<div class="col col-md-3">
					<img src="<?php the_field('t_image')?>" alt="" />
				</div>
				<div class="col col-md-9">
					<h4><?php the_title(); ?></h4>
					<p class="green-caption"><?php the_field('t_lesson'); ?></p>
					<?php the_content(); ?>
				</div>
			</div>
			<br/>
<?php endforeach; 
 wp_reset_postdata(); ?>
</div>
<?php
get_footer();
