

<?php
class Cinema{
public $nom ;
public $poblacio;
public $cartelera = array ();

function get_nomcine(){
    return $this->nomcine;
}
function get_poblacio(){
    return $this->poblacio;
}
function get_cartelera(){
    for($i= 0; $i<=count($this->cartelera)-1; $i++) {
    $this->cartelera[$i]->__construct();
    }
}


function verpelimaslarga(){
    $duracionpelimaslarga=0;
foreach($this->cartelera as $peli){
    if ($peli->get_duracio()>$duracionpelimaslarga) {
        $duracionpelimaslarga = $peli->get_duracio();
  }
}
foreach($this->cartelera as $peli){
    if ($peli->get_duracio()==$duracionpelimaslarga) {
        echo $peli->get_nompeli() . ': ' . $peli->get_duracio() . ' min. <br>';
  }
}
}
function verpelipordirector(string $director){
    echo 'Las pelis del director ' . $director . ' disponibles son :';
  foreach($this->cartelera as $peli){
    if (strcasecmp($peli->get_director(),$director) ===0) {
        echo $peli->get_nompeli()  . ' ';
  }
}
echo  '<br>';
}
function anadirpelicula(Pelis $peli){
    $this->cartelera[]= $peli;

}

}



?>