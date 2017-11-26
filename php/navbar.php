
<html>
  <head>
  <meta charset="UTF-8">
    <title>menu</title>
  <link rel="stylesheet" type="text/css" href="css/menu.css">
      </head>



  <body>
  <header>
     <nav>
     <div id="menu">
        <ul>
           <li><a  href="index.php">INICIO</a></li> 
           
<?php if(!isset($_SESSION["user_id"])):?>


           <li><a href="./login.php">LOGIN</a></li>
           <li><a href="./registro.php">REGISTRAR</a></li>
         
         

 <?php else:?>

<li> <a href="./home.php">HOME</a></li> 
<li class="salir-r"><a  href="./php/logout.php">SALIR</a></li>

          

    <?php endif;?>

        </ul>
        </div>
     </nav> 
  </header>
  </body>
</html>