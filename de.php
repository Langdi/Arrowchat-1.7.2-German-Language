<?php

	/*
	|| #################################################################### ||
	|| #                             ArrowChat                            # ||
	|| # ---------------------------------------------------------------- # ||
	|| #    Copyright ©2010-2014 ArrowSuites LLC. All Rights Reserved.    # ||
	|| # This file may not be redistributed in whole or significant part. # ||
	|| # ---------------- ARROWCHAT IS NOT FREE SOFTWARE ---------------- # ||
	|| #   http://www.arrowchat.com | http://www.arrowchat.com/license/   # ||
	|| # German Translation 1.7.2 by PatrickGER - Patrick Mazurek        # ||
	|| #                 http://www.talk-reloaded.de                      # ||
	|| #################################################################### ||
	*/

	$language = array();

	$language = array();

	// ########################### STATUS #############################
	$language[1]			=	"Verf&uuml;gbar";								// Available users
	$language[2]			=	"Besch&auml;ftigt";										// Busy users
	$language[3]			=	"Unsichtbar";								// Invisible users
	$status['available']       	=	"Client verf&uuml;gbar";							// Default available status message
	$status['busy']			=	"Client besch&auml;ftigt";									// Default busy status message
	$status['away']			=	"Client abwesend";									// Default idle status message
	$status['offline']		=	"Client offline";								// Default offline status message
	$status['invisible']    	=	"Client unsichtbar";								// Default invisible status message
	$language[83]			=	"Gast";									// Displayed if the user has no username

	// ##############

	// ####################### SERVICE UPDATES ########################
	$language[27]			=	"Chat ist derzeit im Wartungsmodus.";  // Hover message when chat is in maintenance mode
	$language[28]			=	"schliessen"; 									// Close the announcement message
	$language[58]			=	"Du musst eingeloggt oder registriert sein, um den Chat zu benutzen";	// The message that guests view when logged out
	
	
	// ######################## NOTIFICATIONS #########################
	$language[0]			=	"Benachrichtigungen"; 							// Displayed in the title bar of the notifications popup
	$language[9]   			=       "Du hast keine neuen Benachrichtigungen."; 			// Displayed when a user has no new notifications
	$language[21]			=	"Zeige alle Benachrichtigungen"; 					// The tooltip to see all notifications
	$language[71]			=	"Gerade eben";								// Displayed after the time in notifications (second)
	$language[72]			=	"Gerade eben";								// Displayed after the time in notifications (seconds)
	$language[73]			=	"Minute her";								// Displayed after the time in notifications (minute)
	$language[74]			=	"Minuten her";								// Displayed after the time in notifications (minutes)
	$language[75]			=	"Stunde her";									// Displayed after the time in notifications (hour)
	$language[76]			=	"Stunden her";								// Displayed after the time in notifications (hours)
	$language[77]			=	"Tag her";									// Displayed after the time in notifications (day)
	$language[78]			=	"Tage her";									// Displayed after the time in notifications (days)
	$language[79]			=	"Monat her";								// Displayed after the time in notifications (month)
	$language[80]			=	"Monate her";								// Displayed after the time in notifications (months)
	$language[81]			=	"Jahr her";									// Displayed after the time in notifications (year)
	$language[82]			=	"Jahre her";								// Displayed after the time in notifications (years)
	$language[144]			=	"Neue Nachricht von: ";						// DISPLAYS USERNAME AFTER - The title for HTML5 notifications

	// ######################### BUDDY LIST ###########################
	$language[4]			=	"Chat"; 									// Displayed in the title bar of the buddy list popup
	$language[7]			=	"Chat (Offline)"; 							// Displayed in the buddy list tab when offline
	$language[8]    		=       "Keine Clients zum Chatten verfügbar"; 			// Displayed with no one is online
	$language[12]   		=       "Durchsuchen"; 									// Displayed in the search text area of the buddy list
	$language[22]			=	"Status";									// Button to show status options in the buddy list
	$language[23]			=	"Optionen";									// Button to show options in the buddy list
	$language[25]			=	"L&auml;dt...";								// Text to show while the buddy list is loading
	$language[26]			=	"Keine Freunde gefunden.";						// Displayed when no friends are found after searching
	$language[119]			=	"Namen eingeben um mit Zielperson zu chatten.";				// Displayed in the guest username box
	$language[120]			=	"Du musst einen Namen eingeben.";					// Error message when the user enters no guest name
	$language[121]			=	"Der Name kann nur aus Buchstaben und Zahlen bestehen.";	// Error message when the user enters a guest name with more than letter/numbers
	$language[122]			=	"Ein unerlaubtes Wort wurde im Namen gefunden: ";	// DISPLAYS BLOCKED WORD AFTER - Error message when the user enters a blocked word guest name
	$language[123]			=	"Du kannst deinen Namen nicht nochmal ändern.";		// Error message when user trys to change guest name again
	$language[124]			=	"Der Name ist vergeben.";				// Error message when duplicate guest name is selected
	$language[125]			=	"Der Name darf 25 Zeichen nicht überschreiten.";// Error message when guest name is too long
	$language[140]			=	"Mit Facebook verbinden";						// Text to connect to Facebook
	$language[141]			=	"Aus Facebook ausloggen";						// Text to logout from Facebook
	$language[142]			=	"Userliste";								// Text to display for site user's group
	$language[143]			=	"Facebook Freunde";							// Text to display for facebook friend's group					// Text to display for facebook friend's group

	// ########################### OPTIONS ############################
	$language[5]			=	"Verf&uuml;gbar zum Chat";						// Option to go offline text
	$language[6]			=	"Chat Kl&auml;nge";								// Option to play sound for new messages text
	$language[17]   		=       "Liste offen lassen";							// Option to keep the buddy list open text
	$language[18]   		=       "Nur Namen anzeigen";							// Option to hide avatars in the buddy list text
	$language[29]			=	"Stil:";									// Text to display next to the theme change select box
	$language[95]			=	"Ignorierliste verwalten...";						// Option to manage the block list
	$language[96]			=	"Benutzer markieren, der aus der Ignorierliste entfernt werden soll";		// Text to display when a user is managing the block list
	$language[97]			=	"Nicht mehr blockieren";									// Text to display on unblock button
	$language[108]			=	"Stil auswählen, der benutzt werden soll";			// Text to display when a user is choosing a theme
	$language[109]			=	"Ausw&auml;hlen";									// Text to display on the choose theme button
	$language[118]			=	"Ausw&auml;hlen";									// Text to display on the selection for the block menu

	// ######################## APPLICATIONS ##########################
	$language[16]  		 	=       "Apps";								// Displayed in the title bar of the applications popup
	$language[20]			=	"Lesezeichen";								// Displayed in the applications popup for the user's bookmarked applications
	$language[64]			=	"Andere Apps";						// Displayed under bookmarks (non-bookmarks heading)
	$language[65]			=	"Ziehen zum Ordnen";							// Drag to reorder text
	$language[104]			=	"App offen lassen";							// Displayed in the menu to keep an app window open
	$language[105]			=	"Apps immer laden";							// Displayed in the menu to load the app when the bar loads

	// ######################### HIDE CHAT ############################
	$language[14]   		=   "Chat ausblenden";								// Displayed when the user hovers over the hide chat button
	$language[15]   		=   "Chat anzeigen";								// Displayed when the user hovers over the show chat button

	// ######################## POPOUT CHAT ############################
	$language[10]   		=   "Neues Fenster";								// Option to pop out chat
	$language[11]   		=   "Chat wiederherstellen";								// Option to pop in chat

	// ############################ CHAT ###############################
	$language[13]  	 		=       "Der Benutzer ist offline, die Nachricht wird übermittelt, sobald er wieder online ist.";		// DISPLAYS USERNAME FIRST - Shown when a message is sent to an offline user
	$language[24]			=	"Konversation leeren";													// Displayed in the chat popup to clear chat history
	$language[30]			=	"Neue Nachricht von:";														// DISPLAYS USERNAME AFTER - Blinks in the title of the browser on new messages
	$language[59]			=	"Mehr &#9660;";															// The text to display more chat options
	$language[60]			=	"Videoanruf beginnen";															// The video chat option in the more menu
	$language[61]			=	"Videoanfrage empfangen. Ignoriere diese Nachricht um abzulehnen.";// The message to send when a video chat is reuqested
	$language[62]			=	"Akzeptieren";																// Accept a video chat request
	$language[63]			=	"Deine Videochat anfrage wurde versendet.";								// Displayed when a user sends a video chat request
	$language[66]			=	"Datei senden...";														// The file transfer option in the more menu
	$language[67]			=	"Upload abbrechen";														// The link to cancel the file transfer
	$language[68]			=	"Deine Datei wurde hochgeladen und versendet.";								// Displayed when a user sends a file
	$language[69]			=	"Datei empfangen. Ignorieren um abzulehnen.";				// The message to send when a file is sent
	$language[70]			=	"Datei Downloaden";														// Download a file that was sent
	$language[84]			=	"Benutzer blockieren";															// Blocks a user
	$language[85]			=	"Willst du wirklich diesen Benutzer melden?";								// Asks the user if they want to report another user
	$language[86]			=	"Suchen---";																// The text to browse for a file when uploading
	$language[87]			=	"Suche anklicken um Datei hochzuladen ";										// Text to display when uploading a file
	$language[88]			=	"Alle Chats im neuen Fenster &ouml;ffnen";										// Displays when mouseover the popout chat icon
	$language[89]			=	"Chat schliessen";															// Displays when mouserver the close icon
	$language[90]			=	"Du";																	// Displays on mosueover of your own chat text
	$language[102]			=	"Nachricht konnte nicht versendet werden, der Benutzer hat dich geblockt.";						// Displays this when a user tries to send a message to another user who has them blocked
	$language[103]			=	"Der Benutzer wurde blockiert, du wirst keine Nachrichten mehr von ihm Empfangen."; // Displays when a user is blocked
	$language[134]			=	"Scrolle hinunter, um neue Nachrichten einzusehen.";										// Displays when a chat window is not scrolled down on a new message
	$language[135]			=	"Deine Nachricht wurde nicht versendet, versuche es später nocheinmal.";			// Error message when a message fails to send

	// ######################### CHAT ROOMS #############################
	$language[19]			=	"Gruppen-Chat";								// Displayed in the chatrooms popup and tab
	$language[31]			=	"Erstellen";									// Button to show create chatroom
	$language[32]			=	"Optionen";									// Button to show chatroom options
	$language[33]			=	"Verlassen";									// Button to show leave chatroom
	$language[34]			=	"L&auml;dt...";								// Text so show while the chatroom list is loading
	$language[35]			=	" online";									// DISPLAYS ONLINE COUNT FIRST - Shown after online count in list
	$language[37]			=	"Erstelle neuen Gruppenchat:";					// Text to display in the create chatroom popup
	$language[36]   		=       "Gruppenchat offen lassen";							// Option to keep the chatroom window open
	$language[47]			=	"Im Chatraum bleiben";								// Option to stay in the chatroom without the window open on page load
	$language[38]			=	"Blockiere private Chats";						// Option to block private chats from users in the chatroom
	$language[39]			=	"Du kannst nicht so schnell hintereinander Chatr&auml;me erstellen. Versuche es sp&auml;ter nocheinmal.";	// Error to show when the chatroom flood limit is reached
	$language[40]			=	"Benutzerdefinierte Chatr&auml;me wurden deaktiviert.";				// Error to show when user chatrooms are disabled
	$language[41]			=	"Private Nachricht";							// Send user a private messages
	$language[42]			=	"Profil besuchen";							// Visit the user's profile
	$language[43]			=	"Gast";									// The user's title in the chatroom - shown when the user is a guest
	$language[44]			=	"Moderator";								// The user's title in the chatroom - shown when the user is a moderator
	$language[45]			=	"Administrator";							// The user's title in the chatroom - shown when the user is an administrator
	$language[46]			= 	"Der Benutzer hat den Empfang von privaten Nachrichten deaktiviert"; // The text that the alert box will display when a user trys to PM with blocked chat
	$language[48]			=	"Der Chatraum existiert nicht mehr.";			// Displayed when a user trys to enter an invalid chatroom
	$language[49]			=	"Das eingegebene Passwort ist falsch. Versuche es nochmal.";		// Displayed when a user enters the wrong password
	$language[50]			=	"Bitte passwort f&uuml;r diesen Raum eingeben.";						// Text to display when entering the chatroom password
	$language[51]			=	"Limit erreicht: Du musst kurz warten, bevor du noch mehr Nachrichten verschickst.";	// Error to show when flood limit is reached
	$language[52]			=	"Moderator hinzuf&uuml;gen";							// Make the user a moderator
	$language[54]			=	"Moderator entfernen";							// Remove the user from being a moderator
	$language[53]			=	"Benutzer sperren";									// Ban/Kick the user from the chatroom
	$language[55]			=	"Du wurdest permanent von diesem Raum ausgeschlossen.";					// Shown when a user is permanently banned
	$language[56]			=	"Du wurdest vom Raum ausgeschlossen, versuche es in:  erneut";		// DISPLAYS MINUTES AFTER - shown when a user is kicked
	$language[57]			=	"Gebe eine Zahl für die Minuten an, welche der Benutzer gesperrt werden soll.  Die Zahl 0 steht für eine permanente Sperre. ";	// Message to show when banning a user.  Typing 0 will permanently ban the user
	$language[91]			=	"Vergebe einen Namen f&uuml;r den Gruppenchat, der erstellt werden soll.";		// Message to display when creating a chat room
	$language[92]			=	"Gruppenchat verlassen";							// Tooltip when mousover the leave chat room icon
	$language[93]			=	"Neuen Gruppenchat erstellen";					// Tooltip when mouseover the create chat room icon
	$language[94]			=	"Chatthema &auml;ndern";					// Tooltip when mouseover the change theme icon
	$language[98]			=	"Name";										// Placeholder for the create chatroom name box
	$language[99]			=	"Passwort (Optional)";						// Placeholder for the create chatroom password box
	$language[100]			=	"Betreten";										// Displayed on UI buttons to join a chat room
	$language[101]			=	"Gruppenchat Sounds";							// The option to enable/disable chat room sounds
	$language[106]			=	" wurde zum Moderator gemacht, von ";			// DISPLAYS USERNAME FIRST/MODERATOR AFTER - Shown after a user is made a moderator
	$language[107]			=	" wurde vom Gruppenchat gekickt, von  ";	// DISPLAYS USERNAME FIRST/MODERATOR AFTER - Shown after a user is kicked
	$language[117]			=	"Gruppenchat in neuem Fenster &ouml;ffnen";							// Option to pop out the chat room
	$language[127]			=	"In diesem Gruppenchat sind zu viele Benutzer.  Versuche es sp&auml;ter nocheinmal.";	// Displayed when a user tries to enter a chat room with too many online.
	$language[136]			=	" (Admin)";									// Will display after a username when an administrator
	$language[137]			=	" (Mod)";									// Will display after a username when a moderator
	
	// ######################### MOBILE CHAT #############################
	$language[110]			=	"Mobiler Chat";			// Displays in the header of the mobile chat
	$language[111]			=	"Benutzer online";			// Displays in the header for the online user list
	$language[112]			=	"Abwesende Benutzer";			// Displays in the header for the idle user list
	$language[113]			=	"Wieder da!";					// Displays on the back button when viewing a chat
	$language[114]			=	"Senden";					// Text for the send button
	$language[115]			=	"Neu";					// Text to display when a new message is received
	$language[116]			=	"Du musst eingeloggt sein, um den Mobilen Chat zu nutzen.";	// Text to display when user is not logged in using mobile
	$language[126]			=	"Home";					// Displays as a button to return to the website when in mobile chat
	$language[128]			=	"Gruppenchat R&auml;me";			// Displays in the header for the chat room list
	$language[129]			=	"Einstellungen";				// Displays in the header for the settings
	$language[130]			=	"Gruppenchatliste einsehen";	// The option to show chat rooms
	$language[131]			=	"Inaktive Benutzer anzeigen";	// The option to show idle users
	$language[132]			=	"Ein";					// The on option for a toggle
	$language[133]			=	"Aus";					// The off option for a toggle
	$language[138]			=	"Gib das Passwort f&uuml;r diesen Raum ein:";	// Text to display for the chat room password input
	$language[139]			=	"Gruppenchat betreten";		// The submit button to enter a chat room

?>
