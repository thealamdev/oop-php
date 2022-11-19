<?php
trait Morning{
    public function Greating(){
        echo "Good Morning\n";
    }
}

trait Evenig{
    public function evening(){
        echo "Good Afternoon\n";
    }
}

class greating{
    use Morning,Evenig;
    public $time;
    public function timeDate(){
       return $this->time = date("ha");
    }

}

 

 
$object = new greating();
$object->Greating();
$object->evening();
echo $object->timeDate();