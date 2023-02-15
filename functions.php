<?php
/**
 * ayukul functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ayukul
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ayukul_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on ayukul, use a find and replace
		* to change 'ayukul' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'ayukul', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'header-menu' => esc_html__( 'Header Menu', 'ayukul' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'ayukul_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 52,
			'width'       => 160,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'ayukul_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ayukul_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ayukul_content_width', 640 );
}
add_action( 'after_setup_theme', 'ayukul_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ayukul_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'ayukul' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'ayukul' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'ayukul_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ayukul_scripts() {
	wp_enqueue_style('ayukul-main-style', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style('ayukul-vendor-style', get_template_directory_uri() . '/assets/css/vendor/vendor.min.css');
	wp_enqueue_style('ayukul-plugins-style', get_template_directory_uri() . '/assets/css/plugins/plugins.min.css');

	// jQuery JS
	wp_deregister_script('jquery');
	wp_register_script('jquery', get_template_directory_uri() . '/assets/js/vendor/jquery-3.3.1.min.js', array(), false, true);
	wp_enqueue_script('jquery');


	// Modernizer JS
	wp_enqueue_script('ayukul-modernizr-js', get_template_directory_uri() . '/assets/js/vendor/modernizr-2.8.3.min.js', array(), false, true);
	// Bootstrap JS
	wp_enqueue_script('ayukul-bootstrap-js', get_template_directory_uri() . '/assets/js/vendor/bootstrap.min.js', array(), false, true);
	// Swiper Slider JS
	wp_enqueue_script('ayukul-swiper-js', get_template_directory_uri() . '/assets/js/plugins/swiper.min.js', array(), false, true);
	// Light gallery JS
	wp_enqueue_script('ayukul-lightgallery-js', get_template_directory_uri() . '/assets/js/plugins/lightgallery.min.js', array(), false, true);
	// Waypoints JS
	wp_enqueue_script('ayukul-waypoints-js', get_template_directory_uri() . '/assets/js/plugins/waypoints.min.js', array(), false, true);
	// Counter down JS
	wp_enqueue_script('ayukul-countdown-js', get_template_directory_uri() . '/assets/js/plugins/countdown.min.js', array(), false, true);
	// Isotope JS
	wp_enqueue_script('ayukul-isotope-js', get_template_directory_uri() . '/assets/js/plugins/isotope.min.js', array(), false, true);
	// Masonry JS
	wp_enqueue_script('ayukul-masonry-js', get_template_directory_uri() . '/assets/js/plugins/masonry.min.js', array(), false, true);
	// ImagesLoaded JS
	wp_enqueue_script('ayukul-images-loaded-js', get_template_directory_uri() . '/assets/js/plugins/images-loaded.min.js', array(), false, true);
	// Wavify JS
	wp_enqueue_script('ayukul-wavify-js', get_template_directory_uri() . '/assets/js/plugins/wavify.js', array(), false, true);
	// jQuery Wavify JS
	wp_enqueue_script('ayukul-jquery-wavify-js', get_template_directory_uri() . '/assets/js/plugins/jquery.wavify.js', array(), false, true);
	// circle progress JS
	wp_enqueue_script('ayukul-circle-progress-js', get_template_directory_uri() . '/assets/js/plugins/circle-progress.min.js', array(), false, true);
	// counterup JS
	wp_enqueue_script('ayukul-counterup-js', get_template_directory_uri() . '/assets/js/plugins/counterup.min.js', array(), false, true);
	// wow JS
	wp_enqueue_script('ayukul-wow-js', get_template_directory_uri() . '/assets/js/plugins/wow.min.js', array(), false, true);
	// animation text JS
	wp_enqueue_script('ayukul-animation-text-js', get_template_directory_uri() . '/assets/js/plugins/animation-text.min.js', array(), false, true);
	// Vivus JS
	wp_enqueue_script('ayukul-vivus-js', get_template_directory_uri() . '/assets/js/plugins/vivus.min.js', array(), false, true);
	// Some plugins JS
	wp_enqueue_script('ayukul-some-plugins-js', get_template_directory_uri() . '/assets/js/plugins/some-plugins.js', array(), false, true);
	// Main JS
	wp_enqueue_script('ayukul-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), false, true);
}
add_action( 'wp_enqueue_scripts', 'ayukul_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// ------------------------
function ayukul_debug($data) {
	echo '<pre>' . print_r($data, 1 ) . '<pre>';
}
// ------------------------

/**
 * Menu Walker
 */
// require get_template_directory() . '/inc/Ayukul_Menu.php';

// ------------------------
// подключение файла с функциями с админ панелями
// Admin function

require get_template_directory() . '/inc/admin-functions.php';


/**
 * Metaboxes
 */

require get_template_directory() . '/inc/ayukul_metabox.php';


function ayukul_post_meta( $post_id ) {
	$date = get_the_time( 'M j , Y' );
	// $read_minutes = get_post_meta( $post_id, 'read_minutes', true );
	$out = ' ';
	$out .= $date;
	// if ( $read_minutes ) {
	// 	// $out .= '&middot;';
	// }
	$out .= '';
	return $out;
}

// ------------------- 
// счетчик просмотров
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 просмотров";
    }
  // echo _e(' / &#128065; ', 'dot-b');
    return $count;
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++ ;
        update_post_meta($postID, $count_key, $count);
    }
}
// -------------------------------------
// avatar

function ayukul_get_avatar() {
	$image_id = get_option( 'author_avatar' );
	if ( $image = wp_get_attachment_image_src( $image_id ) ) {
		return '<img class="rounded-circle" src="' . $image[0] . '" width="70">';
	} else {
		return get_avatar( get_the_author_meta( 'user_email' ), 70, '', '', array( 'class' => 'rounded-circle' ) );
	}
}

// -------------------------------------
// custom post type - Our Solution Posts

add_action( 'init', 'true_register_solution' );
 
function true_register_solution() {
 
	$args = array(
		'labels' => array(
			'menu_name' => 'Solution Posts',
		),
		'public' => true,
		// 'show_in_menu' => 'edit.php',
		'show_in_rest'        => true, 
		'menu_position' => 4,
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields','post-formats')
		
	);
	register_post_type( 'solution', $args );
}

// -------------------------------------
// options page

if( function_exists('acf_add_options_page'))
{
	acf_add_options_page(

		array(
			'page_title' => 'Website ACF',
			'menu_title' => 'Website ACF',
			'menu_slug' => 'website-settings',
			'capability' => 'edit_posts',
			'icon_url' => 'dashicons-images-alt2',
        	'position' => 7
				
			)
	);	
}









