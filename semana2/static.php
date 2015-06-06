<?php

/*
 * Una variable estatica retiene el valor entre llamados a funciones,
 * sin embargo solo tiene alcance en la funcion donde fue definida
 */

function updateCounter() {
    $nostatic = 0;
    static $counter = 0;
    $counter++;
    $nostatic++;
    echo "Static counter is now {$counter} and NOstatic counter is now {$nostatic} </br>\n";
}

updateCounter();
updateCounter();
updateCounter();
updateCounter();
updateCounter();
updateCounter();
updateCounter();
updateCounter();
updateCounter();
updateCounter();
