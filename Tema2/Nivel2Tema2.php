
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

//ex2



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

 echo Xocolates(2) . ' + ' . Xiclets(1) . ' + ' . Carmels(1) . ' = ' . Xocolates(2)  +  Xiclets(1) +  Carmels(1) ;

?>
