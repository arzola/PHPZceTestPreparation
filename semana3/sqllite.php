<?php


$db = new SQLite3('data/db.sqllite');

$create = <<<'TABLE'
CREATE TABLE contactos(
id_contacto INTEGER PRIMARY KEY,
nombre TEXT    NOT NULL,
apellido_p TEXT    NOT NULL,
apellido_m TEXT    NOT NULL,
edad INT     NOT NULL
);

TABLE;


$db->exec($create);

$insert = sprintf("
INSERT INTO contactos
(nombre,apellido_p,apellido_m,edad)
VALUES ('%s','%s','%s',%d)"
    , 'Oscar', 'Arzola', 'Cruz', 30);

$insert2 = sprintf("
INSERT INTO contactos
(nombre,apellido_p,apellido_m,edad)
VALUES ('%s','%s','%s',%d)"
    , 'Luis', 'Gomez', 'Martinez', 12);

$db->exec($insert);
$db->exec($insert2);

$data = $db->query('Select * From contactos');

while ($row = $data->fetchArray(SQLITE3_ASSOC)) {
    $rows[] = $row;
}

?>

<pre>
    <?php print_r($rows); ?>
</pre>
