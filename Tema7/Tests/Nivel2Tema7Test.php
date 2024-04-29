
<?php 
namespace App\Tests;
use App\Nivel2tema7;
use PHPUnit\Framework\TestCase;

class NumberChecker extends TestCase{

public function datanumerosparaprobar(){
return [[1],
        [2],
        [5]
];
}

//@dataprovider datanumerosparaprobar
public function Versiespar($num){
    $numero= new NumberChecker($num);
    $this->assertTrue($numero->isEven());
}
public function Versiespositivo($num){
    $numero = new NumberChecker($num);
    $this->assertTrue($numeroi->isPositive());
}
}
//EX2

?>

