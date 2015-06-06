<?php

/* 
 * Alcance y modificación de variables
 */

$numeros = [1,2,3,4,5,6,7,8,9];

echo 'Before del foreach';
echo '<pre>';
print_r($numeros);
echo '</pre>';

foreach($numeros as &$num){
    $num = $num * 2;
}

echo 'After del foreach';
echo '<pre>';
print_r($numeros);
echo '</pre>';

$numero = 10;

function restaDos(&$numero){
    $numero-=2;
}

echo 'Numero';
echo '<pre>';
restaDos($numero);
print_r($numero);
echo '</pre>';


