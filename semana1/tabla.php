<?php

foreach(range(1,10) as $i => $n){
    if($n==6 || $n==8)
        continue;
    echo "1 x $n = ".(1*$n)."\n";
}