<?php
session_start();
$usr1=$_GET['usr'];
$usr2=$_SESSION["val"] ;
if (strcmp ($usr1 , $usr2 ) != 0){
  session_destroy();
  header("Location:/web3/index.php");
 //echo "fallo";
// echo "-".$usr2."-" .$usr1 ; 
}