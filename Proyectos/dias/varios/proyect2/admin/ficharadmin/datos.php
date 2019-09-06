<?php
 session_start();
//efectuamos la conecxion a la base de datos grande
$mysqli = new mysqli('127.0.0.1:3307', 'root', 'AIN@:active2016', 'datos');
$conn = mysqli_connect('127.0.0.1:3307', 'root', 'AIN@:active2016', 'datos');

//efectuamos la conexion a la base de datos pequeña
//$mysqli2 = new mysqli('127.0.0.1:3308', 'root', 'AIN@:active2016', 'espejos');
//$conn2 = mysqli_connect('127.0.0.1:3308', 'root', 'AIN@:active2016', 'espejos');
//recuperamos datos de el form
$id_trabajador=$_POST["id_trabajador"];
$ssql = $mysqli -> query ("SELECT * FROM trabajadores WHERE id_trabajador='$id_trabajador'");
$array = mysqli_fetch_array($ssql);
$nombre_f = $array['nombre'];
$usuario = $array ['usuario'];
$tipo=$_SESSION["tipo"] ; 

//realizamos comprobacion de usuario
include "./pass/1.php";
//Recuperamos el nombre segun el usuario


//continuamos con la recuperacion de datos del formulario
$fecha=$_POST["fecha"];
//horarios
$h_inicio_jornada=$_POST["hora_entrada1"];
$h_inicio_descanso=$_POST["hora_salida2"];
$h_fin_descanso=$_POST["hora_entrada2"];
$h_fin_jornada=$_POST["hora_salida1"];
//horas por obras
$h_total=$_POST["tiempo1"];
$h_obra1=$_POST["tiempo2"];
$h_obra2=$_POST["h_obra2"];
$h_obra3=$_POST["h_obra3"];
$h_obra4=$_POST["h_obra4"];
//codigos de obra
$cod_obra1=$_POST["obra1"];
$cod_obra2=$_POST["obra2"];
$cod_obra3=$_POST["obra3"];
$cod_obra4=$_POST["obra4"];


$gastos=$_POST["gastos"];
$notas=$_POST["notas"];
 


//echo "|-usuario--" .$usuario. "-|-nombre--" .$nombre. "-|-fecha--" .$fecha;
//echo "-|-h_inicio_jornada--" .$h_inicio_jornada. "-|-h_inicio_descanso--" .$h_inicio_descanso. "-|-h_fin_descanso--" .$h_fin_descanso. "-|-h_fin_jornada--" .$h_fin_jornada;
//echo "-|gastos-" .$gastos. "-|-notas-" .$notas;

$ssql = $mysqli -> query ("SELECT nombre FROM obra WHERE codigo='$cod_obra1'");
$array1 = mysqli_fetch_array($ssql);
$obra1= $array1['nombre'];

if (isset ($cod_obra2)){
$ssql = $mysqli -> query ("SELECT nombre FROM obra WHERE codigo='$cod_obra2'");
$array2 = mysqli_fetch_array($ssql);
$obra2= $array2['nombre'];
}
if (isset ($cod_obra3)){
$ssql = $mysqli -> query ("SELECT nombre FROM obra WHERE codigo='$cod_obra3'");
$array3 = mysqli_fetch_array($ssql);
$obra3= $array3['nombre'];
}
if (isset ($cod_obra4)){
$ssql = $mysqli -> query ("SELECT nombre FROM obra WHERE codigo='$cod_obra4'");
$array4 = mysqli_fetch_array($ssql);
$obra4= $array4['nombre'];
}
//echo $obra1. "-" .$obra2."-".$obra3."-".$obra4 ;

$sql = "INSERT INTO partes (usr_trabajador, nombre_trabajador, fecha_parte, h_totales, h_inicio_jornada, h_inicio_descanso, h_fin_descanso, h_fin_jornada, cod_obra_uno, nombre_obra_uno, h_obra_uno, cod_obra_dos, nombre_obra_dos, h_obra_dos, cod_obra_tres, nombre_obra_tres, h_obra_tres, cod_obra_cuatro, nombre_obra_cuatro, h_obra_cuatro, gastos, notas, tipo) VALUES ('$usuario', '$nombre_f', '$fecha', '$h_total', '$h_inicio_jornada', '$h_inicio_descanso', '$h_fin_descanso', '$h_fin_jornada', '$cod_obra1', '$obra1', '$h_obra1', '$cod_obra2', '$obra2', '$h_obra2','$cod_obra3', '$obra3', '$h_obra3','$cod_obra4', '$obra4', '$h_obra4', '$gastos', '$notas', '$tipo')";
//$sql2 = "INSERT INTO fichas (email, nombre, empresa, h_total, fecha, hora_inicio1, hora_fin1, hora_inicio2, hora_fin2) VALUES ('$email', '$name', '$empresa', '$h_total', '$fecha', '$hora_entrada1', '$hora_salida1', '$hora_entrada2', '$hora_salida2')";
if (mysqli_query($conn, $sql)) {
 //  if (mysqli_query($conn2, $sql2)){
//echo " - " .$usuario. " - " .$tipo;
header("Location:ficharadmindone.php?usr=admin&tipo=$tipo");
//} else {
 //   $error="Error: " . mysqli_error($conn2);
//	header("Location:ficharadminerror.php?usr=admin&error=$error");
//}
}else {
//echo "Error: ".mysqli_error($conn);
$error="Error: " . mysqli_error($conn);
	header("Location:ficharadminerror.php?usr=admin&tipo=$tipo&error=$error");

}
mysqli_close($conn);
?>