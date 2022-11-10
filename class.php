<?php
class calculation{
  public $number1=30,$number2=40,$add;

  public function sum(){
    $this->add = $this->number1 + $this->number2;
    return $this->add;
  }
}

// creating object:

$result = new calculation();
$result->number1;
$result->number2;

// echo $result->sum();


class Arr{
    public $arr = [
        "name"=>"Shah alam",
        "age" =>21,
        "department"=>"CSE"
    ];


}

// CREATING OBJECT OF Arr:
$details = new Arr();

foreach($details->arr as $key => $value){
    echo $key ." = ". $value . "\n";
}