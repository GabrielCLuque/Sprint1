
<?php 

class NumberChecker  {
	public function __construct(public int $number){}

	public function isEven(): bool {
		return $this->number%2 == 0;
	}
	public function isPositive(): bool {
		return $this->number > 0;
	}
}
function Verificargrau($nota):string{
    if ($nota >= '6'){
        $respuesta= 'Primera Divisió';
    }
    //siempre confundo && y ||
    else if ($nota >= '4.5'){
        $respuesta= 'Segona Divisió';
    }
    else if ($nota >= '3.3'){
        $respuesta= 'Tercera Divisió';
    }
    else {
        $respuesta= 'estudiant reprovarà';
    }
   return $respuesta;
}
?>

