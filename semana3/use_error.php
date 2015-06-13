<?php
require_once 'error_handler.php';

$x = 4/0;

$username = 'joe';

if ($usernmae) { // typo, $usernmae expands to null
    echo "Logged in";
}
else {
    echo "Please log in...";
}

trigger_error('ERROR LOCO',E_USER_WARNING);