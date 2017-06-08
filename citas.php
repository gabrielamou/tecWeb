<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Citas</title>
<link rel="stylesheet" type="text/css" media="screen" href="css/menubar.css"><!--estilo de la barra de menu--> 
<link rel="stylesheet" type="text/css" href="cont.css">
</head>
<!--ESTA PAGINA SERA VISIBLE SOLO POR EL ADMINISTRADOR -->
<body>
<?php
	//conexion a la base de datos
	$conexion=mysql_connect('localhost','root','12345678');
	mysql_select_db("proyecto",$conexion) or die("no se pudo conectar a la base de datos");
	?>

<header>
<section class="wrapper"><!-- Barra de Menu-->
<div class="menuleft"><a href="index.html"><img src="images/name3.bmp" class="name"/></a></div>
<div class="menuright"><nav class="navbar"><ul class="navul"><li class="navulli"><u class="navullia" onClick="scrollWin(650)">Precios</u></li><li class="navulli"><u class="navullia" onClick="scrollWin(1310)">Agenda Tu Cita</u></li><li class="navulli"><u class="navullia" onClick="window.location.assign('register.html')">Registrate</u></li><li class="navulli"><u class="navullia" onClick="window.location.assign('login.html')">Inicia Sesión</u></li></ul></nav></div>
</section>
</header><!--Fin de Barra de Menu -->
<br><br><br><br><br><br><br><br><br>
<section class="back">
<table width="100%" height="100%">
	<tr>
		<td>
			 <fieldset>
         	<legend>Citas del dia de hoy</legend>
         </fieldset> 
		</td>
		<td>
			
			 <fieldset>
          	<legend>Proxima cita </legend>
          	Faltan: <input type="date" name="rest"><br><br>
          	<table border="1">
          		<tr>
          			<td>ID</td><td>FECHA</td><td>DURACION</td><td>DISPONIBILIDAD</td>
          		</tr>

          		<?php
	//primer linea de cosnulta a la base de datos mostrando con el asterisco todos los datos que tenga la tabla usuario

	$result=mysql_query("select * from citas");
	//sese almacenan los datos en un arreglo
	//se crea una estructura de control

	while ($row=mysql_fetch_array($result)) {
		//mientras la variable row tenga datos haga lo siguiente
		//se cierra php porque se escribira codigo html
	
	?>
	<tr>
		<td><?php echo $row["id_cita"]; ?></td>
		<td><?php echo $row["fecha"]; ?></td>
		<td><?php echo $row["duracion"]; ?></td>
		<td><?php echo $row["disponibilidad"]; ?></td>
		  	
	</tr>
<?php 
}
?>


          	</table>
          </fieldset>

		</td>


		<td>
			
			<fieldset>
          	<legend>Fecha y hora</legend>
          	<table>
          		<tr>
          			<th>Lunes</th>
          			<th>Martes</th>
          			<th>Miercoles</th>
          			<th>Jueves</th>
          			<th>Viernes</th>
          		</tr>
          		<tr>
          			<td></td>
          			<td></td>
          			<td></td>
          			<td></td>
          			<td></td>
          		</tr>
          	</table>
          </fieldset>


		</td>
	</tr>
</table>
</section>
</body>
</html>