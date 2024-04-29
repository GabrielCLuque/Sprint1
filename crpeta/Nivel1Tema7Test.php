namespace App\Tests;
<?php 

require_once('Nivel1Tema7.php');
use PHPUnit\Framework\TestCase;

class Nivel1Tema7test extends TestCase{
/** @test */
public function Versiespar(){
    $numeroimpar = new NumberChecker(1);
    $this->assertEquals(false,$numeroimpar->isEven());
}
/** @test */
public function Versiespositivo(){
    $numeronegativo = new NumberChecker(-1);
    $this->assertEquals(false,$numeronegativo->isPositive());
}
//Ex2
/** @test */
public function Vernotagrau(){
   $this->assertEquals('Primera Divisió',Verificargrau(6));
   $this->assertEquals('Segona Divisió',Verificargrau(4.5));
   $this->assertEquals('Tercera Divisió',Verificargrau(3.3));
   $this->assertEquals('estudiant reprovarà',Verificargrau(3));
    }
}

?>

