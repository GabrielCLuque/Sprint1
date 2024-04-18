<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
<?php 
//ex1
$array = array (0 =>1, 2, 3, 4, 5);
for($z=0; $z <= count($array)-1; $z++){
echo $array[$z] . '<br/>';
}

//ex2
echo count($array) . '<br/>';
array_splice($array, 0,1);
echo count($array) . '<br/>';

//ex3 
$palabras= array ('aceituna', 'oliva', 'potencia');
function Palabrasconletra($listapalabras =array(), $letra){

//Simplificado
    for($x=0; $x <= count($listapalabras)-1; $x++){
        $respuesta = false;
        $respuesta = stristr($listapalabras[$x],$letra);
        if($respuesta==true){
            echo $listapalabras[$x] . '<br/>';
        }
}
}
 Palabrasconletra($palabras, 'p');


//ex4 

$yoliteral = ['Nombre' => 'Gabri','Edad' => 24,'Mail' => 'gabrielcasasluque@gmail.com', 'Platofavorito' => 'Carbonara'];

?>
</html>


?>
</html>
