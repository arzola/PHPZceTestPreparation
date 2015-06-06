<?php
function tickHandler()
{
    echo "tickHandler() llamado\n<br>";
}
register_tick_function("tickHandler");
declare(ticks=3){
	$a = 1;
	$a = 1;
	$a = 1;
	$a = 1;
	$a = 1;
	$a = 1;
}