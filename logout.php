<!DOCTYPE html>
<html lang="en">
<head>
<title>goEat</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link href="https://fonts.googleapis.com/css?family=Unica+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans" rel="stylesheet">
</head>
<body>

<?php
include_once('navbar.php');
session_start();

if(isset($_SESSION['valid_user'])) {
	unset($_SESSION['valid_user']);
	echo "<h1 class='center'>You have successfully logged out. </h1>";
}
else {
	echo "<h1 class='center'>You're not logged in!</h1>";
}

?>

</body>
</html>