<?php

abstract class storeDate{
    public $name;
    abstract protected function data();
}


class showDate extends storeDate{
    public function data(){
        echo "Hi";
    }
}

interface delete{
    public function name();
}

$ob = new showDate();
$ob->data();