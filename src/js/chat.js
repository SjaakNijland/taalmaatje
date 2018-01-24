
//////////////////////////////////////////////////
//
//	Chat opening and closing
//
//////////////////////////////////////////////////

var chatIsOpen 			= false;

var triggerOpenChat		= $('.chat-open');
var triggerCloseChat	= $('.chat-close');
var triggerToggleChat	= $('.chat-toggle');

var chatOpenClass		= 'text-chat-is-open';



// triggers
triggerOpenChat.click(function(e) {
	e.preventDefault();
	openChat();
});
triggerCloseChat.click(function(e) {
	e.preventDefault();
	closeChat();
});
triggerToggleChat.click(function(e) {
	e.preventDefault();
	toggleChat();
});


// open chat
function openChat() {
	$('body').addClass(chatOpenClass);
	chatIsOpen = true;
}

// close chat
function closeChat() {
	$('body').removeClass(chatOpenClass);
	chatIsOpen = false;
}

// toggle open / close chat
function toggleChat() {
	if (chatIsOpen == false) {
		openChat();
	} else {
		closeChat();
	}
}





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
