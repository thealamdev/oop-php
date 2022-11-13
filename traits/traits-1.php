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
   

}

 

 
$object = new greating();
$object->Greating();
$object->evening();