<?php
/*
 * Aquí están los ejemplos.
 */

echo "\n--- DESPLAZAMIENTO DE BITS A LA DERECHA SOBRE ENTEROS POSITIVOS ---\n";

$val = 4;
$places = 1;
$res = $val >> $places;
p($res, $val, '>>', $places, 'copia del bit de signo desplazado hacia el lado izquierdo');

$val = 4;
$places = 2;
$res = $val >> $places;
p($res, $val, '>>', $places);

$val = 4;
$places = 3;
$res = $val >> $places;
p($res, $val, '>>', $places, 'bits desplazados fuera del lado derecho');

$val = 4;
$places = 4;
$res = $val >> $places;
p($res, $val, '>>', $places, 'mismo resultado que arriba; no se puede desplazar más allá del 0');


echo "\n--- DESPLAZAMIENTO DE BITS A LA DERECHA SOBRE ENTEROS NEGATIVOS ---\n";

$val = -4;
$places = 1;
$res = $val >> $places;
p($res, $val, '>>', $places, 'copia del bit de signo desplazado al lado izquierdo');

$val = -4;
$places = 2;
$res = $val >> $places;
p($res, $val, '>>', $places, 'bits desplazados fuera del lado derecho');

$val = -4;
$places = 3;
$res = $val >> $places;
p($res, $val, '>>', $places, 'mismo resultado que arriba; no se puede desplazar más allá del -1');


echo "\n--- DESPLAZAMIENTO DE BITS A LA IZQUIERDA SOBRE ENTEROS POSITIVOS ---\n";

$val = 4;
$places = 1;
$res = $val << $places;
p($res, $val, '<<', $places, 'ceros rellenan en el lado derecho');

$val = 4;
$places = (PHP_INT_SIZE * 8) - 4;
$res = $val << $places;
p($res, $val, '<<', $places);

$val = 4;
$places = (PHP_INT_SIZE * 8) - 3;
$res = $val << $places;
p($res, $val, '<<', $places, 'bit de signo resulta desplazado fuera');

$val = 4;
$places = (PHP_INT_SIZE * 8) - 2;
$res = $val << $places;
p($res, $val, '<<', $places, 'bit de signo desplazado fuera del lado izquierdo');


echo "\n--- DESPLAZAMIENTO DE BITS A LA IZQUIERDA SOBRE ENTEROS NEGATIVOS ---\n";

$val = -4;
$places = 1;
$res = $val << $places;
p($res, $val, '<<', $places, 'ceros rellenan en el lado derecho');

$val = -4;
$places = (PHP_INT_SIZE * 8) - 3;
$res = $val << $places;
p($res, $val, '<<', $places);

$val = -4;
$places = (PHP_INT_SIZE * 8) - 2;
$res = $val << $places;
p($res, $val, '<<', $places, 'bits desplazados fuera del lado izquierdo, incluyendo el bit de signo');


/*
 * Ignore this bottom section,
 * it is just formatting to make output clearer.
 */

function p($res, $val, $op, $places, $note = '') {
    $format = '%0' . (PHP_INT_SIZE * 8) . "b\n";

    printf("Expression: %d = %d %s %d\n", $res, $val, $op, $places);

    echo " Decimal:\n";
    printf("  val=%d\n", $val);
    printf("  res=%d\n", $res);

    echo " Binary:\n";
    printf('  val=' . $format, $val);
    printf('  res=' . $format, $res);

    if ($note) {
        echo " NOTE: $note\n";
    }

    echo "\n";
}