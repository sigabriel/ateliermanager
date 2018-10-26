<?php 
  
  $connect = mysqli_connect('localhost','root','','test');
  
      $array = array();
      $verifica = mysqli_query($connect,"SELECT * FROM empresa_atelier where id_empresa = '".$_SESSION['id']."'") or die("erro ao selecionar");
		
			
		while($fetch = mysqli_fetch_assoc($verifica)){
		
		//select nome do atelier
		$sql = "SELECT id,nome from atelier where id = '".$fetch['id_atelier']."'";
		
		$results = mysqli_query($connect,$sql);
		
		$row = mysqli_fetch_array($results);
		
		$atelier_nome = $row['nome'];
		//final
		
		if (in_array($fetch['id'], $array)) { 
		$array[] = $fetch['id'];
		
		}else{
			echo "<div class='container'>
				
			<div class='loaders0'>
			
			<br>
				<div class='elements_title'>".$atelier_nome."</div><br><br>
                  	      <div class='box-body'>
              
				
		<table id='example2' class='table table-bordered table-hover'>
                            <thead>
                            <tr style='background-color:#ecf0f1;'>
                              <th>Marca</th>
                              <th>Tipo</th>
                              <th>Cor</th>
                              <th>Quantidade</th>
            				          <th>Status</th>
								<th>acoes</th>
                              </tr>
                            </thead>
                          <tbody>";
			
		$verifica2 = mysqli_query($connect,"SELECT * FROM servico where atelier_id = '".$fetch['id_atelier']."'") or die("erro ao selecionar");	
		while($fetch5 = mysqli_fetch_assoc($verifica2)){
		
		echo "<form method='POST' action='codigo/deletar_servico.php'>
						  <tr>
					<td>".$fetch5['marca']."</td>
					<td>".$fetch5['tipo']."</td> 
					<td>".$fetch5['cor']."</td>
					<td>".$fetch5['quantidade']."</td>
					<td>".$fetch5['status']."</td>
					<td style='width:17%;'>
					
					<input type='hidden' name='id' value='".$fetch5['id']."'/>
					<input type='submit' class='btn btn-danger' OnClick=\"return confirm('Tem certeza que deseja excluir essse item?');\" value='Excluir'/>
					</form>
					<form method='POST' action='formulario/alterar.php'>
					<input type='hidden' name='id' value='".$fetch5['id']."'/>
					<input type='submit' class='btn btn-info' value='Alterar'/>
					</form>
					</td>
				  </tr>
				  
				";
			
		}
		echo "</tbody>
					</table>
  



  </div>
                  </div>
              <hr>
              </div>
            </div>";
		}
		$array[] = $fetch['id'];
		
		
		}
?>