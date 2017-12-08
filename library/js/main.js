// Init responsive nav
var customToggle = document.getElementById('nav-toggle');
var navigation = responsiveNav("#main-menu", {
	customToggle: "#nav-toggle", // Selector: Specify the ID of a custom toggle
	enableFocus: true,
	enableDropdown: true,
	openDropdown: '<span class="visuallyhidden">Open sub menu</span>',
	closeDropdown: '<span class="visuallyhidden">Close sub menu</span>',
	open: function () {
		// customToggle.innerHTML = 'Close menu';
	},
	close: function () {
		// customToggle.innerHTML = 'Open menu';
	},
	resizeMobile: function () {
		customToggle.setAttribute('aria-controls', 'nav');
	},
	resizeDesktop: function () {
		customToggle.removeAttribute('aria-controls');
	},
});


// Init carousel
var carousel = new myCarousel();
carousel.init({
	id: 'carousel',
	slidenav: true,
	animate: true,
	startAnimated: true
});