<?php
	$user="abrahamtec";
	$pass="mar220201";
	$server="localhost";
	$db="naabhotel";
	$con=@mysqli_connect($server, $user, $pass, $db);

	if (!$con) {
		echo "no hay conexion";
	}else{
		echo "nice :)";
	}
?>