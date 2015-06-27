<?php

//Definimos la ruta base del código
define('APP_PATH', dirname(__FILE__));

//Definimos las rutas que vamos a utilizar

define('CONTROLLER_PATH', APP_PATH . '/controllers');
define('MODEL_PATH', APP_PATH . '/model');
define('VIEW_PATH', APP_PATH . '/view');

function mi_autoload($class_name) {
	$className = strtolower($class_name);
	$paths = array(
		CONTROLLER_PATH,
		MODEL_PATH,
		VIEW_PATH
	);
	foreach ($paths as $path) {
		if (file_exists("$path/$className.php"))
			require_once("$path/$className.php");
	}

}

spl_autoload_register('mi_autoload');