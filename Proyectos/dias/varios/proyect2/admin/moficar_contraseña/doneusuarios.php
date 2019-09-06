<?php
include './pass/1.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Registrar usuarios</title>

<link rel="stylesheet" type="text/css" href="./styles/style.css">


</head>
<body>
	
<div id="frm">
	<form action="datos.php" method=post>
	<p style="color:#33FF00";>Registro exitoso</p>
<p> 
	<label>Nombre:</label>	
	<input type=text class=a  name=nombre required>
</p>

<p>
	<label>Usuario:</label>
	<input type=text class=a  name=usuario required>
</p>
<p>

	<label>Password:</label>
	<input type=password class=a name=pass	required>
</p>
<p>
	<label>DNI:</label>
	<input type=text class=a  name=dni>
</p>
<p> 
	<label>Trabajadador :</label>	
		<select name=tipo required>
  <option Selected=selected value=" "></option> 
  <option value=0>Oficina</option>
  <option value=1>Obra</option>
  <option value=2>Encargado</option>
  <option value=3>Admin</option>
</select>
</p>
<p> 
	<label>Activo:</label>	
	<select name=activo>
  <option Selected=selected value=1>Activo</option> 
  <option value=0>No activo</option>     

</select>
</p>
<p>

	<input type=submit class=a value=Register name=register>
</form>
<p>
	</form>
	  <form action="datos.php" name=datos method=post>
  <input type=submit class=a value=Volver id=sub name=volver>
   	<div  align="right">
   	</form>
	<form action="/web3/close.php" name=datos method=post> 
  <input type=submit class=a value="Cerrar Sesion" id=sub name=close>
	</form>
	</div>
</div>

</body>
</html>