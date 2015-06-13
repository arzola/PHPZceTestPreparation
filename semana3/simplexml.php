<?php
/**
 * SimpleXml Cool fancy features
 * icode
 */

$xmlstr = <<<XML
<?xml version='1.0' standalone='yes'?>
<movies>
 <movie>
  <title>Ethernal Sunshine</title>
  <characters>
   <character>
    <name>Joel Barish</name>
    <actor>Jim Carrey</actor>
   </character>
   <character>
    <name>Clementine Kruczynski</name>
    <actor>Kate Winslet</actor>
   </character>
  </characters>
  <plot>
   "El eterno resplandor de una mente sin recuerdos" es una comedia dramática interpretada por Jim Carrey y Kate Winslet que en algunas ciudades de países hispanos también está conocida como "Olvídate de Mi" y cuenta la historia de Joel, un hombre que vive traumatizado por la ruptura con su novia a la que ha querido durante toda su vida; Clementine, una joven para nada convencional que lo hipnotizó tiempo atrás y con la que ha vivido una bonita relación de amor.
  </plot>
  <great-lines>
   <line>La arena está sobrevalorada. Son solo rocas diminutas.</line>
  </great-lines>
  <rating type="thumbs">7</rating>
  <rating type="stars">5</rating>
 </movie>
  <movie>
  <title>500 days of Summer</title>
  <characters>
   <character>
    <name>Tom</name>
    <actor>Joseph Gordon-Levitt</actor>
   </character>
   <character>
    <name>Summer</name>
    <actor>Zooey Deschanel</actor>
   </character>
  </characters>
  <plot>
   Tom Hansen (Joseph Gordon-Levitt) es un arquitecto que trabaja escribiendo tarjetas de felicitación y que cree en el amor verdadero. Summer Finn (Zooey Deschanel) dejó de creer en esta concepción del amor en cuanto sus padres se divorciaron
  </plot>
  <great-lines>
   <line>Esto es una historia de chico conoce a chica. Pero más vale que sepas de entrada que no es una historia de amor.</line>
  </great-lines>
  <rating type="thumbs">10</rating>
  <rating type="stars">8</rating>
 </movie>
</movies>
XML;

//Obteniendo información del XML

$movies = new SimpleXMLElement($xmlstr);

echo $movies->movie->title . "</br>";
echo $movies->movie[0]->title . "</br>"; //Igual el objeto SimpleXMLElement hace el casting con toString

var_dump($movies->movie[0]->title);

//Tener en cuenta los guiones (hyphen)

//echo $movies->movie->{'great-lines'}->line . "</br>";
echo $movies->movie[0]->{'great-lines'}->line . "</br>";
echo $movies->movie[1]->{'great-lines'}->line . "</br>";

/* For cada <character>, imprimimos diferentes nombres <name>. */

foreach ($movies->movie->characters->character as $character) {
    //echo $character->name, ' interpretado  por ', $character->actor, PHP_EOL . "</br>";
}

//Con xPath podemos hacer busquedas sobre el DOM del XML

$characters = $movies->xpath('//character');

foreach ($characters as $mono) {
    echo $mono->name . "</br>";
}

$stars = $movies->xpath('//rating[@type="stars"]');

foreach ($stars as $s) {
    echo $s . "</br>";
}

//CUIDADOOO :D si quieres comparar un elemento con un string debes castearlo

if ((string)$movies->movie->title === 'Ethernal Sunshine') {
    print 'Mi favorita.';
}

//Podemos agregar o remover elementos

$nuevoPersonaje = $movies->movie[1]->characters->addChild('character');
$nuevoPersonaje->addChild('name', 'El esposo de Summer');
$nuevoPersonaje->addChild('actor', 'Oscar Arzola');

$characters = $movies->xpath('//character');

foreach ($characters as $mono) {
    echo $mono->name . "</br>";
}
?>
<pre>
    <?php //echo $movies->asXML(); ?>
</pre>