<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>DEA</title>
<link rel="stylesheet" type="text/css" media="screen" href="css/index.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/w3.css">
<script src="js/scroll.js"></script>
</head>
<body>

<header>
<section class="wrapper">
<div class="menuleft"><a href="index.html"><img src="images/name3.bmp" class="name"/></a></div>
<div class="menuright"><nav class="navbar"><ul class="navul"><li class="navulli"><u class="navullia" onClick="scrollWin(650)">Precios</u></li><li class="navulli"><u class="navullia" onClick="scrollWin(1310)">Agenda Tu Cita</u></li><li class="navulli"><u class="navullia" onClick="window.location.assign('register.php')">Registrate</u></li><li class="navulli"><u class="navullia" onClick="window.location.assign('login.php')">Inicia Sesión</u></li></ul></nav></div>
</section>
</header>
<section class="back">
<div class="w3-content w3-display-container">
<div class="w3-display-container mySlides"><img src="images/1.jpg" style="width:100%"><div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">Las mejores instalaciones y equipo de la más alta calidad</div></div>
<div class="w3-display-container mySlides"><img src="images/2.jpg" style="width:100%"><div class="w3-display-bottomright w3-large w3-container w3-padding-16 w3-black"> Contamos con un amplia gamma de tratamientos dentales</div></div>
<div class="w3-display-container mySlides"><img src="images/3.jpg" style="width:100%"><div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">Ofrecemos distintos tratamientos de Ortodoncia.Conoce el nivel de comodidad, facilidad de limpieza, estética,precios de brackets y más.</div></div>
<button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button> 

</div>
<br><br>
<div class="separator"><img src="images/trat.bmp" class="sep"/><br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;</div>
<div class="back">
<br>
<table>
  <tr>
    <th>Limpieza desde</th>
    <td class="precio">$600</td>
  </tr>
  <tr>
    <th>Resina desde</th>
    <td class="precio">$700</td>
  </tr>
  <tr>
    <th>Endodoncia desde</th>
    <td class="precio">$3,000</td>
  </tr>
  <tr>
    <th>Coronas desde</th>
    <td class="precio">$5,000</td>
  </tr>
  <tr>
    <th>Brackets desde</th>
    <td class="precio">$6,000</td>
  </tr>
  <tr>
    <th>Implantes desde</th>
    <td class="precio">$9,000</td>
  </tr>
</table>
<br>
</div>
<div class="pago">
<br><img src="images/cards1.png" class="cards"/>
<p>Paga tu tratamiento a<br><b>meses sin intereses.</b><br>Aceptamos pagos en efectivo<br>y tarjetas de debito y crédito.<br>&nbsp;</p>
</div>
<div class="direccion"></div>
<div class="separator1"><img src="images/cita.bmp" class="sep"/><br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;</div><br>
<?php
  //conexion a la base de datos
  $conexion=mysql_connect('localhost','root','12345678');
  mysql_select_db("proyecto",$conexion) or die("no se pudo conectar a la base de datos");
  ?>
<?php
//se manda llamar el archivo donde se realiza la conexion a la base de datos
include("conexion.php");
?>
<div class="agendar">
<form action="" method="POST">
    <input type="text" id="fname" name="nombre" placeholder="Nombre Completo..">
    <input type="text" id="fname" name="nombre" placeholder="id_cliente..">
    <input type="text" id="lname" name="email" placeholder="Email..">
    
    <input type="text" id="pass" name="direccion" placeholder="Dirección..">
    <input type="text" id="phone" name="phone" placeholder="Telefono..">
    <select id="trat" name="trat">
      <option value="default">Selecciona un Tratamiento</option>
      <option value="Ortodoncia">Ortodoncia</option>
      <option value="Endodoncia">Endodoncia</option>
      <option value="Periodoncia">Periodoncia</option>
      <option value="Tapado de muelas">Tapado de muelas</option>
      <option value="Extracción">Extracción</option>
      <option value="Curaciones">Curaciones</option>
      <option value="Regeneración">Regeneración</option>
      <option value="Poner resinas">Poner resinas</option>
      <option value="Blanqueamiento">Blanqueamiento</option>
      
    </select>
    <center><u class="button"><img src="images/cal.png" class="calendar">Selecciona un Día: <br><input type="date" name="fecha"> 
    <br>Selecciona una hora: <input type="time" name="hora"> 
     </u></center>
     <input type="text" name="id_cita"><br>
    <input type="submit" value="Agendar Cita">

  </form>
  <?php
  if ($_POST)/*si se presiona el boton enviar*/ {

    $nombre=$_POST['nombre'];
    $id_cliente=$_POST['id_cliente'];
    $email=$_POST['email'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['phone'];
    $tratamiento=$_POST['trat'];
    $fecha=$_POST['fecha'];
    $hora=$_POST['hora'];
    $id_cita=$_POST['id_cita'];
   
   
    mysql_query("INSERT INTO cliente(id_cliente, nombre,telefono,direccion,email) VALUES('$id_cliente' ,'$nombre','$telefono','$direccion','$email')") or die(mysql_error());
    mysql_query("INSERT INTO citas(id_cita,fecha,duracion,disponibilidad) VALUES('$id_cita','$fecha','$hora','')") or die(mysql_error());
    echo "<h2>dato guardado </h2>";

      }
?>
</div>
<br>
</div>
</section>
<footer>
<p>Dental Administrator</p><p>2017 &copy;Dea</p>
</footer>
<script src="js/slide.js"></script>

</body>
</html>
