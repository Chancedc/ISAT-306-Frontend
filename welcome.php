<?php

session_start();
if(!$_SESSION['email']){


header("location: login.php");
}
?>

<!DOCTYPE html>
<title>H.E.A.R.T</title>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="main.css" rel="stylesheet" type="text/css" />

<style type="text/css">

#my-map {
  width: 500px;
  height: 400px;
  margin: 0 auto;
}

-->
</style></head>

<div id="header">
</div>
</body>

<body style="background-color:white;">

<!The header is the div that holds both the logo and the welcome message. The logo is created first in the
logoContainer div. After that, the welcome to H.E.A.R.T message is created inside of another div called welcome>

<div id="header">
<div id="logoContainer">	
<img src ="http://static.ibsrv.net/car-pictures/diy-electric-car/electric-car-plans.jpg";>
</div>
<div id="welcome">
	<h1> Welcome to H.E.A.R.T!</h1>
</div>
</div>

<! This div holds the menu bar that anybody (you do not have to be logged in) can see. This div uses a class
identifier instead of an id. Only difference is in the CSS>	
<div class="centeredMenu">

<ul>
<li><h2><a href="welcome.php">Home</a></h2></li>
<li><h2><a href="logout.php">Log Out</a></h2></li>
</ul>
</div>

<! This div holds the sidebar information that will not be displayed until the user logs in>

<div id="sideBar">
<ul>
<li><h2><a href="locationoverview.html">Location Overview</a></h2></li>
<li><h2><a href="locationhistory.html">Location History</a></h2></li>
<li><h2><a href="comparelocations.html">Compare Locations</a></h2></li>
</ul>
</div>
<br>
<br>

<h4> To view information about a location of your choice, choose a red pin-point on the map. </h4>
 <div id="my-map"></div>
<div id="content">
</div>
</body>


<script type="text/javascript"

   src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzowqrS-4twB_m_QPLE0iZLXB0soddDqA&sensor=false"></script>

<script>
'use strict';

document.addEventListener('DOMContentLoaded', drawMap);

// make map available in global scope
var map;

function drawMap() {
	var homeLocation1 = new google.maps.LatLng(38.4494444, -78.8691667),
             homeLocation2 = new google.maps.LatLng (38.440191, -78.875080);

	var mapOptions = {
	  'center' : new google.maps.LatLng(38.4494444, -78.8691667),
	  'zoom' : 14,
	  'mapTypeId' : google.maps.MapTypeId.ROADMAP,
	  'draggable' : true
	};
	
	map = new google.maps.Map(document.getElementById("my-map"), mapOptions);
	
	var marker1 = new google.maps.Marker({
		position: homeLocation1,
		map: map,
		title: 'Your Home Location1'
});

var marker2 = new google.maps.Marker({
position: homeLocation2,
map: map,
title: 'Your Home Location2'
});

var popupContent1 = 'Your Home1 <br />'; 
popupContent1 += 'By H.E.A.R.T Systems<br   /> ';
popupContent1 += ' ';

var popupContent2 = 'Your Home2 <br />'; 
popupContent2 += 'By H.E.A.R.T Systems<br   /> ';
popupContent2 += ' ';

      var infowindow1 = new google.maps.InfoWindow({
                content: popupContent1,
                maxWidth: 270
  });

 var  infowindow2 = new google.maps.InfoWindow({
                content: popupContent2,
                maxWidth: 270

});


google.maps.event.addListener(marker1, 'click', function() {
    infowindow1.open(map, marker1);
  });

google.maps.event.addListener(marker2, 'click', function() {
    infowindow2.open(map, marker2);
  });

}
 
</script>

</section><!--/ #content -->

<!--these links below are the only way to display the images in the circles on the Our Team page -->
<!--there doesnt seem to be a way to change the properties of the register, log in, about and contact pages either-->

<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,700' rel='stylesheet' type='text/css'>		
<link rel='stylesheet' id='tmm_theme_style-css'  href='http://passportparking.com/wp-content/themes/axioma/style.css?ver=3.7.1' type='text/css' media='all' />
<link rel='stylesheet' id='tmm_skeleton-css'  href='http://passportparking.com/wp-content/themes/axioma/css/skeleton.css?ver=3.7.1' type='text/css' media='all' />
<link rel='stylesheet' id='tmm_layout-css'  href='http://passportparking.com/wp-content/themes/axioma/css/layout.css?ver=3.7.1' type='text/css' media='all' />
<link rel='stylesheet' id='tmm_custom1-css'  href='http://passportparking.com/wp-content/themes/axioma/css/custom1.css?ver=3.7.1' type='text/css' media='all' />
<link rel='stylesheet' id='tmm_custom2-css'  href='http://passportparking.com/wp-content/themes/axioma/css/custom2.css?ver=3.7.1' type='text/css' media='all' />
<link rel='stylesheet' id='tmm_fancybox-css'  href='http://passportparking.com/wp-content/themes/axioma/js/fancybox/jquery.fancybox.css?ver=3.7.1' type='text/css' media='all' />

 
</html>
	
