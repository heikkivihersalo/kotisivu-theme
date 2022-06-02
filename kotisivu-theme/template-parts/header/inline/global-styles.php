@font-face {
      font-family: <?php echo get_theme_mod('font_heading', 'Roboto'); ?>;
      src: url(<?php echo get_theme_mod('font_heading_woff2', 'https://fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu72xKKTU1Kvnz.woff2'); ?>) format("woff2");
      font-weight: 400;
      font-style: normal;
      font-display: swap;
    }

    @font-face {
      font-family: <?php echo get_theme_mod('font_body', 'Roboto'); ?>;
      src: url(<?php echo get_theme_mod('font_body_woff2', 'https://fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu72xKKTU1Kvnz.woff2'); ?>) format("woff2");
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
      font-size: 100%;
      line-height: 1.6;
      background-color: var(--clr-background);

      width: 100%;

      overflow-x: hidden
    }

    :where(.site-main) {
      margin-inline: auto;
    }

    :where(.site-main > *) {
      width: 100%;
      max-width: var(--viewport-max);
      margin-inline: auto;
    }

    :where(.site-main > section > *) {
      width: calc(100% - var(--spacing-s));
      margin-inline: auto;
    }

    /* Don't include top-margins on first element */
    :where(.site-main > *:not(:first-child)) {
      margin-top: var(--spacing-l);
    }

    /* Don't include bottom-margins on last element */
    :where(.site-main > *:not(:last-child)) {
      margin-bottom: var(--spacing-l);
    }

    :where(.is-narrow) {
      max-width: 50rem;
    }

    :where(.screen-reader-text) {
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


    :where(body),
    :where(p),
    :where(a) {
      font-family: var(--font-body);
      font-size: var(--ff-p);
      color: var(--clr-text);
      text-decoration: none;
    }

    :where(p) {
      margin-top: 0.25rem;
      margin-bottom: 1.25rem;

      max-width: 80ch;
      margin-inline: auto;
    }

    :where(a:hover) {
      color: var(--clr-highlight);
    }

    :where(h1),
    :where(h2),
    :where(h3),
    :where(h4) {
      font-family: var(--font-heading);
      font-weight: 900;
      color: var(--clr-text);
      line-height: 1.2;
    }

    :where(h2),
    :where(h3),
    :where(h4),
    :where(h5),
    :where(h6) {
      margin-top: var(--spacing-s);
      margin-bottom: var(--spacing-xs);
    }


    :where(h1) {
      font-size: var(--ff-h1);
    }

    :where(h2) {
      font-size: var(--ff-h2);
    }

    :where(h3) {
      font-size: var(--ff-h3);
    }

    :where(h4) {
      font-size: var(--ff-h4);
    }

    :where(h5) {
      font-size: var(--ff-h5);
    }

    :where(h6) {
      font-size: var(--ff-h6);
    }

    @media (min-width: 1000px) {
      :where(.site-main > *) {
        width: calc(100% - var(--spacing-l));
      }
