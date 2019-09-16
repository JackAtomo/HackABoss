<?php
include "./pass/1.php";

    $mysqli = new mysqli('127.0.0.1:3307', 'root', 'AIN@:active2016', 'datos');
	$usuario=$_GET['usr'];
	$tipo=$_GET['tipo'];

?>
<!DOCTYPE html>
<html>
<head>
<meta name="tipo_contenido"  content="text/html;" http-equiv="content-type" charset="utf-8">
<title>Fichar</title>

<link rel="stylesheet" type="text/css" href="./styles/style2.css">
 <script language="JavaScript">  


function restarHoras2() {
  inicio = document.getElementById("hora_ini2").value;
  fin = document.getElementById("hora_fin2").value;
  
  inicioMinutos = parseInt(inicio.substr(3,2));
  inicioHoras = parseInt(inicio.substr(0,2));
  
  finMinutos = parseInt(fin.substr(3,2));
  finHoras = parseInt(fin.substr(0,2));

  transcurridoMinutos = finMinutos - inicioMinutos;
  transcurridoHoras = finHoras - inicioHoras;
  
  if (transcurridoMinutos < 0) {
    transcurridoHoras--;
    transcurridoMinutos = 60 + transcurridoMinutos;
  }
  
  horas = transcurridoHoras.toString();
  minutos = transcurridoMinutos.toString();
  
  if (horas.length < 2) {
    horas = "0"+horas;
  }
  
  if (horas.length < 2) {
    horas = "0"+horas;
  }
  
  document.getElementById("resta2").value = (horas + ':' + (minutos < 10 ? '0' : '') + minutos+":00");
 }
 function restarHoras() {
  inicio = document.getElementById("hora_ini").value;
  fin = document.getElementById("hora_fin").value;
  
  inicioMinutos = parseInt(inicio.substr(3,2));
  inicioHoras = parseInt(inicio.substr(0,2));
  
  finMinutos = parseInt(fin.substr(3,2));
  finHoras = parseInt(fin.substr(0,2));

  transcurridoMinutos = finMinutos - inicioMinutos;
  transcurridoHoras = finHoras - inicioHoras;
  
  if (transcurridoMinutos < 0) {
    transcurridoHoras--;
    transcurridoMinutos = 60 + transcurridoMinutos;
  }
  
  horas = transcurridoHoras.toString();
  minutos = transcurridoMinutos.toString();
  
  if (horas.length < 2) {
    horas = "0"+horas;
  }
  
  if (horas.length < 2) {
    horas = "0"+horas;
  }
  
  document.getElementById("resta1").value = (horas + ':' + (minutos < 10 ? '0' : '') + minutos+":00");
  
  
 }
function padNmb(nStr, nLen) {
                var sRes = String(nStr);
                var sCeros = "0000000000";
                return sCeros.substr(0, nLen - sRes.length) + sRes;
            }
 
            function stringToSeconds(tiempo) {
                var sep1 = tiempo.indexOf(":");
                var sep2 = tiempo.lastIndexOf(":");
                var hor = tiempo.substr(0, sep1);
                var min = tiempo.substr(sep1 + 1, sep2 - sep1 - 1);
                var sec = tiempo.substr(sep2 + 1);
                return (Number(sec) + (Number(min) * 60) + (Number(hor) * 3600));
            }
 
            function secondsToTime(secs) {
                var hor = Math.floor(secs / 3600);
                var min = Math.floor((secs - (hor * 3600)) / 60);
                var sec = secs - (hor * 3600) - (min * 60);
                return padNmb(hor, 2) + ":" + padNmb(min, 2) + ":" + padNmb(sec, 2);
            }
 
            function substractTimes(t1, t2) {
                var secs1 = stringToSeconds(t1);
                var secs2 = stringToSeconds(t2);
                var secsDif = secs1 + secs2;
                return secondsToTime(secsDif);
            }
 
            function calcT3() {
                with (document.datos)
                    t3.value = substractTimes(resta1.value, resta2.value);
                  }
            
   function igualar() {
  inicio = document.getElementById("h_obra2").value;
  fin = document.getElementById("t3").value;
  
  inicioMinutos = parseInt(inicio.substr(3,2));
  inicioHoras = parseInt(inicio.substr(0,2));
  
  finMinutos = parseInt(fin.substr(3,2));
  finHoras = parseInt(fin.substr(0,2));

  transcurridoMinutos = finMinutos - inicioMinutos;
  transcurridoHoras = finHoras - inicioHoras;
  
  if (transcurridoMinutos < 0) {
    transcurridoHoras--;
    transcurridoMinutos = 60 + transcurridoMinutos;
  }
  
  horas = transcurridoHoras.toString();
  minutos = transcurridoMinutos.toString();
  
  if (horas.length < 2) {
    horas = "0"+horas;
  }
  
  if (horas.length < 2) {
    horas = "0"+horas;
  }
  
  document.getElementById("h_obra1").value = (horas + ':' + (minutos < 10 ? '0' : '') + minutos+":00");
  document.getElementById("tiempo1").value = document.getElementById("t3").value;
  document.getElementById("tiempo2").value = document.getElementById("h_obra1").value;
   
   
 inicio = document.getElementById("h_obra3").value;
  fin = document.getElementById("h_obra1").value;
  
  inicioMinutos = parseInt(inicio.substr(3,2));
  inicioHoras = parseInt(inicio.substr(0,2));
  
  finMinutos = parseInt(fin.substr(3,2));
  finHoras = parseInt(fin.substr(0,2));

  transcurridoMinutos = finMinutos - inicioMinutos;
  transcurridoHoras = finHoras - inicioHoras;
  
  if (transcurridoMinutos < 0) {
    transcurridoHoras--;
    transcurridoMinutos = 60 + transcurridoMinutos;
  }
  
  horas = transcurridoHoras.toString();
  minutos = transcurridoMinutos.toString();
  
  if (horas.length < 2) {
    horas = "0"+horas;
  }
  
  if (horas.length < 2) {
    horas = "0"+horas;
  }
  
  document.getElementById("h_obra1").value = (horas + ':' + (minutos < 10 ? '0' : '') + minutos+":00");
  document.getElementById("tiempo1").value = document.getElementById("t3").value;
 document.getElementById("tiempo2").value = document.getElementById("h_obra1").value;
  
  inicio = document.getElementById("h_obra4").value;
  fin = document.getElementById("h_obra1").value;
  
  inicioMinutos = parseInt(inicio.substr(3,2));
  inicioHoras = parseInt(inicio.substr(0,2));
  
  finMinutos = parseInt(fin.substr(3,2));
  finHoras = parseInt(fin.substr(0,2));

  transcurridoMinutos = finMinutos - inicioMinutos;
  transcurridoHoras = finHoras - inicioHoras;
  
  if (transcurridoMinutos < 0) {
    transcurridoHoras--;
    transcurridoMinutos = 60 + transcurridoMinutos;
  }
  
  horas = transcurridoHoras.toString();
  minutos = transcurridoMinutos.toString();
  
  if (horas.length < 2) {
    horas = "0"+horas;
  }
  
  if (horas.length < 2) {
    horas = "0"+horas;
  }
  
  document.getElementById("h_obra1").value = (horas + ':' + (minutos < 10 ? '0' : '') + minutos+":00");
  document.getElementById("tiempo1").value = document.getElementById("t3").value;
 document.getElementById("tiempo2").value = document.getElementById("h_obra1").value;
 }
</script>



</head>
<body onload="restarHoras2();restarHoras();calcT3();igualar();" onfocusout="restarHoras2();restarHoras();calcT3();igualar();" onkeyup="restarHoras2();restarHoras();calcT3();igualar();">
    <table style="width:auto" ;="" height:"20px"="" align="center">
      <tbody>
        <tr>
         <th style="width: 50%;">
        	<div id="frm" align="left">
				<form action="datos.php" accept-charset="UTF-8" name=datos method=post> 
											<p style="color:#FF0000";>Fallo reintenta</p>
<p>
<?php
  echo $_GET['error']
?>
					<p>
						<label>Nombre:</label>
<?php //recupera el nombre del usuario segun su USR recojido de la url
$hola=$mysqli -> query ("SELECT nombre FROM trabajadores WHERE usuario='$usuario'");
while ($valores = mysqli_fetch_array($hola)) {
echo '<input style="background-color: #C3C3C3 ;opacity:0.7" type=text class=a readonly placeholder="'.$valores['nombre'].'" name="nombre" value="'.$valores['nombre'].'">';
}
echo '<input  type=text size="5" style="background-color: #C3C3C3 ;opacity:0.7" class=a readonly placeholder="'.$usuario.'" name="usr" value="'.$usuario.'">';
?>
					</p>
					<p>
					<label>Fecha:</label>
			 		<?php
					$fecha_actual = date("Y-m-d");
			 		echo '<input type=date class=a max="'.$fecha_actual.'" required name=fecha value="'.$fecha_actual.'" >'
					?>
					<p>
					<label>Hora inicio jornada:</label>
<?php
//recojemos la ultima entrada por orden de fecha
$query1 = $mysqli -> query ("SELECT h_inicio_jornada FROM partes WHERE usr_trabajador='$usuario' ORDER BY fecha_parte DESC ");//hacemos las cosultas a la base segun usuario y fecha
$valores1 = mysqli_fetch_array($query1);
if (isset ($valores1['h_inicio_jornada'])) {
//Sacamos los campos con los valores por defecto 
echo '	<input type=time class=a value="'.$valores1['h_inicio_jornada'].'" required name=hora_entrada1 id=hora_ini onfocus="restarHoras2();restarHoras();calcT3();igualar();" onfocusout="restarHoras2();restarHoras();calcT3();igualar();" onkeyup="restarHoras2();restarHoras();calcT3();igualar();" >';	
}else {
//de que no esistan valores en las consultas sacamos el campo vacio
echo '<input type=time class=a required id=hora_ini onfocus="restarHoras2();restarHoras();calcT3();igualar();" onfocusout="restarHoras2();restarHoras();calcT3();igualar();" onkeyup="restarHoras2();restarHoras();calcT3();igualar();" name=hora_entrada1>';
}
?> 	
					</p>
					<p>
						<label>Hora incio descanso :</label>
<?php
$query1 = $mysqli -> query ("SELECT h_inicio_descanso FROM partes WHERE usr_trabajador='$usuario' ORDER BY fecha_parte DESC");//hacemos las cosultas a la base segun usuario y fecha
$valores1 = mysqli_fetch_array($query1);
if (isset ($valores1)) {
//Sacamos los campos con los valores por defecto 
echo '	<input type=time class=a id=hora_fin2  name=hora_salida2 value="'.$valores1['h_inicio_descanso'].'" onfocus="restarHoras2();restarHoras();calcT3();igualar();" onfocusout="restarHoras2();restarHoras();calcT3();igualar();" onkeyup="restarHoras2();restarHoras();calcT3();igualar();" >';		
}else {
//de que no esistan valores en las consultas sacamos el campo vacio
echo '<input type=time class=a id=hora_fin2  name=hora_salida2 value=00:00 onfocus="restarHoras2();restarHoras();calcT3();igualar();" onfocusout="restarHoras2();restarHoras();calcT3();igualar();" onkeyup="restarHoras2();restarHoras();calcT3();igualar();"> ';
}
?>
						
						
						</p>
						<p>
						<label>Hora fin descanso:</label>
<?php
$query1 = $mysqli -> query ("SELECT h_fin_descanso FROM partes WHERE usr_trabajador='$usuario' ORDER BY fecha_parte DESC ");//hacemos las cosultas a la base segun usuario y fecha
$valores1 = mysqli_fetch_array($query1);
if (isset ($valores1)) {
//Sacamos los campos con los valores por defecto 
echo '	<input type=time class=a id=hora_ini2  name=hora_entrada2 value="'.$valores1['h_fin_descanso'].'" onfocus="restarHoras2();restarHoras();calcT3();igualar();" onfocusout="restarHoras2();restarHoras();calcT3();igualar();" onkeyup="restarHoras2();restarHoras();calcT3();igualar();" >';	
}else {
//de que no esistan valores en las consultas sacamos el campo vacio
echo ' <input type=time class=a id=hora_ini2  name=hora_entrada2 value=00:00 onfocus="restarHoras2();restarHoras();calcT3();igualar();" onfocusout="restarHoras2();restarHoras();calcT3();igualar();" onkeyup="restarHoras2();restarHoras();calcT3();igualar();">';
}
?>
 					</p>
 					<p>
 					<label>Hora salida</label>
 								
					<?php
$query1 = $mysqli -> query ("SELECT h_fin_jornada FROM partes WHERE usr_trabajador='$usuario' ORDER BY fecha_parte DESC");//hacemos las cosultas a la base segun usuario y fecha
$valores1 = mysqli_fetch_array($query1);
if (isset ($valores1)) {
//Sacamos los campos con los valores por defecto 
echo '	<input type=time class=a required name=hora_salida1 id=hora_fin value="'.$valores1['h_fin_jornada'].'" onfocus="restarHoras2();restarHoras();calcT3();igualar();" onfocusout="restarHoras2();restarHoras();calcT3();igualar();" onkeyup="restarHoras2();restarHoras();calcT3();igualar();" >';	
}else {
//de que no esistan valores en las consultas sacamos el campo vacio
echo ' 	<input type=time class=a required name=hora_salida1 id=hora_fin onfocus="restarHoras2();restarHoras();calcT3();igualar();" onfocusout="restarHoras2();restarHoras();calcT3();igualar();" onkeyup="restarHoras2();restarHoras();calcT3();igualar();">';
}
?>	
					</p>					
					<p>
						<label>Horas totales:</label>
						<input type="time" name="t3" disabled=disabled id=t3 value="">
						</p>
						<p>
						<label>Gastos:</label>
					<input type="number" value="0.00" step="0.01" name="gastos" id=gastos>&euro;
						</p>
						<p>
					<label>Notas:</label>
					</p>
					<p>
					<textarea rows="10" cols="60" name="notas" id=notas ></textarea>
					</p>
					<input type="text" name="resta1" style="visibility:hidden" id=resta1 value=""><!--este campo es oculto pero es necesario para la resta de las horas--> 
					<input type="text" name="resta2" style="visibility:hidden" id=resta2 value=""><!--este campo es oculto pero es necesario para la resta de las horas-->
				
								
				<div  align="right">
					
						<button type=type="submit" formaction=/web3/close.php form=er >Cerrar Sesion</button>
					
				</div>
				<div align=left>
					
						<? 
						$usr=$_GET['usr'];
						$tipo=$_GET['tipo'];
						echo "<a href=./prueba.php?usr=$usr&tipo=$tipo>Revisar</a>";
				?>
				</div>
				</div>
				
			
			
       </th>
    	 <th style="width:50%">
            <div id="cfr" align="left">
						<p>
						
						<label>Obra 1:</label>
					
						<select name="obra1" id=obra1 required>
<?php  //ponemos como opcion predeterminada la ultima obra introducida

$query1 = $mysqli -> query ("SELECT cod_obra_uno, nombre_obra_uno FROM partes WHERE usr_trabajador='$usuario' ORDER BY fecha_parte DESC ");//Recuperamos de la base de datos "cod_obra_uno" y "nombre_obra_uno"
$valores1 = mysqli_fetch_array($query1);//comvertimos la consulta en un array
if ($valores1['cod_obra_uno']!=0) {
echo '<option value="'.$valores1['cod_obra_uno'].'">'.$valores1['cod_obra_uno'].'-'.$valores1['nombre_obra_uno'].'</option>';	
}
//ponemos una opcion en blanco en el desplegable
?>
<option></option>
<?php // ponemos como opcion el resto de las obras 
$ssql = $mysqli -> query ("SELECT codigo , nombre FROM obra WHERE activo=1 ORDER BY codigo ASC ");
while ($dat = mysqli_fetch_array($ssql)){ 
echo '<option value="'.$dat['codigo'].'">' .$dat['codigo']."---".$dat['nombre'].'</option>';	
}
?>
						</select>
					</p>
    					<input type=time class=a disabled=disabled name=h_obra1 onkeyup="igualar();" id="h_obra1" value="" >
        			</p>

					<p>
  						<label>Obra 2:</label>
						<select name=obra2>
						<?php  //ponemos como opcion predeterminada la ultima obra introducida

$query1 = $mysqli -> query ("SELECT cod_obra_dos, nombre_obra_dos FROM partes WHERE usr_trabajador='$usuario'ORDER BY fecha_parte DESC ");//Recuperamos de la base de datos "cod_obra_uno" y "nombre_obra_uno"
$valores1 = mysqli_fetch_array($query1);//comvertimos la consulta en un array
if ($valores1['cod_obra_dos']!=0) {
echo '<option value="'.$valores1['cod_obra_dos'].'">'.$valores1['cod_obra_dos'].'-'.$valores1['nombre_obra_dos'].'</option>';	
}
//ponemos una opcion en blanco en el desplegable
?>
<option></option>
<?php // ponemos como opcion el resto de las obras 
$ssql = $mysqli -> query ("SELECT codigo , nombre FROM obra WHERE activo=1 ORDER BY codigo ASC ");
while ($dat = mysqli_fetch_array($ssql)){ 
echo '<option value="'.$dat['codigo'].'">' .$dat['codigo']."---".$dat['nombre'].'</option>';	
}
?>

						</select>
						</p>
						<p>
        				<input type=time class=a name="h_obra2" id="h_obra2" onfocus="restarHoras2();restarHoras();calcT3();igualar();" onfocusout="restarHoras2();restarHoras();calcT3();igualar();" onkeyup="restarHoras2();restarHoras();calcT3();igualar();" value="00:00">
        				</p>
						<p>
  						<label>Obra 3:</label> 						
						<select name=obra3>
											<?php  //ponemos como opcion predeterminada la ultima obra introducida
$query1 = $mysqli -> query ("SELECT cod_obra_tres, nombre_obra_tres FROM partes WHERE usr_trabajador='$usuario' ORDER BY fecha_parte DESC ");//Recuperamos de la base de datos "cod_obra_uno" y "nombre_obra_uno"
$valores1 = mysqli_fetch_array($query1);//comvertimos la consulta en un array
if ($valores1['cod_obra_tres']!=0) {
echo '<option value="'.$valores1['cod_obra_tres'].'">'.$valores1['cod_obra_tres'].'-'.$valores1['nombre_obra_tres'].'</option>';	
}
//ponemos una opcion en blanco en el desplegable
?>
<option></option>
<?php // ponemos como opcion el resto de las obras 
$ssql = $mysqli -> query ("SELECT codigo , nombre FROM obra WHERE activo=1 ORDER BY codigo ASC ");
while ($dat = mysqli_fetch_array($ssql)){ 
echo '<option value="'.$dat['codigo'].'">' .$dat['codigo']."---".$dat['nombre'].'</option>';	
}
?>

						</select>
						
						<p>
						<input type=time class=a name="h_obra3" id="h_obra3" onfocus="restarHoras2();restarHoras();calcT3();igualar();" onfocusout="restarHoras2();restarHoras();calcT3();igualar();" onkeyup="restarHoras2();restarHoras();calcT3();igualar();"  value="00:00">
        				</p>
						<p>
  						<label>Obra 4:</label>
  						
  						<select name=obra4>
										<?php  //ponemos como opcion predeterminada la ultima obra introducida

$query1 = $mysqli -> query ("SELECT cod_obra_cuatro , nombre_obra_cuatro FROM partes WHERE usr_trabajador='$usuario' ORDER BY fecha_parte DESC ");//Recuperamos de la base de datos "cod_obra_uno" y "nombre_obra_uno"
$valores1 = mysqli_fetch_array($query1);//comvertimos la consulta en un array
if ($valores1['cod_obra_cuatro']!=0) {
echo '<option value="'.$valores1['cod_obra_cuatro'].'">'.$valores1['cod_obra_cuatro'].'-'.$valores1['nombre_obra_cuatro'].'</option>';	
}
//ponemos una opcion en blanco en el desplegable
?>
<option></option>
<?php // ponemos como opcion el resto de las obras 
$ssql = $mysqli -> query ("SELECT codigo , nombre FROM obra WHERE activo=1 ORDER BY codigo ASC ");
while ($dat = mysqli_fetch_array($ssql)){ 
echo '<option value="'.$dat['codigo'].'">' .$dat['codigo']."---".$dat['nombre'].'</option>';	
}
?>
						</select>
						<p>
        				<input type=time class=a name="h_obra4" onfocus="restarHoras2();restarHoras();calcT3();igualar();" onfocusout="restarHoras2();restarHoras();calcT3();igualar();" id="h_obra4" onkeyup="restarHoras2();restarHoras();calcT3();igualar();" value="00:00">
        				</p>
        			
        				<input type="text" name="tiempo1" style="visibility:hidden" id=tiempo1 value="">
						<input type="text" name="tiempo2" style="visibility:hidden" id=tiempo2 value="">
        					<p>
					<input type=submit align="left" class=a value=Grabar id=sub name=Grabar>
					</p>
						</form>						 
						<form action="/web3/close.php" accept-charset="UTF-8" name=er id=er> 
						</form>
			</div>        
          </th>
        </tr>
      </tbody>
    </table>
  </body>
</html>