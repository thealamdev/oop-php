<?php

// Creating a base interface:
interface ParentClass{
    public function Name($name);
}

interface MotherClass{
    function Age($age);
}


// derives class:
class ChildClass implements ParentClass,MotherClass{
    public function Name($name){
        echo "{$name} is my family name" . "<br>";
    }
    public function Age($age){
        echo "{$age} is my age" ."<br>";
    }
}

class ex implements ParentClass{
    public function Name($name){
        echo "{$name} is my family name" . "<br>";
    }
    public function Age($age){
        echo "{$age} is my age";
    }
}

// creating object of derives class:
$ob = new ChildClass();
$ob->Name("Boyati");
$ob->Age(20);

$ob1 = new ex();
$ob1->Name("Boyati");
$ob1->Age(20);