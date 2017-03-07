<?php

include_once('dbconnect.php');

$query = $_GET['query']; // get search term from searchbar
$query = htmlspecialchars($query); 
//search for results in vendor name or vendor type
$raw_results = mysql_query("SELECT * FROM vendors WHERE ('BUSINESS_NAME' LIKE '%".$query."%') OR ('DESCRIPTION' LIKE '&".$query."&')") or die(mysql_error());

//handle results
if(mysql_num_rows($raw_results) > 0) {
	while($results = mysql_fetch_array($raw_results)) {
		echo "<p><h3>" . $results['title'] . "</h3></p>";
	}
}
else {
	echo "<h2> No results. </h2>";
}