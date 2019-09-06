<?php
$mysqli = new mysqli('127.0.0.1:3307', 'root', 'AIN@:active2016', 'datos');
$conn = mysqli_connect('127.0.0.1:3307', 'root', 'AIN@:active2016', 'datos');
$nombre=$_POST["nombre"];
$usuario=$_POST["usuario"];
$pass=$_POST["pass"];
$dni=$_POST["dni"];
$hash=password_hash($pass,PASSWORD_DEFAULT);
$activo=$_POST["activo"];
$tipo=$_POST["tipo"];
$sql = "INSERT INTO trabajadores (nombre, usuario, pass, dni, tipo, activo) VALUES ('$nombre', '$usuario', '$hash', '$dni','$tipo', '$activo')";

if (mysqli_query($conn, $sql)) {
     header("Location:doneusuarios.php");
} else {
     $error="Error: " . mysqli_error($conn);
	header("Location:errorusuario.php?error=$error");
}
mysqli_close($conn);
if (isset($_POST["volver"])){
		
header("Location:/web3/admin");
 }

?>
