<!DOCTYPE html>
<html lang="en">
<head>
<title>goEat</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/custom.css">
	<link href="https://fonts.googleapis.com/css?family=Unica+One" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>

<!-- include navbar in every page -->
<?php
include_once('navbar.php');
?>  


<!-- google map of vancouver area
TODO: use coordinates from database to populate map points -->

<div class="container">
  <h1>Vancouver Street Food</h1>
      <iframe id="map"  frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJs0-pQ_FzhlQRi_OBm-qWkbs&key=AIzaSyAIGVnZ6CQYTAmHZavM5vWkckho3TBa1cM" allowfullscreen></iframe>
</div>
    
  </body>
</html>