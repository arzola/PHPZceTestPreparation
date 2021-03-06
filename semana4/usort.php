<?php

/*
 * Si el primer elemento es menor devolver un entero menor a 0
 * Si el primer elemento es mayor devolver un entero mayor a 0
 * Si son iguales devolver 0
 * Es importante checar la respuesta de usort ya que debe de compararse con ===
 */

//sort (ordena) y re-indexa las llaves
//asort (ordena) y mantiene las llaves
//ksort (ordena) por llaves
//natsort (orden natural)


$personajes[] = array('apellido' => 'Bros', 'edad' => 10, 'nombre' => 'Mario', "color"=>"Morado");
$personajes[] = array('apellido' => 'Bad', 'edad' => 8, 'nombre' => 'Toad', "color"=>"Azul");
$personajes[] = array('apellido' => 'Princess', 'edad' => 100, 'nombre' => 'Peach', "color"=>"Verde");
$personajes[] = array('apellido' => 'Vago', 'edad' => 1, 'nombre' => 'Luigi', "color"=>"Naranja");
$personajes[] = array('apellido' => 'Azure', 'edad' => 76, 'nombre' => 'Bowser', "color"=>"Amarillo");
$personajes[] = array('apellido' => 'Ade', 'edad' => 33, 'nombre' => 'Kerrigan', "color"=>"Negro");
?>

<?php
    $array1 = $array2 = array("img12.png", "img10.png", "img2.png", "img1.png");
    //sort($array1);
?>

<pre>
    <?php print_r($array1); ?>
</pre>

<pre>
    <?php natsort($array1); ?>
    <?php print_r($array1); ?>
</pre>

<pre>
    <?php //print_r($personajes); ?>
    <?php asort($personajes); ?>
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

function ordenar_por_color($a,$b) {
    
    //return strcmp($a['color'],$b['color']);
    if($a['color']==="Negro") return -1;
    if ($a['color'] === $b['color']) return 0;
    return ($a['color'] < $b['color']) ? -1 : 1;
   
}
?>

<pre>
    <?php //usort($personajes, 'ordenar_por_color');
    ?>

<?php    //foreach ($personajes as $p=>$l){ echo $p. " ". $l['color']."\n";}?>
    <?php //print_r($personajes); ?>
</pre>

<pre>
    <?php //print_r($cortado); ?>
</pre>