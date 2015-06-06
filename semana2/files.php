<?php

/*
 * Uso de recursos externos
 *
 */


//Diferencias entre

$datos1 = file_get_contents('files/data.txt');
$datos2 = file('files/data.txt');

print_r($datos1);
print_r($datos2);

//uso de la función  glob()

$files = glob("files/a*.txt");

print_r($files);