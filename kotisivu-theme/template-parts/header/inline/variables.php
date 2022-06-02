html {
    /* Font Families */
    --font-heading: <?php echo get_theme_mod('font_heading'); ?>;
    --font-body: <?php echo get_theme_mod('font_body'); ?>;
    --font-awesome: 'Font Awesome 5 Free';
    --font-awesome-brands: 'Font Awesome 5 Brands';

    /* Fluid Typography */
    --ff-h1: <?php echo get_theme_mod('font_size_h1', 'clamp(3.1575rem, calc(2.649875rem + 2.538125vw), 5.695625rem)'); ?>;
    --ff-h2: <?php echo get_theme_mod('font_size_h2', 'clamp(2.36875rem, calc(2.083125rem + 1.428125vw), 3.796875rem)'); ?>;
    --ff-h3: <?php echo get_theme_mod('font_size_h3', 'clamp(1.776875rem, calc(1.626rem + 0.754375vw), 2.53125rem)'); ?>;
    --ff-h4: <?php echo get_theme_mod('font_size_h4', 'clamp(1.333125rem, calc(1.26225rem + 0.354375vw), 1.6875rem)'); ?>;
    --ff-h5: <?php echo get_theme_mod('font_size_h5', 'clamp(1rem, calc(0.975rem + 0.125vw), 1.125rem)'); ?>;
    --ff-h6: <?php echo get_theme_mod('font_size_h6', 'clamp(1rem, calc(0.975rem + 0.125vw), 1.125rem)'); ?>;
    --ff-p: <?php echo get_theme_mod('font_size_p', 'clamp(1rem, calc(0.975rem + 0.125vw), 1.125rem)'); ?>;
    --ff-btn: <?php echo get_theme_mod('font_size_btn', 'clamp(1.125rem, calc(1.096875rem + 0.140625vw), 1.265625rem)'); ?>;

    /* Viewport */
    --viewport-min: <?php echo get_theme_mod('viewport_min', '20rem'); ?>;
    --viewport-max: <?php echo get_theme_mod('viewport_max', '120rem'); ?>;

    /* Spacing */
    --spacing-xxl: <?php echo get_theme_mod('spacing_xxl', 'clamp(17.9420103826923rem, calc(14.4219928226512rem + 17.6000878002055vw), 35.5420981828977rem)'); ?>;
    --spacing-xl: <?php echo get_theme_mod('spacing_xl', 'clamp(11.0890051808976rem, calc(9.30881991978825rem + 8.90092630554659vw), 19.9899314864442rem)'); ?>;
    --spacing-l: <?php echo get_theme_mod('spacing_l', 'clamp(6.853526069776rem, calc(5.9756450647836rem + 4.389405024962vw), 11.242931094738rem)'); ?>;
    --spacing-m: <?php echo get_theme_mod('spacing_m', 'clamp(4.235801032rem, calc(3.8182895742rem + 2.087557289vw), 6.323358321rem)'); ?>;
    --spacing-s: <?php echo get_theme_mod('spacing_s', 'clamp(2.617924rem, calc(2.4302199rem + 0.9385205vw), 3.5564445rem)'); ?>;
    --spacing-xs: <?php echo get_theme_mod('spacing_xs', 'clamp(1.618rem, calc(1.54155rem + 0.38225vw), 2.00025rem)'); ?>;
    --spacing-xxs: <?php echo get_theme_mod('spacing_xxs', 'clamp(1rem, calc(0.75rem + 1.25vw), 2.25rem)'); ?>;

    /* Object & Button Radius */
    --roundness: <?php echo get_theme_mod('element_roundness', 'clamp(1em, calc(0.975em + 0.125vw), 1.125em)'); ?>;

    /* Colors */
    --brand-hue: <?php echo get_theme_mod('brand_hue', '343'); ?>;
    --brand-saturation: <?php echo get_theme_mod('brand_saturation', '100%'); ?>;
    --brand-lightness: <?php echo get_theme_mod('brand_lightness', '48%'); ?>;

    /* Main Colors*/
    --clr-brand-primary: hsl(var(--brand-hue), var(--brand-saturation), var(--brand-lightness));
    --clr-brand-complementary: hsl(calc(var(--brand-hue) - 180), var(--brand-saturation), var(--brand-lightness));

    --clr-grey: hsl(var(--brand-hue), 2%, 96%);
    --clr-highlight: hsl(var(--brand-hue), var(--brand-saturation), 30%);

    /* Black & Whites */
    --clr-lightest: hsl(var(--brand-hue), 2%, 100%);
    --clr-lighter: hsl(var(--brand-hue), 2%, 88%);
    --clr-light: hsl(var(--brand-hue), 2%, 78%);
    --clr-dark: hsl(var(--brand-hue), 2%, 22%);
    --clr-darker: hsl(var(--brand-hue), 2%, 12%);
    --clr-darkest: hsl(var(--brand-hue), 2%, 2%);

    --clr-background: var(--clr-lightest);
    --clr-text: var(--clr-darkest);
    --clr-text-inverted: var(--clr-lightest);
    --clr-card: var(--clr-lighter);

    --shadow-h-offset: <?php echo get_theme_mod('shadow_h_offset', '0em'); ?>;
    --shadow-v-offset: <?php echo get_theme_mod('shadow_v_offset', '0.7em'); ?>;
    --shadow-blur: <?php echo get_theme_mod('shadow_blur', '1em'); ?>;
    --shadow-spread: <?php echo get_theme_mod('shadow_spread', '-0.2em'); ?>;

    --shadow:
        var(--shadow-h-offset) 
        var(--shadow-v-offset) 
        var(--shadow-blur) 
        var(--shadow-spread) 
        var(--clr-darker);

}

<?php if (get_theme_mod('dark_mode')) : ?>
    html.color-scheme--dark {
        --clr-background: var(--clr-darkest);
        --clr-text: var(--clr-lightest);
        --clr-text-inverted: var(--clr-darkest);
        --clr-card: var(--clr-darker);
    }

    @media (prefers-color-scheme: dark) {
        html {
            --clr-background: var(--clr-darkest);
            --clr-text: var(--clr-lightest);
            --clr-text-inverted: var(--clr-darkest);
            --clr-card: var(--clr-darker);
        }

        html.color-scheme--light {
            --clr-background: var(--clr-lightest);
            --clr-text: var(--clr-darkest);
            --clr-text-inverted: var(--clr-lightest);
            --clr-card: var(--clr-lighter);
        }
    }


<?php endif; ?>