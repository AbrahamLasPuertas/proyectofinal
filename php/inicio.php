<?php
	session_start();
	$usuario=$_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/jpg" href="../img_hotel/icono.jpg">
	<title>Inicio | Naab Hotel</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/style.css">
</head>	
<body>
	<header class="encabezado">
		<p class="hotel">Naab Hotel</p>
		<aside class="registro">
			<?php
				if(!$usuario){
					header("location: ../index.html");
				}else{
					echo "<h1 style='color:white; font-size:20px; font-family: Arial, Helvetica, sans-serif;'>Bienvenido: $usuario</h1>";
					echo "<form action='salir.php'><button style='background-color:#E8A01A; font-size:15px; color:#2C557A; margin-right:25px;'>cerrar sesion</button></form>";
				}	
			?>
		</aside>
		<nav>
			<ul class="main-menu">
			  <li class="main-menu__item"><a class="main-menu__link" href="#">Habitaciones</a></li>
			  <li class="main-menu__item"><a class="main-menu__link" href="../pags/restaurante.html">Restaurante</a></li>
			  <li class="main-menu__item"><a class="main-menu__link" href="../pags/actividades.html">Actividades</a></li>
			  <li class="main-menu__item"><a class="main-menu__link" href="../pags/reservacion.html">Reservaciones</a></li>
			</ul>
		</nav>
		<div class="container">
			<ul>
				<li><img class="img_menu" src="../img_hotel/slider1.jpg"></li>
				<li><img class="img_menu" src="../img_hotel/slider4.jpg"></li>
				<li><img class="img_menu" src="../img_hotel/slider3.jpg"></li>
				<li><img class="img_menu" src="../img_hotel/slider2.jpg"></li>
			</ul>
		</div>
	</header>
	<main>
		<h1 class="bienvenida">Bienvenido al Hotel</h1>
		<p class="contenido">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus iste ad nesciunt repellat neque architecto eum officia rerum adipisci? Assumenda ex voluptates simi
			lique facere et consectetur harum fugiat vero nulla!
		</p>
		<div class="contenedor">
			<a href="#"><div class="box1">Habitaciones1</div></a>
			<a href="../pags/restaurante.html"><div class="box2">Restaurante2</div></a>
			<a href="../pags/actividades.html"><div class="box3">Actividades3</div></a>
			<a href="../pags/reservacion.html"><div class="box4">Reservaciones4</div></a>
			<a href="#"><div class="box5">Experiencias5</div></a>
			<a href="#"><div class="box6">Entretenim6</div></a>
		</div>
		<div class="video">
			<video class="video_index_link" src="../../proyectofinal/videos/NaabHotel.mp4" autoplay loop muted></video>
		</div>
		<article>
			<section>
				<div class="acomodo">
					<h1 class="titulos">Playa</h1>
					<img class="imagen__contenido" src="../img_hotel/restaurante.jpg" alt="RESTAURANTE">
					<p class="descripcion">Lorem ipsum dolor, sit amet consectetur adipisi
						cing elit. Aliquid consectetur ac
						cusamus sapiente temporibus! Deserunt, velit c
						upiditate sit natus dolores doloribus repellat maior
						es id nisi minus veritatis odio vero, esse ut?
					</p>
				</div>

				<div class="acomodo2">
					<h1 class="titulos2">RESTAURANTE</h1>
					<img class="imagen__contenido2" src="../img_hotel/restaurante.jpg" alt="RESTAURANTE">
					<p class="descripcion2">Lorem, ipsum dolor sit amet co
					nsectetur adipisicing elit. Perferendis odio v
					itae necessitatibus ea. Neque minima vel, aliqua
					m, nobis cupiditate suscipit commodi dolor totam 
					doloremque cabo velit alias incidunt excepturi placeat.
					</p>
				</div>
				<div class="acomodo">
					<h1 class="titulos">ACTIVIDADES</h1>
					<img class="imagen__contenido" src="../img_hotel/actividades.jpeg" alt="ACTIVIDADES">
					<p class="descripcion">Lorem, ipsum dolor sit amet co
					nsectetur adipisicing elit. Perferendis odio v
					itae necessitatibus ea. Neque minima vel, aliqua
					m, nobis cupiditate suscipit commodi dolor totam 
					doloremque cabo velit alias incidunt excepturi placeat.
					</p>
				</div>
				<div class="acomodo2">
					<h1 class="titulos2">HABITACIONES</h1>
					<img class="imagen__contenido2" src="../img_hotel/habitaciones.jpeg" alt="HABITACIONES">
					<p class="descripcion2">Lorem, ipsum dolor sit amet co
					nsectetur adipisicing elit. Perferendis odio v
					itae necessitatibus ea. Neque minima vel, aliqua
					m, nobis cupiditate suscipit commodi dolor totam 
					doloremque cabo velit alias incidunt excepturi placeat.
					</p>
				</div>
			</section>
		</article>
	</main>
	<div class="container_footer">
			<div class="column1">
				<h1 class="titulo_footer">SIGUENOS EN NUESTRAS REDES SOCIALES</h1>
				<div class="redes">
					<a href="https://www.facebook.com/Naab-hotel-106165427769572/"><img class="decoracion" src="../img_hotel/facebook.png"></a>
					<a href="https://twitter.com/HotelNaab"><img class="decoracion2" src="../img_hotel/twitter.png"></a>
					<a href="https://www.instagram.com/naabhotel123/"><img class="decoracion3" src="../img_hotel/instagram.png"></a>
				</div>
			</div>
			<div class="column2">
				<h1 class="titulo_footer2">CONTACTANOS</h1>
				<div class="contacto">
					<img class="decoracion" src="../img_hotel/localizacion.png">
					<label>Km 12 5 Carretera Manzanillo<br>
					 Manzanillo, 28860</label>
				</div>
				<div class="contacto">
					<img class="decoracion" src="../img_hotel/telefono.png">
					<label>+33-432-432-221</label>
				</div>
				<div class="contacto">
					<img class="decoracion" src="../img_hotel/mensaje.png">
					<label>naab.hotel@gmail.com</label>
				</div>
			</div>
		</div>
	<footer>
		<div class="column3">
			<label>©2020 naab,inc.</label>
		</div>
	</footer>
</body>
</html>