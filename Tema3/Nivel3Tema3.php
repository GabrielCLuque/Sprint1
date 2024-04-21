<?php 

// EX1
function elevaralcubo($array):void{
    $cubo = $array * $array *$array;
    echo $cubo . '<br/>';
}
$arraydeints = array(1,2,3,4,5,6);
array_map('elevaralcubo', $arraydeints);

//EX2
function mostarpalabraspares($array):void{
if(strlen($array)%2==0){
    echo  $array. '<br/>'; 
}
}
$arraydeStrings = array('patata', 'atun', 'pescado', 'toronto');
array_filter($arraydeStrings, 'mostarpalabraspares');
echo '<br/>';

//Ex3

//esta funcion suma todos los elemntos 
function Sumarprimeros($sumalista,$incremento=0):int{
    $sumalista += $incremento;
            return $sumalista;     
                }
//esta funcion reduce la lista a los nombres primeros y luego aplico el array_reduce
function Reducirlistaaprimeros($lista):int{
//primero creo una lista con todos los nombres primeros que existen asta el valor mas grande de la lista introducida,  para luego compararla a la lista original
    $listaprimos = array();
        for ($z = 2; $z <= max($lista); $z++) {
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
//asta aqui es el mismo codigo utilizado en el n3 t2, finalmente uso el intersect para reducir la lista a los numeros primos que esten en ella y aplico el reduce
        $lista = array_intersect($listaprimos,$lista);
//incluyo un print_r para comparar la lista al resultado
        print_r($lista);
        return array_reduce($lista, 'Sumarprimeros'); 
            }

    
$numerosaleatorios = array(11,23,4,6,3);
//vard_dump(array_reduce(Sumarprimers($numerosaleatorios, 'Sumarprimers')));

print_r(Reducirlistaaprimeros($numerosaleatorios));


?>
