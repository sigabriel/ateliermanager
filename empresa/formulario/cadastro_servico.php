<html>
<head>
<title>Cadastro de Usuario</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap4/bootstrap.min.css">
<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<body>

<CENTER><h1>Cadastro</h1></CENTER>
<form method="POST" action="codigo/insere_servico.php">
<label>Marca:</label><input type="text" name="marca" required><br>
<label>Tipo:</label><input type="text" placeholder="Ex: taloneira,sola..." name="tipo" required><br>
<label>Cor:</label><input type="text" name="cor" required><br>
<label>Quantidade:</label><input type="number" name="qtd_servico" required><br>
<?php include "../codigo/select_atelier.php"; ?><br><br><br>
<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
</form>
</body>
</html>