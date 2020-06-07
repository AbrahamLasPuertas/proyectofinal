<?php 
	require 'conexion.php';

	$usuario=$_POST['usuario'];
	$contrasena=$_POST['contrasena'];

	$sql="INSERT INTO usuarios VALUES (NULL, '$usuario','$contrasena')";
	$entrada=mysqli_query($con, $sql);

	if(!$entrada){
		echo "chales men";
	}else{
		header('Location:../pags/login.html');
		exit;
	}
 ?>