<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace gerardo;
interface Almacenamiento{
    function save($param);
    function update($param);
    function find($param);
    function delete($param);
    function fetchAll();
}

