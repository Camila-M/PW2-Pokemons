<?php
session_start(); 
$logueado=false;

if (isset($_SESSION["login"])) {
	$logueado=true;
}
	else if(!isset($_SESSION["login"])){
		$logueado=false;
	}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Pokedex</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="Recursos/assets/css/main.css" />
		<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
	</head>
	<body id="top">

<?php


$conexion = mysqli_connect("localhost","root","","pokemons_minetti_camila");
$sql="select * from pokemons";
$result = mysqli_query($conexion,$sql);
?>
			
				<section id="banner">
					<div class="inner">
						<header>
							<h1>Pokedex</h1>
						</header>
					</div>
				</section>

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
<?php
if ($logueado===true) {
	?>
							<button class="button fit">
							<?php echo "<a href= eliminar_pokemon.php?nombre=".$rows['nombrePokemon']."> Eliminar </a>";  ?>
							</button>	
							
							<button class="button fit">
							<?php echo "<a href= modificar_pokemon.php?nombre=".$rows['nombrePokemon']."> Modificar </a>";  ?>
							</button>
<?php
}
?>
								</div>
							</div>
							
<?php
	}
?>
						</div>

			<div class="thumbnails">
				<div class="box">
					<div class="inner">
							
<?php
if ($logueado===false){
	?>
							<form action="sesion_pokemon.php">
							    <input type="submit" class="button fit" value="Iniciar Sesión" />
							</form>
	<?php 
	}
	if($logueado===true) {
	?>						
							<form action="sesion2_pokemon.php">
							    <input type="submit" class="button fit" name="cerrar" value="Cerrar Sesión" />
							</form>

							<form action="agregar_pokemon.php">
							    <input type="submit" class="button fit" value="Agregar nuevo Pokemon" />
							</form>
<?php
}
?>
							<form action="buscar_pokemon.php" method="get">
								<br><p>Ingrese el nombre del pokemon que desea buscar:</p>
								<input type="text" name="whoisthatpokemon" placeholder="Ingrese nombre"> <br>
								<button type="submit" <a href="/busquedaPokemon.php" class="button fit">Buscar</button>
							</form>							

					</div>
				</div>
			</div>	

						

		</div>
	</div>


	</body>
</html>