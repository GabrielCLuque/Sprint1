
<?php 
//ex 1

$numeros1 = array(3,4,5,7,8);
$numeros2 = array(1,2,4,5);


echo  'Intersecccion de dos arrays: ';
print_r( array_intersect($numeros1,$numeros2));
echo  '<br/>';
echo  'Mezcla de dos arrays: ';
print_r( array_merge($numeros1,$numeros2));
echo  '<br/>';
//ex2
//guardo el nombre del alumno como primer valor de cada
 $alumnes =array(array('alum1',5,5,5,5,5),array('alum2',7,7,7,7,7.8));
 function VeureMitjaAlumnes($alumnes):void {
    $mitjanaclase =0.0;
        for($i= 0; $i<=count($alumnes)-1; $i++){
        $mitjanaalumne = 0.0;
        //aqui el for empieza con valor x=1 ya que el primer valor es el nombre
            for($x= 1; $x<=5; $x++){
                $mitjanaalumne = $mitjanaalumne + $alumnes[$i][$x];
            }
        $mitjanaalumne = $mitjanaalumne/5.0 ;
        $mitjanaclase += $mitjanaalumne;
        echo 'El alumne ' . $alumnes[$i][0] . ' te una mitjana de ' . $mitjanaalumne .'<br/>';
    }
    echo 'La mitjana de la clase es :' . $mitjanaclase/count($alumnes);
 }
 VeureMitjaAlumnes($alumnes);
 
?>

