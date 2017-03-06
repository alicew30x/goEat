<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign In!</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/custom.css">
	<link href="https://fonts.googleapis.com/css?family=Unica+One" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>

<!-- include navbar -->
<?php
include_once('navbar.php');
?>  

<div class="container">
	<div class="form-container">
		<h1>Sign in!</h1>
		<form class="registration" action="form_processing.php" method="POST">
			<label for="user-username">Username</label>
			<input id="user-username" name="username" required="true" type="text">
			<label for="user-password">Password</label>
			<input id="user-password" name="password" required="true" type="password">
			<div class="center"><input class="button" name="submit" type="submit" value="Go!"></div>
		</form>
	</div>
</div>
    
  </body>
</html>