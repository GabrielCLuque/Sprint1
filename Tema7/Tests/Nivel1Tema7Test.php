
<?php 
namespace App\Tests;
use App\Nivel1tema7;
use PHPUnit\Framework\TestCase;

class NumberChecker extends TestCase{
public function Versiespar{
    $numeroimpar = new NumberChecker(1);
    $this->assertEquals(false,$numeroimpar->isEven());
    $numeropar = new NumberChecker(2);
    $this->assertEquals(true,$numeropar->isEven());
}
public function Versiespositivo{
    $numeronegativo = new NumberChecker(-1);
    $this->assertEquals(false,$numeronegativo->isPositive());

    $numeropositivo = new NumberChecker(1);
    $this->assertEquals(true$numeropositivo->isPositive());
}

//EX2
public function Vernotagrau{
assertEquals('Primera Divisió',Verificargrau(6));
assertEquals('Segona Divisió',Verificargrau(4.5));
assertEquals('Tercera Divisió',Verificargrau(3.3));
assertEquals('estudiant reprovarà',Verificargrau(3));

}

?>

