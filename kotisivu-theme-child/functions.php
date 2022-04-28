<?php

namespace Kotisivu\Theme;

/**
 * Require files from parent theme directory
 * 
 */
require_once get_template_directory() . '/inc/custom-post-type/Columns.php';
require_once get_template_directory() . '/inc/custom-post-type/PostType.php';
require_once get_template_directory() . '/inc/custom-post-type/Taxonomy.php';
require_once get_template_directory() . '/inc/custom-post-type/Metabox.php';

/**
 * Load parent and child theme assets
 * 
 */

function load_child_assets() {

    $theme_path = get_theme_file_path();
    $theme_uri = get_theme_file_uri();
  
    /**
     * React assets
     * - Uncomment, if react app is active
     * - Files and folders related to react: 'webpack.config.js', 'package.json', 'build', 'src'
     * - Using yarn is recommended (npm might not work on some modules)
     * - package.json contains necessary build and yarn configurations
     * - Build will fail if webpack.config.js is not found
     */
    //wp_register_script('app', $theme_uri . '/build/index.js', array('wp-element', 'react', 'react-dom'), filemtime( $theme_path . '/build/index.js' ), true);
    //wp_register_style('app', $theme_uri . '/build/index.css', '', filemtime( $theme_path . '/build/index.css' ), 'all');
    //wp_enqueue_script('app');
    //wp_enqueue_style('app');
  

    /**
     * Load theme styles
     * - Uncomment 'posts' -hook if you use blog on your site
     */
    wp_register_style('main', $theme_uri . '/assets/css/main.css', array('style'), filemtime( $theme_path . '/assets/css/main.css' ), 'all');
    wp_register_style('posts', $theme_uri . '/assets/css/posts.css', array('style'), filemtime( $theme_path . '/assets/css/posts.css' ), 'all');
    wp_enqueue_style('main');

    /* Load and register theme helpers */
    wp_register_script('helpers', $theme_uri . '/assets/js/helpers.js', '', filemtime( $theme_path . '/assets/js/helpers.js' ), true);
    wp_enqueue_script('helpers');

    /* Load 'posts' -styles only on blog pages to prevent unused css */
    if (is_home() || is_single()) { wp_enqueue_style('posts'); }


    /**
     * Optional assets and styles that can be removed from loading
     * - Gutenberg default block styles
     * - Fluent Forms
     */

    /* Remove Block Library default CSS */
    wp_deregister_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library' );

    /* Remove Fluent Forms default CSS */
    wp_deregister_style( 'fluentform-public-default' );
    wp_dequeue_style( 'fluentform-public-default' );

    /* Remove Fluent Forms main CSS */
    wp_deregister_style( 'fluent-form-styles' );
    wp_dequeue_style( 'fluent-form-styles' ); 
}

add_action('wp_enqueue_scripts', __NAMESPACE__ . '\load_child_assets');


/**
 * Enqueue Admin Style
 * 
 */

function load_admin_assets() {

  $theme_path = get_theme_file_path();
  $theme_uri = get_theme_file_uri();

  wp_register_style('editor', $theme_uri . '/assets/css/editor.css', '', filemtime( $theme_path . '/assets/css/editor.css' ), 'all');
  wp_enqueue_style('editor');
}

add_action('admin_enqueue_scripts', __NAMESPACE__ . '\load_admin_assets');


/** 
 * Load Translations
 * 
 */
function load_child_theme_translations(){
  load_child_theme_textdomain('kotisivu-theme', get_stylesheet_directory() . '/languages');
}

add_action('after_setup_theme', __NAMESPACE__ . '\load_child_theme_translations');


/**
 * Init custom post types
 * @link    https://github.com/jjgrainger/PostTypes/
 * @author  jjgrainger
 */
use PostTypes;

function create_post_types() {
  /**
   * Services
   */
	
  $translations_services = array( 
	  'en_US' => 'services',
	  'fi' => 'palvelut'
  );

  $rewrite_services = $translations_services[get_locale()];
  $names_services = [
    'name'     => 'services',
    'singular' => 'Service',
    'plural'   => 'Services',
    'slug'     => 'services',
  ];

  $options_services = [
    'hierarchical' => false,
    'has_archive'   => false,
    'show_in_rest'  => true,
	  'rewrite'		=> array('slug' => $rewrite_services, 'with_front' => false),
  ];

  $services = new PostTypes\PostType( $names_services, $options_services );
  $services->icon( 'dashicons-laptop' );
  $services->register();


  /**
   * FAQ
   */
  $names_faq = [
    'name'     => 'faq',
    'singular' => 'Question',
    'plural'   => 'FAQ',
    'slug'     => 'faq',
  ];

  $options_faq = [
    'hierarchical' => false,
    'has_archive'   => false,
    'show_in_rest'  => true
  ];

  $faq = new PostTypes\PostType( $names_faq, $options_faq );
  $faq->icon( 'dashicons-editor-help' );
  $faq->register();

}

add_action('init', __NAMESPACE__ . '\create_post_types', 0);


/**
 * Init metaboxes for custom post types
 * 
 */
function create_metaboxes() {
  $options = [
    'id' =>'option',
    'title' =>'title',
    'screen' =>['post_type']
  ];

  $markup = [
    [
      'id' => 'text_input',
      'label' => 'Text Input',
      'type' => 'text'
    ],
    [
      'id' => 'url_input',
      'label' => 'URL Input',
      'type' => 'url'
    ]
  ];

  // $metabox = new PostTypes\Metabox($options, $markup);
  // $metabox->register();
}

// add_action('init', __NAMESPACE__ . '\create_metaboxes', 0);
