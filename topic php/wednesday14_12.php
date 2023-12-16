<?php

echo "mohammad is 24 year old and has 20 jod in this hand";
echo "<br>";

class userinfo {
    public $name;
    public $age;
    public $mony;
    private $moony;

    function __construct($n,$a,$m){

    $this->name=$n;
    $this->agee=$a;
    $this->mony=$m;
    // $this->mony=$a;
   echo ($this->name . " is " . $this->age . " year old and has " . $this->mony . " jod in this hand." . "<br>");

    }

function setdata($name,$age,$mony){
    $this->name=$name;
    $this->age=$age;
    $this->mony=$mony; 
}
function getdata(){
    echo ($this->name . " is " . $this->age . " year old and has " . $this->mony . " jod in this hand." . "<br>");
}

}
$mohammad = new userinfo("mohammad",24,20);
$ahmed = new userinfo("ahmed",25,30);
$asem = new userinfo("asem",26,40);
$abed = new userinfo("abed",28,200);
$abed -> setdata("kkkkkkkkk",230,300);
$abed -> getdata();
echo "<pre>";
print_r($abed);
print_r($ahmed);
print_r($mohammad);
echo "</pre>";
?>
<?php

echo "<hr>";
echo "metod object";
echo "<hr>";
?>
<?php
echo "<pre>";
print_r(get_declared_interfaces()[0]);
echo "</pre>";
echo "<hr>";

echo "<pre>";
print_r(get_class($mohammad));
echo "</pre>";
echo "<hr>";

echo "<pre>";
print_r(get_class_methods($mohammad));
echo "</pre>";
echo "<hr>";

echo "<pre>";
print_r(get_class_methods($mohammad));
echo "</pre>";
echo "<hr>";

echo "<pre>";
var_dump(get_mangled_object_vars($mohammad));
echo "</pre>";
echo "<hr>";
?>
<?php

echo "<pre>";
class A
{
    public $public = 1;
    
    protected $protected = 2;
    
    private $private = 3;
}

class B extends A
{
    private $private = 4;
}

$object = new B;
$object->dynamic = 5;
$object->{'6'} = 6;

var_dump(get_mangled_object_vars($object));

class AO extends ArrayObject
{
    private $private = 1;
}

$arrayObject = new AO(['x' => 'y']);
$arrayObject->dynamic = 2;

var_dump(get_mangled_object_vars($arrayObject));
echo "</pre>";
?>
<?php 

echo ' &nbsp; &nbsp; ';