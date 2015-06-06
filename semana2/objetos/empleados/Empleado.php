<?php
require_once 'log.php';
abstract class Empleado{
    protected $nombre;
    protected $edad;
    protected $sueldo = 10000;
    protected $direccion;
    use log;
        public function __construct($nombre,$edad,$direccion){
            $this->nombre=$nombre;
            $this->edad=$edad;
            $this->direccion=$direccion;
        }
        
        public function setName($nombre){
            $this->nombre=$nombre;
            return $this;
	}
        public function getEdad(){
            return $this->edad;
        }
        public function getSueldo(){
            
            return $this->sueldo;
            
        }
        public function getDireccion() {
            return $this->direccion;
        }
        public function __toString() {
            return __CLASS__." nombre {$this->nombre}";
        }

}