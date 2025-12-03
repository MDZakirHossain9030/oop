<?php

//todo: inheritance, abstruct, interface & Trait এই গুলো হলো class এর নাম


// todo: inheritance

//way 1
class perentClass{
  public function myFunction(){
    echo "My name is ";
  }
}

class chaildClass extends perentClass{ // perent class এর সবকিছু chaild class এর মধ্যে নিয়ে এসেছি
  public function name(){

    perentClass::myFunction(); //perent class এর ডাটা দেখতে চাচ্ছি
    echo "MD Zakir Hossain";
  }
}

$object = new chaildClass();
echo $object->name();








// way2 ->w3school থেকে প্রেক্টিস করলেই হবে
class perentClass{
  public $name;
  public $age;

  public function __construct($name, $age){
    $this->name = $name;
    $this->age = $age;
  }
  public function get_information(){ //construct method এর সব কিছু এখানে return করছি
    echo "This is my name {$this->name} It is my age{$this->age}";
  }
}

class childClass extends perentClass{ //perent class কে extends করে child class এ নিয়ে এসেছি
  public function info(){
    echo "I live in Monohorpur";
  }
}
$object = new childClass("MD Zakir Hossain", 25); //child class এর মধ্যে argument পাঠাচ্ছি
$object->get_information(); //perent class এর method এর নাম এখানে দিয়েছি
$object->info();//child class এর method এর নাম এখানে দিয়েছি






//  todo:  abstruction

//  //todo: OOP-তে abstruct প্রধান কাজ হলো অপ্রয়োজনীয় বিবরণ লুকিয়ে রেখে জটিলতা কমানো এবং কেবল প্রয়োজনীয় তথ্য দেখানো। 
//  //   abstruct বাহির থেকে access করা যায়না বাহির থেকে acces করতে চাইলে extends এর মাধ্যমে করতে হবে 
 
 
 
// //1>> abstruct বাহির থেকে access করা যায়না বাহির থেকে acces করতে চাইলে extends এর মাধ্যমে করতে হবে 
// //2>> abstract class এর মধ্যে  abstruct method দিতে হবে এবং সেট mehod টা child class ও দিতে হবে নাহলে এরর দেখাবে |  
// //3>> abstruct class এবং method তৈরীর সময়  class & method নামের আগে শুধু abstract শব্দটি দিতে হয়
// //4>> abstract class এর মধ্যে abstract method এর কোনো বডি থাকেনা but সাধারণ কোনো method থাকলে সেগোলোর বডি দিতে হবে |
// //5>> abstract এর মাধ্যমে multipule class একটা class এর মধ্যে inherit করা সম্ভব না
// //6>> abstract e method e public, private, protected নিতে পারব






// abstract 

//abstract class abstractClass{
//     public $name;

//     public function __construct($getName){
//         $this->name = $getName;
//     }
    
//     abstract function abstractMechod();//abstract mythods যা সকল child class এর মধ্যে দিতে হবে নাহলে কাজ করবেনা 
// }


// class zakir_details extends abstractClass{
//     public function abstractMechod(){
//         return "My name is $this->name";
//     }
// }


// class belal_details extends abstractClass{
//     public function abstractMechod(){

//         echo "My name is $this->name";

//     }

// }
// $zakir_object = new zakir_details("MD Zakir Hossain");
// echo $zakir_object->abstractMechod();

// echo "<br>";

// $belal_object = new belal_details("MD Belal Ahmed");
// echo $belal_object->abstractMechod();















//todo: interface

//1>> ইন্টারফেস ক্লাস extends (ইনহেরিট) এবং instantiate করা যায়না বরং (চাইল্ড ক্লাসে) implements করা যায় 
//2>> ইন্টারফেস ক্লাস অন্যান্য ক্লাসের মতই লিখতে হয়,এখানে class শব্দের পরিবর্তে interface শব্দ ব্যবহৃত হয়।
//3>> abstract class আর interface class হুবহু একই শুধু পার্থক্য হচ্ছে এবস্ট্রাক্ট ক্লাসে এবস্ট্রাক্ট মেথড ছাড়াও অন্য মেথড থাকতে পারে এবং এই মেথডের ভিতর কোড থাকতে পারে (সাধারনত এটাকে মেথড বডি বলে) আর ইন্টারফেস ক্লাসে কোন মেথডে বডি থাকতে পারবেনা।
//4>> abstract e method e public, private, protected নিতে পারব but interface er moddhe শুধু public method নিতে হবে
//5>> abstract এর মাধ্যমে multipule class একটা class এর মধ্যে inherit করা সম্ভব না কিন্তু interface দিয়ে multipule class একটি class এর মধ্যে inherit করা সম্ভব






// interface way 1
// 2 টা interface class কে একটা class এর মধ্যে inherit করেছি যা abstract class দিয়ে করা যায় না 
// interface class 1
interface perentClass_1{
  public function nameAge( $name,  $age); 
}

// interface class 2
interface perentClass_2{
  public function addressMobile( $address, $mobile); 
}

class twoClassInherit implements perentClass_1,perentClass_2{
  // interface class 1 code get
  public function nameAge( $name,  $age){
    echo "$name" ."$age";
  }

  // interface class 2 code get
  public function addressMobile( $address,  $mobile){
    echo "$address" ."$mobile";
  }
}

// object for zakir
$zakir_object = new twoClassInherit();
$zakir_object->nameAge("MD Zakir Hossain",25);
$zakir_object->addressMobile("Monohorpur","01759999030");

echo "<br>";

// object for belal
$belal_object = new twoClassInherit();
$belal_object->nameAge("MD Belal Ahmed",30);
$belal_object->addressMobile("Kishoreganj","01686247215");












//todo: traits
/*
// সাধারণত PHP কে বলা হয় Single Inheritance Language অর্থাৎ, PHP Language টি Multiple Inheritance সাপোর্ট করেনা। 
	আর Trait হচ্ছে PHP OOP তে Single Inheritance এর সীমাবদ্ধতা দূর করার এবং Multiple Inheritance ব্যবহার করার একটি নতুন concept.
// কিন্তু একাধিক trait এর property এবং Method গুলোকে একটি single class এর মধ্যে ব্যবহার করা যায়।
*/

//traits এর কাজ হলো সবার বাড়ি বাড়ি গিয়ে ভিজিট করা

trait perentClass_1{
  public function my_name(){
      echo "My name is MD Zakir Hossain";
  }

}

class get{
  use perentClass_1; //perentClass_1 er joto code ache sob code ekhane cole eseche 
}


trait perentClass_2{
  public function his_name(){
      echo "His name is Belal Ahmed";
  }

}

class getToiceClass{ //2ta class কে একসাথে করেছি
  use perentClass_1;
  use perentClass_2;
}

$me_object = new get();
$me_object ->my_name();

echo "<br>";

$he_object = new getToiceClass();
$he_object ->his_name();

?>
