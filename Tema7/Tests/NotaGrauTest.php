namespace App\Tests;
<?php 

require_once('NotaGrau.php');
use PHPUnit\Framework\TestCase;

class NotaGrauTest extends TestCase{
    /** @dataProvider ejemplosanotas */
    public function testVerificargrau($ejemplosnotas, $respuesta){
        $nota = new NotaGrau($ejemplosnotas);
        $this->assertEquals($respuesta,$nota->Verificargrau());

    }

    static function ejemplosanotas(){
        return[
        'status 6'=>[6.0, 'Primera Divisió'],       
        'status 7.5'=>[7.5, 'Primera Divisió'],      
        'status 5.0'=>[5.0, 'Segona Divisió'],        
        'status 4.5'=>[4.5, 'Segona Divisió'],         
        'status 4.4'=>[4.4, 'Tercera Divisió'],        
        'status 3.3'=>[3.3, 'Tercera Divisió'],       
        'status 2.0'=>[2.0, 'estudiant reprovarà'],   
        'status 0.0'=>[0.0, 'estudiant reprovarà'],   
        'status 20.0'=>[20.0, 'Error al introduir nota, parli amb el professor'], 
        'status -1.0'=>[-1.0, 'Error al introduir nota, parli amb el professor'],    
         
        ];


    }

}


?>