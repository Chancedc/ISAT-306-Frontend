<?php
header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';

/* All of the content is between xml tags */
echo '<response>';
	$dbhost = "192.168.3.127";
	$dbuser = "root";
	$dbpass = "center";
	$dbname = "heart";
		//Connect to MySQL Server
	$con=mysql_connect($dbhost, $dbuser, $dbpass);
		//Select Database
	mysql_select_db($dbname) or die(mysql_error());
		// Retrieve data from Query String
	$address = $_GET['address'];
	$size = $_GET['size'];
	$age = $_GET['age'];
	$residents = $_GET['residents'];
	$utility = $_GET['utility'];
		// Escape User Input to help prevent SQL Injection
	$address = mysql_real_escape_string($address);
	$size = mysql_real_escape_string($size);
	$age = mysql_real_escape_string($age);
	$residents = mysql_real_escape_string($residents);
	$utility = mysql_real_escape_string($utility);
	
	//validate
	//$invalid = "SELECT * FROM Tablename WHERE address=$address";
	//if ($invalid) {
	//	echo "";
	//}
	//build query
	$query = "UPDATE locations SET address=$address, size=$size, ageofhouse=$age, residents=$residents, utility=$utility WHERE primarykey='something'";

		//Execute query */
	$qry_result = mysql_query($query) or die(mysql_error());	
	mysql_close($con);
	echo "Query: " . $query . "<br />";
echo '</response>';
?>