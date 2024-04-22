
<?php
class Peli{
public $nom ;
public $duracio;
public $director;


function get_nompeli(){
    return $this->nom ;
}

function get_duracio(){
    return $this->duracio ;
}

function get_director(){
    return $this->director ;
}
function set_nompeli($nom){
$this->nom = $nom;
}
function set_duracio($duracio){
    $this->duracio = $duracio;
    }
function set_director($director){
        $this->director = $director;
    }





}



?>