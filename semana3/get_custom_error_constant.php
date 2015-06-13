<?php

//echo E_ALL; //32767
//echo E_PARSE; //4

//echo E_ALL & ~E_WARNING;

//echo E_ALL."\n";
//echo E_DEPRECATED."\n";
//print_r(E_ALL -E_DEPRECATED); echo "\n"; // 24575
//print_r(E_ALL ^E_DEPRECATED); echo "\n"; // 24575
error_reporting(E_ALL &E_DEPRECATED);

var_dump((error_reporting() & E_DEPRECATED));
$str = 'dasdas,2';

$ar = split(',',$str);

//var_dump($ar);

//Revisar que constantes estan activas
if ((error_reporting() & E_DEPRECATED) == E_DEPRECATED) {
    echo "E_DEPRECATED is active";
}else{
	echo "E_DEPRECATED is not active";
}