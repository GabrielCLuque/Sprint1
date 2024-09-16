namespace App\Tests;
<?php 
use SebastianBergmann\Type\FalseType;

require_once('NumberChecker.php');
use PHPUnit\Framework\TestCase;

class NumberCheckerTest extends TestCase{

/** @dataProvider lista_pares_impares */
public function testVersiespar($listanumeros, $respuestas){
    $numero = new NumberChecker($listanumeros);
    $this->assertEquals($respuestas,$numero->isEven());
}

static function lista_pares_impares(){
return [
   'status 1'=> [1,false],
   'status 2'=> [2,true],
   'status 4'=> [4,true],
   'status 0'=>[0,true],
   'status -2'=>[-2,true],
   'status -1'=> [-1,false],
];
}


/** @dataProvider lista_positivos_negativos */
public function testVersiespositivo($listanumeros, $respuestas){
    $numero = new NumberChecker($listanumeros);
    $this->assertEquals($respuestas,$numero->isPositive());
}

static function lista_positivos_negativos(){
return [
   'status 1'=> [1,true],
   'status 55'=> [55,true],
   'status 0'=> [0,false],
   'status -0'=> [-0,false],
   'status -4'=> [-4,false],
   'status -3'=>[-3,false],
   'status -2'=>[-2,false],
   'status -1'=> [-1,false],
];
}

}

?>

