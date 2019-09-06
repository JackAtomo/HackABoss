<?php
 session_start();


$mysqli = new mysqli('127.0.0.1:3307', 'root', 'AIN@:active2016', 'datos');
$conn = mysqli_connect('127.0.0.1:3307', 'root', 'AIN@:active2016', 'datos');


$mysqli2 = new mysqli('127.0.0.1:3307', 'root', 'AIN@:active2016', 'espejos');
$conn2 = mysqli_connect('127.0.0.1:3307', 'root', 'AIN@:active2016', 'espejos');


$valor=$_GET['value'];
$hola=$mysqli -> query ("SELECT * FROM partes WHERE id_parte=$valor ");
?>
<html>
<head>
</head>
<body>
<table class="egt" border="1">
<tr>

    <th>ID_PARTE</th>

    <th>USR</th>

    <th>FECHA</th>

    <th>HORAS TOTALES</th>
    
	<th>HORA INICIO JORNADA</th>
	
	<th>HORA INICIO DESCANSO</th>
	
	<th>HORA FINAL DESCANSO</th>
	
	<th>HORA FIN JORNADA</th>   
	
	<th>COD OBRA1</th>
	
	<th>HORAS OBRA1</th>

    <th>COD OBRA2</th>
	
	<th>HORAS OBRA2</th>

    <th>COD OBRA3</th>
	
	<th>HORAS OBRA3</th>
    
	<th>COD OBRA4</th>

    <th>HORAS OBRA4</th>
	
    <th>GASTOS</th>
	
	<th>TIPO<th>
	
  </tr>
  <form action="regit.php" accept-charset="UTF-8" name=datos method=post> 
  <?php

while ($valores = mysqli_fetch_array($hola)){
?>
	<tr>
	<!-- id -->
    <td><?php echo '<input type=text disabled=disabled class=a placeholder="'.$valores['0'].'" name="id" value="'.$valores['0'].'">'; ?> </td>
<!-- usr-->
<td>

	<select name=nameuser>
	<?php  	
echo '<option Selected=selected value="'.$valores[usr_trabajador].'">'.$valores[usr_trabajador]."-".$valores[nombre_trabajador].'</option>';
$query = $mysqli -> query ("SELECT * FROM trabajadores ORDER BY usuario DESC");
while ($notas = mysqli_fetch_array($query)) {
	
echo '<option value="'.$notas["usuario"].'">'.$notas["usuario"].'-'.$notas["nombre"].'</option>';
}
?> 
					</select>
	
	
	
	
	
</td>

	<!-- fecha-->
	<td><?php echo '<input type=date  class=a placeholder="'.$valores['fecha_parte'].'" name="fecha" value="'.$valores['fecha_parte'].'">'; ?>  </td>
  <!--horas totales -->
	<td><?php echo '<input type=time  class=a placeholder="'.$valores['h_totales'].'" name="h_totales" value="'.$valores['h_totales'].'">';?> </td>
	
	<!--hora inicio1 -->
	<td><?php echo '<input type=time  class=a placeholder="'.$valores['h_inicio_jornada'].'" name="h_inicio_jornada" value="'.$valores['h_inicio_jornada'].'">';?> </td>
	<!--hora inicio2 -->
	<td><?php echo '<input type=time  class=a placeholder="'.$valores['h_inicio_descanso'].'" name="h_inicio_descanso" value="'.$valores['h_inicio_descanso'].'">';?> </td>
	<!--hora fin1 -->
	<td><?php echo '<input type=time  class=a placeholder="'.$valores['h_fin_descanso'].'" name="h_fin_decanso" value="'.$valores['h_fin_descanso'].'">';?> </td>
	<!--hora fin2 -->
	<td><?php echo '<input type=time  class=a placeholder="'.$valores['h_fin_jornada'].'" name="h_fin_jornada" value="'.$valores['h_fin_jornada'].'">';?> </td>
	
	<!-- cod oobra1-->
	<td>
	<select name=obra1>
	<?php
   	
	echo '<option Selected=selected value="'.$valores[cod_obra_uno].'">'.$valores[cod_obra_uno].'--'.$valores[nombre_obra_uno].'</option>';
$query = $mysqli -> query ("SELECT * FROM obra ORDER BY codigo ASC");
while ($notas = mysqli_fetch_array($query)) {

echo '<option value="'.$notas['codigo'].'">'.$notas['codigo'].'-'.$notas['nombre'].'</option>';
}
?> 
						</select>
	
	 </td>
<!--horas 1 -->
	<td><?php echo '<input type=time  class=a placeholder="'.$valores['h_obra_uno'].'" name="h_obra_uno" value="'.$valores['h_obra_uno'].'">';?> </td>
	<!-- cod oobra2-->
	<td>
	<select name=obra2>
	<?php
   	
	echo '<option Selected=selected value="'.$valores[cod_obra_dos].'">'.$valores[cod_obra_dos].'--'.$valores[nombre_obra_dos].'</option>';
$query = $mysqli -> query ("SELECT * FROM obra ORDER BY codigo ASC");
while ($notas = mysqli_fetch_array($query)) {

echo '<option value="'.$notas['codigo'].'">'.$notas['codigo'].'-'.$notas['nombre'].'</option>';
}
?> 
						</select>
	
	 </td>
<!--horas 2 -->
	<td><?php echo '<input type=time  class=a placeholder="'.$valores['h_obra_dos'].'" name="fecha" value="'.$valores['h_obra_dos'].'">';?> </td>
	
  <!-- cod oobra3-->
	<td>
	<select name=obra3>
	<?php
  
	echo '<option Selected=selected value="'.$valores[cod_obra_tres].'">'.$valores[cod_obra_tres].'--'.$valores[nombre_obra_tres].'</option>';
	
$query = $mysqli -> query ("SELECT * FROM obra ORDER BY codigo ASC");
while ($notas = mysqli_fetch_array($query)) {

echo '<option value="'.$notas['codigo'].'">'.$notas['codigo'].'-'.$notas['nombre'].'</option>';
}
?> 
						</select>
	
	 </td>
	 <!-- horas 3 -->
	<td><?php echo '<input type=time  class=a placeholder="'.$valores['h_obra_tres'].'" name="fecha" value="'.$valores['h_obra_tres'].'">';?> </td>
	<!--cod oobra4 -->
	<td>
	<select name=obra4>
	<?php
   	
	echo '<option Selected=selected value="'.$valores[cod_obra_cuatro].'">'.$valores[cod_obra_cuatro].'--'.$valores[nombre_obra_cuatro].'</option>';
$query = $mysqli -> query ("SELECT * FROM obra ORDER BY codigo ASC");
while ($notas = mysqli_fetch_array($query)) {

echo '<option value="'.$notas['codigo'].'">'.$notas['codigo'].'-'.$notas['nombre'].'</option>';
}
?> 
						</select>
	
	  </td>
	<!--horas 4 -->
	<td><?php echo '<input type=time  class=a placeholder="'.$valores['h_obra_cuatro'].'" name="fecha" value="'.$valores['h_obra_cuatro'].'">';?> </td>
	
	<!--gastos -->
	<td><?php echo '<input type=text class=a placeholder="'.$valores['18'].'" name="gastos" value="'.$valores['18'].'">'; ?> </td>
	
	<!--tipo-->
	<td><?php echo '<input type=text class=a placeholder="'.$valores[tipo].'" name=tipo value="'.$valores[tipo].'">'; ?> </td>
  <td><input type=submit value=Modificar> </td>
  </form>
  </tr>
 
<?php
}

?>

</table>

 <!--$hola=$mysqli -> query (""Update Clientes Set telefono='$telefono' Where nombre='$nombre'"); -->
</body>
<?php
mysqli_close($conn);
?>
</html>