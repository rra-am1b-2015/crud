<?php
	//echo "Het ID van het record dat moet worden verwijderd is: ".$_GET['id'];
	
	// Maak contact met de mysql server, gebruik db_connect.php
	include("db_connect.php");
	
	// Pas de onderstaande query aan.
	$query = "DELETE FROM `personalia`
			  WHERE 	  `id` = ".$_GET['id']."";
			  
	// Vuur de query af op de mysql database...Let op! kijk in db_connect naar de
	// naam van je connectie!
	$result = mysqli_query($conn, $query);
	
	// Gebruik $result om een melding op het scherm te krijgen dat het record niet 
	// verwijderd is.
	if ( $result )
	{
		// Gebruik header refresh om terug te gaan naar de pagina read_personalia
		echo "De geselecteerde gegevens zijn verwijderd. U wordt doorgestuurd naar<br>".
			 "de tabel met gegevens uit personalia";
		header("refresh: 2; url=personaliagegevens.php");
	}
	else
	{
		// Gebruik header refresh om terug te gaan naar de pagina read_personalia
		echo "De geselecteerde gegevens konden niet worden verwijderd. <br>".
			 "Stel uw systeembeheerder op de hoogte. U wordt doorgestuurd naar<br>".
			 "de tabel met gegevens uit personalia";
		header("refresh: 2; url=personaliagegevens.php");
	}
?>