<?php

trait index{
    public $pageName;
}

trait store{
    public $name;
    public $age;
    public function storeDate(){
        echo $this->name;
        echo $this->age;
    }
}

class create{
    use store;
    use index;
    public function showPageName(){
        echo $this->pageName;
    }
}


$ob = new create();
$ob->name = "Shah alam";
$ob->age = 21;
$ob->pageName = "index page";
$ob->storeDate();
$ob->showPageName();