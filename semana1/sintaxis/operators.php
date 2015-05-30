<?php

$a = array('one','two');
$b = array('three','four','five');

/*
 * El operador + devuelve el array del lado derecho añadido al array del lado izquierdo;
 * para las claves que existan en ambos arrays, serán utilizados los elementos del array de la izquierda y
 * serán ignorados los elementos correspondientes del array de la derecha.
 */

//print_r($a+$b);
print_r(array_merge($a,$b));
