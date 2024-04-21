<?php
class Employee {

public $nom;
public $sou;

function set_nom($nom) {
  $this->nom = $nom;
}
function set_sou($sou) {
    $this->sou = $sou;
  }
function get_nom() {
  return $this->nom;
}
function get_sou() {
    return $this->sou;
  }
function  pagarimpostos(){
    if($this->sou > 6000){
        echo $this->nom . ' ha de pagar impostos';
    }
    else{
        echo $this->nom . ' no ha de pagar impostos';
    }
}
}
?>