<?php
$mysqli = new mysqli('127.0.0.1:3308', 'root', 'AIN@:active2016', 'datos2');
$conn = mysqli_connect('127.0.0.1:3308', 'root', 'AIN@:active2016', 'datos2');
$hola=$mysqli -> query ("SELECT * FROM partes WHERE  tipo='1' OR tipo='2' ORDER BY fecha DESC");
$count=0;
?>
<p>
<a  href="/web3/admin/index.php?email=admin">Volver</a>
<p>
<?php
while ($valores = mysqli_fetch_array($hola)){
	$count=$count+1;
	$hora1= strtotime( $valores['h_totales'] );
	$hora2= strtotime( "8:00:00" );
if ($hora1 > $hora2){
$id=$valores[0];
echo "SI '$count'";
if ($mysqli->query("UPDATE `partes` SET `h_totales` = '08:00:00', `h_inicio_jornada` = '08:00:00', `h_fin_jornada` = '18:00:00', WHERE `partes`.`id_parte` = $id") === TRUE){
echo "Modificado entrada '$id' de '$valores[1]' del dia '$valores[4]' '$count' <br>" ;
}else{
echo "Fallo en modificar entrada '$id' de '$valores[1]' del dia '$valores[4]' '$count' <br>" ;
printf("Error: %s\n", $mysqli->error);
 }
 }else{
 echo "NO '$count'<br>" ;
}
}
 mysqli_close($conn);
?>