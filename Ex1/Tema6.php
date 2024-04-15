
<?php 
//ex2
$username = $_GET['username'];

$usuarios = array('nombre' => $username);
echo 'Hola ' . $username;
echo '<br/>';
echo $usuarios['nombre'];
?>

