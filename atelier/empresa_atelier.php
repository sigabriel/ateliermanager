<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Atelier | Empresa</title>
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
<body>
      	<header class="header">
      		<div class="container">
      			<div class="row">
      				<div class="col">
      					<div class="header_content d-flex flex-row align-items-center justify-content-start">
      						<div class="logo">
      							<a href="dashboard_empresa.php"><img src="../images/logo.png" alt=""></a>
      						</div>
						        <nav class="main_nav">
							       <ul>
										<li><a href="dashboard_atelier.php">Dashboard</a></li>
										<li ><a href="servico_atelier.php">Serviços</a></li>
										<li class="active"><a href="empresa_atelier.php">Empresas</a></li>
										
										</ul>
      								</nav>
      							</div>
      					</div>
      			 <div class="title00"> 
                <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><img src="../images/icon.png" class="avatar" alt="Avatar"><h><?php echo $_SESSION['nome'];?></h></a>      
                    <ul class="dropdown-menu">
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
                 <div class="loaders0"><br>
            						<div class="elements_title">Empresas</div><br><br>
                  	      <div class="box-body">
                          <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr style="background-color:#ecf0f1;">
                              <th>Nome Propietario</th>
                              <th>Endereço</th>
                              <th>Telefone</th>
                              <th>Qtd Serviços</th>
                              </tr>
                            </thead>
                          <tbody>
                            <tr>
                              <td>Suzana Santos</td>
                              <td>Itajai</td>
                              <td>(47)99999999</td>
                              <td>10000</td>
                             
                            </tr>
                            <tr>
                              <td>Barbara Kras</td>
                              <td>Navegantes</td>
                              <td>(47)99999999</td>
                              <td>5000</td>
                            
                            </tr>
                            <tr>
                              <td>Ala</td>
                              <td>Brusque</td>
                              <td>(47)99999999</td>
                              <td>1000000</td>
                            
                            </tr>
            				        <tr>
                              <td>Via Scarpa</td>
                              <td>São joão</td>
                              <td>(47)99999999</td>
                              <td>2300</td>
                            </tr>
            				<tr>
                              <td>Cor da Flor</td>
                              <td>Brusque</td>
                              <td>(47)99999999</td>
                              <td>1000000</td>
                            </tr>
							</tbody>
                          </table>
                       </div>
                          </div>
                        
                      </div>
                    </div>
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