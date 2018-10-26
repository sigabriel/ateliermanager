<?php 
 
$email = $_POST['email'];
$senha = $_POST['senha'];


$connect = mysqli_connect('localhost','root','','test');

 
  
		
        $query = "Select * from atelier where email = '".$email."' and senha = '".$senha."'";
        $insert = mysqli_query($connect,$query);
		$total = mysqli_num_rows($insert);
		
		if($total > 0){
		$results = mysqli_query($connect,$query);
		
		$row = mysqli_fetch_array($results);
		
		$atelier_nome = $row['nome'];
		
		session_start();
		$_SESSION['nome'] = $atelier_nome; 
		
		echo "<script>window.location.href='../dashboard_atelier.php'</script>";
		}else{
			echo "<script>alert('email ou senha incorretos')</script>";
			echo "<script>window.location.href='../formulario/login_atelier.html'</script>";
			
		}
        
      

?>