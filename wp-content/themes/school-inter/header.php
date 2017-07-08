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
	