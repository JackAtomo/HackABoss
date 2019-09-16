<?php
session_start( );
// borramos el usuario grabado
$_SESSION['usr'] ="0"; 
$_SESSION["name"]="0";
$_SESSION["id_trabajador"]="0";
$_SESSION["tipo"]="0"
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>

<link rel="stylesheet" type="text/css" href="./styles/style.css">


</head>
<body>
<div id="frm">
 	<form action="sumit.php" method=post>
	<p style="color:#FF0000";>Fallo reitenta</p>
<p>
<label>Usuario:</label>
 <input type=text class=a id="campo" name=usr onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"><br>
	<!--<input type=text class=a  name=usuario required>-->
</p>
<p>
	<label>Password:</label>
<input type=password class=a  required name=pass><br>
<p>
	
<input type=submit class=a value=Login id=sub name=login>
</p>
	</form>

</div>
</body>
</html>