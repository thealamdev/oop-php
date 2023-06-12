 <?php
 class Controller {
    public $content = "This is content";
    
    public function index($conn) {
        echo $text = "This is Shah Alam";
        return $conn;
    }
}

class Car {
    protected $name;
    public $model;
    public $price;

    public function drive() {
        echo $model = $this->model . "<br>";
        echo $price = $this->price . "<br>";
    }
}

class ParentCars extends Car {
    public function carName($name) {
        echo $name = $name . "<br>";
    }
}


abstract class Answer{
    abstract protected function sum($a, $b);
}

class concat extends Answer{
    public function sum($a,$b){
        echo $a+$b;
    }
}


$concat = new concat();
$concat->sum(10,40);
// Cars:
$cars = new ParentCars();
$cars->carName("Maruti");
$cars->model = "Maruti-f10";
$cars->price = "8756954";
$cars->drive();

$object = new Controller();

echo $object->content;
echo $object->index("Shah alam");
