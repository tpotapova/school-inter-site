<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package school-inter
 */

?>
<!--</div>-->
<footer class="main-footer">
	<hr class="footer-hline"/>
	<div class="row footer-row">
		<div class="col-xs-12 col-sm-5 col-md-5 footer-logo">
			<a href="/"><img src="<?php bloginfo('template_url'); ?>/images/footer-logo.png" alt="School-Inter logo"></a>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-4 sitemap">
			<p>Карта сайта</p>
			<div class="row">
				<div class="col-xs-4 col-sm-4 col-md-4">
					<a href="about/">О школе</a>
					<a href="teachers/">Учителя</a>
					<a href="courses/">Занятия</a>
					<a href="reviews/">Отзывы</a>
					<a href="news/">Новости</a>
				</div>
				<div class="col-xs-8 col-sm-8 col-md-8">
					<a href="preparation/">Подготовка к школе</a>
					<a href="courses/">Развивающие курсы</a>
					<a href="school_program/">Школьная программа</a>
					<a href="foreign/">Иностранные языки</a>
					<a href="school_travel/">Выездные школы</a>	
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-3 col-md-3 footer-contact">
			<p>Контакты</p>
			<ul>
				<li class="tel-icon"><a href="tel:+79262300599">+7 (926) 230 05 99</a></li>
				<li class="mail-icon"><a href="mailto:mail@school-inter.net">mail@school-inter.net</a></li>
				<li class="skype-icon"><a href="skype:school.inter">school.inter</a></li>
			</ul>
		</div>
	</div>
	<div class="row footer-row-social">
		<div class="col-xs-12 col-md-5 social">
			<div>Мы в соцсетях</div>
			<a href="https://telegram.me/school-inter" class="social-icon telegram"></a>
			<a href="https://api.whatsapp.com/send?phone=79262300599" class="social-icon whatsup"></a>
			<a href="http://facebook.com/school.inter" class="social-icon facebook"></a>
			<a href="http://vkontakte.ru/school.inter" class="social-icon vkontakte"></a>
			<a href="http://instagram.com/school_inter/" class="social-icon instagram"></a>
		</div>
	</div>
	<hr class="footer-hline"/>
</footer>
<?php wp_footer(); ?>
</div>
</body>
</html>
