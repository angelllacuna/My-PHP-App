<?php 
	include_once("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Script</title>
</head>
<body background="bgrnd.jpg">


<?php
if( isset($_POST['Submit'])){
	
	$iso = mysqli_real_escape_string($mysqli, $_POST['iso']);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$nicename = mysqli_real_escape_string($mysqli, $_POST['nicename']);
	$iso3 = mysqli_real_escape_string($mysqli, $_POST['iso3']);
	$numcode = mysqli_real_escape_string($mysqli, $_POST['numcode']);
	$phonecode = mysqli_real_escape_string($mysqli, $_POST['phonecode']);
	$created_at = mysqli_real_escape_string($mysqli, $_POST['created_at']);

	if(  empty($iso) || empty($name) || empty($nicename) || empty($iso3) || empty($numcode) || empty($phonecode) || empty($created_at)   ){

		

		if(empty($iso)){
			echo "<center><font color='white' size='10px'> iso field is empty. </font><center><br/>";
		}

		if(empty($name)){
			echo "<center><font color='white' size='10px'> name field is empty. </font><center><br/>";
		}

		if(empty($nicename)){
			echo "<center><font color='white' size='10px''> nicename field is empty. </font><center><br/>";
		}
		if(empty($iso3)){
			echo "<center><font color='white' size='10px'> iso3 field is empty. </font><center><br/>";
		}
		if(empty($numcode)){
			echo "<center><font color='white' size='10px'> numcode field is empty. </font><center><br/>";
		}
		if(empty($phonecode)){
			echo "<center><font color='white' size='10px'> phonecode field is empty. </font><center><br/>";
		}
		if(empty($created_at)){
			echo "<center><font color='white' size='10px'> created_at field is empty. </font><center><br/>";
		}

		echo "<br/><font color='yellow' size='10px'><a href='javascript:self.history.back();'>Go Back</font></a>";

	} else {

		$result = mysqli_query($mysqli, "INSERT INTO country( iso, name, nicename, iso3, numcode, phonecode, created_at) VALUES ( '$iso','$name', '$nicename', '$iso3', '$numcode', '$phonecode', '$created_at')");
		echo "<center><font color='yellow' size='10px'> Data Added Successfully.</center>";
		echo "<br/><center><font color='yellow' size='10px'><a href='index.php'> View Result </a></center>";
	}


}
?>


	
</body>
</html>