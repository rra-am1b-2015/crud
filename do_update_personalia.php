<?php
	echo "update maar....";
	
	include("db_connect.php");
	
	$query = "UPDATE `personalia` 
			  SET `voornaam` 		= 'Bertje',
				  `tussenvoegsel` 	= 'van de',
				  `achternaam` 		= 'Bakkertje',
				  `email` 			= 'bakkertje@gmail.com',
				  `wachtwoord` 		= 'primageheim',
				  `leeftijd` 		= '35',
				  `haarkleur` 		= '023-bruin',
				  `geboortedatum` 	= '2015-09-23'
			  WHERE `id` 			= 32;";
			  
	mysqli_query($conn, $query) or die("Query-fout".mysqli_error());
?>