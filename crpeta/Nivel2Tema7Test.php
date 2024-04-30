namespace App\Tests;
<?php 
use function PHPUnit\Framework\assertSame;

require_once('Nivel2Tema7.php');
use PHPUnit\Framework\TestCase;


class Nivel2Tema7test extends TestCase{

public static function datanumerosparaprobareven(){
return [[1,false],
        [2,true],
        [5,false],
];
}
public static function datanumerosparaprobarispositive(){
return [[-1,false],
        [2,true],
        [-5,false],
];
}

public static function dataverificargrau(){
    return [[1,'estudiant reprovarà'],
    [2,'estudiant reprovarà'],
    [5,'Segona Divisió'],
    [7, 'Primera Divisió'],
    [3.6,'Tercera Divisió'],
];

}
/** 
 *  @dataProvider datanumerosparaprobareven
 */


public function testVersiespar(int $numdatapro, bool $respuesta):void{
    $numero= new NumberChecker($numdatapro);
    $this->assertSame($respuesta,$numero->isEven());
}

/** 
 *  @dataProvider datanumerosparaprobarispositive
 */

public function testVersiespositivo(int $numdatapro, bool $respuesta):void{
      $numero= new NumberChecker($numdatapro);
    $this->assertSame($respuesta,$numero->isPositive());
}

//Ex2 
/** 
 *  @dataProvider dataverificargrau
 */
public function testVerificarnotagrau(int $notadatapro, string $respuesta):void{
assertSame($respuesta,Verificargrau($notadatapro));
}
}
?>

