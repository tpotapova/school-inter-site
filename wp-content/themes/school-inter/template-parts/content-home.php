<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package school-inter
 */

?>
	<h4><strong>SCHOOL-Inter</strong> ― дистанционная школа, открытая, нацеленная на обучение и воспитание людей думающих и свободных.</h4>
	<!--
	<div class="button-app"><button class="btn btn-app gradient" type="button" data-toggle="modal" data-target="#FormModal">Оставить заявку</button></div>
	
	<div class="modal fade" id="FormModal" role="dialog">
	  <div class="modal-dialog modal-lrg">
		<div class="modal-content">
		  <div class="modal-header">
			<h3 class="modal-title" id="formModalLabel">Оставить заявку</h3>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<?php echo do_shortcode("[contact-form-7 id='4385' title='Контакты']"); ?>
		  </div>
		</div>
	  </div>
	</div> -->
	<?php wp_nav_menu(array('theme_location' => 'submenu', 'menu' => 'submenu', 'menu_class' => 'submenu')); ?>
	<div class="courses-list">
		<a href="<?php echo home_url()?>/courses" class="course-link"><h2>Занятия и мастерские</h2></a>
		<div class="row">
			<?php $args_courses = array ('category_name' => 'course','numberposts' => 6);
				$courses_posts = get_posts($args_courses);
				foreach ( $courses_posts as $c_post ) :
					setup_postdata($c_post);
					$course_teacher = get_field('c_teacher',$c_post);
					$fotoArr = get_field('c_foto',$c_post);
					$tags = get_the_tags( $c_post->id );?>
			<div class="col col-md-4">
				<div class="course-content equal">
					<a href="<?php echo home_url().'/'.$c_post->post_name; ?>" class="course-link">
					<img src="<?php echo $fotoArr[0]['c_foto']?>" alt="" alt="<?=$c_post->post_title ?>" />
					<div class="caption">
						Преподаватель: <b><?php echo ($course_teacher->post_title);?></b>
						<h4><?php echo ($c_post->post_title);?></h4>
						<div>Возраст: <?php $c_age=get_post_meta($c_post->ID); echo($c_age['c_age'][0]); ?></div>
					</div>
					</a>
				</div>
			</div>
			<?php endforeach ?>
		</div>
		<?php wp_reset_postdata(); ?>
	</div>
	<div class="news">
		<a href="<?php echo home_url()?>/news" class="course-link"><h2>Новости</h2></a>
		<?php get_template_part( 'template-parts/content', 'lastn' ); ?>
	</div>
	<div class="teachers">
	<a href="<?php echo home_url()?>/teachers" class="course-link"><h2>Наши учителя</h2></a>
	<div class="tslider">
	<a href="" class="triangle-left"></a>
	<div id="tslider" class="bxslider">
	<!--<div class="row">-->
	<?php 
	$args_teachers = array('numberposts' => -1,'category_name'=>'teachers','order'=> 'ASC',);
	$teachersMain = get_posts($args_teachers);
	$teachersColors = ['red', 'green','violet'];
	$color = 0;
	if ($teachersMain){
		foreach ($teachersMain as $teacher){
			$id = $teacher->ID;
			setup_postdata( $teacher );?>
			<li>
			<!--<div class="col col-md-3">-->
			<div class="teacher-info equal">
			<div class='hline <?php echo ($teachersColors[$color]."'>");?></div>
			<img src="<?php echo (the_field('t_image', $id))?>"/>
			<div class="caption">
				<h4><?php echo ($teacher->post_title);?></h4>
				<p class="green-caption"><?php echo(the_field('t_lesson',$id));?></p>
			</div>
		</div>
		<!--</div>-->
		</li>
	<?php $color =($color == 2 )? 0 : $color + 1;	
		}
		wp_reset_postdata();
	} ?>
	</div>
	<a href ="#" class="triangle-right"></a>
	&nbsp;

	</div>
	</div>
	<div class="reviews">
	<a href="<?php echo home_url()?>/reviews" class="course-link"><h2>Отзывы</h2></a>
	<div class="rslider">
	<div class="row">
	<?php
		$args_comments = [
			'post_id' => 41,
			'orderby' => 'rand',
			'number' => '3'
		];
		$commentsMain = get_comments($args_comments);
		$commentAuthorColors = ['green', 'red','violet'];
		$color = 0;
		if($commentsMain){
			foreach( $commentsMain as $comment ){
	?>
	<div class="col col-md-4">
	<div class="review-content equal">
		<div class="caption">
		<p class='rdate'><?php $comment_id = $comment->comment_ID;
		echo(get_comment_date($comment->comment_id)); ?></p>
		<div class='rtext'>
		<?php 
		$rtext = split_text($comment->comment_content,40);
		if (count($rtext)> 1){
			echo($rtext[0]."<button class='btn btn-link btn-xs' data-toggle='collapse' data-target='#comment-".$comment_id."'>Подробнее</button>");
			?>
			<div class="collapse" id ="comment-<?php echo ($comment_id); ?>"><?php echo $rtext[1]; ?></div>
		<?php	
		}
		else echo ($rtext[0]);
		?>
		</div>
		</div>
		<div class ='rname 
		<?php
		if ($color < 3){
			echo "font-".($commentAuthorColors[$color]."'>");
		};
		echo ($comment->comment_author); ?>
		</div>
	</div>
	</div>
	<?php $color+=1;
	}
	}
	?>
	</div>
	</div>
	</div>
	<!--
	<div class="button-reviews"><button class="btn btn-reviews gradient" type="button"  onclick="location.href = '<?php echo get_home_url(); ?>/reviews';">Все отзывы</button></div>-->