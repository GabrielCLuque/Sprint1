
<?php 

// EX1
function elevaralcubo($array):void{
    $cubo = $array * $array *$array;
    echo $cubo . '<br/>';
}
$arraydeints = array(1,2,3,4,5,6,);
array_map('elevaralcubo', $arraydeints);

//EX2
function mostarpalabraspares($array):void{
if(strlen($array)%2==0){
    echo  $array. '<br/>'; 
}
}
$arraydeStrings = array('patata', 'atun', 'pescado', 'toronto');
array_filter($arraydeStrings, 'mostarpalabraspares');

/*

- Exercici 3
Donat un array d’enters, fes un programa que ens retorni la suma dels enters de l’array que siguin primers fent servir la funció array_reduce().
*/
function Sumar($array):void{


}


?>