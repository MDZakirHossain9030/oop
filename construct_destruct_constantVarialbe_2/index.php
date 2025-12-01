<?PHP

// todo: constructor & Destructor


// অন্যান্য function এর মত Constructor এবং Destructor আলাদাভাবে call করতে হয়না 

// construct অথবা destruct function  ব্যবহার করলে object এর মধ্যে echo ব্যবহার করা যাবে না 
// construct অথবা destruct function  এর মধ্যে echo করতে হয় 
// construct অথবা destruct function  এর মধ্যে $this keyword ব্যবহার করলে আরেকটা সাধারণ function নিয়ে সেটার মধ্যে return করতে হবে 




// way 1
// class man{
//     public $name;
//     public $age;
//     public $address;

//     public function __construct($fname, $age, $address){
//         echo  "$fname $age $address";
//     }
// }
//new man("MD Zakir Hossain", 25, "Monohorpur");






 // way 2
//  class man{
//     public $name;
//     public $age;
//     public $address;

//     function __construct($name, $age){
//         $this->name = $name;
//         $this->age = $age;
//     }

//     function myFunction(){
//         return "$this->name  $this->age";
//     }
//  }

//  $zakir = new man("MD Zakir Hossain", 25);
//  echo $zakir->myFunction();







 // way 3 //destruct ache
 class man{
    public $name;
    public $age;
    public $address;

    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    function __destruct(){
        echo $this->name ."<br>" .$this->age;
    
    }
 }

 $zakir = new man("MD Zakir Hossain", 25);








// constant variable & abstruct


// constant variable mane unchange

// echo "<h2> **CONSTANT VARIABLES** </h2>";
//  define("NAME","This is a constant  Variables way 1");
//   echo NAME ."<br> <br> ";

//   define("ZAKIR","This is a constant  Variables way 2");
//   $show = constant (name:"ZAKIR");
//   echo $show ."<br> <br> ";

//   define("BELAL","This is a constant  Variables way 3");
//     $constant = "constant";
//     echo $constant("BELAL") ."<br> <br> ";



// way 1 class er modde access korechi
// class er modde constand access korte caile object create korte hobe na


class man{
    const ZAKIR = "I am Zakir Hossain";
}
echo man::ZAKIR; //:: scope regulation operetor



// way 2 method er modde access korte caile self keyword use korte hobe
// method er modde constand access korte caile object create korte hobe
class man1{
    const KAMAL = "I live in Dhaka";

    function hossain(){
        return self :: KAMAL;
    }
}

$zakir = new man1();
echo $zakir->hossain();

?>


