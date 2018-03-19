<?php

// class UserFactory
// {
//     public static function Instance()
//     {
//         static $inst = null;
//         if ($inst === null) {
//             $inst = new UserFactory();
//         }
//         return $inst;
//     }

// }

// $a = UserFactory::Instance();
// $b = UserFactory::Instance();
// var_dump($a);
// var_dump($b);

// $c = new UserFactory();
// var_dump($c);

// if($a===$b) echo "bằng nhau";
// else echo "Khác nhau";

// if($a===$c) echo "bằng nhau";
// else echo "Khác nhau";


// class A{
//     public static $a;
//     function __construct(){
//         if(!self::$a){
//             self::$a = $this;
//             echo "Recent create";
//         }
//         else{
//             echo "Created"   ; 
//         }
//         return self::$a;
//     }
// }

// $a = new A; //Recent create
// $b = new A; //Created
// $c = new A; //Created



// class A{

//     private static $class;

//     private function __construct(){
//         echo "class ".__METHOD__.' vua khoi tao'; //get_class()
//     }
//     static function getName(){
//         if(!self::$class){
//             echo "Vua setup";
//             self::$class = new A;

//         }
//         else{
//             echo "da setup";
//         }
//         return self::$class;
//     }
// }

// $a = A::getName();
// $a->name = "Huong";
// echo $a->name;

// unset($a);

// //var_dump($a);

// $b = A::getName();
// echo $b->name;

?>