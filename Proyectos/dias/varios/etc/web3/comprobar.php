<?php
session_start();
$email="admin";
$email2=$_SESSION["name"];
if ($email!=$email2){
	 if (ini_get("session.use_cookies")) 
{
  $params = session_get_cookie_params();
  setcookie(session_name(), '', time() - 42000,
      $params["path"], $params["domain"],
      $params["secure"], $params["httponly"]);
}
  unset($_SESSION["name"]); 
  unset($_SESSION["pass"]);
  session_destroy();
  header("Location:/web1/index.php");

}
