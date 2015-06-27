<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$multiplicar= function (&$numero) {
  $numero=$numero*2;  
};
$nums=  range(1, 100);
array_walk($nums, $multiplicar);

print_r($nums);

