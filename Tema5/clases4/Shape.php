<?php
class Shape {
  public $ample;
  public $alt;
    public function __construct($ample,$alt){
      $this->ample = $ample;
      $this-> alt = $alt;
    }
}  
interface calculos{
  public function Calculararea();
}
class rectangle extends Shape implements calculos{ 
public function Calculararea(){
  $area = $this->ample * $this->alt;
  echo 'L area es de :'. $area . '<br/>';
}
}
class triangle extends Shape implements calculos{
  function Calculararea(){
  $area = ($this->ample * $this->alt) / 2;
  echo 'L area es de :'. $area . '<br/>';
}
}
?>