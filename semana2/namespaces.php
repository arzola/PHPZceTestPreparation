<?php

//Los espacios de nombres de PHP proporcionan una manera para agrupar clases,
//interfaces, funciones y constantes relacionadas.
//Un ejemplo de la sintaxis de los espacios de nombres de PHP:

namespace Kmmk\String{

	function hola($str){
		return 'Kmmx '.$str;
	}

}

namespace Test\String{
	function hola($str){
		return 'Test '.$str;
	}
}

namespace{
	echo Test\String\hola('Oscar');
}