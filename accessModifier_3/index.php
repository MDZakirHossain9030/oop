<?php
// todo: public, private & protected, , over-reading, final er kaj ki 


// public, private & protected, Inheritance er kaj ki 

//public property (পাবলিক টয়লেটের মত) বাহির থেকে access করা যায় |
//private property (ব্যক্তিগত ট্যলেটের মত) বাহির থেকে access করা যায় না |
//protected property (সুরক্ষিত) বাহির থেকে access করা যায় না কিন্তু এটার মাধ্যমে perent class এর কাজ child class এ আক্সেস করা যায়, কিন্তু perent class এর কাজ child class এ আক্সেস করতে না চাইলে perent class এর সামনে final keyword দিলে আর child class এ এক্সেস করা যাবে না |






// todo: over-reading  final
// over-reding mane child class er modde access & new property add kora jabe 

/*
class man{
  public $name;
  public $age;


  public function __construct($fname, $age){
    $this->name = $fname;
    $this->age = $age;
  }

  protected function info(){    //protected diyechi
    return "Name: " .$this->name ."Age" .$this->age;
  
  }
}


class zakirinfo extends man{ //extends man mane man namer sob code extends er maddome ekhane niye aste cacchi

  public $address;
  public function __construct($fname, $age, $address){ //uporer construct function ke ekhane over-reading korte cacchi
    $this->name = $fname;
    $this->age = $age;
    $this->address = $address;
  }

  public function messaage(){
    return "$this->name $this->age $this->address";
  }
}

$zakir = new zakirinfo("MD Zakir Hossain", 25, "Monohorpur");
echo $zakir->messaage();
*/

  ?>
