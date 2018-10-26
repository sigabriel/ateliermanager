<?php 
 
session_start();
$connect = mysqli_connect('localhost','root','','test');

 
  
		$query1 = "SELECT * from empresa_atelier where id_empresa!= '".$_SESSION['id']."'";
        $run = mysqli_query($connect,$query1);
		echo "<label>Ateliers:</label>";
		while($fetch = mysqli_fetch_assoc($run)){
		$query = "SELECT nome from atelier where id = '".$fetch['id_atelier']."'";
        $select = mysqli_query($connect,$query);
		
		echo "<select name='atelier_id' class='form-control' style='width:30%;margin-left:100px;' required>";
		
		foreach($select as $i => $coisa){
		
		echo "<option value='".$coisa["nome"]."' >".$coisa["nome"]."</option>";
		
		}}
		echo "</select>";

		
   ?>