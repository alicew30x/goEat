<?php

if(($_SERVER['PHP_AUTH_USER'] !='user') ||
	($_SERVER['PHP_AUTH_PW'] !='pass')) {
	header('WWW-Authenticate: Basic realm="Realm-Name"');
	if(substr($_SERVER['SERVER_SOFTWARE'], 0, 9)=='Microsoft') {
		header('Status: 401 unauthorized');
	}
	else {
		header('HTTP/1.0 401 unauthorized');
	}
	echo "Couldn't login! Check your username and password.";
}

else {
	echo "Successfully logged in.";
}

?>