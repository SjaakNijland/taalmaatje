
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
