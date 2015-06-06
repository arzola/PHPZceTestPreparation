<?php

//Uso del operador modulo
//Escribir una función que imprima búmeros del 1 al 100 llamada fizzBuzz
//si el úmero es multiplo de 3 imprimir fizz si el número es multiplo de 5 imprimir buzz
//Si es multiplo de los 2 imprimir FizzBuzz
//si no imprimir el número

for($i=1;$i<=100;$i++){
    
    if ($i % 2 ==0 and $i % 5==0){
        echo 'fizzbuzz';
         echo "\n";
    }
    elseif ($i % 5==0) {
        echo 'buzz';
         echo "\n";
        
    }elseif ($i % 3 ==0) {
        echo 'fizz';
         echo "\n";
    }else{
        echo $i;
         echo "\n";
    }
    

    
    
}

