<?php

//echo E_ALL; //32767
//echo E_PARSE; //4

echo E_ALL & ~E_WARNING;

//Revisar que constantes estan activas
if ((error_reporting() & E_PARSE) == E_PARSE) {
    echo "E_PARSE is active";
}