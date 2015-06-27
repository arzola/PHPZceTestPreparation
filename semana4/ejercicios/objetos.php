<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class personas {
    static $nomina;
    private $nombre;
    public $sueldo=0;
            function __construct($nombre,$sueldo) {
                $this->nombre=$nombre;
                $this->sueldo=$sueldo;
                self::$nomina+=  $this->sueldo;
            }
    

}
$persona1=new personas("Gerardo",10000);
$persona2=new personas("Luis",8000);
echo personas::$nomina;
echo "\n";
echo $persona1->sueldo;
echo "\n";
echo $persona2->sueldo;