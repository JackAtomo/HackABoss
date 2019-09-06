<?php
  include './pass/1.php';
  $mysqli = new mysqli('127.0.0.1:3307', 'root', 'AIN@:active2016', 'datos');
?>
<!DOCTYPE html>
<html>
<head>
<title>Registrar obras</title>

<link rel="stylesheet" type="text/css" href="./styles/style.css">


</head>
<body>
<div id="frm">
<p>
 	<form action="regit.php" method=post>
	<p style="color:#33FF00";>Registro exitoso</p>
			<label>Codigo obra:</label>
 		<input type=text class=a required name=cod_obra>
</select>
</p>
<p>
			<label>Nombre:</label>
 			<input type=text class=a required name=nombre>
</p>
<p>
  
			<label>Fecha inicio:</label>
 		<input type=number value="0000" class=a name=f_inicio>
</p>
	<label>Fecha fin:</label>
 		<input type=number value="0000"  class=a name=f_fin>
</p>
<p> 
	<label>Activo:</label>	
	<select name=activo>
  <option Selected=selected value=1>Activo</option> 
  <option value=0>No activo</option>     

</select>
</p>
<p>
			<label>Descripcion:</label>
</p>
<p>
			<textarea name=descripcion rows="10" > </textarea>

</p>

<p>

<input type=submit class=a value=Grabar id=sub name=datos>
<p>
</form>
  <form action="regit.php" name=datos method=post>
  <input type=submit class=a value=Volver id=sub name=volver>
   	<div  align="right">
   	
	<form action="/web3/close.php" name=datos method=post> 
  <input type=submit class=a value="Cerrar Sesion" id=sub name=close>
	</form>
	</div>
</div>
</body>
</html>			