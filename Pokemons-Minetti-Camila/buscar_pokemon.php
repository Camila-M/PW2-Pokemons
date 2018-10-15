<!DOCTYPE HTML>
<html>
	<head>
		<title>Buscar Pokemon</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="Recursos/assets/css/main.css" />
		<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
	</head>
	<body id="top">

<?php

$conexion = mysqli_connect("localhost","root","","pokemons_minetti_camila");
$sqlAll = "SELECT * FROM pokemons";
$resultAll= mysqli_query($conexion,$sqlAll);

 if (isset ($_GET["whoisthatpokemon"])) {
	$aux = $_GET["whoisthatpokemon"];
	$aux=strtoupper($aux);
	$sql = "SELECT * FROM pokemons WHERE nombrePokemon = '$aux'";
	$result= mysqli_query($conexion,$sql);
	$resultado = mysqli_num_rows($result);

	if ($resultado==0) {
		?>
		<div id="main">
			<div class="inner">
			<!-- Boxes -->
				<div class="thumbnails">
					<div class="box">
						<div class="inner">
								<h2 id="mensaje1">UPS!</h2>
								<h3 id="mensaje2"> No existe un Pokemon con ese nombre! </h3>
								<img id="triste" src="Recursos/img_pokemon/pikachu_triste.png" style="width: 80%;">
							<button class="button fit">
							<?php echo "<a href= index.php> Volver a la Pokedex </a>";  ?>
							</button>	
						</div>
					</div>
				</div>
			</div>
		</div>

			<!-- Main -->
	<div id="main">
		<div class="inner">
		<!-- Boxes -->
			<div class="thumbnails">
	<?php
	while ($rows = mysqli_fetch_assoc($resultAll)){ 
	?>
	
							<div class="box">
								<?php echo '<img src="Recursos/img_pokemon/'.$rows['nombrePokemon'].'.png" height="100px";/>'; ?>
								<div class="inner">
									<h3> <?php echo "$rows[nombrePokemon]"; ?> </h3>
									<p> <?php echo ($rows['ataque']); ?> </p>
									<?php echo '<img src="Recursos/img_pokemon/'.$rows['tipo'].'.png" height="100px";/>';  ?>

								</div>
							</div>
<?php 
} ?>
 			</div>
 		</div>
 	</div>
<?php 
}
else {
?>

<!-- Main -->
	<div id="main">
		<div class="inner">
		<!-- Boxes -->
			<div class="thumbnails">

<?php
while ($rows = mysqli_fetch_assoc($result)){ 
	?>
							<div class="box">
								<?php echo '<img src="Recursos/img_pokemon/'.$rows['nombrePokemon'].'.png" height="100px";/>'; ?>
								<div class="inner">
									<h3> <?php echo "$rows[nombrePokemon]"; ?> </h3>
									<p> <?php echo ($rows['ataque']); ?> </p>
									<?php echo '<img src="Recursos/img_pokemon/'.$rows['tipo'].'.png" height="100px";/>';  ?>
						
								<button class="button fit">
									<?php echo "<a href= index.php> Volver a la Pokedex</a>";  ?>
								</button>

								</div>
							</div>
							
<?php
	}
}
}
else {

?>

	<!-- Main -->
			<div id="main">
				<div class="inner">
				<!-- Boxes -->
					<div class="thumbnails">

		<?php

		while ($rows = mysqli_fetch_assoc($resultAll)){ 
		?>
		
							<div class="box">
								<?php echo '<img src="Recursos/img_pokemon/'.$rows['nombrePokemon'].'.png" height="100px";/>'; ?>
								<div class="inner">
									<h3> <?php echo "$rows[nombrePokemon]"; ?> </h3>
									<p> <?php echo ($rows['ataque']); ?> </p>
									<?php echo '<img src="Recursos/img_pokemon/'.$rows['tipo'].'.png" height="100px";/>';  ?>

								</div>
							</div>

<?php
}
?>
					<div class="box">
						<div class="inner">
							<button class="button fit">
							<?php echo "<a href= index.php> Volver a la Pokedex </a>";  ?>
							</button>	
						</div>
					</div>
				</div>
			</div>
		</div>
<?php
}
?>
				

	</body>
</html>