<?php
/**
 * starway functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package starway
 */

if ( ! function_exists( 'starway_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function starway_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on starway, use a find and replace
		 * to change 'starway' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'starway', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'starway' ),
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
		add_theme_support( 'custom-background', apply_filters( 'starway_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'starway_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function starway_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'starway_content_width', 640 );
}
add_action( 'after_setup_theme', 'starway_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function starway_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'starway' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'starway' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'starway_widgets_init' );

/**
 * Enqueue scripts and styles.
 * JS/CSS folders destiny
 */




function starway_scripts() {

	$CSS_folder = get_template_directory_uri() . '/assets/css/';
	$JS_folder = get_template_directory_uri() . '/assets/js/';

	// CONNECT CSS
    wp_enqueue_style( 'starway-style', get_stylesheet_uri() ); //default styles
	wp_enqueue_style('bootstrap_css', $CSS_folder . 'bootstrap.min.css',array(), '1.0.0');
	wp_enqueue_style('swiper_css', $CSS_folder . 'swiper.min.css',array(), '1.0.0');
    wp_enqueue_style('main_css', $CSS_folder . 'main.css',array(), '1.0.0');
    wp_enqueue_style('responsive_css', $CSS_folder . 'responsive.css',array(), '1.0.0');

    // CONNECT JS
	wp_enqueue_script('jquery', $JS_folder . 'jquery.min.js',array(), '1.0.0');
	wp_enqueue_script('bootstrap_js', $JS_folder . 'bootstrap.min.js',array(), '1.0.0');
	wp_enqueue_script('anime_js', $JS_folder . 'anime.min.js',array(), '1.0.0');
	wp_enqueue_script('waypoints_js', $JS_folder . 'jquery.waypoints.min.js',array(), '1.0.0');
	wp_enqueue_script('swiper_js', $JS_folder . 'swiper.min.js',array(), '1.0.0');
	wp_enqueue_script('tweenmax_js', $JS_folder . 'TweenMax.min.js',array(), '1.0.0');
	wp_enqueue_script('smoothscroll_js', $JS_folder . 'jquery.smoothscroll.js',array(), '1.0.0');
	wp_enqueue_script('particles_js', $JS_folder . 'particles.min.js',array(), '1.0.0');
	wp_enqueue_script('scripts_js', $JS_folder . 'scripts.js',array(), '1.0.0');

	if (is_page('portfolio')) {
        wp_enqueue_script('triangles', $JS_folder . 'triangles.js',array(), '1.0.0');
    }


	wp_enqueue_script( 'starway-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'starway-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'starway_scripts' );

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


add_filter('user_can_richedit' , create_function('' , 'return false;') , 50);