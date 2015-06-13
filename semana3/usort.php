<?php

/*
 * La función de comparación debe devolver un entero menor,
 * igual o mayor que cero si el primer argumento se considera
 * que sea respectivamente menor, en caso contrario un entero positivo.
 * Es importante checar la respuesta de usort ya que debe de compararse con ===
 */


$personajes[] = array('apellido' => 'Bros', 'edad' => 10, 'nombre' => 'Mario');
$personajes[] = array('apellido' => 'Bad', 'edad' => 8, 'nombre' => 'Toad');
$personajes[] = array('apellido' => 'Princess', 'edad' => 100, 'nombre' => 'Peach');
$personajes[] = array('apellido' => 'Vago', 'edad' => 1, 'nombre' => 'Luigi');
$personajes[] = array('apellido' => 'Azure', 'edad' => 76, 'nombre' => 'Bowser');
$cortado = array_slice($personajes,2,3);
?>

<?php
    //$array1 = $array2 = array("img12.png", "img10.png", "img2.png", "img1.png");
    //asort($array1);
?>

<pre>
    <?php //print_r($array1); ?>
</pre>

<pre>
    <?php //natsort($array1); ?>
    <?php //print_r($array1); ?>
</pre>

<pre>
    <?php //print_r($personajes); ?>
    <?php //ksort($personajes); ?>
    <?php //print_r($personajes); ?>
</pre>

<?php
function ordernarPorEdad ($a, $b) {
    if ($a['edad'] === $b['edad']) return 0;
    return ($a['edad'] < $b['edad']) ? -1 : 1;
}
?>

<?php
function ordernarPorNombre ($a, $b) {
    return strcmp($a['nombre'],$b['nombre']);
}
?>

<pre>
    <?php //usort($personajes, 'ordernarPorNombre');
    ?>
    <?php //print_r($personajes); ?>
</pre>

<pre>
    <?php print_r($cortado); ?>
</pre>