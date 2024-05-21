<?php


require_once('clases4/PokerDice.php');

$dadox = new PokerDice();
$jose = new PokerDice();
$luis = new PokerDice();
$javier = new PokerDice();
$jesus = new PokerDice();

$listadados =  array();

array_push($listadados,$dadox ,$jose,$luis,$javier,$jesus);

function tirar5dados(array $dados){
for($i=0; $i<count($dados); $i++){
    echo '<br/>'. 'el dado '. $i+1 . ' saca ' ;
    $dados[$i]->throw() . '<br/>';
}
return $dados;
}
function getTotalThrows (array $dados){
    $totaltiradas=0;
    for($i=0; $i<count($dados); $i++){
        $totaltiradas += $dados[$i]->contartiradas(); 
    }
echo $totaltiradas;
return $dados;
}


tirar5dados($listadados);
echo $dadox->shapeName(). '<br/>';
getTotalThrows ($listadados)
?>