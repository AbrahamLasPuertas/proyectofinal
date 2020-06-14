<?php 
	require 'conexion.php';

	$usuario=$_POST['usuario'];
	$apellido=$_POST['apellido'];
	$nacimiento=$_POST['nacimiento'];
	$telefono=$_POST['telefono'];
	$correo=$_POST['correo'];
	$contrasena=$_POST['contrasena'];
	$titular=$_POST['titular'];
	$tarjeta=$_POST['tarjeta'];
	$exp=$_POST['exp'];
	$nip=$_POST['nip'];

	$sql="INSERT INTO usuarios VALUES (NULL,'$usuario','$apellido','$nacimiento','$telefono','$correo','$contrasena','$titular','$tarjeta','$exp','$nip')";
	$ent=mysqli_query($con, $sql);

	if(!$ent){
		echo "chales men";
	}else{
		header('Location:../pags/login.html');
		exit;
	}
 ?>