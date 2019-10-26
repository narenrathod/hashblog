<?php
/**
 *
 * #blogtheme functions file.
 */

 
if ( ! function_exists( 'hashblog_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function hashblog_setup() {
 
    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain( 'hashblog', get_template_directory() . '/languages' );
 
    /**
     * Add default posts and comments RSS feed links to <head>.
     */
    add_theme_support( 'automatic-feed-links' );
 
    /**
     * Enable support for post thumbnails and featured images.
     */
    add_theme_support( 'post-thumbnails' );


    // Custom logo 
    add_theme_support( 'custom-logo' );

    // Title Tag
    add_theme_support( "title-tag" );

    // Custom header
    add_theme_support( "custom-header", $args );

    // Custom background
    add_theme_support( "custom-background", $args );
 
    /**
     * Add support for two custom navigation menus.
     */
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'hashblog' )
    ) );
 
    /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, and video
     */
    // add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
}
endif; // hashblog_setup
add_action( 'after_setup_theme', 'hashblog_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 */
function hashblog_content_width() {
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters( 'hashblog_content_width', 640 );
}
add_action( 'after_setup_theme', 'hashblog_content_width', 0 );

/**
 * Registers an editor stylesheet for the theme.
 */
function wpdocs_theme_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );


// Enqueue all scripts and css that store in assets folder 
require get_template_directory() . '/include/enqueue.php';

/*
* Register a widgets
*/

function hashblog_register_widgets() {
    // Sidebar widgets
    $sidebar1=array(
        'name'          => __( 'Sidebar', 'hashblog' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Sidebar Widgets add Here.', 'hashblog' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    );
    register_sidebar($sidebar1);

    // Footer widgets
    $footerargs1=array(
        'name'          => __( 'Footer One', 'hashblog' ),
        'id'            => 'footer-1',
        'description'   => __( 'Footer One Widgets add Here.', 'hashblog' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    );
    $footerargs2=array(
        'name'          => __( 'Footer Two', 'hashblog' ),
        'id'            => 'footer-2',
        'description'   => __( 'Footer One Widgets add Here.', 'hashblog' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    );
    $footerargs3=array(
        'name'          => __( 'Footer Three', 'hashblog' ),
        'id'            => 'footer-3',
        'description'   => __( 'Footer Three Widgets add Here.', 'hashblog' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    );
    $footerargs4=array(
        'name'          => __( 'Footer Four', 'hashblog' ),
        'id'            => 'footer-4',
        'description'   => __( 'Footer Four Widgets add Here.', 'hashblog' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    );
    register_sidebar($footerargs1);
    register_sidebar($footerargs2);
    register_sidebar($footerargs3);
    register_sidebar($footerargs4);

    $bottomfooter=array(
        'name'          => __( 'Bottom Footer', 'hashblog' ),
        'id'            => 'bottom-footer',
        'description'   => __( 'Copyright text goes Here.', 'hashblog' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    );
    register_sidebar($bottomfooter);
}
add_action( 'widgets_init', 'hashblog_register_widgets' );



function wpdocs_excerpt_more( $more ) {
    return '<a href="'.get_the_permalink().'" rel="nofollow" class="btn btn-primary float-right">Read More</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );