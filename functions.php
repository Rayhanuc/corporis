<?php
/**
 * Corporis functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Corporis
 */

if ( ! function_exists( 'corporis_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function corporis_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Corporis, use a find and replace
		 * to change 'corporis' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'corporis', get_template_directory() . '/languages' );

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


		// Enable support for Post Thumbnails Formats on posts and pages.
		add_theme_support( 'post-formats', array(
			'video',
			'gallery',
			'audio',
			'quote',

		) );


		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'main' => esc_html__( 'Corporis Primary Menu', 'corporis' ),
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
		add_theme_support( 'custom-background', apply_filters( 'corporis_custom_background_args', array(
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
add_action( 'after_setup_theme', 'corporis_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function corporis_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'corporis_content_width', 640 );
}
add_action( 'after_setup_theme', 'corporis_content_width', 0 );















/**
 * Enqueue scripts and styles.
 */
function corporis_scripts() {
	wp_enqueue_style( 'corporis-style', get_stylesheet_uri() );

	wp_enqueue_script( 'corporis-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'corporis-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'corporis_scripts' );


// cnstant creation
//root directori
define('CORPORIS_ROOT', trailingslashit(get_template_directory()));
//root inc directori
define('CORPORIS_INCLUDES_DIR', trailingslashit(CORPORIS_ROOT.'inc'));
//Corporis uri
define('CORPORIS_URI', trailingslashit(get_template_directory_uri()));
//Corporis assets
define('CORPORIS_ASSETS_URI', trailingslashit(CORPORIS_URI.'assets'));
//css directori
define('CORPORIS_CSS_URI', trailingslashit(CORPORIS_ASSETS_URI.'css'));
//js directori
define('CORPORIS_JS_URI', trailingslashit(CORPORIS_ASSETS_URI.'js'));
//uri Corporis vendor
define('CORPORIS_VENDOR_ASSETS_URI', trailingslashit(CORPORIS_ASSETS_URI.'vendor'));

define('CORPORIS_VERSION','1.0.0');

require CORPORIS_INCLUDES_DIR.'style.php';
require CORPORIS_INCLUDES_DIR.'script.php';
require CORPORIS_INCLUDES_DIR.'menu.php';
require CORPORIS_INCLUDES_DIR.'custom-menu.php';
require CORPORIS_INCLUDES_DIR.'class.sidebars.php';
//custom widget
require CORPORIS_INCLUDES_DIR.'custom-widget.php';
require CORPORIS_INCLUDES_DIR.'metabox.php';
require CORPORIS_INCLUDES_DIR.'helper.php';
require CORPORIS_INCLUDES_DIR.'blog-metabox.php';


/**
 *
 * Codestar Framework 
 *
 */
require_once get_template_directory() .'/theme-option-cs/cs-framework.php';
require_once get_template_directory() .'/theme-option-cs/theme-option.php';



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

//font-awesome adding in function file
add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
function enqueue_load_fa() {
wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
}