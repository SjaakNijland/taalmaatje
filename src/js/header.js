
//////////////////////////////////////////////////
//
//	Header nav opening and closing
//
//////////////////////////////////////////////////

var navIsOpen 			= false;

var triggerOpenNav		= $('.nav-open');
var triggerCloseNav	    = $('.nav-close');
var triggerToggleNav	= $('.nav-toggle');

var navOpenClass		= 'nav-is-open';



// triggers
triggerOpenNav.click(function(e) {
	e.preventDefault();
	openNav();
});
triggerCloseNav.click(function(e) {
	e.preventDefault();
	closeNav();
});
triggerToggleNav.click(function(e) {
	e.preventDefault();
	toggleNav();
});


// open nav
function openNav() {
	$('body').addClass(navOpenClass);
	navIsOpen = true;
}

// close nav
function closeNav() {
	$('body').removeClass(navOpenClass);
	navIsOpen = false;
}

// toggle open / close nav
function toggleNav() {
	if (navIsOpen == false) {
		openNav();
	} else {
		closeNav();
	}
}
