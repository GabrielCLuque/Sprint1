namespace App\Tests;
<?php 

//./vendor/bin/phpunit tests
require_once('Nivel2Tema7.php');
use PHPUnit\Framework\TestCase;


class Nivel2Tema7test extends TestCase{
/** 
 *  @dataProvider datanumerosparaprobar
 */
public static function datanumerosparaprobar(){
return [[1,false],
        [2,true],
        [5,false],
];
}

public function testVersiespar(int $data, bool $respuesta):void{
    $numero= new NumberChecker($data);
    $this->assertSame($respuesta,$data->isEven());
}

public function Versiespositivo($num){
    $numero = new NumberChecker($num);
    $this->assertTrue($numeroi->isPositive());
}
}
//EX2

?>

