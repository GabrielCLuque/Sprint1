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

