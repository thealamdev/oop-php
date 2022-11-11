<?php
//creating a base class:
abstract class Info{
    public $prefix;
    abstract public function Name($name);
}

// child class:
class FullInfo extends Info{
    
    public function Name($name)
    {
        if($name == "Shah alam"){
            $this->prefix = "Md.";
        }
        else if($name == "Sajjat"){
            $this->prefix = "Mr.";
        }
        echo "{$this->prefix} {$name}";
    }
}

$ob = new FullInfo();
$ob->Name("Sajjat");