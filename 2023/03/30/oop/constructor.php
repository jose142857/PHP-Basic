<?php
class SuperMan{
    public $name;
    public $power;

    function SuperMan($n,$p){
        $this->name = $n;
        $this->power = $p;
    }
}

$sp = new SuperMan('vanthi',90);
echo $sp->name;
echo "<hr>";
echo $sp->power;




?>