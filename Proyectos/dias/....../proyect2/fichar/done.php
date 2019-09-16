<?php
session_start();
echo "hola";
$usr1=$_GET['usr'];
$usr2=$_SESSION["val"];
if (strcmp ($usr1 , $usr2 ) != 0){
  unset($_SESSION["usr"]); 
  unset($_SESSION["tipo"]);
  session_destroy();
  //header("Location:/web3/index.php");
 echo "fallo";
 echo "-".$usr2."-" .$usr1; 
}
?>