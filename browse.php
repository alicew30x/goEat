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

<!-- include navbar -->
<?php
include_once('navbar.php');
include_once('dbconnect.php');

if($_GET) {
	$searchterm = $_GET['query']; // get search term from searchbar
	$searchterm = htmlspecialchars($searchterm); //convert html special chars to equivalent

	//Keyword search from vendor database. Searches for both business names and food type
	$query = "SELECT * FROM vendors WHERE (BUSINESS_NAME LIKE '%". $searchterm ."%') OR (DESCRIPTION LIKE '%" . $searchterm . "%')";

	//search for results in vendor name or vendor type
	$raw_results = mysqli_query($connection, $query);
	$num_results = mysqli_num_rows($raw_results);

	// handle results
	if($raw_results->num_rows > 0) {
		//show searchbar
		echo "<div class='container'>
				<form action='' method='GET' class='form-wrapper'>
					<input id='searchbar' type='text' name='query' placeholder='Search for foooooood...'/>
					<button class='btn' type='submit'>Search!</button>
				</form>
			</div>";

		//display results
		while($row = $raw_results->fetch_assoc()) {
			$vendorkey = $row['KEY'];
			$vendorname = $row['BUSINESS_NAME'];
			$vendortype = $row['DESCRIPTION'];
			//not all listings in database have a business name (i.e random hot dog stands) - use vendortype if business name does not exist
			if(empty($vendorname)) { 
				$vendorname = $vendortype;
			}
			$location = $row['LOCATION'];

			//display each listing from result set, generate unique link for each listing using vendor id
			echo "<div class='listing'>
			<img class='listing-pic' src='img/listing-placeholder.png' alt='listing placeholder'>
			<div class='listing-text'>
				<h2 class='listing-title'><a href='listing.php?id=". $vendorkey."' alt=".$vendorname.">".$vendorname."</a></h2> 
				<h3 class='listing-desc'>".$vendortype."</h3>
				<h4 class='location'>".$location."</h4>
			</div></div>";
		}
	}
	else {
		echo "<div class='container'>
				<form action='' method='GET' class='form-wrapper'>
					<input id='searchbar' type='text' name='query' placeholder='Search for foooooood...'/>
					<button class='btn' type='submit'>Search!</button>
				</form>
			</div>";
		echo "<div class='container'><h2> No results. </h2></div>";
	}
}
else {
	//display all vendors by default, 20 per page
	//todo: pagination
	$query = "SELECT * FROM vendors LIMIT 50";
	$raw_results = mysqli_query($connection, $query);
	$num_results = mysqli_num_rows($raw_results);

	echo "<div class='container'>
				<form action='' method='GET' class='form-wrapper'>
					<input id='searchbar' type='text' name='query' placeholder='Search for foooooood...'/>
					<button class='btn' type='submit'>Search!</button>
				</form>
			</div>";

		//display results
		while($row = $raw_results->fetch_assoc()) {
			$vendorkey = $row['KEY'];
			$vendorname = $row['BUSINESS_NAME'];
			$vendortype = $row['DESCRIPTION'];
			//not all listings in database have a business name (i.e random hot dog stands) - use vendortype if business name does not exist
			if(empty($vendorname)) { 
				$vendorname = $vendortype;
			}
			$location = $row['LOCATION'];

			//display each listing from result set, generate unique link for each listing using vendor id
			echo "<div class='listing'>
			<img class='listing-pic' src='img/listing-placeholder.png' alt='listing placeholder'>
			<div class='listing-text'>
				<h2 class='listing-title'><a href='listing.php?id=". $vendorkey."' alt=".$vendorname.">".$vendorname."</a></h2> 
				<h3 class='listing-desc'>".$vendortype."</h3>
				<h4 class='location'>".$location."</h4>
			</div></div>";

			//TODO: favourite button with ajax
		}
}
?>

<!-- search filters
TODO: collapsable filter (hidden to the left unless hover or click) -->
<div id="filterbox">
	<h2>Filters</h2>

	<!-- sort by method -->
	<label>Sort by:</label>
	<select>
		<option value="high_low">Rating: high to low</option>
		<option value="low_high">Rating: low to high</option>
		<option value="popular">Most popular</option>
	</select>

	<!-- TODO: fix range slider - for filtering by star ratings -->
	<form method="post">
      <div data-role="rangeslider">
        <label for="rating-min">Rating:</label>
        <input type="range" name="price-min" id="rating-min" value="1" min="1" max="5">
        <label for="rating-max">Rating:</label>
        <input type="range" name="price-max" id="rating-max" value="5" min="1" max="5">
      </div>
    </form>

    <!-- filter by food type -->
	<label>Food type:</label>
	<form method="POST">
		<fieldset>
			<input type="checkbox" name="foodtype" value="burger">Burger<br/>
			<input type="checkbox" name="foodtype" value="hotdog">Hotdog<br/>
			<input type="checkbox" name="foodtype" value="vegan">Vegan<br/>
			<input type="checkbox" name="foodtype" value="asian">Asian<br/>
			<input type="checkbox" name="foodtype" value="drinks">Drinks<br/>
			<input type="checkbox" name="foodtype" value="dessert">Dessert<br/>
		</fieldset>
	</form>
</div>

<div class="container">
<!-- searchbar -->
<form action="" method="GET" class="form-wrapper">
	<input id="searchbar" type="text" name="query" placeholder="Search for foooooood..."/>
	<button class="btn" type="submit">Search!</button>
</form>
</div>
    
  </body>
</html>