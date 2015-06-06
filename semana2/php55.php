<?php

namespace PHP55;

$amigo = ["amigo1", "amigo2", "amigo3", "amigo4"][1];
// $amigo = "amigo2"
 
$inicial = "Palabra"[0];
// $inicial = 'P'

class User{
    
}

$obj = new User();

echo User::class;

$productos = [
    ["Nombre 1", "Precio 1", "Descripción 1"],
    ["Nombre 2", "Precio 3", "Descripción 2"],
    ["Nombre 3", "Precio 3", "Descripción 3"]
];
 
foreach ($productos as $producto) {
    $nombre      = $producto[0];
    $precio      = $producto[1];
    $descripcion = $producto[2];
}

foreach ($productos as list($nombre, $precio, $descripcion)) {
    echo $nombre."<br>";
}

//El constructor del lenguaje empty acepta expresiones

if (empty(function () { return false; })) {
    echo "El valor pasado es vacío.";
}

function findProducto(){
    
}

function error(){
    
}

// antes de PHP 5.5 había que hacer así las comprobaciones
if (empty($producto = findProducto($productoId))) {
    error('No se ha encontrado el producto');
}
 
// con PHP 5.5 el código anterior se simplifica
if (empty(findProducto($productoId))) {
    error('No se ha encontrado el producto');
}
