<?php
	$id = $_POST['id'];
	$marca = $_POST['marca'];
	$tipo = $_POST['tipo'];
	$cor = $_POST['cor'];
	$quantidade = $_POST['quantidade'];
	
	
	
	
	$connect = mysqli_connect('localhost','root','','test');
	
	$sql = "UPDATE servico set marca='$marca', tipo='$tipo', cor='$cor', quantidade=$quantidade WHERE id = '".$id."'";
	$result = mysqli_query($connect,$sql);
	
	echo "<script>window.location.href='../servico_empresa.php'</script>";
	?>