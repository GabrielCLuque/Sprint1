
<?php 
//NIVELL 2 TODAVIA NO HE TERMINADO.
   
//ex1
   function Pagar($durada):void{
    $totalapagar;

    if ($durada <= 3){
    $totalapagar = 0.10;
   }
   else{
    $totalapagar = ($durada-3) * 0.05 +0.10;
   }
   echo 'El cost es de la trucada es de: ' . $totalapagar . '<br/>';
   }

   Pagar(7) ;

//ex2



function PagarXocolates($Uxocolata):float {
    $preuxocolat = $Uxocolata * 1;
    return $preuxocolat;
}
function PagarXiclets($Uxiclets):float {
    $preuxiclets = $Uxiclets * 0.50;
    return $preuxiclets; 
}
function PagarCarmels($Ucarmels):float {
    $preucarmels = $Ucarmels * 1.50;
    return $preucarmels;
}

 echo PagarXocolates(2) . ' + ' . PagarXiclets(1) . ' + ' . PagarCarmels(1) . ' = ' . PagarXocolates(2)  +  PagarXiclets(1) +  PagarCarmels(1) ;

?>
