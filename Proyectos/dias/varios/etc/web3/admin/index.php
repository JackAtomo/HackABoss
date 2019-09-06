<?php
include "./pass/1.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Page</title>

<link rel="stylesheet" type="text/css" href="./styles/style.css" >


</head>
<body>

<div id="frm">
 	
  

<form action="datos.php" method=post> 
<input type=submit class=a value="Registrar obras"  name=obra>
<input type=submit class=a value="Registrar usuarios" name=usuarios>
<input type=submit class=a value="Fichar" name=fichar>
<input type=submit class=a value="Modificar" name=modificar>
<input type=submit class=a value="Recalcular" name=recalcular>
<input type=submit class=a value="Revisar" name=revisar>
<p>
</form>
<form action="/web3/close.php" method=post> 
<input type=submit class=a value="Cerrar Sesion" name=close>	
</p>	
	</form>

</div>
</body>
</html>


