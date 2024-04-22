<?php
class Shape {

public $ample;
public $alt;

function set_ample($ample) {
  $this->ample = $ample;
}
function set_alt($alt) {
    $this-> alt = $alt;
  }
function get_ample() {
  return $this->ample;
}
function get_alt() {
  return $this->alt;
}
}  
class rectangle extends Shape{ 
function Calculararea(){
  $area = $this->ample * $this->alt;
  echo 'L area es de :'. $area . '<br/>';
}
}
class triangle extends Shape{
  function Calculararea(){
  $area = ($this->ample * $this->alt) / 2;
  echo 'L area es de :'. $area . '<br/>';
}
}
?>