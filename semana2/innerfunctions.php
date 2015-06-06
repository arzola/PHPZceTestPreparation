<?php

/**
 * Limitar llamadas a funciones que solo deseamos se puedan llamar si otra es valida
 */

function procesaPago($total){
	$iva = 1.18;
	function calculaIvaPago($iva){
		return "cargando IVA $iva\n";
	}
	return "procesando pago por $total\n";
}

echo procesaPago(100);
//®echo calculaIvaPago(1.19);

