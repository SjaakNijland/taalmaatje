
//////////////////////////////////////////////////
//
//	Profile opening and closing
//
//////////////////////////////////////////////////

var profileIsOpen 			= false;

var triggerOpenProfile		= $('.profile-open');
var triggerCloseProfile		= $('.profile-close');
var triggerToggleProfile	= $('.profile-toggle');

var profileOpenClass		= 'profile-is-open';



// triggers
triggerOpenProfile.click(function(e) {
	e.preventDefault();
	openProfile();
});
triggerCloseProfile.click(function(e) {
	e.preventDefault();
	closeProfile();
});
triggerToggleProfile.click(function(e) {
	e.preventDefault();
	toggleProfile();
});


// open profile
function openProfile() {
	$('body').addClass(profileOpenClass);
	profileIsOpen = true;
	$('#profile-container .avatar').height($(this).width())
}

// close profile
function closeProfile() {
	$('body').removeClass(profileOpenClass);
	profileIsOpen = false;
}

// toggle open / close profile
function toggleProfile() {
	if (profileIsOpen == false) {
		openProfile();
	} else {
		closeProfile();
	}
}
