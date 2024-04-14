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
//ex1
$array = array (1, 2, 3, 4, 5);
for($z=0; $z <= count($array)-1; $z++){
echo $array[$z] . '<br/>';
}

//ex2
echo count($array) . '<br/>';
array_splice($array, 0,1);
//no acabo de entender que me pide el enunciado con 's’han de reorganitzar els seus índexs'
echo count($array) . '<br/>';
?>
</html>