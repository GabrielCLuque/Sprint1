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


function contartiradas(array $dados){
    for($i=0; $i<count($dados); $i++){
        echo 'el dado '. $i . ' ha sacado ';
        $dados[$i]->get_Resultados() ;
        echo '<br/>';
    }

}

tirar5dados($listadados);
contartiradas($listadados);

?>