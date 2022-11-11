<?php

class Product{
    private $name;
    private $price;
    public function details($n , $p){
        $this->name = $n;
        $this->price = $p;
        echo "The name of this product is {$this->name} and it's price is {$this->price}";
    }


}

$object = new Product();
$object->details("phone", "2000");
$object->name;