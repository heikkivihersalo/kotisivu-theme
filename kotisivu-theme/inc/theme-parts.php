<?php

/**
 * Includes functions to add support and register parts of the website
 *  - Registering menus
 *  - Add theme support
 *  - Register and customize image sizes & formats
 *  - Disable theme update
 *  - Override excerpt length
 *  - Remove jQuery
 * 
 */



namespace Kotisivu\Theme;


/**
 * Disable theme updates
 * 
 */
function disable_theme_update( $response, $url ) {
    /**
     * Ensure that a theme is never updated. This works by removing the
     * theme from the list of available updates.
     * @author: Micah Wood
     * @url: https://wpscholar.com/blog/exclude-plugin-theme-from-wordpress-updates/
     * 
     * Original snippets posted by Mark Jaquith 
     * https://markjaquith.wordpress.com/2009/12/14/excluding-your-plugin-or-theme-from-update-checks/
     * 
     */
    if ( 0 === strpos( $url, 'https://api.wordpress.org/themes/update-check' ) ) {
        $themes = json_decode( $response['body']['themes'] );
        unset( $themes->themes->{'kotisivu-theme'} );
        unset( $themes->themes->{'style'} );
        $response['body']['themes'] = json_encode( $themes );
    }

    return $response;
}


/**
 * Add support for theme functionalities
 * 
 */
function add_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('align-wide');
    add_theme_support('custom-logo');
    add_theme_support('menus');
}

/**
 * Register Menus & Sidebars
 * 
 */
function register_navigation_menus() {
    register_nav_menus( array (
        'header-menu' => 'Header',
        'footer-menu' => 'Footer',
        'legal-menu' => 'Legal',
        'mobile-menu' => 'Mobile'
    ));
}


function register_footer_sidebars() {
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Section 1', 'kotisivu-theme' ),
        'id'            => 'footer-section-1',
        'description'   => esc_html__( 'Add widgets to footer upper section', 'kotisivu-theme' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ));
    
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Section 2', 'kotisivu-theme' ),
        'id'            => 'footer-section-2',
        'description'   => esc_html__( 'Add widgets to footer lower section', 'kotisivu-theme' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
   ));
}
  

function register_blog_sidebars() {
    register_sidebar( array(
        'name'          => __( 'Blog Sidebar', 'kotisivu-theme' ),
        'id'            => 'sidebar-1',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h3 class="sidebar__title">',
        'after_title'   => '</h3>',
    ));
}


/**
 * Add image support for custom sizes
 * 
 */
function image_support() {
    /* Update standard image sizes */
    update_option( 'large_size_w', 1600 ); update_option( 'large_size_h', 1200 );
    update_option( 'medium_size_w', 1024 ); update_option( 'medium_size_h', 768 );
    
    /* Add new image sizes */
    add_image_size( 'retina', 2880, 1800 );
    add_image_size( 'huge', 1920, 1440 );
    add_image_size( 'medium_large', 1366, 1025 );
    add_image_size( 'small', 768, 576 );
    add_image_size( 'extra_small', 640, 480 );
}


function add_custom_sizes_to_admin( $sizes ) {
    return array_merge( $sizes, array(
      'retina' => __( 'Retina', 'kotisivu-theme' ),
      'huge' => __( 'Huge', 'kotisivu-theme' ),
      'medium_large' => __( 'Medium Large', 'kotisivu-theme' ),
      'extra_small' => __( 'Extra Small', 'kotisivu-theme' ),
    ));
}


/**
 * Add image support for SVG's
 * 
 */
function allow_svg_uploads($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}


/** 
 * Override default excerpt length
 * 
 */
function limit_excerpt_length($length) {
    return 20;
}


/**
 * Disable jQuery
 * 
 */
function remove_jquery( ){

    $jquery = get_option( 'other_settings' )['jquery'];

    /* If user is logged in or jquery is loaded normally, return nothing */
    if ($jquery == 'normal' || is_user_logged_in() ) return;

    /** 
     * Load jQuery on footer
     */ 
    if ($jquery == 'footer') {
        wp_scripts()->add_data( 'jquery', 'group', 1 );
        wp_scripts()->add_data( 'jquery-core', 'group', 1 );
        wp_scripts()->add_data( 'jquery-migrate', 'group', 1 );
    }

    /** 
     * Disable jQuery from loading
     */ 
    if ($jquery == 'disable') {
        wp_dequeue_script( 'jquery');
        wp_deregister_script( 'jquery');
    }
}
