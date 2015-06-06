<?php

/*
 * Aprender acerca de parametros de funciones.
 */

function sumaNumeros(){
	$params = func_get_args();
	if(count($params)>0){
		return array_sum($params);
	}
	return 0;
}

function doSomething(Array $params){
	$str = '';
	if(array_key_exists('valido', $params)){
		$str.= 'Validando algo... ';
	}
	if(array_key_exists('order', $params)){
		$str.= 'APLICANDO ORDER BY '.$params['order'];
	}
	return 'doSomething '.$str."<br>";
}


echo sumaNumeros(1,2,4,5,6,7,5,4);

$parametros = array('valido'=>true,'order'=>'ASC');

//Parametros nombrados o named parameters

echo doSomething($parametros);

echo doSomething(array('valido'=>true));