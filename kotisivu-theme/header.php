<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_template_part( 'template-parts/header/dark-mode/cookie'); ?>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Load Tag Manager -->
  <?php get_template_part( 'template-parts/header/inline/tagmanager'); ?>

  <!-- Load Inline Styles -->
  <style>
    <?php get_template_part( 'template-parts/header/inline/normalize'); ?>
    <?php get_template_part( 'template-parts/header/inline/variables'); ?>
    <?php get_template_part( 'template-parts/header/inline/global-styles'); ?>
  </style>
  <!-- Load Fontawesome -->
  <?php get_template_part( 'template-parts/header/inline/fontawesome'); ?>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<a class="skip-link screen-reader-text" href="#content">Skip to content </a>

<header class="header" role="banner">
  <nav class="header__nav">
        <?php if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); } ?> 
        <div class="header__toggle">
          <span class="toggle__bar1"></span>
          <span class="toggle__bar2"></span>
          <span class="toggle__bar3"></span>
        </div>
        <?php if (has_nav_menu('header-menu')) : ?>
          <?php wp_nav_menu(array(
            'theme_location' => 'header-menu', 
            'container' => '', 
            'menu_class' => 'header__menu')); ?>
        <?php endif; ?>
  </nav>
  <?php get_template_part( 'template-parts/header/dark-mode/icon'); ?>
</header>

<!-- Site content tag for better accessibility -->
<div id="content" class="site-content">
