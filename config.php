<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "sparksbank";

	$conn = mysqli_connect($servername, $username, $password, $database);

	if(!$conn){
		die("unable to connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>