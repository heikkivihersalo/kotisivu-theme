/**
 * Sticky Header
 */

 const scrollPosition = 0;
 const navContainer = document.getElementsByClassName("header")[0];
 
 document.addEventListener("scroll", () => {
	 
	/* Set opacity to 0 to animate sticky transition */
	window.scrollY > 100
      ? navContainer.classList.add("sticky-opacity")
      : navContainer.classList.remove("sticky-opacity");
	 
	/* Set position to 'sticky' for sticky header */
    window.scrollY > 500
      ? navContainer.classList.add("sticky-header")
      : navContainer.classList.remove("sticky-header");
 });


/**
 * Mobile Menu Listener
 */

const navigation = document.getElementsByClassName("header")[0];
const mobileToggle = document.getElementsByClassName("header__toggle")[0];

mobileToggle.addEventListener("click", () => {
    navigation.classList.toggle("active")
    mobileToggle.classList.toggle("active")
});

/**
 * Close menu when user clicks a link
 */ 

const menuLinks = document.querySelectorAll(".menu-item");
menuLinks.forEach((link) => {
	link.addEventListener("click", () => {
    	navigation.classList.remove("active")
    	mobileToggle.classList.remove("active")
	});
});

/**
 * Discography Grid Listener 
 */

const discographyItems = document.querySelectorAll(".discography__grid-item");
discographyItems.forEach((item) => {
    item.addEventListener("click", () => {
    	item.classList.toggle("active")
	});

    item.addEventListener("mouseover", () => {
    	item.classList.add("active")
	});

    item.addEventListener("mouseout", () => {
    	item.classList.remove("active")
	});
});
