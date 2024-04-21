

<?php
/*

Crea la classe PokerDice. Les cares d'un dau de pòquer tenen les següents figures: As, K, Q, J, 7 i 8.

Crea el mètode throw que no fa altra cosa que tirar el dau, és a dir, genera un valor aleatori per a l'objecte a què se li aplica el mètode.

Crea també el mètode shapeName, que digui quina és la figura que ha sortit en l'última tirada del dau en qüestió.

Realitza una aplicació que permeti tirar cinc daus de pòquer alhora.

A més, programa el mètode getTotalThrows que ha de mostrar el nombre total de tirades entre tots els daus.

*/

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
?>