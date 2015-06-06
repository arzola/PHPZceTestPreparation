<?php

$foo = "0";  // $foo es la cadena (ASCII 48)
var_dump($foo);
$foo++;      // $foo is el numero "1" (ASCII 49)
var_dump($foo);
$foo += 1;   // $foo ahora es un entero (2)
var_dump($foo);
$foo = $foo + 1.3;  // $foo ahora es un doble (3.3)
var_dump($foo);
$foo = 5 + "10 Little Piggies"; // $foo es el entero (15)
var_dump($foo);
$foo = 5 + "10 Small Pigs";     // $foo es el entero (15)
var_dump($foo);
$foo1 = 5 + "Small Pigs 10 ";     // $foo1 es ???
var_dump($foo1);
$foo2 = 5 + "1E-3 Small Pigs 10 ";     // ???? que imprime :D
var_dump($foo2);
$troll = $foo1 + $foo2;
var_dump($troll);