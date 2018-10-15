<!DOCTYPE HTML>
<html>
	<head>
		<title>Agregar Pokemon</title>
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

<?php 

$conexion = mysqli_connect("localhost","root","","pokemons_minetti_camila");
$sql = "SELECT * FROM tipos";
$result= mysqli_query($conexion,$sql);

 ?>

					<div id="formulario">
								<form action="guardar_pokemon.php" method="Post" enctype="Application/x-www-form-urlencored">
									
									<p> Nombre: </p> <input type="text" name="nombrePokemon"> <br>
									<p> Ataque: </p> <input type="text" name="ataquePokemon"> <br>
									<p> Tipo: </p> <input type="text" name="tipoPokemon"> <br>
   									<input type="submit"  href="guardar_pokemon.php" class="button fit" value="Agregar" />

								</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>