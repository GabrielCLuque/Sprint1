<?php
interface Shape {

}  
class rectangle implements Shape{ 
public $ample;
public $alt;
  public function __construct($ample,$alt){
    $this->ample = $ample;
    $this-> alt = $alt;
  }
public function Calculararea(){
  $area = $this->ample * $this->alt;
  echo 'L area es de :'. $area . '<br/>';
}
}
class triangle implements Shape{
public $ample;
public $alt;
  public function __construct($ample,$alt){
    $this->ample = $ample;
    $this-> alt = $alt;
  }
  function Calculararea(){
  $area = ($this->ample * $this->alt) / 2;
  echo 'L area es de :'. $area . '<br/>';
}
}
?>