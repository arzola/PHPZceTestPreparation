<?php

//Arrays short form

$a = ['os'=>'cool'];

//Des-referencia de arrays

function getArray($a){
    return $a;
}

$var = getArray($a)['os'];

echo $var; //imprime cool

//Traits

class BaseDeDatos{
    
    public function conectar(){
        
    }
    
}

class Usuario{
    private $_db;
    public function setDb(BaseDeDatos $db){
        $this->_db = $db;
    }
}


$usuario = new Usuario();
$usuario->setDb(new BaseDeDatos());

class Cliente{
    use Log;
    public function Hello(){
        return 'Hello';
    }
}

trait Log{
    public function sendByMail(){
       return 'Enviadno mail';
    }
}

$cliente = new Cliente();

echo $cliente->Hello();
echo $cliente->sendByMail();

$a['foo'];