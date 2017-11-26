<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}

?>
<html>
	<head>
	<meta charset="UTF-8">
		<title>.: HOME :.</title>
		<link rel="stylesheet" type="text/css" href="css/home.css">
		<link rel="stylesheet" type="text/css" href="css/fontt/css/fontello.css">
			<img src="fondo.JPG">

			</head>
	<body>
	<?php include "php/navbar.php"; ?>


<center><h1 class="tabla">TABLAS DE MULTIPLICAR</h1></center>

<CENTER>
	<div class="t">
		<ul >
			<li><a href="css/tablas/2.jpg"  target="_blank">2</a></li>
			<li><a href="css/tablas/3.jpg"  target="_blank">3</a></li>
			<li><a href="css/tablas/4.jpg"  target="_blank">4</a></li>
			<li><a href="css/tablas/5.jpg"  target="_blank">5</a></li>
		

		</ul>
	</div>
	

	<div class="t">
		<ul >
			<li><a href="css/tablas/6.jpg"  target="_blank">6</a></li>
			<li><a href="css/tablas/7.jpg"  target="_blank">7</a></li>
			<li><a href="css/tablas/8.jpg"  target="_blank">8</a></li>
			<li><a href="css/tablas/9.jpg"  target="_blank">9</a></li>
			

		</ul>
	</div>







	<div class="p">
		<p>INSTRUCCIONES DEL JUEGO<br>
<br>
Bienvenido a nuestra pagina de refuerzo,
 para comenzar el juego escoge uno de los niveles, 
 avanza los obstaculos resolviendo los problemas de multiplicacion 
 que te apareceran en el desarrollo del juego. 


		</p>
	</div>
</CENTER>

</body>

<div class="social">
<ul>
	<li><a href="index.html" target="_blank" class="icon-facebook-circled">N I V E L 1</a></li>
	<li><a href="mario/index.php" target="_blank" class="icon-twitter">N I V E L 2</a></li>
	<li><a href="mario/index.php" target="_blank" class="icon-gplus">N I V E L 3</a></li>
	<li><a href="puntajes.php" class="icon-dropbox">RANQUIN </a></li>
</ul>






</html>