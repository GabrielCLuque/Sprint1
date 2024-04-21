<?php
class PokerDice {


private $resultados = array();

function throw(){
$resultadorandom = rand(0,5);
$posiblesresultados =  array('As', 'K', 'Q', 'J', '7 ', '8');

$this->resultados[]=$posiblesresultados[$resultadorandom];
print_r($posiblesresultados[$resultadorandom]);
}

function get_Resultados(){
  for($i = 0; $i <= count($this->resultados)-1; $i++ ){
    print_r($this->resultados[$i]);
  }
}

function shapeName(){
  print_r(end($this->resultados));
}
}

?>