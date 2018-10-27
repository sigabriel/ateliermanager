<?php
	$id = $_POST['id'];
	
	$connect = mysqli_connect('127.0.0.1:50018','azure','6#vWHD_$','test');
	
	$sql = "DELETE FROM atelier WHERE id = '".$id."'";
	$result = mysqli_query($connect,$sql);
	
	echo mysqli_errno($connect) . ": " . mysqli_error($connect) . "\n";
	?>
