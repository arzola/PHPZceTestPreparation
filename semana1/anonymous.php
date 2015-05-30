<?php
    $foo = create_function('$x,$y', 'return $x*$y;');
    $bar = create_function("\$x", "return \$x*\$x;");
    echo $foo(10,2); 
    echo $bar(10);
 ?> 