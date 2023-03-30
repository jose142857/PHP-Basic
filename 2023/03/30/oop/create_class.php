<?php
class SuperMan{
    public $name;
    public $power;

    function sayHello(){
        echo "Hello I am a superman";
    }
    function whoAmI(){
        return $this->name." ".$this->power;
    }
}
$sp1 = new SuperMan();
$sp1->name = 'van thi';
$sp1->power =90;

echo $sp1->name,"<br>";
echo $sp1->power,"<br>";
echo $sp1->sayHello(),"<br>";
echo $sp1->whoAmI(),"<hr>";


?>