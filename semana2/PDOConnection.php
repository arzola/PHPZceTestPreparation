<?php

try {
    $conn = new PDO('mysql:host=127.0.0.1;dbname=plansalu_2014', 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = $conn->prepare("SELECT nombre FROM Usuarios");
    $statement->execute();
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        print_r($row);
    }
    $statement = null;
} catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
}
