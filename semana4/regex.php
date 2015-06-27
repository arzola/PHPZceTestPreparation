<?php

//delimitadores / # !

$patron = "/(^[a-zA-Z]{0,30})+@+([a-z0-9\-]{2,30})+(\.)+([a-z]{2,3})/";

//uso de los operadores * y +
//cuantificadores {}
// (agrupadores)
// \escape

/*
 *
Regex quick reference
[abc]     A single character: a, b or c
[^abc]     Any single character but a, b, or c
[a-z]     Any single character in the range a-z
[a-zA-Z]     Any single character in the range a-z or A-Z
^     Start of line
$     End of line
\A     Start of string
\z     End of string
.     Any single character
\s     Any whitespace character
\S     Any non-whitespace character
\d     Any digit
\D     Any non-digit
\w     Any word character (letter, number, underscore)
\W     Any non-word character
\b     Any word boundary character
(...)     Capture everything enclosed
(a|b)     a or b
a?     Zero or one of a
a*     Zero or more of a
a+     One or more of a
a{3}     Exactly 3 of a
a{3,}     3 or more of a
a{3,6}     Between 3 and 6 of a
 */

var_dump(preg_match($patron, '283OScar'));
var_dump(preg_match($patron, 'Arzola'));
//var_dump(preg_match($patron, 'OS', $coincidencias));
//print_r($coincidencias);
var_dump(preg_match($patron, 'OS2E12'));
var_dump(preg_match($patron, 'mogurbon@gmail.com',$match));
print_r($match);