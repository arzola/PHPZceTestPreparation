<?php
error_reporting(-1);
ini_set('display_errors', 1);
$foo = 'bar';

$now = <<<'NOW'
    I'm now, $foo! <br>
NOW;

$here = <<<HERE
    I'm here, $foo! <br>
HERE;

echo $now;

echo $here;