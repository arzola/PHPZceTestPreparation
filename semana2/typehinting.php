<?php

//review type hinting
//http://php.net/manual/es/language.oop5.typehinting.php
//Usarse con clases e Interfaces


interface Facturable{
    function calcularIva();
    function validarRfc();
}

class FacturaDigital implements Facturable{
    function calcularIva() {
        return 'Calculando Iva Factura';
    }
    function validarRfc() {
        
    }
}

class ReciboBarato implements Facturable{
    function calcularIva() {
        return 'Calculando Iva Recibo';
    }
    function validarRfc() {
        
    }
}

function CalcularMonto(Facturable $factura){
    return $factura->calcularIva();
}

echo CalcularMonto(new ReciboBarato());
