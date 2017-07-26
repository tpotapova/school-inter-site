<?php
/**
 * Template part for displaying school program page slider, video and help blocks
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package school-inter
 */
?>
<?php $preparation_info = array(
["header"=>"1 класс", 
"content" =>"Математика | Письмо | Литературное чтение | Окружающий мир"],
["header" => "2-4 класс",
"content" => "Математика | Русский | Литературное чтение | Окружающий мир | Иностранный язык"],
["header" => "5-6 класс",
"content" => "Математика | Русский | Литература | География | Иностранный язык | Биология | История"],
["header" => "7 класс",
"content" => "Математика | Русский | Литература | География | Иностранный язык | Биология | История | Физика"],
["header" => "8 класс",
"content" => "Математика | Русский | Литература | География | Иностранный язык | Биология | История | Химия"],
)?>
<div class="grey-block">
	<div class="pslider">
		<a href="" class="t-left"></a>
		<div id="pslider" class="bxslider">
		<?php foreach($preparation_info as $slide){?>
			<li>
				<div class = "prepare-slider-info">
					<h5><?php echo ($slide["header"]); ?></h5>
					<div class="prepare-slider-caption">
						<?php echo ($slide["content"]);?>
					</div>
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
		<iframe width="100%" height = "100%" src="https://www.youtube.com/embed/VnVuGNC_wAY" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
	<div class="prepare-help-block">
	<div class="prepare-header">Помощь родителям:</div>
	<p>Логопед</p>
	<p>Психолог</p>
	<p>Нумеролог</p>
	<p>Специалист по раннему интеллектуальному развитию ребенка</p>
	</div>
</div>