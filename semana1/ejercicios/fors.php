<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$valores = range(0,100);
    $start1 = microtime(true);
    for($i=0,$total = count($valores); $i<$total; $i++){
        echo $valores[$i];
    }
    $end1 = microtime(true);
    $start2 = microtime(true);
    $num=  count($valores);
    while ($i<$num) {
        echo $valores[$i];
        $i++;
    }
    $end2 = microtime(true);
    $start3 = microtime(true);
    foreach($valores as $val){
        echo $val;
    }
    $end3 = microtime(true);
    