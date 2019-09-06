	<?php
session_start();
$usr1="admin";
$usr2=$_SESSION["usr"];
if (strcmp ($usr1 , $usr2 ) != 0){
  session_destroy();
  header("Location:/web3/index.php");
 //echo "fallo";
//echo "-".$usr2."-" .$usr1 ; 
}