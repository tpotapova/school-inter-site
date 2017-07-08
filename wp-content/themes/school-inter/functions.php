<?php
/**
 * school-inter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package school-inter
 */

if ( ! function_exists( 'school_inter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function school_inter_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on school-inter, use a find and replace
	 * to change 'school-inter' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'school-inter', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => 'Верхнее меню',
		'submenu' => 'Подменю виды обучения', 
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'school_inter_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'school_inter_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function school_inter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'school_inter_content_width', 640 );
}
add_action( 'after_setup_theme', 'school_inter_content_width', 0 );

/**
	*Add mobile Navigation
*/
function extra_setup() {
	register_nav_menu ('primary-mobile', __( 'Адаптивное меню', 'school-inter' ));
}
add_action( 'after_setup_theme', 'extra_setup' );

function set_container_class ($args) {
	$args['container_class'] = str_replace (' ','-',$args['theme_location']).'-nav'; return $args;
} 
add_filter ('wp_nav_menu_args', 'set_container_class');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function school_inter_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'school-inter' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'school-inter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'school_inter_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function school_inter_scripts() {
	wp_enqueue_style( 'school-inter-style', get_stylesheet_uri() );
	
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	
	wp_register_style('font-style', 'http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i&amp;subset=cyrillic,cyrillic-ext');
	
	wp_enqueue_style( 'font-style');
	
	wp_enqueue_style( 'school-inter-main', get_template_directory_uri() . '/css/main.css' );
	
	wp_enqueue_style( 'school-inter-media', get_template_directory_uri() . '/css/media.css' );
	
	wp_enqueue_style( 'school-inter-slider', get_template_directory_uri() . '/css/jquery.bxslider.css' );
	
	wp_enqueue_script( 'school-inter-jquery', get_template_directory_uri() . '/js/jquery-3.1.1.min.js', array(), '20151215', true );
	
	wp_enqueue_script( 'school-inter-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20151215', true );
	
	wp_enqueue_script( 'school-inter-matchHeight', get_template_directory_uri() . '/js/jquery.matchHeight.js', array(), '20151215', true );
	
	wp_enqueue_script( 'school-inter-js', get_template_directory_uri() . '/js/school-inter.js', array(), '20151215', true );
	
	wp_enqueue_script( 'school-inter-jquery-bxslider', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array(), '20151215', true );
	
	wp_enqueue_script( 'school-inter-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'school-inter-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'school_inter_scripts' );
add_action( 'wp_enqueue_scripts', 'myajax_data', 99 );
function myajax_data(){
	wp_localize_script('school-inter-js', 'myajax', 
		array(
			'url' => admin_url('admin-ajax.php')
		)
	);  
}
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
remove_filter('the_content', 'wpautop');


function split_text($text,$numwords){
			$text = trim( preg_replace( "/[\n\r\t ]+/", ' ', $text ), ' ' );
			$words_array = explode(' ',$text);
			if (count($words_array) > $numwords){
				$array1 = array_slice($words_array,0,$numwords);
				$text1 = implode($array1,' ');
				$array2 = array_slice($words_array,$numwords);
				$text2= implode($array2,' ');
				$output = [$text1,$text2];
			}
			else{
				$text1 = implode($words_array,' ');
				$output = [$text1];
				
			}
			return $output;
		}
		
function wpb_new_gravatar ($avatar_defaults) {
$myavatar = 'http://ddidd.ru/html/wordpress/wp-content/uploads/2017/06/wpb-default-gravatar.png';
$avatar_defaults[$myavatar] = "Default Gravatar";
return $avatar_defaults;
}
add_filter( 'avatar_defaults', 'wpb_new_gravatar' );


function verify_comment_meta_data( $commentdata ) {
  if ( ! isset( $_POST['agree-terms'] ) )
  wp_die( __( 'Необходимо согласие на обработку персональных данных' ) );
  return $commentdata;
}
add_filter( 'preprocess_comment', 'verify_comment_meta_data' );

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'menu-active ';
    }
    return $classes;
}