<?php
include './comprobar.php';
	
    $mysqli = new mysqli('127.0.0.1:3307', 'root', 'AIN@:active2016', 'authentication');
	$empresa=$_GET['empresa'];
?>
<!DOCTYPE html>
<html>

<head>
<meta name="tipo_contenido"  content="text/html;" http-equiv="content-type" charset="utf-8">
<title>Fichar</title>

<link rel="stylesheet" type="text/css" href="style2.css">

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
			<p>
			<label>Nombre:</label>
<select name=name >
          <?php
	$empresa=$_GET['empresa'];
	$email=$_GET['email'];
      
      $query1 = $mysqli -> query ("SELECT * FROM myuser WHERE usuario='$email'");
                    while ($valores1 = mysqli_fetch_array($query1)){
            echo '<option selected=selected value="'.$valores1[name].'">'.$valores1[name].'</option>';
            }
        
      
          
          $query = $mysqli -> query ("SELECT * FROM myuser WHERE activo='1' AND encargado='0' AND empresa='$empresa'");
                    while ($valores = mysqli_fetch_array($query)){
            echo '<option value="'.$valores[name].'">'.$valores[name].'</option>';
            }
        ?> 

</select>

<select name=mail style="visibility:hidden" >
         <?php
        $empresa=$_GET['empresa'];
	$email=$_GET['email'];
          $query = $mysqli -> query ("SELECT * FROM myuser WHERE usuario='$email'");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option Selected="selected value="'.$valores[usuario].'">'.$valores[usuario].'</option>';
          }
        ?> 

</select>
					</p>
					<p>
  						<label>Empresa:</label>

<?php
$empresa=$_GET['empresa'];
$hola=$mysqli -> query ("SELECT * FROM myuser WHERE usuario='$email' AND empresa='$empresa'");
while ($valores = mysqli_fetch_array($hola)) {
echo '<input type=text class=a disabled=disabled placeholder="'.$valores['empresa'].'" name="espresa" value="'.$valores['empresa'].'">';
}
?>
						<select name=empresa style="visibility:hidden" >
<?php
$empresa=$_GET['empresa'];
$email=$_GET['email'];
$query = $mysqli -> query ("SELECT * FROM myuser WHERE usuario='$email' AND empresa='$empresa'");
while ($valores = mysqli_fetch_array($query)) {
echo '<option Selected="selected value="'.$valores[empresa].'">'.$valores[empresa].'</option>';
}
?> 
						</select>
					</p>
						<p>
											<label>Fecha:</label>
			 			<input type=date class=a required name=fecha value="<?php echo date("Y-m-d");?>" >
					</p>
						<p>
					<label>Hora entrada:</label>
<?php
$empresa=$_GET['empresa'];
$email=$_GET['email'];
$fecha_actual = date("Y-m-d");
$date1 = date("Y-m-d",strtotime($fecha_actual."- 1 days")); 
$date2 = date("Y-m-d",strtotime($fecha_actual."- 2 days")); 
$date3 = date("Y-m-d",strtotime($fecha_actual."- 3 days")); 
$query1 = $mysqli -> query ("SELECT * FROM ficha WHERE email='$email' AND empresa='$empresa' AND fecha='$date1'");
$query2 = $mysqli -> query ("SELECT * FROM ficha WHERE email='$email' AND empresa='$empresa' AND fecha='$date2'");
$query3 = $mysqli -> query ("SELECT * FROM ficha WHERE email='$email' AND empresa='$empresa' AND fecha='$date3'");

$valores1 = mysqli_fetch_array($query1);
$valores2 = mysqli_fetch_array($query2);
$valores3 = mysqli_fetch_array($query3);
if (isset ($valores1)) {
echo '	<input type=time class=a value="'.$valores1[hora_inicio1].'" required id=hora_ini onfocus="restarHoras2();restarHoras();calcT3();igualar();" onfocusout="restarHoras2();restarHoras();calcT3();igualar();" onkeyup="restarHoras2();restarHoras();calcT3();igualar();" name=hora_entrada1>';	
}elseif (isset ($valores2)){
echo '	<input type=time class=a value="'.$valores2[hora_inicio1].'" required id=hora_ini onfocus="restarHoras2();restarHoras();calcT3();igualar();" onfocusout="restarHoras2();restarHoras();calcT3();igualar();" onkeyup="restarHoras2();restarHoras();calcT3();igualar();" name=hora_entrada1>';	
}elseif (isset ($valores3)){
echo '	<input type=time class=a value="'.$valores3[hora_inicio1].'" required id=hora_ini onfocus="restarHoras2();restarHoras();calcT3();igualar();" onfocusout="restarHoras2();restarHoras();calcT3();igualar();" onkeyup="restarHoras2();restarHoras();calcT3();igualar();" name=hora_entrada1>';	
}else {
echo '<input type=time class=a required id=hora_ini onfocus="restarHoras2();restarHoras();calcT3();igualar();" onfocusout="restarHoras2();restarHoras();calcT3();igualar();" onkeyup="restarHoras2();restarHoras();calcT3();igualar();" name=hora_entrada1>';
}
?> 	
					</p>
					<p>
						<label>Hora salida intermdia :</label>
						<?php
$empresa=$_GET['empresa'];
$email=$_GET['email'];
$fecha_actual = date("Y-m-d");
$date1 = date("Y-m-d",strtotime($fecha_actual."- 1 days")); 
$date2 = date("Y-m-d",strtotime($fecha_actual."- 2 days")); 
$date3 = date("Y-m-d",strtotime($fecha_actual."- 3 days")); 
$query1 = $mysqli -> query ("SELECT * FROM ficha WHERE email='$email' AND empresa='$empresa' AND fecha='$date1'");
$query2 = $mysqli -> query ("SELECT * FROM ficha WHERE email='$email' AND empresa='$empresa' AND fecha='$date2'");
$query3 = $mysqli -> query ("SELECT * FROM ficha WHERE email='$email' AND empresa='$empresa' AND fecha='$date3'");

$valores1 = mysqli_fetch_array($query1);
$valores2 = mysqli_fetch_array($query2);
$valores3 = mysqli_fetch_array($query3);
if (isset ($valores1)) {
echo '	<input type=time class=a name=hora_salida2 value="'.$valores1[hora_fin2].'" required id=hora_fin2 onfocus="restarHoras2();restarHoras();calcT3();igualar();" onfocusout="restarHoras2();restarHoras();calcT3();igualar();" onkeyup="restarHoras2();restarHoras();calcT3();igualar();">';	
}elseif (isset ($valores2)){
echo '	<input type=time class=a name=hora_salida2 value="'.$valores2[hora_fin2].'" required id=hora_fin2 onfocus="restarHoras2();restarHoras();calcT3();igualar();" onfocusout="restarHoras2();restarHoras();calcT3();igualar();" onkeyup="restarHoras2();restarHoras();calcT3();igualar();" >';	
}elseif (isset ($valores3)){
echo '	<input type=time class=a name=hora_salida2 value="'.$valores3[hora_fin2].'" required id=hora_fin2 onfocus="restarHoras2();restarHoras();calcT3();igualar();" onfocusout="restarHoras2();restarHoras();calcT3();igualar();" onkeyup="restarHoras2();restarHoras();calcT3();igualar();" >';	
}else {
echo '<input type=time class=a  name=hora_salida2 onfocus="restarHoras2();restarHoras();calcT3();igualar();" onfocusout="restarHoras2();restarHoras();calcT3();igualar();" onkeyup="restarHoras2();restarHoras();calcT3();igualar();" id=hora_fin2 value=00:00>	';
}
?> 	
						
						
						</p>
						<p>
						<label>Hora entrada intermedia:</label>
<?php
$empresa=$_GET['empresa'];
$email=$_GET['email'];
$fecha_actual = date("Y-m-d");
$date1 = date("Y-m-d",strtotime($fecha_actual."- 1 days")); 
$date2 = date("Y-m-d",strtotime($fecha_actual."- 2 days")); 
$date3 = date("Y-m-d",strtotime($fecha_actual."- 3 days")); 
$query1 = $mysqli -> query ("SELECT * FROM ficha WHERE email='$email' AND empresa='$empresa' AND fecha='$date1'");
$query2 = $mysqli -> query ("SELECT * FROM ficha WHERE email='$email' AND empresa='$empresa' AND fecha='$date2'");
$query3 = $mysqli -> query ("SELECT * FROM ficha WHERE email='$email' AND empresa='$empresa' AND fecha='$date3'");

$valores1 = mysqli_fetch_array($query1);
$valores2 = mysqli_fetch_array($query2);
$valores3 = mysqli_fetch_array($query3);
if (isset ($valores1)) {
echo '	<input type=time class=a value="'.$valores1[hora_inicio2].'" id=hora_ini2 onfocus="restarHoras2();restarHoras();calcT3();igualar();" onfocusout="restarHoras2();restarHoras();calcT3();igualar();" onkeyup="restarHoras2();restarHoras();calcT3();igualar();" name=hora_entrada2>';	
}elseif (isset ($valores2)){
echo '	<input type=time class=a value="'.$valores2[hora_inicio2].'" id=hora_ini2 onfocus="restarHoras2();restarHoras();calcT3();igualar();" onfocusout="restarHoras2();restarHoras();calcT3();igualar();" onkeyup="restarHoras2();restarHoras();calcT3();igualar();" name=hora_entrada2>';	
}elseif (isset ($valores3)){
echo '	<input type=time class=a value="'.$valores3[hora_inicio2].'" id=hora_ini2 onfocus="restarHoras2();restarHoras();calcT3();igualar();" onfocusout="restarHoras2();restarHoras();calcT3();igualar();" onkeyup="restarHoras2();restarHoras();calcT3();igualar();" name=hora_entrada2>';	
}else {
echo ' <input type=time class=a name=hora_entrada2 onfocus="restarHoras2();restarHoras();calcT3();igualar();" onfocusout="restarHoras2();restarHoras();calcT3();igualar();" onkeyup="restarHoras2();restarHoras();calcT3();igualar();" id=hora_ini2 value=00:00>';
}
?> 	
 					</p>
 					<p>
 					<label>Hora salida</label>
 								
					<?php
$empresa=$_GET['empresa'];
$email=$_GET['email'];
$fecha_actual = date("Y-m-d");
$date1 = date("Y-m-d",strtotime($fecha_actual."- 1 days")); 
$date2 = date("Y-m-d",strtotime($fecha_actual."- 2 days")); 
$date3 = date("Y-m-d",strtotime($fecha_actual."- 3 days")); 
$query1 = $mysqli -> query ("SELECT * FROM ficha WHERE email='$email' AND empresa='$empresa' AND fecha='$date1'");
$query2 = $mysqli -> query ("SELECT * FROM ficha WHERE email='$email' AND empresa='$empresa' AND fecha='$date2'");
$query3 = $mysqli -> query ("SELECT * FROM ficha WHERE email='$email' AND empresa='$empresa' AND fecha='$date3'");

$valores1 = mysqli_fetch_array($query1);
$valores2 = mysqli_fetch_array($query2);
$valores3 = mysqli_fetch_array($query3);
if (isset ($valores1)) {
echo '	<input type=time class=a required value="'.$valores1[hora_fin1].'" id=hora_fin onfocus="restarHoras2();restarHoras();calcT3();igualar();" onfocusout="restarHoras2();restarHoras();calcT3();igualar();" onkeyup="restarHoras2();restarHoras();calcT3();igualar();" name=hora_salida1>';	
}elseif (isset ($valores2)){
echo '	<input type=time class=a required value="'.$valores2[hora_fin1].'" id=hora_fin onfocus="restarHoras2();restarHoras();calcT3();igualar();" onfocusout="restarHoras2();restarHoras();calcT3();igualar();" onkeyup="restarHoras2();restarHoras();calcT3();igualar();" name=hora_salida1>';	
}elseif (isset ($valores3)){
echo '	<input type=time class=a required value="'.$valores3[hora_fin1].'" id=hora_fin onfocus="restarHoras2();restarHoras();calcT3();igualar();" onfocusout="restarHoras2();restarHoras();calcT3();igualar();" onkeyup="restarHoras2();restarHoras();calcT3();igualar();" name=hora_salida1>';	
}else {
echo ' 	<input type=time class=a required id=hora_fin onfocus="restarHoras2();restarHoras();calcT3();igualar();" onfocusout="restarHoras2();restarHoras();calcT3();igualar();" onkeyup="restarHoras2();restarHoras();calcT3();igualar();" name=hora_salida1>';
}
?> 	
					</p>					
					<p>
						<label>Horas totales:</label>
						<input type="time" name="t3" disabled=disabled id=t3 value="">
						</p>
						<p>
						
						
						</p>
						<label>Gastos:</label>
					<input type="number" min="0.00" max="10000.00" value=0,0 step="0.01" name="gastos" id=gastos>&euro;
										<p>
					<label>Notas:</label><br>
					<textarea rows="10" cols="60" name="notas" id=notas ></textarea>
					<p>
			<input type="text" name="resta1" style="visibility:hidden" id=resta1 value="">
			<input type="text" name="resta2" style="visibility:hidden" id=resta2 value="">
				
								
				<div  align="right">
					
						<button type=type="submit" formaction=/web1/close.php form=er >Cerrar Sesion</button>
					
				</div>
			</div>
			
       </th>
    	 <th style="width:50%">
            <div id="cfr" align="left">
						<p>
						
						<label>Obra 1:</label>
					
						<select name="obra1" id=obra1 required>
											<?php
$empresa=$_GET['empresa'];
$email=$_GET['email'];
$fecha_actual = date("Y-m-d");
$date1 = date("Y-m-d",strtotime($fecha_actual."- 1 days")); 
$date2 = date("Y-m-d",strtotime($fecha_actual."- 2 days")); 
$date3 = date("Y-m-d",strtotime($fecha_actual."- 3 days")); 
$query1 = $mysqli -> query ("SELECT * FROM ficha WHERE email='$email' AND empresa='$empresa' AND fecha='$date1'");
$query2 = $mysqli -> query ("SELECT * FROM ficha WHERE email='$email' AND empresa='$empresa' AND fecha='$date2'");
$query3 = $mysqli -> query ("SELECT * FROM ficha WHERE email='$email' AND empresa='$empresa' AND fecha='$date3'");

$valores1 = mysqli_fetch_array($query1);
$valores2 = mysqli_fetch_array($query2);
$valores3 = mysqli_fetch_array($query3);
if (isset ($valores1)) {
echo '<option value="'.$valores1[obra1].'">'.$valores1[obra1].'</option>';	
}elseif (isset ($valores2)){
echo '<option value="'.$valores2[obra1].'">'.$valores2[obra1].'</option>';
}elseif (isset ($valores3)){
echo '<option value="'.$valores3[obra1].'">'.$valores3[obra1].'</option>';
}
?>
<option></option>
<?php
$query = $mysqli -> query ("SELECT * FROM obras WHERE activo= '1' AND empresa='$empresa' ORDER BY id_obra");
while ($valores = mysqli_fetch_array($query)) {
echo '<option value="'.$valores[id_obra].'">' .$valores[id_obra]."---".$valores[obra].'</option>';
}
?>

						</select>
					</p>
    					<input type=time class=a disabled=disabled name=h_obra1 onkeyup="igualar();" id="h_obra1" value="" >
        			</p>

					<p>
  						<label>Obra 2:</label>
						<select name=obra2>
						<?php
$empresa=$_GET['empresa'];
$email=$_GET['email'];
$fecha_actual = date("Y-m-d");
$date1 = date("Y-m-d",strtotime($fecha_actual."- 1 days")); 
$date2 = date("Y-m-d",strtotime($fecha_actual."- 2 days")); 
$date3 = date("Y-m-d",strtotime($fecha_actual."- 3 days")); 
$query1 = $mysqli -> query ("SELECT * FROM ficha WHERE email='$email' AND empresa='$empresa' AND fecha='$date1'");
$query2 = $mysqli -> query ("SELECT * FROM ficha WHERE email='$email' AND empresa='$empresa' AND fecha='$date2'");
$query3 = $mysqli -> query ("SELECT * FROM ficha WHERE email='$email' AND empresa='$empresa' AND fecha='$date3'");

$valores1 = mysqli_fetch_array($query1);
$valores2 = mysqli_fetch_array($query2);
$valores3 = mysqli_fetch_array($query3);
if (isset ($valores1)) {
echo '<option value="'.$valores1[obra2].'">'.$valores1[obra2].'</option>';	
}elseif (isset ($valores2)){
echo '<option value="'.$valores2[obra2].'">'.$valores2[obra2].'</option>';
}elseif (isset ($valores3)){
echo '<option value="'.$valores3[obra2].'">'.$valores3[obra2].'</option>';
}
?>
<option></option>
<?php
$query = $mysqli -> query ("SELECT * FROM obras WHERE activo= '1' AND empresa='$empresa' ORDER BY id_obra");
while ($valores = mysqli_fetch_array($query)) {
echo '<option value="'.$valores[id_obra].'">' .$valores[id_obra]."---".$valores[obra].'</option>';
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
											<?php
$empresa=$_GET['empresa'];
$email=$_GET['email'];
$fecha_actual = date("Y-m-d");
$date1 = date("Y-m-d",strtotime($fecha_actual."- 1 days")); 
$date2 = date("Y-m-d",strtotime($fecha_actual."- 2 days")); 
$date3 = date("Y-m-d",strtotime($fecha_actual."- 3 days")); 
$query1 = $mysqli -> query ("SELECT * FROM ficha WHERE email='$email' AND empresa='$empresa' AND fecha='$date1'");
$query2 = $mysqli -> query ("SELECT * FROM ficha WHERE email='$email' AND empresa='$empresa' AND fecha='$date2'");
$query3 = $mysqli -> query ("SELECT * FROM ficha WHERE email='$email' AND empresa='$empresa' AND fecha='$date3'");

$valores1 = mysqli_fetch_array($query1);
$valores2 = mysqli_fetch_array($query2);
$valores3 = mysqli_fetch_array($query3);
if (isset ($valores1)) {
echo '<option value="'.$valores1[obra3].'">'.$valores1[obra3].'</option>';	
}elseif (isset ($valores2)){
echo '<option value="'.$valores2[obra3].'">'.$valores2[obra3].'</option>';
}elseif (isset ($valores3)){
echo '<option value="'.$valores3[obra3].'">'.$valores3[obra3].'</option>';
}
?>
<option></option>
<?php
$query = $mysqli -> query ("SELECT * FROM obras WHERE activo= '1' AND empresa='$empresa' ORDER BY id_obra");
while ($valores = mysqli_fetch_array($query)) {
echo '<option value="'.$valores[id_obra].'">' .$valores[id_obra]."---".$valores[obra].'</option>';
}
?>

						</select>
						
						<p>
						<input type=time class=a name="h_obra3" id="h_obra3" onfocus="restarHoras2();restarHoras();calcT3();igualar();" onfocusout="restarHoras2();restarHoras();calcT3();igualar();" onkeyup="restarHoras2();restarHoras();calcT3();igualar();"  value="00:00">
        				</p>
						<p>
  						<label>Obra 4:</label>
  						
  						<select name=obra4>
										<?php
$empresa=$_GET['empresa'];
$email=$_GET['email'];
$fecha_actual = date("Y-m-d");
$date1 = date("Y-m-d",strtotime($fecha_actual."- 1 days")); 
$date2 = date("Y-m-d",strtotime($fecha_actual."- 2 days")); 
$date3 = date("Y-m-d",strtotime($fecha_actual."- 3 days")); 
$query1 = $mysqli -> query ("SELECT * FROM ficha WHERE email='$email' AND empresa='$empresa' AND fecha='$date1'");
$query2 = $mysqli -> query ("SELECT * FROM ficha WHERE email='$email' AND empresa='$empresa' AND fecha='$date2'");
$query3 = $mysqli -> query ("SELECT * FROM ficha WHERE email='$email' AND empresa='$empresa' AND fecha='$date3'");

$valores1 = mysqli_fetch_array($query1);
$valores2 = mysqli_fetch_array($query2);
$valores3 = mysqli_fetch_array($query3);
if (isset ($valores1)) {
echo '<option value="'.$valores1[obra4].'">'.$valores1[obra4].'</option>';	
}elseif (isset ($valores2)){
echo '<option value="'.$valores2[obra4].'">'.$valores2[obra4].'</option>';
}elseif (isset ($valores3)){
echo '<option value="'.$valores3[obra4].'">'.$valores3[obra4].'</option>';
}
?>
<option></option>
<?php
$query = $mysqli -> query ("SELECT * FROM obras WHERE activo= '1' AND empresa='$empresa' ORDER BY id_obra");
while ($valores = mysqli_fetch_array($query)) {
echo '<option value="'.$valores[id_obra].'">' .$valores[id_obra]."---".$valores[obra].'</option>';
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
						<form action="/web1/close.php" accept-charset="UTF-8" name=er id=er> 
						</form>
			</div>        
          </th>
        </tr>
      </tbody>
    </table>
  </body>
</html>