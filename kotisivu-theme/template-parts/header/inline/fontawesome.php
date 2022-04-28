<?php $fontawesome_options = get_option('fontawesome_settings'); ?>

<?php if (isset($fontawesome_options['all'])) : ?> 
    <link rel="preload" href="<?php echo get_theme_file_uri('/assets/fontawesome/css/all.min.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?php echo get_theme_file_uri('/assets/fontawesome/css/all.min.css') ?>"></noscript>
<?php endif; ?>

<?php if (isset($fontawesome_options['brand'])) : ?> 
    <link rel="preload" href="<?php echo get_theme_file_uri('/assets/fontawesome/css/brands.min.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?php echo get_theme_file_uri('/assets/fontawesome/css/brand.min.css') ?>"></noscript>
<?php endif; ?>

<?php if (isset($fontawesome_options['solid'])) : ?> 
    <link rel="preload" href="<?php echo get_theme_file_uri('/assets/fontawesome/css/solid.min.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?php echo get_theme_file_uri('/assets/fontawesome/css/solid.min.css') ?>"></noscript>
<?php endif; ?>

<?php if (isset($fontawesome_options['regular'])) : ?> 
    <link rel="preload" href="<?php echo get_theme_file_uri('/assets/fontawesome/css/regular.min.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?php echo get_theme_file_uri('/assets/fontawesome/css/regular.min.css') ?>"></noscript>
<?php endif; ?>