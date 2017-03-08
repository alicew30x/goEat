<?php
session_start();

if(isset($_SESSION['valid_user'])) {
	unset($_SESSION['valid_user']);
	echo "<h1>You have successfully logged out. </h1>";
}
else {
	echo "<h1>You weren't even logged in.</h1>";
}