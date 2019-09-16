<?php
//echo " - ".$usuario. " - " ;
//Recupera el usuario de las cabeceras
 $usr2=$_SESSION["val"] ;
//echo " - ".$usr2. " | " ;
//Recupera el usuario que ficha
$usr1=$usuario;
//comprueba que sean iguales
if (strcmp ($usr1 , $usr2 ) != 0){
	session_destroy();
 header("Location:/web3/index.php");
 //echo "fallo";
 //echo "|".$usr2."-" .$usr1 ; 
}