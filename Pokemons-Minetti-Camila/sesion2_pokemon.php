<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Error de inicio sesión</title>
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


if (isset ($_GET["cerrar"]) && isset($_SESSION["login"]) ){
	$cerrar=($_GET["cerrar"]);
	session_destroy();
	header("location:index.php");
}


if (isset ($_POST["usuario"]) && isset ($_POST["password"])) {
	$us = $_POST["usuario"];
	$pass = $_POST["password"];

	$conexion = mysqli_connect("localhost","root","","pokemons_minetti_camila");
	$sql = "SELECT * FROM usuarios WHERE usuario='$us' AND password = '$pass'";
	$result= mysqli_query($conexion,$sql);
	$resultado=mysqli_num_rows($result);
			
	if ($resultado!=0) {
		$_SESSION["login"]="1";
		header("location:index.php");
		exit();
} 
else{ 
	?>
	<div class="box">
						<div class="inner">
								<h2 id="mensaje1">UPS!</h2>
								<h3 id="mensaje2"> No existe un usuario con ese nombre! </h3>
								<img id="triste" src="Recursos/img_pokemon/pikachu_triste.png" style="width: 80%;">
							<button class="button fit">
							<?php echo "<a href= sesion_pokemon.php> Volver a intentar </a>";  ?>
							</button>	
						</div>
					</div>
<?php
}
} else { 
?>
				<button class="button fit">
				<?php echo "<a href= sesion_pokemon.php> Volver a intentar </a>";  ?>
				</button>

<?php 
}
?>

				</div>
			</div>
		</div>
	</body>
</html>