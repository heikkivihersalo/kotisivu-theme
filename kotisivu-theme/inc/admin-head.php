<?php namespace Kotisivu\Theme; ?>

<?php function inline_admin_styles() { ?>

  <style>
    @font-face {
      font-family: <?php echo get_theme_mod('font_heading', 'Roboto');?>;
      src: url(<?php echo get_theme_mod('font_heading_woff2', 'https://fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu72xKKTU1Kvnz.woff2');?>) format("woff2");
      font-weight: 400;
      font-style: normal;
      font-display: swap;
    }

    @font-face {
      font-family: <?php echo get_theme_mod('font_body', 'Roboto');?>;
      src: url(<?php echo get_theme_mod('font_body_woff2', 'https://fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu72xKKTU1Kvnz.woff2');?>) format("woff2");
      font-weight: 400;
      font-style: normal;
      font-display: swap;
    }

  <?php get_template_part( 'template-parts/header/inline/variables'); ?>

  </style>

  <?php get_template_part( 'template-parts/header/inline/fontawesome'); ?>
  
<?php } ?>
