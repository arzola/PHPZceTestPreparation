<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
define ('CONSTANT',1);
define ('_CONSTANT',0);

define ('ISSET','');

if(!empty(ISSET)){
	if(!((boolean) _CONSTANT)){
		print "One";
	}
}else if(constant('CONSTANT')==1){
	print "two";
}