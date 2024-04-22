<?php


require_once('clases4/PokerDice.php');

$dadox = new PokerDice();
$jose = new PokerDice();
$luis = new PokerDice();
$javier = new PokerDice();
$jesus = new PokerDice();




$dadox ->throw();
$dadox ->get_Resultados();
$dadox ->shapeName();

function tirar5dados($dado1, $dado2, $dado3 ,$dado4 ,$dado5){
    echo  '<br/>';
    echo 'El primer dado tiene resultado: ';echo  $dado1->throw() . '<br/>';
    echo 'El segundo dado tiene resultado: ';echo $dado2->throw().'<br/>';
    echo 'El tercer dado tiene resultado: ';echo  $dado3->throw() . '<br/>';
    echo 'El cuarto dado tiene resultado: ';echo  $dado4->throw() . '<br/>';
    echo 'El quinto dado tiene resultado: ';echo $dado5->throw() . '<br/>';
    echo  '<br/>';

}
tirar5dados($dadox,$jose,$luis ,$javier ,$jesus );

function contartiradas($dado1, $dado2, $dado3 ,$dado4 ,$dado5){
echo count($dado1->get_Resultados()) + count($dado2->get_Resultados())+ count($dado3->get_Resultados()) 
+ count($dado4->get_Resultados()) + count($dado5->get_Resultados());
}
contartiradas($dadox,$jose,$luis ,$javier ,$jesus);
?>