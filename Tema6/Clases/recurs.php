<?php 
/*
Crea una classe que representi un recurs didàctic d’aquesta especialitat. Els recursos hauran de tenir un nom, un tema 
(que només podrà ser PHP, CSS, HTML, SQL, Laravel) un URL i un tipus de recurs (Fitxer, Article web, Vídeo). 
Implementa tant el tema com el tipus de recurs amb enums.
*/
enum recurs: string{
   case php = 'nom=php tutorial, tema=php, url=https://www.php.net/manual/es/tutorial.php';
   case html ='nom=Html tutorial, tema=Html, url=https://www.w3schools.com/html/';

}

dd(recurs::php->value);

?>

