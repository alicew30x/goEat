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

$path = "users.txt"; //text file storing user registration info
$handle = fopen($path, 'a'); //open path as write only, pointer at end of file

if (isset($_POST['submit'])) {
	$data = $_POST["email"] . ", " . $_POST["username"] . ", " . $_POST["password"]; //concatenate user info. "required" fields already handled with html required=true
	echo "<h1>Successfully registered!</h1>";
	fwrite($handle, $data . "\r\n"); //write to file + new line
	fclose($handle); //close file
}
else {
	echo "<h1>Registration failed! Please retry.</h1>";
}
?>

</body>
</html>