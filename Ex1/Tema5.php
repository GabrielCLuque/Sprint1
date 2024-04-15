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
abstract class Animal{
    public function makeSound(){
    }
}
class dog extends Animal{
    public function makeSound(){
        echo 'wof wof';
    }
}

class cat extends Animal{
    public function makeSound(){
        echo 'Miaaaau';
    }
}
 $perro1 = new dog();
 $perro1->makeSound();
 $gato1 = new cat();
 $gato1->makeSound();

?>
</html>
