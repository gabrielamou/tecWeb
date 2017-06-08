<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Iniciar sesión</title>
<link rel="stylesheet" type="text/css" media="screen" href="css/menubar.css"><!--estilo de la barra de menu--> 
</head>

<body>
<header>
<section class="wrapper"><!-- Barra de Menu-->
<div class="menuleft"><a href="index.html"><img src="images/name3.bmp" class="name"/></a></div>

<div class="menuright"><nav class="navbar">
<ul class="navul">

<li class="navulli"><u class="navullia" onClick="window.location.assign('register.html')">Registrate</u></li>
<li class="navulli"><u class="navullia" onClick="window.location.assign('login.php')">Inicia Sesión</u></li>

</ul></nav></div>
</section>
</header><!--Fin de Barra de Menu -->
<section class="back">
Hola
</section>
<div class="separator"><img src="images/trat.bmp" class="sep"/><br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;</div>
<div class="back">
<form action="" method="POST">
	<p>Usuario: <input type="text" name="user"> </p><br>
	<p>Contraseña: <input type="text" name="password"></p>
	<input type="submit" name="Entrar"><br><br>
	<a href="">¿Olvidaste tu contraseña?</a>
	 <?php
  if ($_POST)/*si se presiona el boton enviar*/ {

    $Usuario=$_POST['user'];
    $contraseña=$_POST['password'];
    
    #ABRIR LA SESION SI USUARIO='ANDREA LOPEZ' && CONSTRASEÑA='ADMIN';
    
    echo "<h2>dato guardado </h2>";

      }
?>
</form>
</div>
</body>
</html>
