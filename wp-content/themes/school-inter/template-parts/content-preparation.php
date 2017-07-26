<?php
/**
 * Template part for displaying preparation page slider, video and help blocks
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package school-inter
 */
?>
<?php $preparation_info = array(
["header"=>"Чтение и письмо", 
"content" =>"Работаем через актерское мастерство, учимся осознавать и чувствовать каждое слово, выполняем творческие игровые и рукодельные задания."],
["header" => "Математика",
"content" => "Решаем числовые головоломки и ребусы, нестандартные и веселые задачи, развиваем логику, внимание и память."],
["header" => "Иностранные языки",
"content" => "Танцуем и поем, пополняем словарный запас, получаем первый опыт знакомства с языком весело, динамично, интересно."],
["header" => "Окружающий мир",
"content" => "Главный принцип уроков — беседа с детьми, поощрение и побуждение естественной детской любознательности, расширение кругозора, развитие наблюдательности, знакомство с предметом."],
["header" => "Шахматы",
"content" => "Учимся с 0 до кандидатов в мастера, решаем задачки различной сложности, развиваем интеллектуальные способности и сильные личностные качества. Занимаемся в группах по уровню знаний."],
["header" => "Актёрское мастерство",
"content" => "Тренируем фантазию, воображение, творческую смелость, умение находить выход из сложной ситуации, выполняем губную гимнастику, читаем скороговорки, развиваем речь, разыгрываем небольшие сценки."],
["header" => "Рисование, лепка, прикладное творчество",
"content" => "Развиваем фантазию, воображение, художественный вкус, мелкую моторику и творческое мышление."]
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
		<iframe width="100%" height = "100%" src="https://www.youtube.com/embed/fLpSD1Wa55Q" frameborder="0" allowfullscreen></iframe>
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