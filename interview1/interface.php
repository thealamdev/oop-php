<?php

interface Animal{
    public function makeSound();
}


class Cat implements Animal{
    public function makeSound()
    {
        echo "meau";
    }
}

class Dog implements Animal{
    public function makeSound()
    {
        echo "Vou vou";
    }
}

class Cow implements Animal{
    public function makeSound()
    {
        echo "hamba hamba";
    }
}

$cat = new Cat();
$dog = new Dog();
$cow = new Cow();


$animals = [$cat,$dog,$cow];
foreach($animals as $animal){
    echo $animal->makeSound();
}
