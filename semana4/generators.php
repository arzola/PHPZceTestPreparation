<?php
error_reporting(-1);
ini_set('display_errors',1);

function print_memory_usage($bytes) {
	if ($bytes < 1024)
		return $bytes." bytes";
	elseif ($bytes < 1048576)
		return round($bytes/1024,2)." kb";
	else
		return round($bytes/1048576,2)." mb";
}

echo 'Al inicio ';
echo print_memory_usage(memory_get_usage()) ."<br>";

function range2($inicio,$final,$step=1){
    for($i=$inicio; $i<=$final; $i+=$step){
        $a[] = $i;
    }
	echo print_memory_usage(memory_get_usage()) ."<br>";
    return $a;
}

function range3($inicio,$final,$step=1){
    for($i=$inicio; $i<=$final; $i+=$step){
        yield $i;
    }
	echo print_memory_usage(memory_get_usage()) ."<br>";
}

foreach(range2(0,8888888) as $n){

}
echo "Al fin<br>";
echo print_memory_usage(memory_get_usage()) ."<br>";