<?php
	require 'conexion.php';
	session_start();

	$usuario=$_POST['usuario'];
	$contrasena=$_POST['contrasena'];

	$sql="SELECT COUNT(*) as total FROM usuarios WHERE usuario='$usuario' and contrasena='$contrasena'";
	$buscar=mysqli_query($con, $sql);
	$array=mysqli_fetch_array($buscar);

	if($array['total']>0){
		$_SESSION['username']=$usuario;
		header("location: inicio.php");
	}else{
		header ("location: ../pags/loginerror.html");
	}
?>