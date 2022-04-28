<?php

namespace Kotisivu\Theme;

if (!function_exists('is_plugin_active')) {
  include_once(ABSPATH . 'wp-admin/includes/plugin.php');
}

/** 
 * Load Assets
 * 
 */
function load_assets() {

  /* Register assets */
  wp_register_style('style', get_theme_file_uri() . '/style.css', '', filemtime(get_theme_file_path() . '/style.css'), 'all');

  if (get_theme_mod('dark_mode')) { 
    wp_register_script('set-color-scheme', get_template_directory_uri() . '/assets/js/setColorScheme.js', '', filemtime(get_template_directory() . '/assets/js/setColorScheme.js'), true);
    wp_enqueue_script( 'set-color-scheme' );
  }

  /* Load primary styles */
  wp_enqueue_style('style');

}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\load_assets');


/** 
 * Theme Parts
 * 
 */
require_once get_template_directory() . '/inc/theme-parts.php';

add_filter( 'http_request_args', __NAMESPACE__ . '\disable_theme_update', 10, 2 );

add_action('after_setup_theme', __NAMESPACE__ . '\add_support');
add_action('after_setup_theme', __NAMESPACE__ . '\register_navigation_menus');
add_action('after_setup_theme', __NAMESPACE__ . '\image_support');

add_action('widgets_init', __NAMESPACE__ . '\register_footer_sidebars');	
add_action('widgets_init', __NAMESPACE__ . '\register_blog_sidebars');	

add_filter( 'wp_enqueue_scripts', __NAMESPACE__ . '\remove_jquery');
add_filter('image_size_names_choose', __NAMESPACE__ . '\add_custom_sizes_to_admin');
add_filter('upload_mimes', __NAMESPACE__ . '\allow_svg_uploads');
add_filter('excerpt_length', __NAMESPACE__ . '\limit_excerpt_length' , 999);


/** 
 * Load Translations
 * 
 */
function load_theme_translations(){
  load_theme_textdomain('kotisivu-theme', get_template_directory() . '/languages');
}

add_action('after_setup_theme', __NAMESPACE__ . '\load_theme_translations');


/** 
 * Theme Settings Page
 */
require_once get_template_directory() . '/inc/settings-page.php';
add_action('admin_menu', 'setup_theme_admin_menu');


/** 
 * Customizer
 * 
 */

require_once get_template_directory() . '/inc/options/Customizer.php';
$customizer = new Customizer();


/** 
 * Admin Styles
 * 
 */
require_once get_template_directory() . '/inc/admin-head.php';
add_action('admin_head', __NAMESPACE__ . '\inline_admin_styles');


/** 
 * Disable chosen core blocks
 * - Blocks can be configured from denyList.js file. File can be found from child theme
 * 
 */

if ( is_plugin_active('ksd-custom-blocks/index.php') ) {
  require_once get_template_directory() . '/inc/deny-list.php';
  add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\load_deny_list', 9999 );
}
