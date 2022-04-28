<?php

/**
 * Array for customizer panel
 */
$panel = [
    'id' => 'kotisivu_theme_options',
    'title' => 'Kotisivu Theme Options',
    'description' => 'Setup theme options here',
    'priority' => 10
];

/**
 * Array for customizer sections
 * 
 */
$sections = [
    [
        'id' => 'font_options',
        'title' => 'Font Family & Size',
        'description' => 'Set font family and font sizes',
        'panel' => $panel['id'],
        'priority' => 120,
        'capability' => 'edit_theme_options'
    ],
    [
        'id' => 'spacing_options',
        'title' => 'Spacing & Margins',
        'description' => 'Set settings for spacing and margins',
        'panel' => $panel['id'],
        'priority' => 120,
        'capability' => 'edit_theme_options'
    ],
    [
        'id' => 'color_options',
        'title' => 'Brand Colors',
        'description' => "Set brand colors. Modern web design uses HSL instead of HEX. HSL is more accurate and allows us to perform calculations. If you don't have HSL colors in your brand guide, you can find use a online calculator to find correct values.",
        'panel' => $panel['id'],
        'priority' => 10,
        'capability' => 'edit_theme_options'
    ],
    [
        'id' => 'shadow_options',
        'title' => 'Shadows',
        'description' => 'Set basic shadows for blocks',
        'panel' => $panel['id'],
        'priority' => 10,
        'capability' => 'edit_theme_options'
    ]

];


$settings = [
    /**
     * Font Family & Size
     */
    [
        'id' => 'font_heading',
        'label' => 'Headings',
        'description' => 'Name',
        'section' => 'font_options',
        'type' => 'text',
        'class' => 'theme-options__textbox',
        'placeholder' => "'Roboto'", 
    ],
    [
        'id' => 'font_size_h1',
        'default' => 'clamp(3.1575rem, calc(2.649875rem + 2.538125vw), 5.695625rem);',
        'description' => 'H1',
        'section' => 'font_options',
        'type' => 'text',
        'class' => 'theme-options__textbox',
        'placeholder' => "Any valid CSS value",
    ],
    [
        'id' => 'font_size_h2',
        'default' => 'clamp(2.36875rem, calc(2.083125rem + 1.428125vw), 3.796875rem);',
        'description' => 'H2',
        'section' => 'font_options',
        'type' => 'text',
        'class' => 'theme-options__textbox',
        'placeholder' => "Any valid CSS value",
    ],
    [
        'id' => 'font_size_h3',
        'default' => 'clamp(1.776875rem, calc(1.626rem + 0.754375vw), 2.53125rem);',
        'description' => 'H3',
        'section' => 'font_options',
        'type' => 'text',
        'class' => 'theme-options__textbox',
        'placeholder' => "Any valid CSS value",
    ],
    [
        'id' => 'font_size_h4',
        'default' => 'clamp(1.333125rem, calc(1.26225rem + 0.354375vw), 1.6875rem);',
        'description' => 'H4',
        'section' => 'font_options',
        'type' => 'text',
        'class' => 'theme-options__textbox',
        'placeholder' => "Any valid CSS value",
    ],
    [
        'id' => 'font_size_h5',
        'default' => 'clamp(1rem, calc(0.975rem + 0.125vw), 1.125rem);',
        'description' => 'H5',
        'section' => 'font_options',
        'type' => 'text',
        'class' => 'theme-options__textbox',
        'placeholder' => "Any valid CSS value",
    ],
    [
        'id' => 'font_size_h6',
        'default' => 'clamp(1rem, calc(0.975rem + 0.125vw), 1.125rem);',
        'description' => 'H6',
        'section' => 'font_options',
        'type' => 'text',
        'class' => 'theme-options__textbox',
        'placeholder' => "Any valid CSS value",
    ],
    [
        'id' => 'font_heading_woff2',
        'default' => 'https://fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu72xKKTU1Kvnz.woff2',
        'description' => 'Add font-face url here (woff2). Can be loaded locally or from CDN. Font files must be added to child theme.',
        'section' => 'font_options',
        'type' => 'text',
        'class' => 'theme-options__textbox',
        'placeholder' => "/wp-content/themes/kotisivu-theme-child/assets/fonts/Lato/Lato-Regular.woff2",
    ],
    [
        'id' => 'font_body',
        'label' => 'Body',
        'description' => 'Name',
        'section' => 'font_options',
        'type' => 'text',
        'class' => 'theme-options__textbox',
        'placeholder' => "'Roboto'", 
    ],
    [
        'id' => 'font_size_p',
        'default' => 'clamp(1rem, calc(0.975rem + 0.125vw), 1.125rem);',
        'description' => 'p',
        'section' => 'font_options',
        'type' => 'text',
        'class' => 'theme-options__textbox',
        'placeholder' => "Any valid CSS value", 
    ],
    [
        'id' => 'font_body_woff2',
        'default' => 'https://fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu72xKKTU1Kvnz.woff2',
        'description' => 'Add font-face url here (woff2). Can be loaded locally or from CDN. Font files must be added to child theme.',
        'section' => 'font_options',
        'type' => 'text',
        'class' => 'theme-options__textbox',
        'placeholder' => "/wp-content/themes/kotisivu-theme-child/assets/fonts/Lato/Lato-Regular.woff2",
    ],
    [
        'id' => 'font_buttons',
        'label' => 'Buttons',
        'description' => 'Name',
        'section' => 'font_options',
        'type' => 'text',
        'class' => 'theme-options__textbox',
        'placeholder' => "'Roboto', sans-serif;",
    ],
    [
        'id' => 'font_size_btn',
        'default' => 'clamp(1.125rem, calc(1.096875rem + 0.140625vw), 1.265625rem);',
        'section' => 'font_options',
        'type' => 'text',
        'class' => 'theme-options__textbox',
        'placeholder' => "Any valid CSS value", 
    ],
    /**
     * Spacing Options
     */
    [
        'id' => 'viewport_min',
        'default' => '20rem',
        'description' => 'Viewport Min',
        'section' => 'spacing_options',
        'type' => 'text',
        'class' => 'theme-options__textbox',
        'placeholder' => "Any valid CSS value", 
    ],
    [
        'id' => 'viewport_max',
        'default' => '120rem',
        'description' => 'Viewport Max',
        'section' => 'spacing_options',
        'type' => 'text',
        'class' => 'theme-options__textbox',
        'placeholder' => "Any valid CSS value", 
    ],
    [
        'id' => 'spacing_xxl',
        'default' => 'clamp(17.9420103826923rem, calc(14.4219928226512rem + 17.6000878002055vw), 35.5420981828977rem);',
        'description' => 'Spacing XXL',
        'section' => 'spacing_options',
        'type' => 'text',
        'class' => 'theme-options__textbox',
        'placeholder' => "Any valid CSS value", 
    ],
    [
        'id' => 'spacing_xl',
        'default' => 'clamp(11.0890051808976rem, calc(9.30881991978825rem + 8.90092630554659vw), 19.9899314864442rem);',
        'description' => 'Spacing XL',
        'section' => 'spacing_options',
        'type' => 'text',
        'class' => 'theme-options__textbox',
        'placeholder' => "Any valid CSS value", 
    ],
    [
        'id' => 'spacing_l',
        'default' => 'clamp(6.853526069776rem, calc(5.9756450647836rem + 4.389405024962vw), 11.242931094738rem);',
        'description' => 'Spacing L',
        'section' => 'spacing_options',
        'type' => 'text',
        'class' => 'theme-options__textbox',
        'placeholder' => "Any valid CSS value", 
    ],
    [
        'id' => 'spacing_m',
        'default' => 'clamp(4.235801032rem, calc(3.8182895742rem + 2.087557289vw), 6.323358321rem);',
        'description' => 'Spacing M',
        'section' => 'spacing_options',
        'type' => 'text',
        'class' => 'theme-options__textbox',
        'placeholder' => "Any valid CSS value", 
    ],
    [
        'id' => 'spacing_s',
        'default' => 'clamp(2.617924rem, calc(2.4302199rem + 0.9385205vw), 3.5564445rem);',
        'description' => 'Spacing S',
        'section' => 'spacing_options',
        'type' => 'text',
        'class' => 'theme-options__textbox',
        'placeholder' => "Any valid CSS value", 
    ],
    [
        'id' => 'spacing_xs',
        'default' => 'clamp(1.618rem, calc(1.54155rem + 0.38225vw), 2.00025rem);',
        'description' => 'Spacing XS',
        'section' => 'spacing_options',
        'type' => 'text',
        'class' => 'theme-options__textbox',
        'placeholder' => "Any valid CSS value", 
    ],
    [
        'id' => 'spacing_xxs',
        'default' => 'clamp(1rem, calc(0.975rem + 0.125vw), 1.125rem);',
        'description' => 'Spacing XXS',
        'section' => 'spacing_options',
        'type' => 'text',
        'class' => 'theme-options__textbox',
        'placeholder' => "Any valid CSS value", 
    ],
    [
        'id' => 'element_roundness',
        'default' => 'clamp(1em, calc(0.975em + 0.125vw), 1.125em);',
        'label' => 'Element Roundness',
        'description' => 'Roundness of cards, buttons etc.',
        'section' => 'spacing_options',
        'type' => 'text',
        'class' => 'theme-options__textbox',
        'placeholder' => "Any valid CSS value", 
    ],
    /**
     * Color Options
     */
    [
        'id' => 'dark_mode',
        'label' => 'Enable Dark Mode',
        'description' => 'Enabling dark mode sets light mode as primary and changes color scheme according to user preferences. Also adds toggle to header so user can switch between color schemes.',
        'section' => 'color_options',
        'type' => 'checkbox',
        'class' => 'theme-options__checkbox'
    ],
    [
        'id' => 'brand_hue',
        'default' => '343',
        'description' => 'Brand Hue (H)',
        'section' => 'color_options',
        'type' => 'text',
        'class' => 'theme-options__textbox',
        'placeholder' => "Any HSL hue -value", 
    ],
    [
        'id' => 'brand_saturation',
        'default' => '100%',
        'description' => 'Brand Saturation (S)',
        'section' => 'color_options',
        'type' => 'text',
        'class' => 'theme-options__textbox',
        'placeholder' => "Any HSL saturation -value", 
    ],
    [
        'id' => 'brand_lightness',
        'default' => '48%',
        'description' => 'Brand Lightness (L)',
        'section' => 'color_options',
        'type' => 'text',
        'class' => 'theme-options__textbox',
        'placeholder' => "Any HSL lightness -value", 
    ],
    /**
     * Shadow Options
     */
    [
        'id' => 'shadow_h_offset',
        'default' => '0em',
        'label' => 'Horizontal Offset',
        'section' => 'shadow_options',
        'type' => 'text',
        'class' => 'theme-options__textbox',
        'placeholder' => "Any valid CSS value", 
    ],
    [
        'id' => 'shadow_v_offset',
        'default' => '0.7em',
        'label' => 'Vertical Offset',
        'section' => 'shadow_options',
        'type' => 'text',
        'class' => 'theme-options__textbox',
        'placeholder' => "Any valid CSS value", 
    ],
    [
        'id' => 'shadow_blur',
        'default' => '1em',
        'label' => 'Blur',
        'section' => 'shadow_options',
        'type' => 'text',
        'class' => 'theme-options__textbox',
        'placeholder' => "Any valid CSS value", 
    ],
    [
        'id' => 'shadow_spread',
        'default' => '-0.2em',
        'label' => 'Spread',
        'section' => 'shadow_options',
        'type' => 'text',
        'class' => 'theme-options__textbox',
        'placeholder' => "Any valid CSS value", 
    ],
];
