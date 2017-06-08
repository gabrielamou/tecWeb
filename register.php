<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Registrar cliente</title>
<link rel="stylesheet" type="text/css" media="screen" href="css/menubar.css"><!--estilo de la barra de menu--> 
</head>

<body>
<header>
<section class="wrapper"><!-- Barra de Menu-->
<div class="menuleft"><a href="index.html"><img src="images/name3.bmp" class="name"/></a></div>
<div class="menuright"><nav class="navbar"><ul class="navul">
</ul></nav></div>
</section>
</header><!--Fin de Barra de Menu -->
<br><br><br><br>

<section class="back">
Hola
<br><br><br>
<?php
  //conexion a la base de datos
  $conexion=mysql_connect('localhost','root','12345678');
  mysql_select_db("proyecto",$conexion) or die("no se pudo conectar a la base de datos");
  ?>
<?php
//se manda llamar el archivo donde se realiza la conexion a la base de datos
include("conexion.php");
?>
<form action="" method="POST">
	<fieldset>
		<legend>Registrar paciente</legend>

				Id: <input type="text" name="id"><br>	
				Nombre: <input type="text" name="nombre"><br>
				Telefono: <input type="text" name="tel"><br>
				Dirección: <input type="text" name="dir"><br>
				Email: <input type="text" name="email"><br>
			
		<input type="submit" name="enviar" value="enviar">
	</fieldset>
</form>
<?php
	if ($_POST)/*si se presiona el boton enviar*/ {

		$id=$_POST['id'];
		$nombre=$_POST['nombre'];
		$tel=$_POST['tel'];
		$dir=$_POST['dir'];
		$email=$_POST['email'];
		mysqli_query("INSERT INTO cliente(nombre,telefono,direccion,email) VALUES('$nombre','$tel','$dir','$email') ") or die(mysql_error());
		echo "<h2>dato guardado </h2>";
			}
?>

</section>
</body>
</html>
