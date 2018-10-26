<?php 
 
$nome = $_POST['nome'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];
$senha1 = $_POST['senha1'];
if($senha != $senha1){
echo "<script>alert('senha incorreta')</script>";
echo "<script>window.location.href='../formulario/cadastro_atelier.html'</script>";
}else{

$connect = mysqli_connect('localhost','root','','test');

 
  
      
        $query = "INSERT INTO atelier (nome,email,endereco,telefone,senha) VALUES ('$nome','$email','$endereco','$telefone','$senha')";
        $insert = mysqli_query($connect,$query);
		echo "<script>window.location.href='../formulario/login_atelier.html'</script>";
         
        
      
}
?>