<!DOCTYPE HTML>
<html>
	<head>
		<title>Error al agregar Pokemon</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="Recursos/assets/css/main.css" />
		<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
	</head>
	<body id="top">

	
		<div id="main">
			<div class="inner">
			
					<div class="thumbnails">


<?php 
$conexion = mysqli_connect("localhost","root","","pokemons_minetti_camila");
$newNombre = ($_POST["nombrePokemon"]);
$newAtaque = ($_POST["ataquePokemon"]);
$newTipo = ($_POST["tipoPokemon"]);
$mayus=strtoupper($newNombre);
$sqlnombre = "SELECT nombrePokemon FROM pokemons WHERE nombrePokemon = '$mayus'";

$result= mysqli_query($conexion,$sqlnombre);
$resultado = mysqli_num_rows($result);

if ($resultado==0) {
	$sql = "INSERT INTO pokemons (nombrePokemon, ataque, tipo)
	VALUES ('$mayus', '$newAtaque', '$newTipo');"; 
	header("location:index.php"); 
	$result= mysqli_query($conexion,$sql);
} else { ?>

<div class="box">
		<div class="inner">
			<h2 id="mensaje1">UPS!</h2>
			<h3 id="mensaje2"> Ya existe un Pokemon con ese nombre! </h3>
			<img id="triste" src="Recursos/img_pokemon/pikachu_triste.png" style="width: 80%;">
			<button class="button fit">
				<?php echo "<a href= index.php> Volver a la Pokedex </a>";  ?>
			</button>	
		</div>
	</div>
<?php
} 
?>



		</div>
	</div>
</div>

</body>
</html> 