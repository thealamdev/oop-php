<?php

// class is a templete or blue print of an object:

class Car{
    public $name;
    public $model;
    public $price;

    public function drive(){
        $name = $this->name;
        $model = $this->model;
        $price = $this->price;

        echo $name;
        echo $model;
        echo $price;
    }
}


// object: 
$object = new Car();

$object->name = "Maruti";
$object->model = "Maruti - f10";
$object->price = 9339;


$object->drive();