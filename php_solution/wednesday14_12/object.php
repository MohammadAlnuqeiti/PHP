<?php

class onee {
   public $str;
    function printt($str){
         $this->$str=$str;
        echo $this->$str;
    }
}
$one= new onee();

$one->printt("MyClass class has initialized!");


// ----------------- 2 -------------------- //
echo "<hr>";
class two {
    public $str1;
    function printt(){
        
        echo "Hello All, I am" . $this->str1;
    }
}
$two= new two();
$two->str1="Scott";
$two->printt();


// ----------------- 3 ------------------- //
echo "<hr>";

class three {
    public $num;
    public $num1=1;
    function __construct($num,$num1){
    
        for ($i=1;$i<=$num;$i++){
        $num1*=$i;
        }
        echo "the factorial of ". $num ." = ". $num1;
    }
}
$three= new three(5,1);

// ------------------------------------- //
echo "<hr>";

// class sortt {

//     $aray=array();
//     function sort(){
//         // $this -> arr = $arr;
//         sort($this -> aray);
//         print_r($this -> aray);
//     }
// }

// $array1 = new sortt();
// $array1 -> aray = array(11, -2, 4, 35, 0, 8, -9);
// $array1 -> sort();

class sortt {

  $sort2;  
    function __construct(array $sort2){

        $this -> sort2 = $sort2;
      
    }
    function printt(){
        $this->sort2=$sort2;
     sort ($sort2);
     print_r($sort2);
        
      
    }
} 

$array1 = new sortt(array(11, -2, 4, 35, 0, 8, -9));

// $array1 -> sort2=;
$array1 -> printt();