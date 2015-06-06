<?php
function tickHandler()
{
    echo "tickHandler() llamado\n<br>";
}
register_tick_function("tickHandler");
declare(ticks=1);
$a = 1;
if(true)
{
    $gola;
}
if (0 < $a) {
    $a += 2;
}