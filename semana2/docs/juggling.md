
Type Juggling PHP (Manipulación de tipos)

Reglas importantes.

PHP no requiere (ni soporta) la definición explicita de tipos en la declaración de variables; el tipo de la variable se determina por el contexto en el cual se emplea la variable. Es decir, si se asigna un valor string a una variable $var, entonces $var se convierte en un string. Si un valor integer es entonces asignado a la misma variable $var, ésta se convierte en integer.

Un ejemplo de la conversión de tipos automática de PHP es el operador suma '+'. Si ambos operandos son float, entonces ambos operandos son evaluados como floats y el resultado será un float. De otra manera, los operandos seran interpretados como integers, y el resultado será entonces integer. Tenga en cuenta que esto no implica que se cambien los tipos de los propios operandos; el único cambio es en como se evalúan los operandos y en el tipo de expresión en sí mismo.


> Written with [StackEdit](https://stackedit.io/).