<!DOCTYPE html>
<html>
<head>
		<title>Modificar Pokemon</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="Recursos/assets/css/main.css" />
		<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
	</head>
	<body id="top">


<?php 
$conexion = mysqli_connect("localhost","root","","pokemons_minetti_camila");
$busqueda=($_GET["nombre"]);

$sql="SELECT * FROM pokemons WHERE nombrePokemon = '$busqueda'";
$result = mysqli_query($conexion,$sql);

?>
	<!-- Main -->
		<div id="main">
			<div class="inner">
				<!-- Boxes -->
				<div class="thumbnails">

<?php
while ($rows = mysqli_fetch_assoc($result)) {
	?>
					<div id="formulario">
							<form action="grabar_pokemon.php" method="Post" enctype="Application/x-www-form-urlencored">

								<p> Nombre: </p> <input type="text" name="nombrePokemon" readonly value="<?php echo $rows['nombrePokemon']; ?>"> <br>
								<p> Ataque: </p> <input type="text" name="ataquePokemon" value="<?php echo $rows['ataque']; ?>"> <br>
								<p> Tipo: </p> <input type="text" class="button fit" name="tipoPokemon" value="<?php echo $rows['tipo']; ?>"> <br>

								<input type="submit" class="button fit" href="grabar_pokemon.php" value="Modificar" />
								
							</form>
<?php
}
?>
								<button class="button fit">
								<?php echo "<a href= index.php> Volver a la Pokedex</a>";  ?>
								</button>
					</div>
			


				</div>
			</div>
		</div>

	</body>
</html>