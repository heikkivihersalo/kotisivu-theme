<?php

/**
 * Includes functions for theme settings
 * 
 * 
 * 
 * 
 *  
 * 
 */

// namespace Kotisivu\Theme;

function setup_theme_admin_menu() {

    add_theme_page( 
        __('Kotisivu Theme Settings', 'kotisivu-theme'), // Page Title
        __('Kotisivu Theme', 'kotisivu-theme'), // Menu Title
        'manage_options', // Capability
        'kotisivu_theme_settings',  // Menu Slug
        'ksd_settings_page' // Callback function
    );

    if ( ! empty ( $GLOBALS['pagenow'] ) && 
        ( 'options-general.php' === $GLOBALS['pagenow'] || 'options.php' === $GLOBALS['pagenow'])
    ) {
        add_action('admin_init', 'ksd_settings_group');
    }
}

function ksd_settings_group() {
    register_setting('ksd_settings_group', 'tagmanager_settings');
    register_setting('ksd_settings_group', 'fontawesome_settings');
    register_setting('ksd_settings_group', 'jquery_settings');
    register_setting('ksd_settings_group', 'other_settings');
}

function ksd_settings_page() {
    if(!current_user_can( 'manage_options' )) {
        wp_die('You do not have sufficient permissions to access this page');
    }

    /** 
     * Tag Manager Settings
     */
    $tagmanager_settings = 'tagmanager_settings';
    $tagmanager_values = get_option( $tagmanager_settings );
    $tagmanager_default_values = array (
        'active' => '',
        'id'  => '',
        'url'   => 'https://www.googletagmanager.com',
        'timeout' => '1500'
    );

    $tagmanager = shortcode_atts( $tagmanager_default_values, $tagmanager_values );

    /** 
     * Font Awesome Settings
     */
    $fontawesome_settings = 'fontawesome_settings';
    $fontawesome_values = get_option( $fontawesome_settings );
    $fontawesome_default_values = array (
        'all'       => '',
        'brands'    => '',
        'regular'   => '',
        'solid'     => ''
    );

    $fontawesome = shortcode_atts( $fontawesome_default_values, $fontawesome_values );



    /** 
     * Other options
     */
    $other_settings = 'other_settings';
    $other_values = get_option( $other_settings );
    $other_default_values = array (
        'jquery'       => 'normal',
        'branding'    => ''
    );

    $other = shortcode_atts( $other_default_values, $other_values );


    ?>

    <div class="settings-page-wrapper">
        <h1><?php echo __( 'Theme settings', 'kotisivu-theme'); ?></h1>
        <p><?php echo __( 'You can access theme options in here.', 'kotisivu-theme'); ?></p>

        <form method="post" action="options.php">
            <?php settings_fields('ksd_settings_group'); ?>

                <!--- ==================  --->
                <!--- GOOGLE TAG MANAGER  --->
                <!--- ==================  --->
                <div class="theme-settings settings-tagmanager">
                    <h2><?php echo __('Google Tag Manager', 'kotisivu-theme'); ?></h2>
                    <p>
                        <?php echo __('Set Tag Manager settings here. Tag Manager is optimized to work with Kotisivu Theme so it is highly recommended.', 'kotisivu-theme'); ?>
                    </p>
                    <div class="settings-tagmanager__fields">
                        <!-- ACTIVATE TAG MANAGER --->
                        <div class="theme-settings__input-wrapper">
                            <label>
                                <input 
                                    type="checkbox" 
                                    id="<?php echo $tagmanager_settings . '[active]' ?>" 
                                    name="<?php echo $tagmanager_settings . '[active]' ?>" 
                                    value="1" 
                                    <?php checked (1, $tagmanager['active'] ); ?>
                                > <?php echo __('Activate Tag Manager', 'kotisivu-theme'); ?>
                            </label>
                        </div>
                        <!-- TAG MANAGER ID --->
                        <div class="theme-settings__input-wrapper">
                            <label class="is-bold"
                                for="<?php echo $tagmanager_settings . '[id]' ?>">
                                <?php echo __('ID', 'kotisivu-theme'); ?>
                            </label>
                            <input 
                                type="text" 
                                id="<?php echo $tagmanager_settings . '[id]' ?>" 
                                name="<?php echo $tagmanager_settings . '[id]' ?>" 
                                placeholder="GTM-XXXXXX" 
                                value="<?php echo esc_attr($tagmanager['id']) ?>" 
                            />
                        </div>
                        <!-- TAG MANAGER URL --->
                        <div class="theme-settings__input-wrapper">
                            <label class="is-bold"
                                for="<?php echo $tagmanager_settings . '[url]' ?>">
                                <?php echo __('URL', 'kotisivu-theme'); ?>
                            </label>
                            <input 
                                type="text" 
                                id="<?php echo $tagmanager_settings . '[url]' ?>" 
                                name="<?php echo $tagmanager_settings . '[url]' ?>" 
                                placeholder="https://www.googletagmanager.com" 
                                value="<?php echo esc_attr($tagmanager['url']) ?>" 
                            />
                        </div>
                        <!-- TAG MANAGER TIMEOUT --->
                        <div class="theme-settings__input-wrapper">
                            <label class="is-bold"
                                for="<?php echo $tagmanager_settings . '[timeout]' ?>">
                                <?php echo __('Timeout', 'kotisivu-theme'); ?>
                            </label>
                            <input 
                                type="text" 
                                id="<?php echo $tagmanager_settings . '[timeout]' ?>" 
                                name="<?php echo $tagmanager_settings . '[timeout]' ?>" 
                                value="<?php echo esc_attr($tagmanager['timeout']) ?>" 
                            />
                        </div>
                    </div>
                </div>

                <!--- ============  --->
                <!--- FONT AWESOME  --->
                <!--- ============  --->
                <div class="theme-settings settings-font-awesome">
                    <h2><?php echo __( 'Font Awesome', 'kotisivu-theme'); ?></h2>
                    <div class="settings-fontawesome__fields">
                        <fieldset>
                            <legend><?php echo __( 'Load Font Awesome Assets', 'kotisivu-theme'); ?></legend>
                            <!-- FONT AWESOME ALL --->
                            <div class="theme-settings__checkbox-wrapper">
                                <label>
                                    <input 
                                        type="checkbox" 
                                        id="<?php echo $fontawesome_settings . '[all]' ?>" 
                                        name="<?php echo $fontawesome_settings . '[all]' ?>" 
                                        value="1" 
                                        <?php checked (1, $fontawesome['all'] ); ?>
                                    > all.css
                                </label>
                                <!-- FONT AWESOME BRANDS --->
                                <label>
                                    <input 
                                        type="checkbox" 
                                        id="<?php echo $fontawesome_settings . '[brands]' ?>" 
                                        name="<?php echo $fontawesome_settings . '[brands]' ?>" 
                                        value="1" 
                                        <?php checked (1, $fontawesome['brands'] ); ?>
                                    > brands.css
                                </label>
                                <!-- FONT AWESOME REGULAR --->
                                <label>
                                    <input 
                                        type="checkbox" 
                                        id="<?php echo $fontawesome_settings . '[regular]' ?>" 
                                        name="<?php echo $fontawesome_settings . '[regular]' ?>" 
                                        value="1" 
                                        <?php checked (1, $fontawesome['regular'] ); ?>
                                    > regular.css
                                </label>
                                <!-- FONT AWESOME SOLID --->
                                <label>
                                    <input 
                                        type="checkbox" 
                                        id="<?php echo $fontawesome_settings . '[solid]' ?>" 
                                        name="<?php echo $fontawesome_settings . '[solid]' ?>" 
                                        value="1" 
                                        <?php checked (1, $fontawesome['solid'] ); ?>
                                    > solid.css
                                </label>
                            </div>
                        </fieldset>
                    </div>
                </div>

                <!--- =============  --->
                <!--- OTHER OPTIONS  --->
                <!--- =============  --->
                <div class="theme-settings settings-other">
                    <h2><?php echo __( 'Other Options', 'kotisivu-theme'); ?></h2>
                    <div class="settings-other__fields">
                        <!-- JQUERY --->
                        <div class="theme-settings__input-wrapper">
                            <label
                                for="<?php echo $other_settings . '[jquery]' ?>">
                                <?php echo __( 'jQuery loading', 'kotisivu-theme'); ?>
                            </label>
                            <select id="<?php echo $other_settings . '[jquery]' ?>" name="<?php echo $other_settings . '[jquery]' ?>">
                                <option value="normal" <?php if ($other['jquery'] == 'normal') echo 'selected="selected"'; ?>>Normal</option>
                                <option value="footer" <?php if ($other['jquery'] == 'footer') echo 'selected="selected"'; ?>>Footer</option>
                                <option value="disable" <?php if ($other['jquery'] == 'disable') echo 'selected="selected"'; ?>>Disable</option>
                            </select>
                        </div>
                        <fieldset>
                            <div class="theme-settings__checkbox-wrapper">
                                <!-- HIDE BRANDING --->
                                <label>
                                    <input 
                                        type="checkbox" 
                                        id="<?php echo $other_settings . '[branding]' ?>" 
                                        name="<?php echo $other_settings . '[branding]' ?>" 
                                        value="1" 
                                        <?php checked (1, $other['branding'] ); ?>
                                    > <?php echo __( 'Hide branding on footer', 'kotisivu-theme'); ?>
                                </label>
                            </div>
                        </fieldset>
                    </div>
                </div>

            <?php submit_button(__( 'Save', 'kotisivu-theme')); ?>

        </form>
    </div>

    <?php
}