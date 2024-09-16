
<?php 

class NotaGrau  {
    public function __construct(public float $nota){}
	public function Verificargrau():string{
        if ($this->nota > 10 ||$this->nota < 0  ){
            return 'Error al introduir nota, parli amb el professor';
        }
        else if ($this->nota >= 6){
            return 'Primera Divisió';
        }
        //siempre confundo && y ||
        else if ($this->nota >= 4.5){
            return 'Segona Divisió';
        }
        else if ($this->nota >= 3.3){
            return 'Tercera Divisió';
        }
        else {
            return 'estudiant reprovarà';
        }
        
    }
}

?>

