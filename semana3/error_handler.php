<?php

// funcion personalizada de gestion de errores
function custom_error_handler($errno, $errstr, $errfile, $errline) {
    if (!(error_reporting() & $errno)) {
        return;
    }

    switch ($errno) {
        case E_ALL:
        case E_USER_ERROR:
        case E_PARSE:
            $v = PHP_VERSION;
            $os = PHP_OS;
            $str = <<<'FATAL'
        <img src="error/fatal.jpg" style="width:100px;/></br>
        <b>Malas Noticias: ERROR FATAL</b> [$errno] $errstr
        <p>
        Realmente nos apena decirte que ese código tiene errores fatales en la linea <strong>$errline</strong> en el archivo <strong>$errfile</strong>
        </p>
        <p>PHP $v ($os)</p>
FATAL;
            echo $str;
            exit(1);
            break;

        case E_USER_WARNING:
        case E_WARNING:
            $v = PHP_VERSION;
            $os = PHP_OS;
            $str = <<<WARNING
        <img src="error/warning.jpg" style="width:100px;"/></br>
        <b>Malas Noticias: CUIDADO (WARNING)</b> [$errno] $errstr
        <p>
        Realmente nos apena decirte que ese código tiene algunos warning en la linea <strong>$errline</strong> en el archivo <strong>$errfile</strong>
        </p>
        <p>PHP $v ($os)</p>
WARNING;
            echo $str;
            break;

        case E_NOTICE:
        case E_USER_NOTICE:
            $str = <<<NOTICE
        <img src="error/notice.jpg" style="width:100px;"/></br>
        <b>Mala practica :( </b> [$errno] $errstr
        <p>
        Ten cuidado en la linea <strong>$errline</strong> en el archivo <strong>$errfile</strong>
        </p>
NOTICE;
            echo $str;
            break;

        default:
            echo "Tipo de error desconocido: [$errno] $errstr<br />\n";
            break;
    }

    /* No ejecutar el gestor de errores interno de PHP */
    return true;
}

function check_for_fatal() {
    $error = error_get_last();
    if($error['type']===E_PARSE)
    custom_error_handler($error["type"], $error["message"], $error["file"], $error["line"]);
}

register_shutdown_function("check_for_fatal");
set_error_handler("custom_error_handler", 32765);
