<?php 
require_once 'Empleado.php';
require_once 'Designer.php';
require_once 'Gerente.php';
require_once 'Developer.php';


class Empresa{
    private $nombreEmpresa;
    private $empleados;
    public function __construct($nombreEmpresa) {
        $this->nombreEmpresa=$nombreEmpresa;
        
    }
    public function contratar(Empleado $empleado) {
        $this->empleados[]=$empleado;
    }
    public function listarEmpleados() {
        return $this->empleados;
    }
}