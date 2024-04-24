<?php 
//ex1
$username = $_GET['username'];

echo 'Hola ' . $username;
echo '<br/>';
$_SESSION['newuser']=$username;
echo $_SESSION['newuser'];

//ex2
echo 'la ruta de este archivo es ' . __FILE__;
echo ' la carpeta donde se encuentra este archivo es' . __DIR__;

//ex3
class Claseejercicio3 {
    public $atributo1;
function __construct($valoratributo){
    $this->atributo1 =$valoratributo;
    echo 'Objeto creado con exito !';
}
function __destruct(){
    echo 'Objeto destruido con exito!';
} 

}

?>

