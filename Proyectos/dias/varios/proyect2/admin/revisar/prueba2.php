<?php
 session_start();


$mysqli = new mysqli('127.0.0.1:3307', 'root', 'AIN@:active2016', 'datos');
$conn = mysqli_connect('127.0.0.1:3307', 'root', 'AIN@:active2016', 'datos');

$hola=$mysqli -> query ("SELECT * FROM partes ORDER BY fecha_parte DESC");
?>
<html>
<head>


</head>
<body>
<form action="prueba.php" accept-charset="UTF-8" name=datos method=post> 
<select name=trabajador>
	<?php  	
$query = $mysqli -> query ("SELECT * FROM trabajadores WHERE activo='1' ORDER BY usuario DESC");
while ($notas = mysqli_fetch_array($query)) {
	
echo '<option value="'.$notas["usuario"].'">'.$notas["usuario"].'-'.$notas["nombre"].'</option>';
}

?> 
					</select>
<input type=submit align="left" class=a value=Consultar id=sub name=Consultar>
</form>
</body>
</html>