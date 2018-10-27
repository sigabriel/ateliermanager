<?php
	$id = $_POST['id'];
	
	$connect = mysqli_connect('127.0.0.1:50018','azure','6#vWHD_$','test');
	
	$sql = "DELETE FROM empresa_atelier WHERE id = '".$id."'";
	$result = mysqli_query($connect,$sql);
	
	echo "<script>window.location.href='../atelier_empresa.php'</script>";
	?>
