<?php 
function Erastotenescribar($numero){
$repeticion = false;
$listaprimos = array();
$pl = 2;//pl primero lista , primero de la lista dependiendo de las veces que se haga el paso4
$pa = 1;//pa primero array, es el index del array donde cogere el valor

if ($numero > 3 ){
//este seria el paso 1 y 2
    for ($i = $pl; $i <= $numero; $i++) {
        array_push($listaprimos,$i);
        }
//paso 3
        for ($x = 2 ; $x <= count($listaprimos)-1 ; $x++) {
            if ($listaprimos[$x] % $pl == 0) {
                array_splice($listaprimos, $x, 0);
            }
            }
          //  4, se repite las veces necesarias
        do	{
            for ($x = $pa ; $x <= count($listaprimos)-1 ; $x++) {
            if ($listaprimos[$x] % $pl == 0) {
                array_splice($listaprimos, $x,1);
            }
            }
            //aquí si no se cumple la regla cambio pl por el valor de la posicon pa
            if ( ($listaprimos[$pa] * $listaprimos[$pa]) < $numero ) {
                $pl= $listaprimos[$pa];
                $pa++;
            }
            else {
                $repeticion = true;
                print_r($listaprimos);
            }
            
            } while ($repeticion == false);
        }
else{
    //El programa entra en bucle si pongo un valor menor a 3 asi que he añadido un if, estoy convencido que hay una forma mejor de hacerlo pero me rindo(recursividad?)
    for ($i = $pl; $i <= $numero; $i++) {
        array_push($listaprimos,$i);
        }
        for ($x = 2 ; $x <= count($listaprimos)-1 ; $x++) {
            if ($listaprimos[$x] % 2 == 0||$listaprimos[$x] % 3 == 0 ) {
                array_splice($listaprimos, $x, 0);
            }
            }
    print_r($listaprimos);
}         
}


Erastotenescribar(4390);
?>
