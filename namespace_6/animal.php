<?php



/*
নেমস্পেস (Namespace) : নেমস্পেস মূলত ব্যবহার হয় ডেটা এনক্যাপসুলেট করার জন্য। একটা স্ক্রিপ্টে ক্লাস, ফাংশন,
 ভেরিয়েবল ইত্যাদির নাম যদি একই হয় (মানে একই নামের একাধিক মেথড) তখন এই কোড এক্সিকিউট করার সাথে সাথেই এরর দেখাবে অথবা ঠিকমত কাজ করবেনা। 
 এখন ভাবতে পারেন যে একই স্ক্রিপ্টে কেন কেউ একই নামের ক্লাস/মেথড ইত্যাদি ব্যবহার করবে?
 আসলে এরকম কেউ করেনা, তবে এমন হয়ে যেতে পারে। ধরুন আপনি একটা datetime নামে ক্লাস তৈরী করেছেন এবং আপনার সাইটে একটা 3rd party লাইব্রেরি ব্যবহার করেছেন ধরুন একটা ফ্রেমওয়ার্ক।
 এখন এই ফ্রেমওয়ার্কেও এই নামে যদি কোন ক্লাস থাকে তাহলে সমস্যার শুরু।

নেমস্পেস ধরে যখন কল করবেন তখন পিএইচপি ঠিক বুঝে নেবে যে এখন কোন্ কোডকে এক্সিকিউট করাতে হবে। যেমন class.Webcoachbd.php নামে ফাইল তৈরী করে সেখানে নিচের কোড লিখুন।
*/



namespace Animals; //ei lineta sobar upore thake// ekhane dile ar nice dite hobe na


//all file code ekhane include or require kore niye astechi ekhane 
include_once "cat.php";
include_once "dog.php";



$cat = new Cat();
echo $cat->greet();

echo "<br>";

$cat = new Dog();  //dog.php file এর মধ্যে যদি namespace না দেয় তাহলে এখানে  $cat = new \Dog(); Dog এর আগে backspace দিতে হবে
echo $cat->greet();


//builtin function er samne o \ dite hobe na hole kaj korbe na 

?>