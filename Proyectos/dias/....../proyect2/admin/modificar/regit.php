<?php
$mysqli = new mysqli('127.0.0.1:3307', 'root', 'AIN@:active2016', 'espejos');
$conn = mysqli_connect('127.0.0.1:3307', 'root', 'AIN@:active2016', 'espejos');
?>
<p>
<a  href="/web3/admin/index.php?email=admin">Volver</a>
<p>
<?php
$id =$_POST['id'];
//nombre usuario
$usuario = $_POST['nameuser'];
$array = $mysqli -> query ("SELECT nombre FROM trabajadores WHERE usuario='$usuario'");
$medio = mysqli_fetch_array($array);
$nombre = $medio['nombre'];
$fecha=$_POST['fecha'];
$h_total=$_POST['h_totales'];
$h_inicio_jornada=$_POST['h_inicio_jornada'];
$h_inicio_descanso=$_POST['h_inicio_descanso'];
$h_fin_decanso=$_POST['h_fin_decanso'];
$h_fin_jornada=$_POST['h_fin_jornada'];
//obra codigo 1
$cod_obra1=$_POST['obra1'];
$ssql = $mysqli -> query ("SELECT nombre FROM obra WHERE codigo=$cod_obra1");
$codigo_nombre1 = mysqli_fetch_array($ssql);
$nombre_obra1=$codigo_obra1['nombre'];
//obra codigo 2
$cod_obra2=$_POST['obra2'];
$ssql = $mysqli -> query ("SELECT nombre FROM obra WHERE codigo=$cod_obra2");
$codigo_nombre2 = mysqli_fetch_array($ssql);
$nombre_obra2=$codigo_obra1['nombre'];
//obra codigo 3
$cod_obra3=$_POST['obra3'];
$ssql = $mysqli -> query ("SELECT nombre FROM obra WHERE codigo=$cod_obra3");
$codigo_nombre3 = mysqli_fetch_array($ssql);
$nombre_obra3=$codigo_obra1['nombre'];
//obra codigo 4
$cod_obra4=$_POST['obra4'];
$ssql = $mysqli -> query ("SELECT nombre FROM obra WHERE codigo=$cod_obra4");
$codigo_nombre4 = mysqli_fetch_array($ssql);
$nombre_obra4=$codigo_obra1['nombre'];
//hora obras
$h_obra_uno=$_POST['h_obra_uno'];
$h_obra_dos=$_POST['h_obra_uno'];
$h_obra_tres=$_POST['h_obra_uno'];
$h_obra_cuatro=$_POST['h_obra_uno'];
//gastos
$gastos=$_POST['gastos'];
$tipo=$_POST['tipo'];
//if ($mysqli->query("UPDATE partes SET usr_trabajador='$usuario', nombre_trabajador='$nombre', fecha_parte='$fecha', h_totales='$h_total', h_inicio_jornada='$h_inicio_jornada', h_inicio_descanso='$h_inicio_descanso', h_fin_decanso='$h_fin_decanso', h_fin_jornada='$h_fin_jornada', cod_obra_uno='$cod_obra1', nombre_obra_uno='$nombre_obra1', h_obra_uno='$h_obra_uno', cod_obra_dos='$cod_obra2', nombre_obra_dos='$nombre_obra2', h_obra_dos='$h_obra_dos', cod_obra_tres='$cod_obra_tres', nombre_obra_tres='$nombre_obra_tres', h_obra_tres='$h_obra_tres', cod_obra_cuatro='$cod_obra4', nombre_obra_cuatro='$nombre_obra4', h_obra_cuatro='$h_obra_cuatro', gastos='$gastos', tipo='$tipo' WHERE partes.id = '$id' ") === TRUE){
echo '<!DOCTYPE html> <br> Modificadousr_trabajador='.$usuario.', nombre_trabajador='.$nombre.', fecha_parte='.$fecha.', h_totales='.$h_total.', h_inicio_jornada='.$h_inicio_jornada.', h_inicio_descanso='.$h_inicio_descanso.', h_fin_decanso='.$h_fin_decanso.', h_fin_jornada='.$h_fin_jornada.', cod_obra_uno='.$cod_obra1.', nombre_obra_uno='.$nombre_obra1.', h_obra_uno='.$h_obra_uno.', cod_obra_dos='.$cod_obra2.', nombre_obra_dos='.$nombre_obra2.', h_obra_dos='.$h_obra_dos.', cod_obra_tres='.$cod_obra_tres.', nombre_obra_tres='.$nombre_obra_tres.', h_obra_tres='.$h_obra_tres.', cod_obra_cuatro='.$cod_obra4.', nombre_obra_cuatro='.$nombre_obra4.', h_obra_cuatro='.$h_obra_cuatro.', gastos='.$gastos.', tipo='.$tipo.' WHERE id = '.$id.' <br>' ;
//}else
//echo "Fallo en modificar entrada <br>" ;
//printf("Error: %s\n", $mysqli->error);
// }
 //mysqli_close($conn);
?>