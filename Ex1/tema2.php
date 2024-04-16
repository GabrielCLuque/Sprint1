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

        function Calculadora($numero1, $numero2, $operacion){
            if ($operacion == '+'){
                $resultado = $numero1 + $numero2;
            }
            else if ($operacion == '-'){
                $resultado = $numero1 - $numero2;
            }
            else if ($operacion == '*'){
                $resultado = $numero1 * $numero2;
            }
            else {
                $resultado = $numero1 % $numero2;
            }

            echo $numero1 . ' '. $operacion . ' ' . $numero2 . ' = '. $resultado;
        }
        
        Calculadora(3, 5, '+');
        echo '<br/>';
        Calculadora(2, 3, '-');
        echo '<br/>';

    //EX4 
    function Contar($numerolimite, $numerocuenta ){
    $z = 0;
            do {
                echo $z . ' ';
                $z= $z + $numerocuenta;
              } while ($z <= $numerolimite );
    }
    Contar(10, 1 );
    echo '<br/>';
    Contar(30, 3 );
    echo '<br/>';
    //EX5 
function Verificargrau($nota){
        if ($nota >= '6'){
            $respuesta= 'Primera Divisió';
        }
        else if ($nota >= '4.5' || $nota <= '5.9'){
            $respuesta= 'Segona Divisió';
        }
        else if ($nota >= '3.3' || $nota <= '4.4'){
            $respuesta= 'Tercera Divisió';
        }
        else {
            $respuesta= 'estudiant reprovarà';
        }
        echo $respuesta;
    }

   Verificargrau(5);
   echo '<br/>';
   Verificargrau(7);
   echo '<br/>';

   //EX6 
   function isBitten(){
    $ruleta = random_int(0,1);
    if ($ruleta = 0){
        $mordido = true;
    }
    else{
        $mordido = false;
    }
    return $mordido;
   } 


//NIVELL 2
   
//ex1
   function Totalapagar($durada){
    $totalapagar;

    if ($durada <= 3){
    $totalapagar = 0.10;
   }
   else{
    $totalapagar = ($durada-3) * 0.05 +0.10;
   }
   echo 'El cost es de: ' . $totalapagar;
   }

   Totalapagar(6);

   /*

    magina que som a una botiga on es ven:

Xocolata: 1 euro
Xiclets: 0,50 euros
Caramels: 1,50 euros
Implementa un programa que permeti afegir càlculs a un total de compres d'aquest tipus. Per exemple, que si comprem:

2 xocolates, 1 de xiclets i 1 de caramels, tinguem un programa que permeti anar afegint els subtotals a un total, tal que així:

funció(2 xocolates) + funció(1 de xiclets) + funció(1 de carmels) = 2 + 0.5 + 1.5

Sent, per tant, el total, 4.
    */
//ex2
function Calculpreu($Uxocolata,$Uxiclets,$Ucarmels){
    $preu = 0.0;
function Xocolates($Uxocolata,$preu){
    $preuXocolat = $Uxocolata * 1;
    $preu = $preuXocolat;
    return $preu;
}
function Xiclets($Uxiclets, $preu) {
    $preuxiclets = $Uxiclets * 0.50;
    $preu = $preu + $preuxiclets;
    return $preu; 
}
function Carmels($Ucarmels, $preu) {
    $preucarmels = $Ucarmels * 1.50;
    $preu = $preu + $preucarmels;
    echo $preucarmels . ' = ' . $preu;
}
echo Xocolates($Uxocolata,$preu);
echo ' + ';
echo Xiclets($Uxiclets, $preu);
echo ' + ' . $preu. '  ';
Carmels($Ucarmels,$preu);
}
echo '</br>';
Calculpreu(2,1,1);



?>
</html>
