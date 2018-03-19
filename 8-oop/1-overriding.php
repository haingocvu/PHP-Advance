<?php
//Overriding (ghi đè)

class A{
    static function getA(){
        return "a";
    }
}
class B extends A{
    static function getA(){
        return 'b';
    }
}
$a = new A;
echo $a->getA();

$b = new B;
echo $b->getA();
?>