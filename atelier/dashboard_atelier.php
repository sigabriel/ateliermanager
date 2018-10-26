<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Dashboard|Atelier</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap4/bootstrap.min.css">
<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="../styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="../styles/responsive.css">
<link href="../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
<link href="../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
<link href="../vendor/wow/animate.css" rel="stylesheet" media="all">
<link href="../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
<link href="../vendor/slick/slick.css" rel="stylesheet" media="all">
<link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
<link href="../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
</head>
<header>

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
								<li class="active" ><a href="dashboard_atelier.php">Dashboard</a></li>
								<li ><a href="servico_atelier.php">Servicos</a></li>
								<li ><a href="empresa_atelier.php">Empresas</a></li>
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
                      <li><a href="codigo/logout.php" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a></li>
                    </ul>       
                    </li>
                </div>
            </div>
	</header>
	
		<body>
			<div class="container">
				<div class="loaders1"><br>
						<div class="elements_title">Atelier do Marcos</div><br><br><br>

	                <div class="section__content section__content--p30">
	                    <div class="container-fluid">
	                        <div class="row">
	                             <div class="col-lg-6">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 m-b-40">Produçao por dia</h3>
                                        <canvas id="singelBarChart"></canvas>
                                    </div>
                                </div>
                            </div>
                      			
                           			<div class="col-lg-5">
                                		<div class="au-card m-b-30">
                                   			<div class="au-card-inner">
                                        		<h3 class="title-2 m-b-40">Total de serviço do atelier</h3>
                                        			<canvas id="pieChart"></canvas>
                                    				</div>
                                				</div>
                            				</div>
                                  </div>
                                </div>
                              </div>
                	          </div>
                	        </div>
                	      </div>


    <script src="../vendor/jquery-3.2.1.min.js"></script>
    <script src="../vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <script src="../vendor/slick/slick.min.js"></script>
    <script src="../vendor/wow/wow.min.js"></script>
    <script src="../vendor/animsition/animsition.min.js"></script>
    <script src="../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="../vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="../vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../vendor/select2/select2.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../bower_components/jquery/dist/jquery.min.js"></script> 
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../dist/js/adminlte.min.js"></script>
  
</body>
</html>