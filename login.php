<?php session_start(); ?>
<html>
	<head>
		<title>Formulario de Registro</title>
<link rel="stylesheet" type="text/css" href="css/login.css">
	<body>
	<?php include "php/navbar.php"; ?>


<form role="form" name="login" action="php/login.php" method="post">
	<label form="">Iniciar sesion</label>
		<br> 

	<input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario" required>
		<br>

	<input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
		<br>

<center><button type="submit" class="btn btn-default">Acceder</button></center>


</form>                          
</div>
</div>
</div>
		
	</body>
</html>