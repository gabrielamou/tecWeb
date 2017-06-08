<html>
<head>
<title>Conexion a BD PhP y  mysql</title>

</head>
<body>
<header>
<section class="wrapper"><!-- Barra de Menu-->
<div class="menuleft"><a href="index.php"><img src="images/name3.bmp" class="name"/></a></div>
<div class="menuright"><nav class="navbar"><ul class="navul">
</ul></nav></div>
</section>
</header><!--Fin de Barra de Menu -->
<br><br><br><br>

	<?php
	//conexion a la base de datos
	$conexion=mysql_connect('localhost','root','12345678');
	mysql_select_db("proyecto",$conexion) or die("no se pudo conectar a la base de datos");
	?>
	<table border="1">
		<tr>
			<td colspan="4">Cliente</td>

		</tr>
		<tr>
			<td>id</td>
			<td>nombre</td>
			<td>telefono</td>
			<td>direccion</td>
			<td>email</td>
		</tr>
	<?php
	//primer linea de cosnulta a la base de datos mostrando con el asterisco todos los datos que tenga la tabla usuario

	$result=mysql_query("select * from cliente");
	//sese almacenan los datos en un arreglo
	//se crea una estructura de control

	while ($row=mysql_fetch_array($result)) {
		//mientras la variable row tenga datos haga lo siguiente
		//se cierra php porque se escribira codigo html
	
	?>
	<tr>
		<td><?php echo $row["id_cliente"]; ?></td>
		<td><?php echo $row["nombre"]; ?></td>
		<td><?php echo $row["telefono"]; ?></td>
		<td><?php echo $row["direccion"]; ?></td>
		<td><?php echo $row["email"]; ?></td>
	</tr>

<?php 
}
?>
	</table>


<table border="1">
		<tr>
			<td colspan="4">Citas</td>

		</tr>
		<tr>
			<td>id cita</td>
			<td>fecha</td>
			<td>duracion</td>
			<td>disponibilidad</td>
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

</body>
</html>