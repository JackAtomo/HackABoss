<?php
$mysqli = new mysqli('127.0.0.1:3307', 'root', 'AIN@:active2016', 'datos');
$conn = mysqli_connect('127.0.0.1:3307', 'root', 'AIN@:active2016', 'datos');
$cod_obra=$_POST["cod_obra"];
$nombre=$_POST["nombre"];
$f_inicio=$_POST["f_inicio"];
$f_fin=$_POST["f_fin"];
$activo=$_POST["activo"];
$descripcion=$_POST["descripcion"];
$sql = "INSERT INTO obra (nombre, codigo, fecha_inicio, fecha_fin, activo, descripcion) VALUES ('$nombre', '$cod_obra', '$f_inicio', '$f_fin', '$activo', '$descripcion' )";

if (mysqli_query($conn, $sql)) {
     header("Location:done.php?usr=admin");
} else {
     $error="Error: " . mysqli_error($conn);
	header("Location:errorobra.php?usr=$error&email=admin");
}
mysqli_close($conn);
if (isset($_POST["volver"])){
		
	header("Location:/web3/admin");
}

?>
