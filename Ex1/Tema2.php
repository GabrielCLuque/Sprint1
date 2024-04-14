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
$array = array (1, 2, 3, 4, 5);
for($z=0; $z <= count($array)-1; $z++){
echo $array[$z] . '<br/>';
}

//ex2
echo count($array) . '<br/>';
array_splice($array, 0,1);
//no acabo de entender que me pide el enunciado con 's’han de reorganitzar els seus índexs'
echo count($array) . '<br/>';

//ex3 
$palabras= array ('aceituna', 'oliva', 'potencia');
function Palabrasconletra($listapalabras =array(), $letra){
//empiezo cada for reseteando respuesta a false
    $respuesta = false;
//este for busca por todo el array
    for($x=0; $x <= count($listapalabras)-1; $x++){
        $respuesta = false;
//este for busca cada caracter
        for($i=0; $i <= strlen($listapalabras[$x])-1; $i++){
        if ($listapalabras[$x][$i] === $letra){
            $respuesta = true;
            }
        }
//si respuesta no cambia a true se termina ya quesignifica que hay una palabra sin la letra
        if ($respuesta == false){
            break;
        }
    }

return $respuesta;
}


?>
</html>