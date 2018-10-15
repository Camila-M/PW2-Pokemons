<?php 
$conexion = mysqli_connect("localhost","root","","pokemons_minetti_camila");

$upNombre=($_POST["nombrePokemon"]);
$upAtaque=($_POST["ataquePokemon"]);
$upTipo=($_POST["tipoPokemon"]);

$sql="UPDATE pokemons SET ataque = '".$upAtaque."', tipo = '".$upTipo."' WHERE nombrePokemon = '".$upNombre."' ; ";

header("location:index.php"); 

$result= mysqli_query($conexion,$sql);
?>