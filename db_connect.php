<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "am1b_inlogregistratie";	
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if (!$conn)
	{
		die("Er is geen verbinding met de mysql-server gemaakt");
	}
?>