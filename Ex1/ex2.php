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
    $int = 1;
    $dou = 2.2;
    $str = 'a';
    $bol = true;
    define('NOM', 'Gabri2');
    
    echo  NOM . '<br/>'
        . $int . '<br/>' 
        . $dou . '<br/>'
        . $str . '<br/>'
        . $bol . '<br/>'; 
//EX2
    $str2 = 'Hello, World!';
    $str3 = 'Aquest és el curs de PHP';
        echo strtoupper($str2). '<br/>'
        . strlen($str2). '<br/>'
        . strrev($str2). '<br/>'
        . $str2 . $str3 . '<br/>';

//EX3
    $x = 1;
    $y = 2;
    $n = 1.1;
    $m = 2.2;

        echo $x . ' ' . $y . '<br/>'
        . $x + $y . '<br/>'
        . $x - $y . '<br/>'
        . $x * $y . '<br/>'
        . $x % $y . '<br/>'
        . $n . ' '. $m . '<br/>'
        . $n + $m . '<br/>'
        . $n - $m . '<br/>'
        . $n * $m . '<br/>'
        . $n % $m . '<br/>'

        . 'doble variables ' . '<br/>' . $x *2 . '<br/>' . $y *2 . '<br/>' . $n *2 . '<br/>' . $m *2 . '<br/>'
        . 'producto variables ' . $x + $y + $n + $m . '<br/>' ;

        $numero1= 1; $numero2= 2; $operacion= '+';
        function Calculadora($numero1, $numero2, $operacion){
            if ($operacion = '+'){
                $resultado = $numero1 + $numero2;
            }
            else if ($operacion = '-'){
                $resultado = $numero1 - $numero2;
            }
            else if ($operacion = '*'){
                $resultado = $numero1 * $numero2;
            }
            else {
                $resultado = $numero1 % $numero2;
            }

            echo $numero1 . ' '. $operacion . ' ' . $numero2 . ' = '. $resultado;
        }
        
        Calculadora($numero1, $numero2, $operacion);


    //EX4 No funciona, hay un problema con el for pero no soy capaz de verlo
    /*
    $numerolimite= 10; $numerocuenta = 1;
    Contar($numerolimite, $numerocuenta ){
        for( $z = 0 ; $z <= $numerolimite ; $z + $numerocuenta){
            echo $z . '<br/>';
            }
    }
    */

    
   
?>
</html>