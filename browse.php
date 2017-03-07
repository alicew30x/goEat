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
<form action="search.php" method="GET">
	<input id="searchbar" type="text" name="query" placeholder="Search for foooooood..."/>
	<input type="submit" value="search!"/>
</form>
</div>





<!-- listing results
TODO: add star ratings -->
<!-- 	<div class="listing">
		<img class="listing-pic" src="img/listing-placeholder.png" alt="listing placeholder">
		<div class="listing-text">
			<h2 class="listing-title"><a href="listing.php" alt="Japadog">Japadog</a></h2>
			<h3 class="listing-desc">Hotdogs</h3>
			<h4 class="location">3498 Pender Street</h4>
		</div>
	</div>

	<div class="listing">
		<img class="listing-pic" src="img/listing-placeholder.png" alt="listing placeholder">
		<h2 class="listing-title"><a href="listing.php">Pressure Box</a></h2>
		<h3 class="listing-desc">Random cuisine</h3>
		<h4 class="location">Terminal Avenue</h4>
	</div>

	<div class="listing">
		<img class="listing-pic" src="img/listing-placeholder.png" alt="listing placeholder">
		<h2 class="listing-title"><a href="listing.php">Tandoori Tikka Box</a></h2>
		<h3 class="listing-desc">Hotdogs</h3>
		<h4 class="location">W Cordova Street</h4>
	</div>

	<div class="listing">
		<img class="listing-pic" src="img/listing-placeholder.png" alt="listing placeholder">
		<h2 class="listing-title"><a href="listing.php">Loving Hut</a></h2>
		<h3 class="listing-desc">Vegan sandwiches and burgers</h3>
		<h4 class="location">Pacific Blvd & Davie Street</h4>
	</div>

	<div class="listing">
		<img class="listing-pic" src="img/listing-placeholder.png" alt="listing placeholder">
		<h2 class="listing-title"><a href="listing.php">Chickpea Truck</a></h2>
		<h3 class="listing-desc">Vegetarian food</h3>
		<h4 class="location">33 Acres Brewing Company</h4>
	</div>

	<div class="listing">
		<img class="listing-pic" src="img/listing-placeholder.png" alt="listing placeholder">
		<h2 class="listing-title"><a href="listing.php">Roaming Dragon</a></h2>
		<h3 class="listing-desc">Asian</h3>
		<h4 class="location">W Georgia & Smithe</h4>
	</div>
</div> -->
    
  </body>
</html>