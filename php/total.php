<?php
	require 'conexion.php';

	$sql = "SELECT * FROM reservacion ORDER BY id DESC LIMIT 1";
	$resultado = mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($resultado);
?>
<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
	<link rel="icon" type="image/jpg" href="../img_hotel/icono.jpg">
	<link rel="stylesheet" type="text/css" href="../css/style-factura.css">
	<title>Factura | Naab Hotel</title>
 </head>
 <body>
 	<header class="encabezado">
 		<p class="hotel">Naab Hotel</p>
        <div class="linea"></div>
 	</header>
 	<main>
 		<h1 class="fac">FACTURA DE COMPRA</h1>
 		<div class="container">
			<h1 class="titulo">Tu reservación ha sido realizada con exito!</h1>
		 	<p class="texto">Usuario: <?php echo $row["usuario"];?></p>
		 	<p class="texto">Correo: <?php echo $row["correo"];?></p>
		 	<p class="texto">Hospedados: <?php echo $row["personas"];?></p>
		 	<p class="texto">Entrada: <?php echo $row["Nentrada"];?></p>
		 	<p class="texto">Salida: <?php echo $row["Nsalida"];?></p>
		 	<p class="texto">Noches: <?php echo $row["dias"];?></p>
		 	<p class="texto">Habitacion: <?php echo $row["habitacion"];?></p>
		 	<p class="texto">Precio total: $<?php echo $row["subtotal"];?></p>
		 	<img class="logito" src="../img_hotel/icono.jpg">
		 </div>
	 	<button class="boton"><a href="../php/inicio.php">Hecho!</a></button>
 	</main>
 	<footer>
 		<div class="column3">
			<label>©2020 naab,inc.</label>
		</div>
 	</footer>
 </body>
 </html>