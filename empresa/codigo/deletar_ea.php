<?php
	$id = $_POST['id'];
	
	$connect = mysqli_connect('localhost','root','','test');
	
	$sql = "DELETE FROM empresa_atelier WHERE id = '".$id."'";
	$result = mysqli_query($connect,$sql);
	
	echo "<script>window.location.href='../atelier_empresa.php'</script>";
	?>