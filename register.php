<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/custom.css">
	<link href="https://fonts.googleapis.com/css?family=Unica+One" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
<?php
include_once('navbar.php');
?>  

<div class="container">
	<div class="form-container">
		<h1>REGISTRATION</h1>
		<form class="registration" action="form_processing.php" method="POST">
			<label for="user-email">Email</label>
			<input id="user-email" name="email" required="true" type="email">
			<label for="user-username">Username</label>
			<input id="user-username" name="username" required="true" type="text">
			<label for="user-password">Password</label>
			<input id="user-password" name="password" required="true" type="password">
			<div class="center"><input class="button" name="submit" type="submit" value="Register!"></div>
		</form>
	</div>
</div>
    
  </body>
</html>