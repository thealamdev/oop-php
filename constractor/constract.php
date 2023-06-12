<?php

class Fruit{
     
    public $name;
    public $age = 20;
    function __construct($n){
        $this->name = $n;
    }

    public function getName(){
        return $this->name;
    }
}

$object = new Fruit("Apple");
 
echo $object->getName();
echo $object->age;

class Product{
    public $name = "Symphpny";
    public $model = "i97";
    public $result;

    function __construct(){
        return $this->result = "Phone name is {$this->name} and it's Model name is {$this->model}";
    }

}

$object = new PRODUCT();
echo $object->result;

foreach($object as $key => $ob){
    echo $ob . "<br>";
}