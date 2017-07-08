<?php
/**
 * Template part for displaying course posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package school-inter
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<div class="course-meta">
		<?php the_title( '<h1>', '</h1>' );
			$meta = new stdClass;
			foreach( get_post_meta( $post->ID ) as $k => $v ){
					$meta->$k = $v[0];
					}
			?> <div class="course-age font-violet"><span>Возраст: </span><?php echo $meta->c_age; ?></div>
			<?php $courseTime = get_field('c_time',$post); 
			if ($courseTime[0]['c_time']){?>
			<div class="course-time">
				<img src="<?php bloginfo('template_url'); ?>/images/calendar.png" />
				<?php 
				for ($i = 0; $i < count($courseTime); $i++){?>
					<span class="cday"><?=mb_strtolower($courseTime[$i]['c_time']);?></span>
				<?php } ?>
			</div>
			<?php }?>
		</div>
		<div id="course-content">
			<?php
			the_content();
			?>
		</div>
		<div class="course-teacher">
			<?php $courseTeacher = get_post($meta->c_teacher); ?>
			<div class="row">
			<img class="col col-md-3 teacher-image" src="<?=get_field('t_image', $courseTeacher->ID); ?>">
			<div class="col col-md-8 teacher-about">
				<p class="teacher-title"><span>Преподаватель: </span><?php echo($courseTeacher->post_title);?></p>
				<p class="t-content"><?php echo ($courseTeacher->post_content); ?></p>
			</div>
			</div>
		</div>
		<div class="course-media">
			<div class="row"><?php $photoAr = get_field('c_foto', $post->ID);
				for ($i = 0; $i < count($photoAr); $i++) {?>
					<div class="col col-sm-4">
					<img class="c-foto" src="<?=$photoAr[$i]['c_foto']; ?>"></div>
				<?php }?>
			</div>
			<?php $videoAr = get_field('c_video', $post->ID);
			if($videoAr[0]['c_video']) { 
			?>
			<div class="row">
				<?php for ($i = 0; $i < count($videoAr); $i++){?>
				<div class="col col-sm-4">
					<iframe width="300" height="215" src="https://www.youtube.com/embed/<?php echo stripcslashes($videoAr[$i]['c_video']); ?>" frameborder="0" allowfullscreen></iframe>
				</div>
				<?php }?>
			</div>
			<?php }?>
		</div>
		
<!-- Modal -->
<div class="modal fade" id="FormModal1" role="dialog">
  <div class="modal-dialog modal-lrg">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="formModal1Label"><?php the_title();?></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode("[contact-form-7 id='4364' title='Занятие']"); ?>
      </div>
    </div>
  </div>
</div>


		<div class="course-form">
		<div class="row form-block">
			<h3>Записаться на курс "<?php the_title()?>"</h3>
			<p> Оставьте свои контакты и мы с вами свяжемся!</p>
			<!-- Button trigger modal -->
			<div class="col col-md-4 contact-form-send">
			<button type="button" class="btn btn-classes gradient" data-toggle="modal" data-target="#FormModal1">
			  Оставить заявку
			</button>
			</div>
		</div>
		</div>
		<div class="course-comments">
		<?php get_template_part( 'template-parts/comment', 'form' );
		$commentsNumber = get_comments_number($post->ID);
				if($commentsNumber > 0 ): ?>
		<h3>Отзывы о курсе</h3>
				<hr>
			<?php get_template_part( 'template-parts/comment', 'list' ); ?>
			<div class="navigation"><?php echo paginate_comments_links('prev_text=back&next_text=forward');
			?></div>
			<?php endif; ?>
			
		</div>
	</div>
</div>