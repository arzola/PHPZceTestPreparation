<?php

require_once 'Empleado.php';

class Developer extends Empleado{
	public function __construct(){
		parent::__construct();
		echo "Override Developer";
	}
}