<?php

namespace Kotisivu\Theme;

function load_deny_list() {

    /**
     * - Don't deregister core blocks in widget area
     * - Will throw an error if the check is not active.
     * 
     * TODO:  Add a better solution when one is available.
     * https://github.com/WordPress/gutenberg/issues/28517
     */

    global $pagenow;

    if ( $pagenow === 'widgets.php' )   { return; }
    if ( is_customize_preview() )     { return; }

    wp_enqueue_script(
        'deny-list',
        get_theme_file_uri('/assets/js/denyList.js'),
        array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
        filemtime(get_theme_file_path('/assets/js/denyList.js'))
    );
}
