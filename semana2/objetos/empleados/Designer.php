<?php
require_once 'Empleado.php';

class Designer extends Empleado{
    public function __construct($nombre, $edad, $direccion) {
        $this->sueldo=  $this->sueldo*1.15;
        parent::__construct($nombre, $edad, $direccion);
        
    }
    public function debug($param) {
         echo __CLASS__." $param";
    }
}