<?php

$test1 = 5 + "8 Os 7 car 6";
var_dump($test1);

$test2 = "f 200 5454";
$v = $test2+1;
var_dump($v);

$foo1 = 5 + "$test2 Small Pigs 10 ";     // $foo1 es ???
var_dump($foo1);

$foo2 = 5 + '5 1E3 Small Pigs 10';     // ???? que imprime :D
var_dump($foo2);

$numero1 = 5;
$numero2 = 1E3;
$resultado = $numero1+$numero2;

//var_dump($resultado);