<?php 
/*
Crea una classe que representi un recurs didàctic d’aquesta especialitat. Els recursos hauran de tenir un nom, un tema 
(que només podrà ser PHP, CSS, HTML, SQL, Laravel) un URL i un tipus de recurs (Fitxer, Article web, Vídeo). 
Implementa tant el tema com el tipus de recurs amb enums.
*/

enum tema : string{
   case php ='php';
   case css= 'css';
   case html = 'html';
   case sql = 'sql';
   case laravel = 'laravel';

 
   }
enum tiporecurs: string{
case php ='//www.php.net/manual/es/tutorial.php';
case css= 'csswebtutorial';
case html = 'htmlwebtutorial';
case sql = 'sqlwebtutorial';
case laravel = 'laravelwebtutorial';
}
class recurs{
public string $nom;
public tema $tema;
public string $url;
public tiporecurs $tiporecurs;

 function __construct(string $nom,tema $tema,string $url, tiporecurs $tiporecurs){
   $this->nom = $nom;
   $this->tema = $tema;
   $this->url = $url;
   $this->tiporecurs = $tiporecurs;

}
public function get_tema():tema{
   return $this->tema;
}

}

?>

?>

