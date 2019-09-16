<?php

if (isset($_POST["obra"])){
		
	header("Location:./registrar_obras/index.php?email=admin");
}
if (isset($_POST["usuarios"])){
	header("Location:./registrar_usuarios/index.php?email=admin");
}		
if (isset($_POST["fichar"])){
	header("Location:./ficharadmin/ficharadmin.php?email=admin");
}
if (isset($_POST["modificar"])){
	header("Location:./modificar/index.php");
}		
if (isset($_POST["recalcular"])){
	header("Location:./recalcular/index.php");
}     
if (isset($_POST["revisar"])){
	header("Location:./revisar/prueba2.php");
} 
?>




