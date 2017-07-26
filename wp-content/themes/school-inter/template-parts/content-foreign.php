<?php
/**
 * Template part for displaying foreign languages page slider and video blocks
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package school-inter
 */
?>
<?php $languages = ['Английский', 'Немецкий', 'Французский', 'Итальянский', 'Испанский', 'Китайский'];
?>
<div class="grey-block">
	<div class="pslider">
		<a href="" class="t-left"></a>
		<div id="pslider" class="bxslider">
		<?php for ($i = 0; $i < count($languages); $i++){?>
			<li>
				<div class = "prepare-slider-info">
					<h5><?php echo ($languages[$i]); ?></h5>
				</div>
			</li>
		<?php }; ?>
		</div>
		<a href="" class="t-right"></a>
	</div>
</div>
<div class="prepare-white-block">
	<div class="prepare-video-background">
		<div class="prepare-video-wrapper">
		<iframe width="100%" height = "100%" src="https://www.youtube.com/embed/d1ADu2gNUa0" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
	<br/><br/></br>
</div>
</div>