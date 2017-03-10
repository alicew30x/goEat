<?php

include_once('dbconnect.php');

$searchterm = $_GET['query']; // get search term from searchbar
$searchterm = htmlspecialchars($searchterm); //convert html special chars to equivalent
// $searchterm = mysql_real_escape_string($searchterm); //prevent sql injection

// $query = "SELECT * FROM vendors WHERE ('BUSINESS_NAME' LIKE '%".$searchterm."%') OR ('DESCRIPTION' LIKE '&".$searchterm."&')";
$query = "SELECT * FROM vendors WHERE (BUSINESS_NAME LIKE '%". $searchterm ."%') OR (DESCRIPTION LIKE '%" . $searchterm . "%')";

//search for results in vendor name or vendor type
$raw_results = mysqli_query($connection, $query);
$num_results = mysqli_num_rows($raw_results);

// if($raw_results) {
// 	$num_results = mysqli_num_rows($raw_results);
// 	while($raw_results = mysql_fetch_array($raw_results)) {
// 		echo "<p><h3>" . $raw_results['title'] . "</h3></p>";
// 	}
// }
// else {
// 	die("something went wrong");
// }


// handle results
if($raw_results->num_rows > 0) {
	while($row = $raw_results->fetch_assoc()) {
		echo "<p><h3>" . $row['BUSINESS_NAME'] . "</h3></p>";
	}
}
else {
	echo "<h2> No results. </h2>";
}