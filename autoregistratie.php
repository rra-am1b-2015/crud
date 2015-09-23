<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "toets-1";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Fout geen server-contact");
	
	$query = "INSERT INTO `auto` (`id`,
								  `merk`,
								  `type`,
								  `kleur`,
								  `bouwjaar`,
								  `nummerbord`)
					VALUES		 (NULL,
								  '".$_POST["merk"]."',
								  '".$_POST["type"]."',
								  '".$_POST["kleur"]."',
								  '".$_POST["bouwjaar"]."',
								  '".$_POST["nummerbord"]."')";
								  
	//echo $query;
	
	mysqli_query($conn, $query) or die("Query-fout");
	
	mysqli_close($conn);
	
	echo "De gegevens zijn verwerkt. Dank u voor de registratie!";
	header("refresh:4; url=index.html");
?>