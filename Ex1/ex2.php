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
    $int = 1;
    $dou = 2.2;
    $str = 'a';
    $bol = true;
    define('NOM', 'Gabri2');
    
    echo  NOM . '<br/>'
        . $int . '<br/>' 
        . $dou . '<br/>'
        . $str . '<br/>'
        . $bol . '<br/>'; 

    $str2 = 'Hello, World!';
    $str3 = 'Aquest és el curs de PHP';
        echo strtoupper($str2). '<br/>'
        . strlen($str2). '<br/>'
        . strrev($str2). '<br/>'
        . $str2 . $str3 ;
    
?>
</html>