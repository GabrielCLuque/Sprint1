!DOCTYPE html>
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

        function Calcular(int $numero1, int $numero2, string $operacion): void {
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
        
        Calcular(3, 5, '+');
        echo '<br/>';
        Calcular(2, 3, '-');
        echo '<br/>';

    //EX4 
    function Contar($numerolimite = 10, $numerocuenta ){
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
function Verificargrau($nota):void{
        if ($nota >= '6'){
            $respuesta= 'Primera Divisió';
        }
        //siempre confundo && y ||
        else if ($nota >= '4.5'){
            $respuesta= 'Segona Divisió';
        }
        else if ($nota >= '3.3'){
            $respuesta= 'Tercera Divisió';
        }
        else {
            $respuesta= 'estudiant reprovarà';
        }
        echo $respuesta;
    }

   Verificargrau(6);
   echo '<br/>';
   Verificargrau(4.5);
   echo '<br/>';
   Verificargrau(5.9);
   echo '<br/>';
   Verificargrau(3.4);
   echo '<br/>';
   Verificargrau(4.2);
   echo '<br/>';
   Verificargrau(2.2);
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

?>
</html>
