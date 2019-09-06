<?php
 session_start();


$mysqli = new mysqli('127.0.0.1:3307', 'root', 'AIN@:active2016', 'authentication');
$conn = mysqli_connect('127.0.0.1:3307', 'root', 'AIN@:active2016', 'authentication');


$mysqli2 = new mysqli('127.0.0.1:3307', 'root', 'AIN@:active2016', 'espejos');
$conn2 = mysqli_connect('127.0.0.1:3307', 'root', 'AIN@:active2016', 'espejos');
$email=$_POST["mail"];
$fecha=$_POST["fecha"];

$hora_entrada2=$_POST["hora_entrada2"];
$hora_salida2=$_POST["hora_salida2"];
$hora_entrada1=$_POST["hora_entrada1"];
$hora_salida1=$_POST["hora_salida1"];

$h_total=$_POST["tiempo1"];
$obra1=$_POST["obra1"];
$obra2=$_POST["obra2"];
$obra3=$_POST["obra3"];
$obra4=$_POST["obra4"];

$h_obra1=$_POST["tiempo2"];
$h_obra2=$_POST["h_obra2"];
$h_obra3=$_POST["h_obra3"];
$h_obra4=$_POST["h_obra4"];
$gastos=$_POST["gastos"];
$notas=$_POST["notas"];

$name=$_POST["name"];
$empresa=$_POST["empresa"];
$sql = "INSERT INTO ficha (nombre, empresa, h_total, obra1, obra2, obra3, obra4, fecha, hora_inicio1, hora_fin1, hora_inicio2, hora_fin2, h_obra1, h_obra2, h_obra3, h_obra4, gastos, notas) VALUES ('$name', '$empresa', '$h_total', '$obra1', '$obra2','$obra3','$obra4', '$fecha', '$hora_entrada1', '$hora_salida1', '$hora_entrada2', '$hora_salida2', '$h_obra1', '$h_obra2', '$h_obra3', '$h_obra4', '$gastos', '$notas')";
$sql2 = "INSERT INTO fichas (nombre, empresa, h_total, fecha, hora_inicio1, hora_fin1, hora_inicio2, hora_fin2) VALUES ('$name', '$empresa', '$h_total', '$fecha', '$hora_entrada1', '$hora_salida1', '$hora_entrada2', '$hora_salida2')";
if (mysqli_query($conn, $sql)) {
   if (mysqli_query($conn2, $sql2)){
      header("Location:ficharencargadodone.php?email=$email&empresa=$empresa");
} else {
    $error="Error: " . mysqli_error($conn2);
	header("Location:ficharencargadoerror.php?email=$email&empresa=$empresa&error=$error");
}
}else {
    $error="Error: " . mysqli_error($conn);
		header("Location:ficharencargadoerror.php?email=$email&empresa=$empresa&error=$error");

}
mysqli_close($conn);
?>