<?php
session_start();
//iniciamos sesion de las cabeceras
//conexion con la base de datos
$mysqli = new mysqli('127.0.0.1:3307', 'root', 'AIN@:active2016', 'datos');
$conn=mysqli_connect('127.0.0.1:3307', 'root', 'AIN@:active2016', 'datos');
//recojemos los datos del formulario anterior
$usuario=$_POST['usr'];
$pass=$_POST['pass'];
//hacemos la consulta a la base de datos
$ssql=$mysqli -> query ("SELECT * FROM trabajadores WHERE usuario='$usuario' AND activo='1'");
$sql = mysqli_fetch_array($ssql);
//definimos tipos de sesion
$oficina='0';
$obra='1';
$encargado='2';
$admin='3';
//comprobamos el tipo de sesion y redirijimos
			if   (password_verify( $pass, $sql['pass']) ){
				if (($sql['tipo']==$obra) or ($sql['tipo']==$oficina)) {
					$_SESSION['val']=$usuario ;
					$_SESSION['name']=$sql['nombre'] ;
					$_SESSION['id_trabajador']=$sql['id_trabajador'] ;
					$tipo=$sql['tipo'] ;
					$_SESSION['tipo']=$sql['tipo'] ;
					//para comprobar erroes descomentar
					//echo "0 y 1----";
					//echo "|-nombre--" .$sql['nombre']. "-|-usr--" .$usuario. "-|-id trabajador--" .$sql['id_trabajador']. "-|-tipo--" .$sql['tipo'];
					//redirijimos
					header("Location:./fichar/fichar.php?usr=$usuario&tipo=$tipo");
			
				}elseif ($sql['tipo'] == $encargado) {
					$_SESSION["usr"]=$usr;
					$_SESSION["name"]=$sql['nombre'];
					$_SESSION["id_trabajador"]=$sql['id_trabajador'];
					$_SESSION["tipo"]=$sql['tipo'];
					//para comprobar erroes descomentar
					//echo "2-";
					//echo "|-nombre--" .$sql['nombre']. "-|-usr--" .$usuario. "-|-id trabajador--" .$sql['id_trabajador']. "-|-tipo--" .$sql['tipo'];
					//redirijimos
					header("Location:./fichar_encargado/fichar_encargado.php?email=$usuario");
			
				}elseif ($sql['tipo'] == $admin) {
					$usradmin ="admin";
					$_SESSION["usr"]= $usradmin;
					//redirijimosirijimos
					header("Location:./admin/index.php?usr=admin&tipo=$tipo");
				}else{//en caso de que no tenga un tipo valido sale error
					//echo "fallo 1";
				
				header("Location:error.php");
				}
			}else{//en caso de que la verificacion de la contraseña no es correcta sale error
					//echo "fallo 2"		;			
			header("Location:error.php");
          }
?>




