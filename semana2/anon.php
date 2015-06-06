<?php

$lambda = create_function('$a,$b', 'return $a*$b;');

echo $lambda(3,4);

$lambda2 = function($a,$b){
	return $a*$b;
};

echo $lambda2(3,4);