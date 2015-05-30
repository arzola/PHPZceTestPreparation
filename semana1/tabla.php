<?php

foreach(range(1,10) as $i => $n){
    if($n==6 || $n==8)
        continue;
    $v = $i+1;
    echo "$v x $n = ".($v*$n)."</br>";
}
