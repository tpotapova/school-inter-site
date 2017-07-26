<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package school-inter
 */

?><!DOCTYPE html>
<html lang="ru">
	<head>
		<title>School-Inter</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
		<title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz">
		
	<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<div class="navbar navbar-fixed-top top-nav">
		<div class="container-fluid">
			<h3>Подписаться и получить больше информации</h3>
			<button class="btn btn-sign gradient" type="button" >Подписаться</button>
			<div id="sendpulse-signin">
			
				<div class="form-outer sp-popup-outer sp-force-hide"> 
				<div id="sp-form-77472" sp-id="77472" sp-hash="f5d74a2d372c29ef612feb6f0c4171cb6a006687213639d54b2a79f81152f147" sp-lang="ru" class="sp-form sp-form-regular sp-form-popup" sp-show-options="%7B%22amd%22%3Afalse%2C%22condition%22%3A%22onEnter%22%2C%22delay%22%3A10%2C%22repeat%22%3A3%2C%22background%22%3A%22dark%22%2C%22position%22%3A%22bottom-right%22%7D"> <button class="sp-btn-close " >&nbsp;</button> <div class="sp-message"> <div></div> </div> <div id="droppableArea" class="sp-element-container ui-sortable ui-droppable" ><div class="sp-field " sp-id="sp-f2ba1c46-7a45-4786-9d25-f5ba99828215" > <div class=" " style="font-family: inherit; line-height: 1.2;"><p>Получите больше информации о нашей школе и занятиях!</p></div> </div><div class="sp-field " sp-id="sp-a3ae97a2-55a3-4810-8f8f-4c3b50957b22" > <label class="sp-control-label "> <span class="">Ваше Имя:</span> </label> <input type="text" sp-type="input" name="sform[0LjQvNGP]" class="sp-form-control " placeholder="введите данные" sp-tips="%7B%7D"> </div><div class="sp-field " sp-id="sp-5c2ea577-a7a6-4633-9d07-e18ad2d9da28" > <label class="sp-control-label "> <span class="">Email:</span> <strong class="">*</strong> </label> <input type="email" sp-type="email" name="sform[email]" class="sp-form-control " placeholder="введите данные" sp-tips="%7B%22required%22%3A%22%D0%9E%D0%B1%D1%8F%D0%B7%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5%20%D0%BF%D0%BE%D0%BB%D0%B5%22%2C%22wrong%22%3A%22%D0%9D%D0%B5%D0%B2%D0%B5%D1%80%D0%BD%D1%8B%D0%B9%20email-%D0%B0%D0%B4%D1%80%D0%B5%D1%81%22%7D" required="required"> </div><div class="sp-field " sp-id="sp-373f33ba-e254-4cf8-be93-8a25294cd5d9" > <div class="sp-checkbox-option "> <label> <input type="checkbox" sp-type="checkbox" name="sform[0KHQvtCz0LvQsNGB0LjQtSDQvdCwINC+0LHRgNCw0LHQvtGC0LrRgyDQtNCw0L3QvdGL0YU=]" value="yes" sp-tips="%7B%22required%22%3A%22%D0%9E%D0%B1%D1%8F%D0%B7%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5%20%D0%BF%D0%BE%D0%BB%D0%B5%22%7D" class=" " required="required"> <span class="">Соглашаюсь на обработку моих персональных данных в соответствии с <a href="https://docs.google.com/document/d/1WYoSRNQM68CkKlQ8jioCeyNbAzk7AVXBHs71VEa-yRk/edit?usp=sharing">условиями пользовательского соглашения</a></span>&nbsp;<strong class="">*</strong> </label> </div> </div></div> <div class="sp-field sp-button-container " sp-id="sp-933c3d3d-c7ba-44a2-8b5c-ec92fd37347b" > <button id="sp-933c3d3d-c7ba-44a2-8b5c-ec92fd37347b" class="sp-button "> Подписаться </button> </div> <div class="sp-link-wrapper sp-brandname__center " > </div> </div> <script type="text/javascript" src="//login.sendpulse.com/apps/fc3/build/default-handler.js"></script>
				</div>
			
			</div>
		</div>
	</div>
	<div class="wrapper container">
	<header>
		
		<div class = "top-heading">
			<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo-top.png" alt="School-Inter logo"></a>
			<div class="navbar navbar-custom">
				<?php wp_nav_menu(array( 'theme_location' => 'primary mobile','menu' => 'primary mobile', 'menu_class' => 'nav-menu glyphicon glyphicon-menu-hamburger', 'menu_id' => 'mobile-dropdown')); ?>
				<?php wp_nav_menu(array('theme_location' => 'top-menu', 'menu_class' => 'top-menu', 'menu' => 'top-menu')); ?>
				<div class="button-app"><button class="btn btn-app gradient" type="button" data-toggle="modal" data-target="#FormModal">Оставить заявку</button></div>
				<!-- Modal -->
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
				</div>
			</div>
		</div>
	</header>
	