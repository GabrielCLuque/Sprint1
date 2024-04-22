

<?php
/*
Imagina que has de presentar el catàleg de pel·lícules d'una cadena de cinemes. Cada cinema té un nom,
 una població a on pertany, i un llistat de pel·lícules. 
 -class cinemes :nom poblacio , llistapelicules
 -class pelis: nom, duracio,director
 Cada pel·lícula té un nom, una duració, i un director/a.

Es tracta de fer un programa que ens permeti enregistrar aquesta informació per a després:

Per a cada cinema, mostrar les dades de cada pel·lícula.
Per a cada cinema, mostrar la pel·lícula amb major duració.
Implementa una funció que cerqui pel nom del director/a pel·lícules en diferents cinemes. No cal repetir pel·lícules.
A més, pots aprofitar aquest exercici per treballar una bona presentació amb HTML+CSS que doni suport a la lògica.
*/

require_once('clases4/Cinema.php');
require_once('clases4/Peli.php');

$peli1 = new Peli();
$peli2 = new Peli();
$peli3 = new Peli();
$peli4 = new Peli();
$peli5 =new Peli();
$cine1= new Cinema();

$peli1 ->set_nompeli('Django');
$peli1 ->set_duracio(123);
$peli1 ->set_director('Tarantino');
$peli2 ->set_nompeli('thedeparted');
$peli2 ->set_duracio(160);
$peli2 ->set_director('Scorcese');
$peli3 ->set_nompeli('Parasitos');
$peli3 ->set_duracio(160);
$peli3 ->set_director('??');
$peli4 ->set_nompeli('Spiderman2');
$peli4 ->set_duracio(90);
$peli4 ->set_director('Sam');
$peli5 ->set_nompeli('killbill');
$peli5 ->set_duracio(90);
$peli5 ->set_director('Tarantino');


$cine1->anadirpelicula($peli1);
$cine1->anadirpelicula($peli2);
$cine1->anadirpelicula($peli3);
$cine1->anadirpelicula($peli4);
$cine1->anadirpelicula($peli5);
$cine1->get_cartelera();
$cine1 ->verpelimaslarga();
$cine1->verpelipordirector('TaRantino');
?>