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
	<?php
		if (!empty($_GET)) { echo $_GET["voornaam"].$_GET["achternaam"]; }
	?>
 
	 <table>
		<caption>Personalia</caption>
		<tr>
			<th>id</th>
			<th>voornaam</th>
			<th>tussenvoegsel</th>
			<th>achternaam</th>	
			<th>e-mailadres</th>
			<th>wachtwoord</th>
		</tr>
		<tr style="background-color:RGB(200,200,200);">
			<td>20151</td>
			<td>Arjan</td>
			<td rowspan="3">de</td>
			<td colspan="2">Ruijter</td>
			<td></td>			
		</tr>
		<tr style="background-color:white;">
			<td>20152</td>
			<td>Chris</td>
			
			<td>Huussen</td>
			<td>huussen@hotmail.com</td>
			<td></td>
		</tr>
		<tr style="background-color:RGB(220,220,220);">
			<td>20153</td>
			<td>Bram</td>
			
			<td>Berkel</td>	
			<td>berkel@google.com</td>
			<td></td>
		</tr>
		<tr style="background-color:RGB(220,220,220);">
			<td>20153</td>
			<td><?php echo $_GET["voornaam"]; ?></td>
			
			<td><?php echo $_GET["tussenvoegsel"];?></td>
			<td><?php echo $_GET["achternaam"];?></td>
			<td><?php echo $_GET["email"]; ?></td>
			<td><?php echo $_GET["wachtwoord"]; ?></td>
		</tr>
	 </table> 
	 
	 <a href="personaliaformulier.html">ga terug</a>
 </body>
</html>