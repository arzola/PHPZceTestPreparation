<?php

/* 
 * Oscar Arzola
 * Debemos de tener cuidado con los tipos de datos númericos ya
 * que los enteros pueden representarse en formato binario, decimal, octal y hexadecimal.
 * 
 */

   $entero['decimal'] = 16;
   $entero['octal']= 020;
   $entero['hex']= 0x10;
   
   foreach($entero as $numero){
       echo ($numero + 0x11)."</br>";
   }
   
   $n = 0x11; //16 en hexadecimal
   echo ++$n."</br>"; //Primero suma el valor y luego lo regresa
   echo $n++."</br>"; //Devuelve el valor y luego lo suma
   
   // Todos los números imprimen lo mismo por que representan el mismo valor pero en diferente base
   

