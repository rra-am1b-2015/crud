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
	
	var_dump($record);
?>

<form>
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
	</table>
</form>