<?php
header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';

/* All of the content is between xml tags */
echo '<response>';
	$food = $_GET['food'];
	/* The next line creates an array but this is where we would connect to the database */
	$foodArray = array('tuna','bacon','beef','loaf','ham');
	if(in_array($food,$foodArray))
		echo 'We do have '.$food.'!';
	elseif($food=='')
		echo 'Enter a food you idiot';
	else
		echo 'Sorry punk we dont sell no '.$food.'!';
echo '</response>';
?>