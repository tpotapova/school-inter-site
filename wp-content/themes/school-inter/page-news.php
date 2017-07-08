<?php
/**

 * Template Name: News
 *
 * @package school-inter
 */

get_header(); ?>
<?php the_title( '<h1 class="entry-title">', '</h1>' );?>
<div class="news-list">
	<fieldset class="n-filter">
		<?php		
		$args = array('orderby' => 'name','description__like'=>'news-filter',);
		$posttags = get_tags($args);
		foreach($posttags as $tag){
		?>
		<input type="checkbox" class="news-filter" name="options[n]" value=<?=$tag->term_id?>><label
		><?php echo ($tag->name)?></label>
		<?php }?>
	</fieldset>
		<?php
		$paged = ( get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
		$args2 = array ('category_name' => 'news', 'posts_per_page'=> 3,'tag__and' => ($_GET['tag_ids']),'paged'=>$paged);
		query_posts($args2);
		if (have_posts()) : 
		while (have_posts()) : the_post();
			
			$post_id = get_the_ID();
			$tags = get_the_tags($post_id);
			$post_tag_ids = [];
			foreach ($tags as $t) {
				$post_tag_ids[] = $t->term_id;
			}
		?>
		<div class="n-bg" data-tag-ids="<?=implode(',', $post_tag_ids)?>">
			<div class="n-content">
				<a href="<?php echo home_url().'/'.$post->post_name; ?>">
				<img class="n-img" src="<?php the_field('n_foto')?>">
				<h3><?php the_title(); ?></h3>
				<div class="n-meta">
					<img src="<?php bloginfo('template_url'); ?>/images/icon_date.png" />
					<span class="comment-link"><?php the_time("d.m.Y");?></span>
					<a href="<?php echo home_url().'/'.$post->post_name; ?>/#respond">
					<img src="<?php bloginfo('template_url'); ?>/images/icon_comment.png" />
					<span class="comment-link">
						Оставить комментарий
					</span></a>
				</div>
				<div class="news-content">
					<?php echo wp_trim_words( get_the_content(), $num_words = 54, $more = " [...]" ); ?>
				</div>
				<div class="news-share">
					<hr>
					<?php get_template_part( 'template-parts/content', 'share' );?>
				</div>
				</a>
			</div>
		</div>
		<?php
		endwhile;
		endif;
		wp_reset_postdata(); 
		?>
		<nav class="page-links">
			<span class="left-link">
			<?php previous_posts_link('&laquo; Предыдущие') ?>
			</span>
			<span class="right-link">
			<?php next_posts_link('Следующие &raquo;') ?>
			</span>
		</nav>
</div>
<?php
get_footer();