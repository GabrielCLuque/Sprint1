
<?php 
//ex 1

$numeros1 = array(3,4,5,7,8);
$numeros2 = array(1,2,4,5);

function Comparararrays($numeros1, $numeros2) :array{
    //a veces los arboles no te dejan ver el bosque...
    $coincidencias = array_intersect($numeros1,$numeros2);
    return $coincidencias;
}
print_r (Comparararrays($numeros1, $numeros2));
echo  '<br/>';

//ex2
//guardo el nombre del alumno como primer valor de cada
 $alumnes =array(array('alum1',5,5,5,5,5),array('alum2',7,7,7,7,7.8));
 function VeureMitjaAlumnes($alumnes) :void{

        for($i= 0; $i<=count($alumnes)-1; $i++){
        $mitjanaalumne = 0.0;
        //aqui el for empieza con valor x=1 ya que el primer valor es el nombre
            for($x= 1; $x<=5; $x++){
                $mitjanaalumne = $mitjanaalumne + $alumnes[$i][$x];
            }
        $mitjanaalumne = $mitjanaalumne/5.0 . '<br/>';
        echo 'El alumne ' . $alumnes[$i][0] . ' te una mitjana de ' . $mitjanaalumne;
    }
 }
 VeureMitjaAlumnes($alumnes);
 
?>

