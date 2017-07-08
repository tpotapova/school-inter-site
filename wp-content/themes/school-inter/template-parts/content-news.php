<?php
/**
 * Template part for displaying news posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package school-inter
 */
 
?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<div class="news-meta"> 
		<div class="news-bg">
		<img class="n-img" src="<?php the_field('n_foto')?>">
		</div>
			<?php
			the_title( '<h3>', '</h3>' );
			the_time("d.m.Y");?>
			<div class="single-news-content">
				<?php
				the_content();
				?>
		<div class="n-share">
			<hr>
			<?php get_template_part( 'template-parts/content', 'share' );?>		
		</div>
		</div>
		
		</div>
		<div class="news-comments">
		<?php get_template_part( 'template-parts/comment', 'form' );
		$commentsNumber = get_comments_number($post->ID);
				if($commentsNumber > 0 ): ?>
		<h3>Отзывы о курсе</h3>
				<hr>
			<ol class="comment-list"><?php
				$comments = get_comments( array('post_id' => $post->ID,'number' => $get_comments_number_approved,'order' => 'DESC', 'status' => 'approve'));
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
					'avatar_size' => 100,
					'per_page' => 3,
				),$comments );?>
			</ol>
			<?php endif; ?>
			
		</div>
	</div>
	
<h3 class="ln-header">Последние новости</h3>
<?php get_template_part( 'template-parts/content', 'lastn' ); ?>
