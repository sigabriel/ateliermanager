<?php 

  $id = $_POST['id'];
  $connect = mysqli_connect('127.0.0.1:50018','azure','6#vWHD_$','test');
      
      $verifica = mysqli_query($connect,"SELECT * FROM servico WHERE id = '".$id."'") or die("erro ao selecionar");
		
		
		while($fetch5 = mysqli_fetch_assoc($verifica)){
		echo "
			<form method='POST' action='../codigo/update_servico.php'>
		<div class='container' >
				
			<div class='loaders0'>
			
			<br>
				<div class='elements_title' >Altera</div><br><br>
                  	      <div class='box-body' >
              
				
		<table id='example2' class='table table-bordered table-hover' '>
                            <thead>
                            <tr style='background-color:#ecf0f1;'>
                              <th>Marca</th>
                              <th>Tipo</th>
                              <th>Cor</th>
                              <th>Quantidade</th>
            				  
                              </tr>
                            </thead>
                          <tbody>
							  <tr>
					<td><input name='marca' value='".$fetch5['marca']."'/></td>
					<td><input name='tipo' value='".$fetch5['tipo']."'/></td> 
					<td><input name='cor' value='".$fetch5['cor']."'/></td>
					<td><input name='quantidade' type='number' value='".$fetch5['quantidade']."'/></td>
					
					<input type='hidden' name='id' value='".$fetch5['id']."'/>
					
					</tr>
				  </tbody>
				  
					</table>

								<a href='../servico_empresa.php' style='float:right;' class='btn btn-danger'>Cancelar</a>
								<input type='submit' float:right;' class='btn btn-info' style='float:right;' value='Alterar'/>
				  </div>
                  </div>
              
              </div>
            </div>
								
				</form>
				  
								";

		}
								?>
