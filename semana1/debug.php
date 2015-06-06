<?php
error_reporting(1);
ini_set('display_errors', 1);
require_once('../FirePHPCore/FirePHP.class.php');
ob_start();
echo "algo";
$log = FirePHP::getInstance(true);
/* 
 * FirePHP
 */

$var = array('Oscar') + range(0,10);

$log->log($var);
