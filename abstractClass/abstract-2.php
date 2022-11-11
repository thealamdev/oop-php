<?php

//creating a base class:
abstract class Calculation{
    abstract protected function calc($a, $b);
}

// child class of Calculation:
class Math extends Calculation{
    public function calc($n, $m){
        echo $n + $m;
    }
}

// creating object of child class:
$object = new Math();
$object->calc(10,30);