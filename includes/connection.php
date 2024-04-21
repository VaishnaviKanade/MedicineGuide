<?php

	$server="localhost";
	$user="root";
	$pass="";
	$db="medicineguide";
	
	$con = mysqli_connect($server, $user, $pass) or die("Sorry, can't connect to the mysql.");

	mysqli_select_db($con,$db) or die("Sorry, can't select the database.");

?>