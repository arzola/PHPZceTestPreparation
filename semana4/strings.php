<?php

$foo = 'bar';

$now = <<<'NOW'
    I'm now, $foo! <br>
NOW;

$here = <<<HERE
    I'm here, $foo! <br>
HERE;

echo $now;

echo $here;