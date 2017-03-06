<html>
<head>
<title>Registration result</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/custom.css">
</head>
<body>

<?php

include_once('navbar.php');
include_once('dbconnect.php'); //connect to database

//test connection to db
if(mysqli_connect_errno()) {
	die("Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");  
}

//check and filter user input
$username = trim($_POST['username']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);

//add user to DB
$query = "INSERT INTO users values('".$username."','".$email."','".$password."')";
$result = mysqli_query($connection, $query);

if($result) {
	echo "Successfully registered!";
}
else {
	die("Registration failed. " . mysqli_error($connection));
}

?>

</body>
</html>