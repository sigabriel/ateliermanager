<?php
	$id = $_POST['id'];
	
	$connect = mysqli_connect('localhost','root','','test');
	
	$sql = "DELETE FROM atelier WHERE id = '".$id."'";
	$result = mysqli_query($connect,$sql);
	
	echo mysqli_errno($connect) . ": " . mysqli_error($connect) . "\n";
	?>