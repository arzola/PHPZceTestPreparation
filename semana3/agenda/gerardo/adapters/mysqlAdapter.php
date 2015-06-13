<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace gerardo\adapters;

require_once 'almacenamiento.php';

use gerardo\Almacenamiento as al;
class mysqlAdapter implements al{
    private  $connection;
    private $registros;
    private $config=array('localhost','root','root','agenda');
            
   function __construct() {
       $this->connect();
    }
    
    function delete($param) {
        
    }
    function save($param) {
        
        $query = "INSERT INTO `agenda`.`contactos` (`id`, `nombre`, `telefono`, `facebook`, `twitter`) VALUES (NULL, '{$param['nombre']}', '{$param['telefono']}', '{$param['facebook']}', '{$param['twiter']}');";


        $result = $this->connection->query($query); 
        return $result;

    }
    function update($param) {
        
    }
    function fetchAll() {
        $query = "select * from  `agenda`.`contactos`";


        $result=$this->connection->query($query); 
         //mysqli_fetch_assoc($result);
         for ($datos=array();$row= $result->fetch_assoc();$datos[]=$row);
        /*while ($row=  $this->connection->fetch_assoc()){ analogo
            $datos[]=$row;
        }*/
     $this->registros=$datos;
     return $this->registros;
    }
    function find($param) {
        
    }
    private function connect() {
        //conection: 
        $link = mysqli_connect($this->config[0],$this->config[1],$this->config[2],$this->config[3]) or die("Error " . mysqli_error($link));
        $this->connection=$link;
        
    }

}
