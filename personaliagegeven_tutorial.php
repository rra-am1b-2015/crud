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
	
	//$result_array = mysqli_fetch_assoc($result);
	
	//var_dump($result_array);
	
	/*
	$teller = 0;
	
	while ( $teller < 100 )
	{
		echo '$teller is kleiner dan 4<br>';
		$teller = $teller + 1;
	}
	
	*/
	
	/*
	while ( $result_array = mysqli_fetch_assoc($result) )
	{
		echo $result_array["id"]." | ".
			 $result_array["voornaam"]." | ".
			 $result_array["tussenvoegsel"]." | ".
			 $result_array["achternaam"]." | ".
			 $result_array["email"]." | ".
			 $result_array["wachtwoord"]." | ".
			 $result_array["haarkleur"]." | ".
			 $result_array["geboortedatum"]." | ".
			 $result_array["leeftijd"]."<br>";
			 
	}
	
	mysqli_data_seek($result, 0);
	$result_array = mysqli_fetch_assoc($result);
	*/
	
	
	/*
	Wat is nu een array??????????????????????
	
	// Gegevens opslaan in aparte variabelen
	$fruit1 = "appel";
	$fruit2 = "peer";
	$fruit3 = "meloen";
	
	echo "Ik houd van: ".$fruit1.", ".$fruit2." en ".$fruit3."<br>";
	
	// Gegevens opslaan in een geindexeerde array
	$fruit = array("kiwi", "banaan", "sharon fruit", );
	
	echo "In mijn fruit array zitten de volgende fruitsoorten: ".
			$fruit[0].", ".$fruit[1]." en ".$fruit[2]."<br>";
			
	// Maak een geindexeerde array auto die 5 verschillende merken auto's in zich heeft
	
	$auto = array("Ford", "Audi", "Citroen", 'Mazda', "Mercedes");
	
	echo "In mijn garage staan de volgende merken: ".
			$auto[0].", ".$auto[1].", ".$auto[2].", ".$auto[3].", ".$auto[4]."<br>";
	
	// Dit is een associatief array.
	
	$game = array("naamgame" => "KingsValley I",
				  "uitgever" => "Konami", 
				  "releasejaar" => 1985, 
				  "gamegenre" => "Platformer",
				  "rating" => 10,
				  "moeilijkheidsgraad" => 5);
	
	echo "Beste game ooit:<br>".
		  "Naam: ".$game["naamgame"]."<br>".
		  "Uitgever: ".$game["uitgever"]."<br>".
		  "Releasejaar: ".$game["releasejaar"]."<br>".
		  "Gamegenre: ".$game["gamegenre"]."<br>".
		  "Rating: ".$game["rating"]."<br>".
		  "moeilijkheidsgraad: ".$game["moeilijkheidsgraad"]."<br>";
		  
	echo "Het aantal elementen in mijn game_array is: ".count($game)."<br>";
	echo "De namen van velden van mijn associatieve array zijn: ".array_keys($game)[5];
	
	var_dump($game);
	*/	 
		 
?>

<!DOCTYPE html>
<style>
table, td, th
{
	border: 1px solid grey;
	border-collapse:collapse;
	padding:7px;
}

html, table
{
	font-family:Verdana;
	font-size:11px;
}
</style>
<html>
 <head>
	<title></title>
 </head>
 <body>
  <h3>Records uit de tabel personalia</h3>
	<table>
		
<?php 
		$result_array = mysqli_fetch_assoc($result);
		echo "<tr>
					<th>".array_keys($result_array)[0]."</th>
					<th>".array_keys($result_array)[1]."</th>
					<th>".array_keys($result_array)[2]."</th>
					<th>".array_keys($result_array)[3]."</th>
					<th>".array_keys($result_array)[4]."</th>
					<th>".array_keys($result_array)[5]."</th>
					<th>".array_keys($result_array)[6]."</th>
					<th>".array_keys($result_array)[7]."</th>
					<th>".array_keys($result_array)[8]."</th>
		  	 </tr>";
			 
		mysqli_data_seek($result, 0);
		
		while ( $result_array = mysqli_fetch_assoc($result) )
		{
			echo "<tr>
					<td>".$result_array["id"]."</td>
					<td>".$result_array["voornaam"]."</td>
					<td>".$result_array["tussenvoegsel"]."</td>
					<td>".$result_array["achternaam"]."</td>
					<td>".$result_array["email"]."</td>
					<td>".$result_array["wachtwoord"]."</td>
					<td>".$result_array["leeftijd"]."</td>
					<td>".$result_array["haarkleur"]."</td>
					<td>".$result_array["geboortedatum"]."</td>
				</tr>";
		}
?>
	</table>
 </body>
</html>