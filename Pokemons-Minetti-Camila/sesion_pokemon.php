<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Iniciar Sesión</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="Recursos/assets/css/main.css" />
		<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet"/>
	</head>
	<body id="top">

	<!-- Main -->
		<div id="main">
			<div class="inner">
			<!-- Boxes -->

				<div class="thumbnails">


					<div id="formulario">
								<form action="sesion2_pokemon.php" method="Post" enctype="Application/x-www-form-urlencored">
									
									<p> Usuario: </p> <input type="text" name="usuario"> <br>
									<p> Contraseña: </p> <input type="password" name="password"> <br>
   									<input type="submit"  href="sesion2_pokemon.php" class="button fit" value="Iniciar Sesión" />
   									<button class="button fit">
									<?php echo "<a href= index.php> Volver a la Pokedex </a>";  ?>
									</button>
								</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>