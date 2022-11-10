<?php
// here we will show how to work with a class:

class ContactInfo{
    public $name;
    public $fatherName;
    public $motherName;
    public $address;
    public $age;
    public $friends =[
        "firstF"=>["name"=> "Bulbul Ahmed", "age" => "21"],
        "secondF" => ["name"=>"Tahmeedul Islam", "age"=>"23"],
        "thiredF" => ["name"=> "Mehedi Hasan","age"=> "20"],
    ];

    public $friend = [];
    public $fage = [];

    public function showInfo(){
        echo "My name is " . $this->name . "<br>";
        echo "My age is " . $this->age . "<br>";
        echo "My father Name is " . $this->fatherName . "<br>";
        echo "My mother Name is " . $this->motherName . "<br>";
        echo "My Hometown(Address) is " . $this->address . "<br>";
        foreach($this->friends as $key => $friend){
                echo "My {$key} name is " . $friend['name'] . " and his age is " . $friend['age'] . "<br>";
        };
        
    }
}

// creating object of this class:
$ContactInfo = new ContactInfo();
$ContactInfo->name = "Shah Alam";
$ContactInfo->fatherName = "Saiful Islam";
$ContactInfo->motherName = "Shumnnahar Begun";
$ContactInfo->age = 21;
$ContactInfo->address = "Dhaka, Manikganj";

$ContactInfo->showInfo();