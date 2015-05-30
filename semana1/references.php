<?php
    class Sample 
    {
        public $value = 10;
        public function &fun()
        {
            return $this->value;
        }
    }
    $obj = new Sample;
    $val = &$obj->fun(); 
    $obj->value = 5;
    echo $val;
?>