<?php
/**
 * mermer functions and definitions
 *
 * @package mermer
 */

if ( ! function_exists( 'mermer_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mermer_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on mermer, use a find and replace
		 * to change 'mermer' to the name of your theme in all the template files.
		 */
		//If need translate theme, uncomment this and use .pot file
		//load_theme_textdomain( 'mermer', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		// add_theme_support( 'automatic-feed-links' );

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
			'main-header-menu' => esc_html__( 'Primary', 'mermer' ),
			'main-footer-menu' => esc_html__( 'Footer1', 'mermer' ),
			'secondary-footer-menu' => esc_html__( 'Footer2', 'mermer' ),
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
		add_theme_support( 'custom-background', apply_filters( 'mermer_custom_background_args', array(
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
			'height'      => 174,
			'width'       => 66,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'mermer_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mermer_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'mermer_content_width', 1280 );
}
add_action( 'after_setup_theme', 'mermer_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mermer_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mermer' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'mermer' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mermer_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mermer_scripts() {
	wp_enqueue_style( 'mermer-fonts', 'https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap' );

	wp_enqueue_style( 'mermer-slick', get_template_directory_uri() . '/dist/html/assets/dist/slick/slick.css' );

	wp_enqueue_style( 'mermer-slick-theme', get_template_directory_uri() . '/dist/html/assets/dist/slick/slick-theme.css' );

	wp_enqueue_style( 'mermer-style', get_template_directory_uri() . '/dist/html/assets/css/style.min.css' );

	wp_enqueue_script( 'mermer-polyfil', get_template_directory_uri() . '/dist/html/assets/dist/babel-polyfill/polyfill.min.js', array(), '20200220', true );

	wp_enqueue_script( 'mermer-jquery', get_template_directory_uri() . '/dist/html/assets/dist/jquery/jquery.min.js', array(), '20200220', true );

	wp_enqueue_script( 'mermer-slick', get_template_directory_uri() . '/dist/html/assets/dist/slick/slick.min.js', array(), '20200220', true );

	wp_enqueue_script( 'mermer-app', get_template_directory_uri() . '/dist/html/assets/js/app.js', array(), '20200220', true );

	wp_enqueue_script( 'mermer-added', get_template_directory_uri() . '/js/added.js', array(), '3', true );
}
add_action( 'wp_enqueue_scripts', 'mermer_scripts' );

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

