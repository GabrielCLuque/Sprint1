<?php 
//EX1
require_once('clases4/Employee.php');
require_once('clases4/Shape.php');
  $empleado1 = new Employee();
  $empleado1->set_nom('juan');
  $empleado1->set_sou(4000);

  $empleado2 = new Employee();
  $empleado2->set_nom('Sara');
  $empleado2->set_sou(7000);

    $empleado1->pagarimpostos();
    $empleado2->pagarimpostos();


 //EX2
  
    $triangle1 = new triangle();
    $rectangle1 = new rectangle();

    $rectangle1->set_ample(2);
    $rectangle1->set_alt(2);

    $triangle1->set_ample(2);
    $triangle1->set_alt(2);

    $rectangle1 ->Calculararea();
    $triangle1 ->Calculararea();


?>