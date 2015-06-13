<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace gerardo\adapters;
require_once 'almacenamiento.php';


use gerardo\Almacenamiento as al;
class fileAdapter implements al{
    private $file;
            function __construct() {
                $this->file='data/db.csv';
    }
    function delete($param) {
        
    }
    function save($param) {
        
    }
    function update($param) {
        
    }
    function fetchAll() {
        $file=file($this->file);
        foreach ($file as $row) {
            $result=  str_getcsv($row);
            $registros[]=array('id'=>$result[0],'nombre'=>$result[1],'telefono'=>$result[2],'facebook'=>$result[3],'twitter'=>$result[4]);
        }
        return $registros;
    }
    function find($param) {
        
    }

}

