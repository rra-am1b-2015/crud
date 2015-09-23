<!-- Hieronder staat wat CSS om de tabelranden zichtbaar te maken -->
<style>
table, td, th
{
	border:2px solid blue;
	border-collapse:collapse;
	/*background-color:RGB(180,200,160);*/
	font-family:Verdana;
}

td, th
{
	padding:0.3em;
}
</style>


<!DOCTYPE html>
<html>
 <head>
	<title>Tabel 1</title>
 </head>
 <body> 
	<table>
		<caption>Personalia</caption>
		<tr>
			<th>id</th>
			<th>voornaam</th>
			<th>tussenvoegsel</th>
			<th>achternaam</th>	
			<th>e-mailadres</th>
			<th>wachtwoord</th>
			<th>leeftijd</th>
		</tr>
		<tr style="background-color:RGB(200,200,200);">
			<td>20151</td>
			<td>Arjan</td>
			<td rowspan="3">de</td>
			<td colspan="2">Ruijter</td>
			<td></td>
			<td></td>
		</tr>
		<tr style="background-color:white;">
			<td>20152</td>
			<td>Chris</td>
			
			<td>Huussen</td>
			<td>huussen@hotmail.com</td>
			<td></td>
			<td></td>
		</tr>
		<tr style="background-color:RGB(220,220,220);">
			<td>20153</td>
			<td>Bram</td>
			
			<td>Berkel</td>	
			<td>berkel@google.com</td>
			<td></td>
			<td></td>
		</tr>
		<tr style="background-color:RGB(220,220,220);">
			<td>20153</td>
			<td><?php echo $_POST["voornaam"]; ?></td>
			
			<td><?php echo $_POST["tussenvoegsel"];?></td>
			<td><?php echo $_POST["achternaam"];?></td>
			<td><?php echo $_POST["email"]; ?></td>
			<td><?php echo $_POST["wachtwoord"]; ?></td>
			<td><?php echo $_POST["leeftijd"]?></td>
		</tr>
	 </table> 
	 
	 <a href="personaliaformulier1.html">ga terug</a>
 </body>
</html>