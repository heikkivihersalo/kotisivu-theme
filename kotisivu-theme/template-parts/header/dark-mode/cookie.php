<?php if (get_theme_mod('dark_mode')) : ?>
  <!-- If dark mode is enabled, check cookies for correct color scheme -->
  <script data-no-optimize="1">const cookies=document.cookie.split(";"),classes=document.getElementsByTagName("html")[0].classList;cookies.some((s=>s.includes("color-scheme=dark")))?classes.add("color-scheme--dark"):cookies.some((s=>s.includes("color-scheme=light")))&&classes.add("color-scheme--light");</script>
<?php endif ?>