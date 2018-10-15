<!DOCTYPE html>
<html>
<head>
	<title>Eliminar Pokemon</title>
</head>
<body>


<?php 
$conexion = mysqli_connect("localhost","root","","pokemons_minetti_camila");
$eliminar=($_GET["nombre"]);

$aux=strtoupper($eliminar);
$sql = "DELETE FROM pokemons WHERE nombrePokemon = '$aux'";
$result = mysqli_query($conexion,$sql);
header("location:index.php");
?>

</body>
</html>