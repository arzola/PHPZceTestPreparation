<?php

$mysqli = new mysqli("127.0.0.1", "root", "", "plansalu_2014");
if ($mysqli->connect_errno) {
    echo "Falló la conexión con MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$resultado = $mysqli->query("SELECT nombre FROM usuarios");

while ($fila = $resultado->fetch_assoc()) {
    echo " nombre = " . $fila['nombre'] . "\n";
}