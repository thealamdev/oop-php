<?php
// creating base class:
/*  This is about abstract class and it is specially
optional arguments on abstract method */
abstract class Informaton{
    public $prefix;
    abstract public function Prefix($name);
}

// child class:
class PersonalInfo extends Informaton{
    public function Prefix($name, $seperator = "-", $greet = "Dear")
    {
        if($name == "Shah Alam"){
            $this->prefix = "Mr. ";
        }
        elseif($name == "Sajjat"){
            $this->prefix = "Md. ";
        }
        else{
            $this->prefix="";
        }
        echo "{$greet}{$seperator}{$this->prefix}{$name}";
    }
}

$object = new PersonalInfo();
$object->Prefix("Shah Alam");