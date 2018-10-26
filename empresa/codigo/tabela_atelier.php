<?php 
  
  $connect = mysqli_connect('localhost','root','','test');
      $verifica = mysqli_query($connect,"SELECT * FROM empresa_atelier where id_empresa = '".$_SESSION['id']."'") or die("erro ao selecionar");
		
		echo "<div class='container'>
				
			<div class='loaders0'>
			
			<br>
				<div class='elements_title'>Ateliers</div><br><br>
                  	      <div class='box-body'>
              
				
			<table id='example2' class='table table-bordered table-hover'>
                            <thead>
                            <tr style='background-color:#ecf0f1;'>
                              <th>Nome</th>
                              <th>Endereco</th>
                              <th>Telefone</th>
                              <th>Quantidade Servico</th>
            				  <th>acoes</th>
                              </tr>
                            </thead>
                          <tbody>
						  
						  ";
		
		while($fetch = mysqli_fetch_assoc($verifica)){
			$verifica2 = mysqli_query($connect,"SELECT * FROM atelier where id = '".$fetch['id_atelier']."'");
			while($fetch5 = mysqli_fetch_assoc($verifica2)){
		echo "
					<form method='POST' action='codigo/deletar_ea.php'>
					<tr>
					<td>".$fetch5['nome']."</td>
					<td>".$fetch5['endereco']."</td> 
					<td>".$fetch5['telefone']."</td>
					<td>".$fetch5['qtd_servico']."</td>
					<input type='hidden' name='id' value='".$fetch['id']."'/>
					<td style='width:17%;'><input type='submit' class='btn btn-danger' OnClick=\"return confirm('Tem certeza que deseja excluir essse item?');\" value='Excluir'/>
					</td>
					
					
					</tr>
					</form>";
		}}
		echo "</tbody>
				
				</table>
  



  </div>
                  </div>
              <hr>
              </div>
            </div>";
		
?>