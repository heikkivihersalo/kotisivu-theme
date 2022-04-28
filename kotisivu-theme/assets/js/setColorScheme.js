/**
 * Listens user actions for color-scheme changes.
 *
 * Adds CSS class inside website <html> tag to control preferred color-scheme.
 * Class for light-scheme: 'color-scheme--light'
 * Class for dark-scheme: 'color-scheme--dark'
 *
 * Buttons must have '.scheme-toggle' class
 *
 */

/**
 * Check dark mode icon
 */

const icon = document.querySelector(".scheme-icon").classList;

/* Dark Mode */
if (cookies.some((c) => c.includes("color-scheme=dark"))) {
  icon.add("dark-mode")

  /* Light Mode */
} else if (cookies.some((c) => c.includes("color-scheme=light"))) {
  icon.add("light-mode")
}


/* Get elements including '.scheme-toggle' class */
const schemeToggle = document.querySelectorAll(".scheme-toggle");

/* Get preferred settings for user */
const prefersDarkMode = window.matchMedia("(prefers-color-scheme: dark)");

/* Loop through all elements including '.scheme-toggle' class */
schemeToggle.forEach((btn) => {
  const classes = document.getElementsByTagName("html")[0].classList;
  const schemeIcon = document.querySelector(".scheme-icon").classList;

  btn.addEventListener("click", () => {
    /* Set light mode */
    if (prefersDarkMode.matches) {
      classes.toggle("color-scheme--light");
      schemeIcon.toggle("light-mode");
      var scheme = classes.contains("color-scheme--light") ? "light" : "dark";
      /* Set dark mode */
    } else {
      classes.toggle("color-scheme--dark");
      schemeIcon.toggle("dark-mode");
      var scheme = classes.contains("color-scheme--dark") ? "dark" : "light";
    }

    /* Add cookie to user browser according to used scheme
     * Cookie age is set to 30 days
     */
    document.cookie =
      "color-scheme = " +
      scheme +
      "; " +
      "max-age=2592000; path=/; samesite=strict; secure";
  });
});
