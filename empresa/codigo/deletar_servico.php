<?php
	$id = $_POST['id'];
	
	$connect = mysqli_connect('localhost','root','','test');
	
	$sql = "DELETE FROM servico WHERE id = '".$id."'";
	$result = mysqli_query($connect,$sql);
	
	echo "<script>window.location.href='../servico_empresa.php'</script>";
        
	?>