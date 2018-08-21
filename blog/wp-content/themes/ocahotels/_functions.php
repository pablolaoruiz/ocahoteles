<?php
/**
 * ocahotels functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ocahotels
 */

    //include web raiz
    global $ROOT;
    $ROOT = "/proyectos/ocahoteles/";
    include_once dirname(ABSPATH) . '/startPage.inc';

if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 700, 500, true ); // default Post Thumbnail dimensions (cropped)
    add_image_size( 'relacionado', 400, 300, true ); //related
}  


if ( ! function_exists( 'ocahotels_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
   
function ocahotels_setup() {
    
    global $ROOT_WEB;
    $ROOT_WEB = "http://localhost/proyectos/ocahoteles"; //dirname(ABSPATH);
    $ROOT_WEB_CSS = $ROOT_WEB . "/css/";
    $ROOT_WEB_JS = $ROOT_WEB . "/js/";
    
    wp_register_style( 'bootstrap', $ROOT_WEB_CSS . 'bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap' );
    
    wp_register_style( 'jquery-ui-css', 'http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css' );
    wp_enqueue_style( 'jquery-ui-css' );
    

    wp_register_style( 'ocahotels', $ROOT_WEB_CSS . 'ocahoteles.css' );
    wp_enqueue_style( 'ocahotels' );

    //wp_register_style( 'font-awesome', $ROOT_WEB_CSS . 'font-awesome.min.css' );
    //wp_enqueue_style( 'font-awesome' );

    wp_register_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' );
    wp_enqueue_style( 'google-fonts' );
    
    //wp_enqueue_script( 'jquery-1.11.3', $ROOT_WEB_JS . 'jquery-1.11.3.min.js', array( 'jquery' ), '1.11.3', true );

    wp_enqueue_script( 'bootstrap-js', $ROOT_WEB_JS . 'bootstrap.min.js', array( 'jquery' ), '3.3.0', true );

    wp_enqueue_script( 'validate', $ROOT_WEB_JS . 'jquery.validate.min.js', array( 'jquery' ));
    
    wp_enqueue_script( 'jquery-ui', 'https://code.jquery.com/ui/1.12.1/jquery-ui.js', array( 'jquery' ));
    
    wp_enqueue_script( 'Bloodhound', $ROOT_WEB_JS . 'typeahead.bundle.min.js', array( 'jquery' ));
    
    wp_enqueue_script( 'buscador', $ROOT_WEB_JS . 'buscador.js', array( 'jquery' ),"1.0.0",true);
    
    wp_enqueue_script( 'ocahoteles', $ROOT_WEB_JS . 'ocahoteles.js', array( 'jquery' ),"1.0.0",true);
    
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on ocahotels, use a find and replace
	 * to change 'ocahotels' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'ocahotels', get_template_directory() . '/languages' );

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
		'menu-1' => esc_html__( 'Primary', 'ocahotels' ),
	) );
        
        register_nav_menus( array(
		'menu-2' => esc_html__( 'Secondary', 'ocahotels' ),
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
	add_theme_support( 'custom-background', apply_filters( 'ocahotels_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'ocahotels_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ocahotels_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ocahotels_content_width', 640 );
}
add_action( 'after_setup_theme', 'ocahotels_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ocahotels_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ocahotels' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ocahotels' ),
		'before_widget' => '<section id="%1$s" class="col-xs-12 pd-l-0 pd-r-0 hidden-sm hidden-xs %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="font-light txt-180 pd-b-5">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'ocahotels_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ocahotels_scripts() {
        //style.css (theme)
	wp_enqueue_style( 'ocahotels-style', get_stylesheet_uri() );

	wp_enqueue_script( 'ocahotels-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'ocahotels-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ocahotels_scripts' );

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
