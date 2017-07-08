<?php
/**
 * Template part for displaying last news feed
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package school-inter
 */
?>
<div class="last-news">
	<div class="nslider">
	<a href="" class="tr-left"></a>
	<div id="nslider" class="bxslider">
	<?php 
	$args_news = array('numberposts' => -1,'category_name'=>'news', 'order'=> 'DESC');
	$lastNews = get_posts($args_news);
	if ($lastNews){
		foreach ($lastNews as $n){
			$id = $n->ID;
			setup_postdata($n);?>
			<li>
			<a class="ln-link" href="<?php echo home_url().'/'.$n->post_name; ?>">
				<div class="n-info equal">
				<img src="<?php echo (the_field('n_foto', $id))?>"/>
				<div class="caption">
					<div class="ln-date"><?php echo date('d.m.Y', strtotime($n->post_date));?></div>
					<div class="ln-title"><?php echo ($n->post_title);?></div>
					<div class="ln-content"><?php echo wp_trim_words( get_the_content(), $num_words = 10, $more = " [...]" );?></div>
				</div>
				</div>
			</a>
			</li>
			
		<?php wp_reset_postdata(); }
		
		} ?>
	</div>
	<a href ="#" class="tr-right"></a>
	&nbsp;
	</div>
</div>