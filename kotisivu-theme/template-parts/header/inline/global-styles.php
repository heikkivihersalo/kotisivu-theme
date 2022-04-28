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


html {
    /* Font Smoothing */
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;

    /* http://css-tricks.com/inheriting-box-sizing-probably-slightly-better-best-practice/ */
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

*,
*:before,
*:after {
    /* http://css-tricks.com/inheriting-box-sizing-probably-slightly-better-best-practice/ */
    -webkit-box-sizing: inherit;
    -moz-box-sizing: inherit;
    box-sizing: inherit;
}

body {
    width: auto;
    font-size: 100%;
    line-height: 1.6;
    background-color: var(--clr-background-primary);
}

.site-main {
    margin-inline: auto;
}

.site-main > * {
    width: calc(100% - (var(--spacing-s)));
    max-width: var(--viewport-max);
    margin-inline: auto;
}

/* Don't include top-margins on first element */
.site-main > *:not(:first-child) {
    margin-top: var(--spacing-l);
}

/* Don't include bottom-margins on last element */
.site-main > *:not(:last-child) {
    margin-bottom: var(--spacing-l);
}

.is-narrow {
    max-width: 50rem;
}

.screen-reader-text {
    display: none;
}

/* Font Awesome Families */
.fas {
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
}

.fab {
    font-family: "Font Awesome 5 Brands";
    font-weight: 400;
}


body, p, a {
    font-family: var(--font-body);
    font-size: var(--ff-p);
    color: var(--clr-text-primary);
    text-decoration: none;
}

p {
    margin-top: 0.25rem;
    margin-bottom: 1.25rem;
}

a:hover {
    color: var(--clr-highlight);
}

h1, h2, h3, h4 {
    font-family: var(--font-heading);
    font-weight: 400;
    color: var(--clr-text-primary);
    line-height: 1.2;
}

h2, h3, h4, h5, h6 {
    margin-top: var(--spacing-s);
    margin-bottom: var(--spacing-xs);
}


h1 {
    font-size: var(--ff-h1);
}

h2 {
    font-size: var(--ff-h2);
}

h3 {
    font-size: var(--ff-h3);
}

h4 {
    font-size: var(--ff-h4);
}

h5 {
    font-size: var(--ff-h5);
}

h6 {
    font-size: var(--ff-h6);
}
