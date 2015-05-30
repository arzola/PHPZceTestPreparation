<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

for ($i=1;$i<=10;$i++){
    echo "1 x $i = ". 1 * $i ."\n";
}
  echo "\n\n";

for ($i=1;$i<=10;$i++){
    if ($i==6 or $i==8){
        continue;
    }
        echo "1 x $i = ". 1 * $i ."\n";;
    
}


