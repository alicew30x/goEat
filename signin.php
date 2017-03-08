<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign In!</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/custom.css">
	<link href="https://fonts.googleapis.com/css?family=Unica+One" rel="stylesheet">
<!-- 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
</head>
<body>

<!-- include navbar -->
<?php
include_once('navbar.php');
include_once('dbconnect.php');

session_start();
if(!isset($_SESSION['valid_user'])) {
	if(isset($_POST['username']) && isset($_POST['password'])) {
		$username=$_POST['username'];
		$pass=$_POST['password'];
		$password=hash('sha256', $pass);
		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$result=mysqli_query($connection, $query);
		$count = mysqli_num_rows($result);
		if($count==1){
			$_SESSION['valid_user'] = $_POST['username'];
		}
		// if($_POST['userid']=="test" && $_POST['password']=="test") {
		// 	$_SESSION['valid_user'] = $_POST['userid'];
		// }
		else{
			echo "<h1>invalid login info, please try again.</h1>";
		}
	}
	else {
		// echo "<h1>please log in.</h1>"; 	
	}
}
else {
	echo "<h1>you are now logged in as user: ".$_SESSION['valid_user'];
	exit();
}
	?>
	<div class="container">
	<div class="form-container">
		<h1>Sign in!</h1>
		<form class="registration" action="signin.php" method="POST">
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