<?php
class PokerDice {


public $resultados =  array();
public $posiblesresultados =  array('As', 'K', 'Q', 'J', '7 ', '8');

function throw(){
$resultadorandom = rand(0,5);
$this->$resultados[]=$this->$posiblesresultados[$resultadorandom];
print_r($this->$posiblesresultados[$resultadorandom]);
}


}

?>