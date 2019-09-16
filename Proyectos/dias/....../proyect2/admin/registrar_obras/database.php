<?php
$mysqli = new mysqli('localhost', 'root', 'AIN@:active2016', 'authentication');
$conn = mysqli_connect('localhost', 'root', 'AIN@:active2016', 'authentication');
$name=$_POST["name"];
$email=$_POST["email"];
$usr=$_POST["usr"];
$password=$_POST["password"];
$hash=password_hash($password,PASSWORD_DEFAULT);
$activo=$_POST["activo"];
$sql = "INSERT INTO users (nombre, usuario, usr, password, activo) VALUES ('$name', '$email', '$usr', '$hash', '$activo')";

if (mysqli_query($conn, $sql)) {
     header("Location:done.php");
} else {
     header("Location:error.php");
}
mysqli_close($conn);

?>
