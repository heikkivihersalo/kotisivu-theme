<?php

namespace Kotisivu\Theme;

class Customizer {
    public function __construct() {
        /* Get config file */
        require_once get_template_directory() . '/inc/options/customizer-config.php';

        /* Get CustomizerPanel -class */
        require_once get_template_directory() . '/inc/options/CustomizerPanel.php';

        /* Register customizer panel */
        $customizer_panel = new CustomizerPanel($panel, $sections, $settings);
        $customizer_panel->register();
    }
}