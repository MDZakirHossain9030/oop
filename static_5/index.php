<?php

// static 
/*
** static এর কাজ হলো কোনো object create না করেই সরাসরি ক্লাস থেকে কোনো মেথড (method) বা ভেরিয়েবল (variable) অ্যাক্সেস করা/ 
এর ফলে, মেমোরি সাশ্রয় হয় এবং ক্লাস-লেভেলের এমন ফাংশনালিটি তৈরি করা যায় যা নির্দিষ্ট কোনো অবজেক্টের উপর নির্ভরশীল নয়, 
বরং পুরো ক্লাসটির জন্য প্রযোজ্য (যেমন ইউটিলিটি ফাংশন বা কনস্ট্যান্ট)। 
*/


// static property = way 1
// class perent{
//     static public $pname = "Book";
// }
// echo perent::$pname;





// static property = way 2
// class perent{
//     static public $pname = "Book";

//     public function info(){
//         return self::$pname;//static keyword use korle method er modde this keyword na diye self keyword use korte hobe
//     }
// }
// $show = new perent();
// echo $show->info();






// static method = way 1
// class perent{
//     public static function wellcome(){
//         return  "Well come to Bangladesh";
//     }
// }
// echo perent::wellcome();






// static method = way 2
// class perent{
//     static public function wellcome(){
//         return "Wellcome to Bangladesh";
//     }
//     public function info(){
//         self::wellcome();
//         // perent::wellcome(); //ei line ta use korleO hobe
//     }
// }
// $show = new perent();
// echo $show->wellcome();








// static method = way 3
// class perent{
//     static public function wellcome(){
//         echo "Wellcome to Bangladesh";
//     }
// }

// class get{       //ekhane extends perent dileO hobe inheritance er moto
//     public function info(){      //eta always public hote hobe private or protected hole hobe na
//         perent::wellcome();
//     }
// }
// $show = new get();
// $show->info();


?>
