
<?php
// * OOP CLASS

// TODO:  public, private এবং protected প্রোপার্টি - প্রোপার্টিসমূহ public, private অথবা protected হতে পারে। public অর্থ প্রোপার্টিসমূহকে যেকোন স্থান থেকে এক্সেস করা যাবে, private অর্থ শুধুমাত্র সংশ্লিষ্ট ক্লাস থেকে এক্সেস করা যাবে এবং protected অর্থ হলো সংশ্লিষ্ট ক্লাস এবং এর চাইল্ড ক্লাস থেকেও এক্সেস করা যাবে।


//1>> class = class নামে একটা বক্স, বক্সের মধ্যে নিচের গুলো থাকবে
//2>> object = একজন মানুষকে আমরা object ধরতে পারি কারন তার হাত, পা, মাথা অনেককিছু আছে
//3>>  method = object এর মধ্যে function থাকলে তাকে method বলা হয় 
//4>> properties = object এর key & value কে propertyes বলা হয়



// ? OOP এর গল্প
// class, abstraction, Encapsulation, Inheritance, Polymorphism = class থেকে abstraction কে গুপনে এনে Encapsulation খাওয়াই দিছি, বাবার কাছ থেকে inharitance করে এনে কারন তার Polymorphism হয়ছে




// way 1 
class Man{
    public $name = "MD Zakir Hossain"; //এই প্রোপারটির value এখানে সেট করা আছে
    public $age; //এই প্রোপারটির value object এর মধ্যে সেট করা



    function myFunction(){
     return   'I am a student';
    }



}

$zakir = new Man();
echo $zakir->name; //class এর মধ্যে সেট করা আছে

$zakir->age=25; //এখানে থেকে পাঠানো হয়েছে
echo $zakir->age;

echo $zakir->myFunction(); //method এর value class এর মধ্যে সেট করা আছে









//  way 2
class Man{
    public $name;
    public $age;
    public $address;



    // function 1 এর মধ্যে প্যারামিটার দেওয়া আছে 
	// $this এর ব্যবহার = class এর কোনো property কিংবা method কে সেই class এর ভেতর বা অন্য কোনো class এর ভেতর ব্যবহার করতে চাইলে $this keyword ব্যব্যহার করতে হয় 
    function myFunction1(){
        $this->name = "MD Zakir Hossain";
     return $this->name; 
    }


    // function 2 এর মধ্যে প্যারামিটার দেওয়া নাই, এটার প্যারামিটার object থেকে পাঠানো হয়েছে 
    function myFunction2($fname){
        $this->name = $fname;
     return $this->name; 
    }

}

$object = new Man();
echo $object->myFunction1(); //function 1

echo "<br>";

echo $object->myFunction2("I live in Monohorpur"); //function 2









//  way 3

// class Man{
//     public $name;
//     public $age;
//     public $address;


//     function myFunction($fname, $age, $address){
//         $this->name = $fname;
//         $this->age = $age;
//         $this->address = $address;
//      return "Name : " .$this->name ." Age : " .$this->age ." Address : " .$this->address; 
//     }


// }

// $zakir = new Man();
// echo $zakir->myFunction("MD Zakir Hossain", 30, "Monohorput");

// echo "<br>";

// $kamal = new Man();
// echo $zakir->myFunction("MD Kamal Hossain", 40, "Koromnogor");


