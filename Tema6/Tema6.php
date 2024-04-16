
<?php 

$username = $_GET['username'];

echo 'Hola ' . $username;
echo '<br/>';

$_SESSION['newuser']=$username;
echo $_SESSION['newuser'];
?>

