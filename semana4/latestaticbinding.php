<?php
/* hace que funcionen como instancias aunque sean publicas**/
class Car {
	public static function run() {
		//late static binding
		return static::getName();
	}

	private static function getName() {
		return 'Car';
	}
}

class Toyota extends Car {
	public static function getName() {
		return 'Toyota';
	}
}

echo Car::run(); // output: Car
echo Toyota::run(); // output: Toyota
