<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Atelier | Servicos</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap4/bootstrap.min.css">
<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="../styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="../styles/responsive.css">
 
</head>
        <div class="super_container">
        	<header class="header">
        		<div class="container">
        			<div class="row">
        				<div class="col">
        					<div class="header_content d-flex flex-row align-items-center justify-content-start">
        						<div class="logo">
        							<a href="dashboard_atelier.php"><img src="../images/logo.png" alt=""></a>
        						  </div>
						            <nav class="main_nav">
            							<ul>
            								<li><a href="dashboard_atelier.php">Dashboard</a></li>
											<li class="active"><a href="servico_atelier.php">Servicos</a></li>
											<li ><a href="empresa_atelier.php">Empresas</a></li>					  
          		 							</ul>
          								</nav>
          						</div>
          					</div>
			       <div class="title00">
                <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><img src="../images/icon.png" class="avatar"><h><?php echo $_SESSION['nome'];?></h>  </a><ul class="dropdown-menu">
                  <li><a href="#" class="dropdown-item"><i class="fa fa-user-o"> </i> Perfil</a></li>
                  <li><a href="#" class="dropdown-item"><i class="fa fa-sliders"> </i> Status</a></li>
                  <li class="divider dropdown-divider"></li>
                  <li><a href="../index.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a></li>
                  </ul>
                </li>
              </div>
            </div>
</header>

            <div class="container">
                 <div class="loaders0">
            						<div class="elements_title">Susana Santos</div><br><br>
                  	      <div class="box-body">
                          <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr style="background-color:#ecf0f1;">
                              <th>Marca</th>
                              <th>Tipo</th>
                              <th>Cor</th>
                              <th>Quantidade</th>
            				          <th>Status</th>
                              </tr>
                              </thead>
                              <tbody>
                            <tr>
                              <td>Zatz</td>
                              <td>Sola</td>
                              <td>Preto</td>
                              <td>200</td>
            				          <td>Em espera</td>
                            </tr>
                            <tr>
                              <td>Marisa</td>
                              <td>Palmilha</td>
                              <td>Preto</td>
                              <td>3400</td>
                              <td>Em progresso</td>
                            </tr>
                            <tr>
                              <td>Penelope</td>
                              <td>Palmilha</td>
                              <td>Bege</td>
                              <td>120</td>
                              <td>Finalizado</td>
                            </tr>
                            </tr>
                           </tbody>
                          </table>
    

        <button type="button" class="btn btn-info" style="float:right;margin-right:5px;">Alterar</button>
          </div>
            </div>
              <hr>
                </div>
                  </div>


        <div class="elements">  
      <div class="container">
           <div class="loaders0">
      						<div class="elements_title">Barbara Kras</div><br><br>
            	      <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                      <thead>
                      <tr style="background-color:#ecf0f1;">
                        <th>Marca</th>
                        <th>Tipo</th>
                        <th>Cor</th>
                        <th>Quantidade</th>
      				  <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td>Oneself</td>
                        <td>Biqueira</td>
                        <td>Marron</td>
                        <td>600</td>
                        <td>Finalizado</td>
                      </tr>
                      <tr>
                        <td>Barbara Kras</td>
                        <td>Palmilha</td>
                        <td>Cinza</td>
                        <td>5000</td>
                        <td>Em espera</td>
                      </tr>
                      <tr>
                        <td>Maria Rosa</td>
                        <td>Tiras</td>
                        <td>Brnaco</td>
                        <td>100</td>
                        <td>Em espera</td>
                      </tr>
                      </tr>
                     
                     </tbody>
                    </table>
              
		  
		  <button type="button" class="btn btn-info" style="float:right;margin-right:5px;">Alterar</button>
      </div>
        </div>
          <hr>
            </div>
              </div>

        <div class="elements">  
      <div class="container">
           <div class="loaders0">
      						<div class="elements_title">Ala</div><br><br>
            	      <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                      <thead>
                      <tr style="background-color:#ecf0f1;">
                        <th>Marca</th>
                        <th>Tipo</th>
                        <th>Cor</th>
                        <th>Quantidade</th>
      				  <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td>Ala</td>
                        <td>Tiras</td>
                        <td>Cinza</td>
                        <td>1000</td>
                        <td>Em espera</td>
                      </tr>
                      <tr>
                        <td>Zatz</td>
                        <td>Palmilha</td>
                        <td>Preto</td>
                        <td>500</td>
      			      <td>Em progresso</td>
                      </tr>
                      <tr>
                        <td>Constance</td>
                        <td>Sola</td>
                        <td>Branco</td>
                        <td>1000</td>
      				  <td>Finalizado</td>
                      </tr>
                      </tr>
                     
                     </tbody>
                    </table>
            
      <button type="button" class="btn btn-info" style="float:right;margin-right:5px;">Alterar</button>
      </div>
        </div>
          <hr>
            </div>
              </div>
		  
		  

        <div class="elements">  
      <div class="container">
           <div class="loaders0">
      						<div class="elements_title">Via Scarpa</div><br><br>
            	      <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                      <thead>
                      <tr style="background-color:#ecf0f1;">
                        <th>Marca</th>
                        <th>Tipo</th>
                        <th>Cor</th>
                        <th>Quantidade</th>
      				  <th>Status</th>
      				</tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td>Via Scarpa</td>
                        <td>Biqueira</td>
                        <td>Preto</td>
                        <td>1100</td>
                        <td>Em espera</td>
                      </tr>
                      <tr>
                        <td>Riachuelo</td>
                        <td>Palmilha</td>
                        <td>Vermelho</td>
                        <td>5000</td>
                        <td>Em progresso</td>
                      </tr>
                      <tr>
                        <td>City Shoes</td>
                        <td>Sola</td>
                        <td>Preto</td>
                        <td>250</td>
                        <td>Em progresso</td>
                      </tr>
                      </tr>
                     
                     </tbody>
                    </table>
                     
      
    
      <button type="button" class="btn btn-info" style="float:right;margin-right:5px;">Alterar</button>
      </div>
        </div>
          <hr>
            </div>
              </div>

<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../styles/bootstrap4/popper.js"></script>
<script src="../styles/bootstrap4/bootstrap.min.js"></script>
<script src="../plugins/greensock/TweenMax.min.js"></script>
<script src="../plugins/greensock/TimelineMax.min.js"></script>
<script src="../plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="../plugins/greensock/animation.gsap.min.js"></script>
<script src="../plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="../plugins/jquery-circle-progress-1.2.2/circle-progress.js"></script>
<script src="../plugins/easing/easing.js"></script>
<script src="../plugins/parallax-js-master/parallax.min.js"></script>
<script src="../js/elements.js"></script>
</body>
</html>