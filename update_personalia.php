<?php
	/* Ontwikkelings dingen
	echo "Update personalia page<br>";
	echo "Mijn schoenmaat is: ".$_GET['schoenmaat']."<br>";
	echo "Mijn opleiding waar ik een diploma voor heb is: ".$_GET['opleiding'];
	
	echo "Record id: ".$_GET['id'];
	*/
	
	include("db_connect.php");
	
	$query = "SELECT * FROM `personalia` WHERE `id` = '".$_GET['id']."' ";
	
	$result = mysqli_query($conn, $query);
	
	$record = mysqli_fetch_assoc($result);
	
	//var_dump($record);
	//echo $record["haarkleur"];
?>
<h3>Wijzig zo nodig de onderstaande gegevens en druk op de knop....</h3>

<form method="post" action="do_update_personalia.php">
	<table>
		<tr>
			<td>voornaam</td>
			<td>
				<input type='text' 
					   name='voornaam'
					   value='<?php echo $record['voornaam']; ?>'>			
			</td>
		</tr>
		<tr>
			<td>tussenvoegsel</td>
			<td>
				<input type='text' 
					   name='tussenvoegsel'
					   value='<?php echo $record['tussenvoegsel']; ?>'>			
			</td>
		</tr>
		<tr>
			<td>achternaam</td>
			<td>
				<input type='text' 
					   name='achternaam'
					   value='<?php echo $record['achternaam']; ?>'>			
			</td>
		</tr>
		<tr>
			<td>e-mail</td>
			<td>
				<input type='email' 
					   name='email'
					   value='<?php echo $record['email']; ?>'>			
			</td>
		</tr>
		<tr>
			<td>wachtwoord</td>
			<td>
				<input type='password' 
					   name='wachtwoord'
					   value='<?php echo $record['wachtwoord']; ?>'>			
			</td>
		</tr>
		<tr>
			<td>leeftijd</td>
			<td>
				<input type='number' 
					   name='leeftijd'
					   value='<?php echo $record['leeftijd']; ?>'>			
			</td>
		</tr>
		<tr>
			<td>haarkleur</td>
			<td>
				<select name="haarkleur">
					<option>--kies een haarkleur--</option>
						
						<option value="023-bruin" 
								<?php
									if ( $record['haarkleur'] == "023-bruin")
									{
										echo "selected";									
									}								
								?>>						
							bruin						
						</option>						
						<option value="024-blond"
								<?php
									if ( $record['haarkleur'] == "024-blond")
									{
										echo "selected";									
									}								
								?>>
							blond
						</option>
						<option value="025-grijs"
								<?php
									if ( $record['haarkleur'] == "025-grijs" )
									{
										echo "selected";
									}
								?>>
								grijs
						</option>
						<option value="026-rood" 
								<?php
									if ( $record['haarkleur'] == "026-rood" )
									{
										echo "selected";
									}
								?>>
									peentjesrood
						</option>
						<option value="027-zwart"
								<?php
									if ( $record['haarkleur'] == "027-zwart")
									{
										echo "selected";									
									}								
								?>>
							zwart
						</option>
						<option value="028-roze"
								<?php
									if ( $record['haarkleur'] == "028-roze")
									{
										echo "selected";									
									}								
								?>>
							roze
						</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>geboortedatum: </td>
			<td>
				<input type="date" 
					   name="geboortedatum"
					   value="<?php
								echo $record["geboortedatum"];					   
							  ?>">		
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="update record" name="submit"></td>
		</tr>
	</table>
</form>