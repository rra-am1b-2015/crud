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
	
	$query = "SELECT * FROM `personalia`";
	
	$result = mysqli_query($conn, $query) or die("query-fout: ".$query." De MySQl-server meldt het volgende: ".mysqli_error($conn));
	
	mysqli_fetch_array($result);
	
	// Gegevens opslaan in aparte variabelen
	$fruit1 = "appel";
	$fruit2 = "peer";
	$fruit3 = "meloen";
	
	echo "Ik houd van: ".$fruit1.", ".$fruit2." en ".$fruit3."<br>";
	
	// Gegevens opslaan in een array
	$fruit = array("kiwi", "banaan", "sharon fruit", );
	
	echo "In mijn fruit array zitten de volgende fruitsoorten: ".
			$fruit[0].", ".$fruit[1]." en ".$fruit[2];
			
	// Maak een array auto die 5 verschillende merken auto's in zich heeft
	
	
?>

<!DOCTYPE html>
<html>
 <head>
	<title></title>
 </head>
 <body>
  <h3>Records uit de tabel personalia</h3>
  
 </body>
</html>