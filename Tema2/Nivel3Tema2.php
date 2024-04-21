<?php 
function Erastotenescribar($numero){
$listaprimos = array();
    for ($z = 2; $z <= $numero; $z++) {
        array_push($listaprimos,$z);
        }
$x =0;
    do {
        for ($i =$x ; $i <= count($listaprimos)-1; $i++){
            if ($listaprimos[$i] % $listaprimos[$x] == 0 && $listaprimos[$i] != $listaprimos[$x] ){
                    array_splice($listaprimos,$i,1);
                }
                
            }
            $x++;
            }while (($listaprimos[$x]*$listaprimos[$x]) < end($listaprimos) && count($listaprimos)>1);
            print_r($listaprimos);
        }
            
Erastotenescribar(2);
?>

