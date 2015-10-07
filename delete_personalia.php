<?php
	echo "Het ID van het record dat moet worden verwijderd is: ".$_GET['id'];
	
	// Maak contact met de mysql server, gebruik db_connect.php
	
	$query = "DELETE FROM `am1b_inlogregistratie`.`personalia` WHERE `personalia`.`id` = 32";
?>