<!DOCTYPE html>
<html lang="en">
<head>
<title>goEat</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/custom.css">
	<link href="https://fonts.googleapis.com/css?family=Unica+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans" rel="stylesheet">
</head>
<body>
<?php
include_once('navbar.php');
include_once('dbconnect.php');

$vendorkey = $_GET['id']; //get vendor key from url
$query = "SELECT * FROM `vendors` WHERE `KEY`='$vendorkey'"; 
$raw_results = mysqli_query($connection, $query);
$result = mysqli_fetch_array($raw_results);

$vendorname = $result['BUSINESS_NAME'];
$vendortype = $result['DESCRIPTION'];
$status = $result['STATUS'];
$location = $result['LOCATION'];
$latitude = $result['LAT']; //for displaying map marker
$longitude = $result['LON']; //for displaying map marker

echo "<div class='container'>
	<section class='listing-detail'>
		<img src='img/japadog.jpg'>
		<!-- TODO: add image carousel -->
		<h1>".$vendorname."</h1>
		<h3>".$vendortype."</h3>
		<h4>".$location."</h4>
		<p>
		Japadog is a small chain of street food stands and restaurants located in Vancouver. The chain, which specializes in hot dogs that include variants of Japanese-style foods like okonomiyaki, yakisoba, teriyaki and tonkatsu, is owned by Noriki Tamura.
		</p>
		<div id='map' class='listing-map'></div>
		<script>
      function initMap() {
        var vendor = {lat: ".$latitude.", lng: ".$longitude."};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: vendor
        });
        var marker = new google.maps.Marker({
          position: vendor,
          map: map
        });
      }
    </script>
    <script async defer
    src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAIGVnZ6CQYTAmHZavM5vWkckho3TBa1cM&callback=initMap'>
    </script>


		<!-- TODO: add rating stars, fix positioning -->
		<section class='reviews'>
			<h2>Reviews</h2>
			<div class='user-review'>
				<h3>User123</h3>
				<p>Decent hot dogs. These are some good hot dogs.</p>
			</div>
			<div class='user-review'>
				<h3>Bunnydust</h3>
				<p>10/10 would buy again.</p>
			</div>
		</section>
	</section>
</div>";

?>  

    
  </body>
</html>