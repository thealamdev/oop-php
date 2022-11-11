<?php
// Create an abstract class:
abstract class ParentClass{
    public $name;
    abstract public function printFunction();
}
 

// creatinig a child class:
class ChildClass extends ParentClass{
    public $className;
    public function printFunction(){
        echo "My name is {$this->name} and my class name is {$this->className}";
    }
}

// CREATING OBJECT OF CHILDCLASS:
$object =  new ChildClass();
$object->name = "Shah Alam";
$object->className = 14;
$object->printFunction();
