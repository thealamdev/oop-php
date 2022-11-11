<?php
// creating a parent class:

class Fruit{
    public $name;
    public $color;

    public function __construct($n, $c)
    {
        $this->name = $n;
        $this->color = $c;
    }

    protected function intro(){
        echo "The name of the fruit is {$this->name} and the color of it is {$this->color}";
    }
}

// parent class:

class Apple extends Fruit{
    public function show(){
        echo "This is apple fruit" . "<br>";
        $this->intro();
    }
}

$ob = new Apple("Banana", "yellow");
$ob->show();
