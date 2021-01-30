<?php 
	include_once("config.php");

	$result = mysqli_query($mysqli, "SELECT * FROM country");

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link href="style.css" rel="stylesheet" type="text/css" media="all">
	<title>Homepage</title>
</head>
<body background="bgrnd.jpg">
	<h1><center><font color='yellow' size='8px'><?php echo "Country PHP Web Application"; ?></font>
	<br>
	<a href="add.html"><font color='white' size='8px'>Add new Data</a></font><br/><br/>
	</center>
	</h1>
	<center><table ></center>
		<tr bgcolor='#cccccc' style="font-size:25px">
			<td>ID </td>
			<td>ISO </td>
			<td>NAME</td>
			<td>NICENAME</td>
			<td>ISO3</td>
			<td>NUMCODE</td>
			<td>PHONECODE</td>
			<td>CREATED_AT</td>
			<td></td>
		</tr>


		<?php 

		while( $res = mysqli_fetch_array($result)){
			echo "<tr>";
			echo "<td>".$res['id']."</td>";
			echo "<td>".$res['iso']."</td>";
			echo "<td>".$res['name']."</td>";
			echo "<td>".$res['nicename']."</td>";
			echo "<td>".$res['iso3']."</td>";
			echo "<td>".$res['numcode']."</td>";
			echo "<td>".$res['phonecode']."</td>";
			echo "<td>".$res['created_at']."</td>";
			echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete this record?')\">Delete</a></td>";
			echo "</tr>";
		} 

		?>



	</table>
	
</body>
</html>