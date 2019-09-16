<?php
 session_start();


$mysqli = new mysqli('127.0.0.1:3307', 'root', 'AIN@:active2016', 'datos');
$conn = mysqli_connect('127.0.0.1:3307', 'root', 'AIN@:active2016', 'datos');
$trabajador=$_GET['usr'];
$hola=$mysqli -> query ("SELECT * FROM partes WHERE usr_trabajador='$trabajador' ORDER BY fecha_parte DESC");
echo $trabajador;
?>
<html>
<head>


</head>
<body>
<p>
<?
$usr=$_GET['usr'];
$tipo=$_GET['tipo'];
echo "<a  href=./fichar.php?usr=$usr&tipo=$tipo>Volver</a>"

?>
<p>
<table class="egt" border="1" style="border-collapse:collapse">
<tr>

    <th>ID</th>

    <th>USR</th>
    
	<th>NOMBRE</th>

    <th>FECHA</th>

    <th>HORAS TOTALES</th>
	
	<th>HORA INICIO JORNADA</th>
	
	<th>HORA INICIO DESCANSO</th>
	
	<th>HORA FINAL DESCANSO</th>
	
	<th>HORA FIN JORNADA</th>   
    
    <th>COD OBRA1</th>
		
	<th>NOMBRE OBRA1</th>
	
	<th>HORAS OBRA1</th>

    <th>COD OBRA2</th>
	
	<th>NOMBRE OBRA2</th>
	
	<th>HORAS OBRA2</th>

    <th>COD OBRA3</th>
	
	<th>NOMBRE OBRA3</th>
	
	<th>HORAS OBRA3</th>
    
	<th>COD OBRA4</th>
	
	<th>NOMBRE OBRA4</th>

    <th>HORAS OBRA4</th>

    <th>GASTOS</th>
 
 </tr>
  <?php

while ($valores = mysqli_fetch_array($hola)){
?>
	<tr>
	<!-- id -->
    <td><?php echo $valores[0] ?> </td>
<!-- nombre-->
    <td><?php echo $valores[1] ?> </td>
<!-- usr-->
    <td><?php echo $valores[2] ?> </td>
<!--fecha -->
	<td><?php echo $valores[3] ?> </td>
	<!--h_toatales-->
	<td><?php echo $valores[4] ?> </td>
  <!--h_inicio_jornada -->
	<td><?php echo $valores[5] ?> </td>
	<!--h_inicio_descanso-->
	<td><?php echo $valores[6] ?> </td>
	<!--h_fin_descanso-->
	<td><?php echo $valores[7] ?> </td>
  <!-- h_fin_jornada-->
	<td><?php echo $valores[8] ?> </td>
	<!--cod oobra1 -->
	<td><?php echo $valores[9] ?> </td>
	<!--nombre obra1-->
	<td><?php echo $valores[10]; ?> </td>
	<!--h_obra1 -->
	<td><?php if($valores[11] != "00:00"){echo $valores[11];}else{echo "";}  ?> </td>
	<!--cod_obra2 -->
	<td><?php echo $valores[12]; ?> </td>
	<!--nombre obra2 -->
	<td><?php echo $valores[13]; ?> </td>
	<!--h_obra2 -->
	<td><?php if($valores[14] != "00:00:00"){echo $valores[14];}else{echo "";}  ?> </td>
	<!--cod_obra3 -->
	<td><?php echo $valores[15]; ?> </td>
	<!--nombre obra3 -->
	<td><?php echo $valores[16]; ?> </td>
	<!--h_obra3-->
	<td><?php if($valores[17] != "00:00:00"){echo $valores[17];}else{echo "";}  ?> </td>
	<!--cod_obra4-->
	<td><?php echo $valores[18]; ?> </td>
	<!--nombre obra4-->
	<td><?php echo $valores[19]; ?> </td>
	<!--h_obra4-->
<td><?php if($valores[20] != "00:00:00"){echo $valores[20];}else{echo "";}  ?> </td>
	<!--gastos-->
	<td><?php echo $valores[21]; ?> </td>
	  </tr>
 
<?php
}







mysqli_close($conn);
?>
</table>
 <!--$hola=$mysqli -> query (""Update Clientes Set telefono='$telefono' Where nombre='$nombre'"); -->
</body>
</html>