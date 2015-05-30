<?php
namespace U;

$nombre = 'Oscar';

function say(){
    return ' adios';
}


namespace P;
use U as FuncionesCoquetas;
echo 'hola '.$nombre .FuncionesCoquetas\say();    
