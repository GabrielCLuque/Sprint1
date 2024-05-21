<?php
define ('posiblesresultados',['As', 'K', 'Q', 'J', '7 ', '8']);
class PokerDice {


private $resultados = array();



function throw(){
$resultadorandom = rand(0,5);

$this->resultados[]=posiblesresultados[$resultadorandom];

print_r(posiblesresultados[$resultadorandom]);
}

function get_Resultados(){
 
  return $this->resultados;
}
function contartiradas(){
  return count($this->get_Resultados());
}

function shapeName(){
 return end($this->resultados);
}
}

?>