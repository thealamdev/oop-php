<?php
// Creating class:

use Product as GlobalProduct;

class Product{
    public $name;
    public $color;

    function __construct($n="Phone", $c= '0')
    {
        $this->name = $n;
        $this->color = $c;
    }

    public function show(){
        echo "Product name is {$this->name} and it's color is {$this->color}" . "\n" . "<br>";
    }
}

// Creating object of this class:
$object = new Product();
$object1 = new Product("Phone", "Red");


$object->show();
$object1->show();