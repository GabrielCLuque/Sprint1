<?php 
//ex1
require_once'vendor/autoload.php';
use Carbon\Carbon;

// He instalado composer y he usado carbon para hacer un programa que te diga la hora de la ciudad europea que introduzcas


function decirlahora($ciudad){
date_default_timezone_set('Europe/'.$ciudad);
Carbon::setLocale('es');
echo Carbon::now() . '<br/>';;
}

decirlahora('Madrid');
decirlahora('London');
?>

