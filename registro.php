<?php session_start(); ?>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="css/registro.css">
	<body>
	<?php include "php/navbar.php"; ?>
	</body>

	
<form role="form" name="registro" action="php/registro.php" method="post">

<label form="">Registro</label>
<br>

<input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario" required>
<br>

<input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nombre Completo"required>
<br>

<input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico"required>
<br>

<input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a"required>
<br>

<input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmar Contrase&ntilde;a"required>
<br>

<center><button type="submit" class="btn btn-default">Registrar</button></center>
</form>

</div>
</div>
</div>

		<script src="js/valida_registro.js"></script>

</html>