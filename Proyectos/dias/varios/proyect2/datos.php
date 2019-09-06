<?php

if (isset($_POST["obra"])){
		
	header("Location:./registrar_obras/index.php?email=$email");
}
if (isset($_POST["usuarios"])){
	header("Location:./registrar_usuarios/index.php?email=$email");
}		
if (isset($_POST["fichar"])){
	header("Location:./ficharadmin/ficharadmin.php?email=$email");
}     
if (isset($_POST["close"])){
session_destroy();
header("Location:/index.php");
}         
?>




