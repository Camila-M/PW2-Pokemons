DROP database if exists pokemons_minetti_camila;
create database pokemons_minetti_camila;
use pokemons_minetti_camila;

CREATE TABLE `pokemons` (
  `nombrePokemon` varchar(40),
  `ataque` varchar(40),
  `tipo` varchar(40));
  
  ALTER TABLE `pokemons`
  ADD PRIMARY KEY (`nombrePokemon`);

INSERT INTO `pokemons` (`nombrePokemon`, `ataque`, `tipo`) VALUES
('PIKACHU', 'Impactrueno', 'electrico'),
('CHARMANDER','Llamarada','fuego'),
('BULBASAUR','Espesura','planta_veneno'),
('SQUIRTLE','Torrente','agua'),
('CATERPIE','Polvo escudo','bicho'),
('WEEDLE','Polvo escudo','bicho_veneno'),
('PIDGEY','Vista lince','normal_volador'),
('RATTATA','Fuga, Agallas','normal'),
('EKANS','Mudar, Intimidacion','veneno'),
('SANDSHREW','Velo arena','tierra'),
('NIDORAN','Punto toxico','veneno'),
('CLEFAIRY','Gran encanto, Muro magico','hada'),
('VULPIX','Absorbe fuego','fuego'),
('JIGGLYPUFF','Gran encanto, Tenacidad','hada'),
('MEOWTH','Recogida, Experto','normal');

CREATE TABLE `tipos` (
  `tipo` varchar(40));
  
ALTER TABLE `tipos`
 ADD PRIMARY KEY (`tipo`);

INSERT INTO `tipos` (`tipo`) VALUES
('electrico'),
('fuego'),
('planta_veneno'),
('agua'),
('bicho'),
('bicho_veneno'),
('normal_volador'),
('normal'),
('veneno'),
('tierra'),
('hada');

CREATE TABLE `usuarios`(
`usuario` varchar (40),
`password` varchar (40));

ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`usuario`);
 
 INSERT INTO `usuarios` (`usuario`,`password`) VALUES
 ('usuario','1234');

SELECT * FROM usuarios WHERE usuario = 'usuario' and password = '1234';