<?php 
	require 'conexion.php';
	session_start();
	$usuario=$_SESSION['username'];

	$correo = $_POST['correo'];
	$entrada = $_POST['entrada'];
	$Nentrada = date("d/m/y", strtotime($entrada));
	$salida = $_POST['salida'];
	$Nsalida = date("d/m/y", strtotime($salida));
	$personas = $_POST['personas'];
	$habitacion = $_POST['habitacion'];
	$dias = $Nsalida - $Nentrada;
	if($Nentrada >= $Nsalida){
		header('location: ../pags/loginerror.html');
	}
	if($personas>6){
		header('location: ../pags/loginerror.html');	
	}
	if(!$usuario){
		header('location:../pags/login.html');
	}else{
		if ($habitacion == 'Junior') {
			$subtotal = 6100 * $dias;  
		}else if($habitacion == 'Master'){
				$subtotal = 6600 * $dias;
			}else if($habitacion == 'Senior'){
				$subtotal = 7200 * $dias;
			}else{
					$subtotal = 8000* $dias;
				}

				$sql="INSERT INTO reservacion VALUES (NULL,'$usuario','$correo','$Nentrada','$Nsalida','$personas','$habitacion','$dias','$subtotal')";
				$ent=mysqli_query($con, $sql);

				if(!$ent){
					echo "chales men";
				}else{
					header('location:../php/total.php');
				}
		}
 ?>
