<?php 
function Erastotenescribar($numero){
$repeticion = false;
$listaprimos = array();
$pl = 2;
$pa = 0;

    for ($i = $pl; $i < $numero; $i++) {
        array_push($listaprimos,$i);
        }

        do	{
            for ($x = 0; $x <= count($listaprimos)-1; $x++) {
            if ($listaprimos[$x] % $pl == 0) {
            unset($listaprimos[$x]);
            }
            }
            if ( ($listaprimos[$pa] * $listaprimos[$pa]) < $numero ) {
                $pl= $listaprimos[$pa];
                $pa++;
            }
            else {
                $repeticion = true;
            }
            
            } while ($repeticion == false);
            print_r($listaprimos). '</br>';
            
            }


Erastotenescribar(20);
?>
