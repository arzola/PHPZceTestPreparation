<?php

require_once 'Empresa.php';
$empresa= new Empresa("hitss");
$empleados[]= $developer1= new Developer("Juan","18","pino numero 8");
$empleados[]=$developer2= new Developer("Rodrigo","20","pinofilo numero 13");
$empleados[]=$designer1= new Designer("Marta","25","tlalpan numero 11");
$empleados[]=$designer2= new Designer("Pedro","30","chrenobill 45");
$empleados[]=$gerente1= new Gerente("Martin","45","pedregal 99");
$empleados[]=$gerente2= new Gerente("Rosa", "33","tlacotalpan 123");

foreach ($empleados as $empleado){
    $empresa->contratar($empleado);
}

echo "<pre>";
print_r($empresa);
echo '</pre>';


foreach ($empresa->listarEmpleados() as $e){
    echo $e;
    $e->debug();
    echo $e->getSueldo();
    echo "<br>";
}