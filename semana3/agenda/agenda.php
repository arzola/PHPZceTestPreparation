<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace gerardo;
require_once 'almacenamiento.php';
class Agenda {
    private $db;
    function __construct(Almacenamiento $almacenamiento) {
        $this->db=$almacenamiento;
        
    }
    
    function delete($param) {
        $this->db->delete($param);
    }
    function save($param) {
        $this->db->save($param);
    }
    function update($param) {
        $this->db->update($param);
    }
    function fetchAll() {
        return $this->db->fetchAll();
    }
    function find($param) {
        return $this->db->find($param);
    }

}

