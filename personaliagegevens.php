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
	<a href="index.html"><img src="icons/edit.png" alt="potlood"></a>
 </body>
</html>