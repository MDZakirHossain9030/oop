<?php

/*
1>> যদি ১০০টি ক্লাস লাগে তাহলে সবগুলি এভাবে require_once দিয়ে যোগ করবেন?
    =এই বিরক্তিকর কাজ থেকে মুক্তির জন্য এবার ক্লাস অটোলোড ফাংশনটির কাজ শিখবেন
*/





// joto file hok na keno evabe autoload kora jabe 

spl_autoload_register(function($class){
    require $class. ".php";
});


// first.php & second.php এর object এখানে তৈরী করেছি
$first = new first();

echo "<br>";

$first = new second();


