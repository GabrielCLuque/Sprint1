<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
<?php 
//EX1
class Employee {

    public $nom;
    public $sou;
  
    function set_nom($nom) {
      $this->nom = $nom;
    }
    function set_sou($sou) {
        $this->sou = $sou;
      }
    function get_nom() {
      return $this->nom;
    }
    function get_sou() {
        return $this->sou;
      }
    function  pagarimpostos(){
        if($this->sou > 6000){
            echo $this->nom . ' ha de pagar impostos';
        }
        else{
            echo $this->nom . ' no ha de pagar impostos';
        }
    }
  }

  $empleado1 = new Employee();
  $empleado1->set_nom('juan');
  $empleado1->set_sou(4000);

  $empleado2 = new Employee();
  $empleado2->set_nom('Sara');
  $empleado2->set_sou(7000);

    $empleado1->pagarimpostos();
    $empleado2->pagarimpostos();


    //EX2
    class Shape {

      public $ample;
      public $alt;
    
      function set_ample($ample) {
        $this->ample = $ample;
      }
      function set_alt($alt) {
          $this-> alt = $alt;
        }
      function get_ample() {
        return $this->ample;
      }
      function get_alt() {
        return $this->alt;
      }
    }  
    class rectangle extends Shape{ 
      function Calculararea(){
        $area = $this->ample * $this->alt;
        echo 'L area es de :'. $area . '<br/>';
      }
    }
    class triangle extends Shape{
        function Calculararea(){
        $area = ($this->ample * $this->alt) / 2;
        echo 'L area es de :'. $area . '<br/>';
      }
      }

    $triangle1 = new triangle();
    $rectangle1 = new rectangle();

    $rectangle1->set_ample(2);
    $rectangle1->set_alt(2);

    $triangle1->set_ample(2);
    $triangle1->set_alt(2);

    $rectangle1 ->Calculararea();
    $triangle1 ->Calculararea();


?>
</html>