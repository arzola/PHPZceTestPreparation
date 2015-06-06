<?php

$intentos = 1;
$pago = false;
pagos: {
	//Bloque procesador de pagos
	echo "Intento {$intentos} de pago </br>\n";
	$intentos++;
	//LLAMADA Webservice mediante SOAP, REST
}


if (5 != rand(0, 10)) {
	goto pagos;
} else {
	goto exito;
}


exito: {
	echo 'Pago exitoso';
}
