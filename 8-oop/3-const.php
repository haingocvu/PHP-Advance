<?php

class Student{
    public $name;
    public $age;

    protected const AGE = 18;

    function setAge($age){
        return [self::AGE => $age];
    }
    function setName($name){
        if($this->age < self::AGE){
            echo  "You are not yet enough ".$this::AGE." age";
        }
        else{
            $this->name = $name;
        }
    }
    
    public static $id = 789;

    public function getId(){
        //return Student::$id; //or
        return self::$id;
    }
}
class stu extends Student{
    static function getAge(){
        return self::AGE;
    }
}
$m = new Student;
echo $m->setName('huong');
die;
/**
 * self vs $this
 * self:
 *  - current class
 *  - access static members
 *  - call with $
 * $this
 *  - current obj
 *  - access non static members
 *  - call without $
 * 
 */



$hs = new Student;
$hs->setAge(9);
$hs->setName('Huong');
echo $hs->name;
echo "<br>";
echo $hs::AGE;
echo "<br>";
echo Student::AGE;

echo '<br>';
echo $hs->getId();
?>