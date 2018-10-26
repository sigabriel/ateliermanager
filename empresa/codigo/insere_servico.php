<?php 
 
$marca = $_POST['marca'];
$tipo = $_POST['tipo'];
$cor = $_POST['cor'];
$qtd_servico = $_POST['qtd_servico'];
$atelier_nome = $_POST['atelier_id'];

$connect = mysqli_connect('localhost','root','','test');

		$sql = "SELECT id from atelier where nome = '".$atelier_nome."'";
		
		$results = mysqli_query($connect,$sql);
		
		$row= mysqli_fetch_array($results);

		$atelier_id = $row['id'];
	
		
		
		$query = "INSERT INTO servico (marca,tipo,cor,quantidade,status,atelier_id) VALUES ('$marca','$tipo','$cor','$qtd_servico','em aberto','$atelier_id')";
        $insert = mysqli_query($connect,$query);
		echo "<script>window.location.href='../servico_empresa.php'</script>";
         
        
      
    
?>