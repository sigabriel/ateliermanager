<?php 
 
session_start();
$atelier_nome = $_POST['atelier_id'];

$connect = mysqli_connect('localhost','root','','test');

		$sql = "SELECT id from atelier where nome = '".$atelier_nome."'";
		
		$results = mysqli_query($connect,$sql);
		
		$row= mysqli_fetch_array($results);

		$atelier_id = $row['id'];
	
		
		
		$query = "INSERT INTO empresa_atelier (id_empresa,id_atelier) VALUES ('".$_SESSION['id']."','$atelier_id')";
        $insert = mysqli_query($connect,$query);
		echo "<script>window.location.href='../atelier_empresa.php'</script>";
        
         
        
      
    
?>