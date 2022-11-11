<?php 
// creating a base class:
abstract class Car{
    public $name;
    function __construct($n){
        $this->name = $n;
    }
     // abstract methods:
    abstract public function show();
}

// child class:
class Maroti extends Car{
    public function show(){
        echo "This is {$this->name} brand car" . "<br>";
    }
}

// child class 2:
class Toyota extends Car{
    public function show(){
        echo "This is {$this->name} brand car";
    }
}

//creating object:
$maroti = new Maroti("Maroti");
$Toyota =  new Toyota("Toyota");
$maroti->show();
$Toyota->show();