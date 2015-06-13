<?php
require_once 'error_handler.php';
error_reporting(E_ALL &E_NOTICE);
ini_set('display_errors',1);
$x = 4/0;

$username = 'joe';

if ($usernmae) { // typo, $usernmae expands to null
    echo "Logged in";
}
else {
    echo "Please log in...";
}

//trigger_error('ERROR LOCO',E_USER_WARNING);