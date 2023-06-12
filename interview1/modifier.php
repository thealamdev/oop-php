<?php


class Tree{
    public $name;
    protected $age;
    private $place;

    public function call(){
        echo $this->name;
        echo $this->age;
        echo $this->place;
    }
    
}


class ParentTree extends Tree{
    public function callAgain(){
        echo $this->age;
    }
}


$obj = new Tree();
$obj->name = "apple";
$obj->age = "apple";
$obj->place = "apple";
$obj->call();