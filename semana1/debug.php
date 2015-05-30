<?php
require_once('FirePHPCore/FirePHP.class.php');
ob_start();
$log = FirePHP::getInstance(true);
/* 
 * FirePHP
 */

$var = array('Oscar') + range(0,10);

$log->log($var);
