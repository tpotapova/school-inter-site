<?php
/**

 * Template Name: Courses
 *
 * @package school-inter
 */

get_header(); ?>
<?php the_title( '<h1 class="entry-title">', '</h1>' );?>
<div class="courses-list">
	<fieldset class="courses-filter">
		<?php $args = array('orderby' => 'slug','description__like'=>'age-filter');
		$posttags = get_tags($args);
		foreach($posttags as $tag){
		?>
		<input type="checkbox" class="age-filter" name="options" value=<?=$tag->term_id?>><label><?php echo ($tag->name)?></label>
		<?php }?>
	</fieldset>
	<?php $args2 = array ('category_name' => 'course','numberposts' => -1);
		  $courses_posts = get_posts($args2);
		?>
		<div class="row">
		<?php
		foreach ( $courses_posts as $post ) :
			setup_postdata($post);
			$teacher = get_field('c_teacher',$post);
			$fotoArr = get_field('c_foto',$post);
		
			$tags = get_the_tags( $post->id );
			$post_tag_ids = [];
			foreach ($tags as $t) {
				$post_tag_ids[] = $t->term_id;
			}
		?>
				<div class="col col-md-4 course-tile" data-tag-ids="<?=implode(',', $post_tag_ids)?>">
					<div class="course-content equal">
						<a href="<?php echo home_url().'/'.$post->post_name; ?>" class="course-link">
						<img src="<?php echo $fotoArr[0]['c_foto']?>">
						<div class="caption">
						<p>Преподаватель: <b><?php echo($teacher->post_title);?></b></p>
						<h4><?php the_title(); ?></h4>
						<div class="caption-age">
						<?php
						foreach ($tags as $t):
							echo ('<span>'.$t->name.'</span>'); 
						endforeach?>
						</div>
						</div>
						</a>
					</div>
				</div>
	<?php
	endforeach ?>
	</div>
	<?php wp_reset_postdata(); ?>
</div>
<?php
get_footer();