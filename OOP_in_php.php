<?php


class first
{
    public static function firstFunction()
    {
        echo "Hello world from first class";
    }
}

class second extends first
{
    public static function secondFunction()
    {
        parent::firstFunction();
    }
    public static function secondFunction2()
    {
        echo "Hello world";   
    }
}

$a=new second();
$a->secondFunction();




/*
class Person {
    public $first_name;
    public $last_name;
    public function getFullName(){
        return $this->first_name." ".$this->last_name;
    }
}

$a=new Person();
$a->first_name="Jamshid";
$a->last_name="Yuldoshev";
echo $a->getFullName();
*/

/*
class FirstClass{
    public function FunctionName1()
    {
       echo "I am Jamshid";
    }
}

class SecondClass extends FirstClass
{
    public function FunctionName2()
    {
       $this->FunctionName1();
    }
}

class ThirdClass extends SecondClass
{
    public function FunctionName3()
    {
       $this->FunctionName2();
    }
}
$a =new ThirdClass();
$a->FunctionName3();*/

/*
class Second{
    protected function func2(){
        echo "Marhaba ikinci class dan yaziyorum";
    } 
}
class  Myclass extends Second
{
    protected function func($name){
        echo "I am $name";
    }
    public function write(){
        $this->func2();
    }
}
$a = new Myclass();
$a->write();
*/
?>