<?php
	// Dit is de link waar uitgelegd hoe je contact maakt met de MySQL-server
	// http://www.w3schools.com/php/php_mysql_connect.asp
	
	/* Zo kun je ook commentaar
	   verwerken in je code */
	
	/*
	$naam = $_POST['voornaam'];
	$hoeveelheid = "veel";
	   
	echo 'Mijn naam is: '.$naam.' en ik krijg daar '.$hoeveelheid.' complimenten over<br>';
	
	echo "Mijn naam is: ".$naam." en ik krijg daar ".$hoeveelheid." complimenten over<br>";	
	*/
	/*
	echo "De servernaam is: $servername<br>
		  de user heet: $username<br>
		  zijn password is $password<br>";
		  
	$tekst = tekstOpScherm("hostinger.com", "root", "geheim");
	echo $tekst;
	
	$tekst1 = tekstOpScherm("one.com", "root2", "extra_geheim");
	echo $tekst1;
	
	$tekst2 = tekstOpScherm("nu.nl", "root3", "ultra_geheim");
	echo $tekst2;
	
	
	function tekstOpScherm($servername, $username, $password)
	{
		return "De servernaam is: $servername<br>
				de user heet: $username<br>
				zijn password is $password<br>";		  
	}
	
	//Boolean variabele
	$var_boolean = false;
	
	if (!$var_boolean)
	{
		echo "Ik ben waar";
	}
	*/
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "am1b_inlogregistratie";	
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if (!$conn)
	{
		die("Er is geen verbinding met de mysql-server gemaakt");
	}
	
	// var_dump($_POST) geeft de waarde weer van het post-array
	var_dump($_POST);
	
	$query = "INSERT INTO `personalia` (`id`,
			                            `voornaam`,
									    `tussenvoegsel`,
									    `achternaam`,
								        `email`,
									    `wachtwoord`,
									    `leeftijd`,
										`haarkleur`,
										`geboortedatum`)
								VALUES (NULL,
									    '".$_POST['voornaam']."',
									    '".$_POST['tussenvoegsel']."',
									    '".$_POST['achternaam']."',
									    '".$_POST["email"]."',
									    '".$_POST["wachtwoord"]."',
									    '".$_POST["leeftijd"]."', 
										'".$_POST["haarkleur"]."',
										'".$_POST["geboortedatum"]."')";
										
	mysqli_query($conn, $query ) or die("Er is een query-fout opgetreden in de volgende query: ".$query."<br>De database meldt de volgende fout: ".mysqli_error($conn));
	
	mysqli_close($conn);
	
	echo "Bedankt voor het registreren. Uw gegevens zijn succesvol verwerkt. U wordt doorgestuurd naar homepage.";
	header("refresh:300; url= index.html");
	
	
?>