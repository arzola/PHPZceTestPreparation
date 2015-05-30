<?php

/* 
 * Oscar Arzola
 * Realizar un uso correcto de comillas en las strings.
 * 
 */

$cadena = 'zzz';
$cadena2 = "$cadena Oscar {$d['hola']}";
$cadena3 = <<<LARGO
        Soy una cadena mejor $cadena </br> 
        dioewSNJAKsnakN SAjk sa SJKa sjka JKSKA saSas
LARGO;

echo $cadena3;

/*
 *  Cosas curiosas de las cadenas y los operadores de incremento
 */

$variable = 'a';

echo ++$cadena."</br>"; //Incrementa a la siguiente letra del alfabeto pero solo del ultimo carácter