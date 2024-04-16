<?php 
//ex2
$username = $_GET['username'];

echo 'Hola ' . $username;
echo '<br/>';
//EX2
$_SESSION['newuser']=$username;
echo $_SESSION['newuser'];
?>

