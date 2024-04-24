<?php 

class vehiculo{
    public $marca;
    public $matricula;
    public $combustible;
    public $velocitatmax;
}
class car extends vehiculo{
    use turbo;
        }
trait turbo{
    public function boost(){
    echo 'Sha iniciat el turbo';
        }
    }
?>

