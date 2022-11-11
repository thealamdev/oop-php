
<!DOCTYPE html>
<html>
<body>

<?php
 // creating a Fruit class:
 class Fruit{
 	public $name;
    public $color;
    
    function __construct($n, $c){
	$this->name = $n;
    $this->color = $c;
    }
    
    public function show(){ 
        echo "The fruit is {$this->name} and the color is {$this->color}" . "<br>";

    }
   
   
   }
   
    // Creating a child class of Fruit:
    class Strawberry extends Fruit{
      public function info(){
        echo "Am i straberry or berry";
      }
    }

 
    
    $second_object = new Strawberry("Apple", "red");
    $second_object->show();
    $second_object->info();


/*

Note: when we extends a class we remember one think that we will never create object of parent class(extended class)
cause all the properties and method are available in child class. So we will create the object of child class;

*/
 
?>
 
</body>
</html>
