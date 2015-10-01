<?php	
	include("db_connect.php");
		
	$query = "UPDATE `personalia` 
			  SET 	 `voornaam` 		= '".$_POST['voornaam']."',
					 `tussenvoegsel` 	= '".$_POST['tussenvoegsel']."',
					 `achternaam` 		= '".$_POST['achternaam']."',
					 `email` 			= '".$_POST['email']."',
					 `wachtwoord` 		= '".$_POST['wachtwoord']."',
					 `leeftijd` 		= '".$_POST['leeftijd']."',
					 `haarkleur` 		= '".$_POST['haarkleur']."',
					 `geboortedatum` 	= '".$_POST['geboortedatum']."'
			  WHERE  `id` 				= ".$_POST['id'].";";
			  
	mysqli_query($conn, $query) or die("Query-fout".mysqli_error());
	
	echo "Het wijzigen van de gegevens is uitgevoerd.<br>
			U wordt teruggestuurd naar het overzichtsformulier";
	header("refresh:4;personaliagegevens.php");
?>