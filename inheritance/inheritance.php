<?php

// Creating Employee class:
class Employee{
    public $name;
    public $salary;
    public $age;

    function __construct($n, $s, $a)
    {
        $this->name = $n;
        $this->salary = $s;
        $this->age = $a;
    }

    public function show(){
        echo  "<h3>Emplyee Details</h3>" . "<br>";
        echo "Emplyee name is {$this->name}". "<br>";
        echo "Emplyee salary is {$this->salary}" . "<br>";
        echo "Emplyee age is {$this->age}". "<br>";
    }
}

class Manager extends Employee{
    public $travelM = 2000;
    public $totalSalary;


    public function show(){
        $this->totalSalary = $this->travelM + $this->salary;
        echo  "<h3>Manager Details</h3>" . "<br>";
        echo "Emplyee name is {$this->name}". "<br>";
        echo "Emplyee salary is {$this->totalSalary}". "<br>";
        echo "Emplyee age is {$this->age}". "<br>";
    }
}

// creating object of Emplyee class:
$emplyee = new Employee("Sajjat", 20000, "18");
$emplyee->show();
$manger = new Manager("Shah alam", 100000, "21");
$manger->show();


 