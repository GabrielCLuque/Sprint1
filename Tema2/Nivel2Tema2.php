
<?php 
//NIVELL 2 TODAVIA NO HE TERMINADO.
   
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

   Totalapagar(7);

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
function Calcularpreu(float $Uxocolata,float $Uxiclets,float $Ucarmels):void{
function Xocolates($Uxocolata):float {
    $preuxocolat = $Uxocolata * 1;
    return $preuxocolat;
}
function Xiclets($Uxiclets):float {
    $preuxiclets = $Uxiclets * 0.50;
    return $preuxiclets; 
}
function Carmels($Ucarmels):float {
    $preucarmels = $Ucarmels * 1.50;
    return $preucarmels;
}
 Xocolates($Uxocolata) ;($Uxiclets); Carmels($Ucarmels); echo $preuxocolat + $preuxiclets + $preucarmels;
}
echo '</br>';
Calcularpreu(2,1,1);

?>
