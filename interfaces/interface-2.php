<?php
/* W3 example  */
interface Animal{
    public function show($name);
    
}

class Cat implements Animal{
    public function show($name)
    {
        return $name;
    }
}

$ob = new Cat();
echo $ob->show("Meow");
