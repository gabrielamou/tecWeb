<!DOCTYPE html>
<html>
<!-- CONEXION.PHP -->
<head>
	<title></title>
</head>
<body>
<?php
$servidor="localhost";
$usuario="root";
$clave="12345678";
$bd="proyecto";
mysql_connect($servidor,$usuario,$clave);
mysql_select_db($bd);
?>
</body>
</html>