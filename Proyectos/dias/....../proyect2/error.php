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
<div id="frm" style="width : 200px; heigth : 1px">
 	<form action="sumit.php" method=post>
	<p style="font-size:30px ; color:#FF0000";>Fallo reitenta</p>
<p>
<label style="font-size:30px">Usuario:</label>
</p>
<p>
<input type=text class=a style="font-size:30px; width : 200px; heigth : 1px" id="campo" name=usr><br>

</p>
<p>
	<label style="font-size:30px">Password:</label>
</p>
<p>
<input type=password class=a style="font-size:30px; width : 200px; heigth : 1px"  required name=pass><br>
</p>
	
<input type=submit class=a value=Login id=sub name=login style="font-size:30px" >

	</form>

</div>
</body>
</html>
	