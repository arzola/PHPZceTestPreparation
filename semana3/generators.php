<?php
echo 'Al inicio ';
echo memory_get_usage()/1000000 ."<br>";

//function range2($inicio,$final,$step=1){
//    for($i=$inicio; $i<=$final; $i+=$step){
//        $a[] = $i;
//    }
//    echo memory_get_usage()/1000000 ."<br>";
//    return $a;
//}

function range3($inicio,$final,$step=1){
    for($i=$inicio; $i<=$final; $i+=$step){
        yield $i;
    }
    echo memory_get_usage()/1000000 ."<br>";
}

foreach(range3(0,1000000) as $n){
    
}

echo memory_get_usage()/1000000 ."<br>";