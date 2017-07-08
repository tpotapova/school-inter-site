<?php
/**

 * Template Name: Contact
 *
 * @package school-inter
 */

get_header(); ?>
<?php the_title( '<h1 class="entry-title">', '</h1>' );?>
<div class="contact-content">
		<div class="row contact-row">
			<div class="col col-md-4 col-sm-offset-3">
				<a class="phone" href="tel:+79262300599"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/a_tel.png"/>+7(926)2300599</a>
				<a href="mailto:mail@school-inter.net"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/a_mail.png"/>mail@school-inter.net</a>
				<a href="https://api.whatsapp.com/send?phone=79262300599"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/a_whatsup.png"/>WhatsApp</a>
				<a href="skype:school.inter"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/a_skype.png"/>school.inter</a>
			</div>
			<div class="col col-md-4">
				<a href="https://vk.com/school.inter"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/a_vk.png"/>Вконтакте</a>
				<a href="https://www.facebook.com/school.inter"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/a_fb.png"/>Facebook</a>
				<a href="https://telegram.me/school-inter"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/a_telegram.png"/>Telegram</a>
				<a href="https://www.instagram.com/school_inter/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/a_instagram.png"/>Instagram</a>
			</div>
		</div>
		<div class="green-caption">Хотите получить больше информации? Напишите нам, и мы свяжемся с вами в ближайшее время!</div>
</div>
<?php echo do_shortcode("[contact-form-7 id='4385' title='Контакты']"); ?>
<?php
get_footer();
