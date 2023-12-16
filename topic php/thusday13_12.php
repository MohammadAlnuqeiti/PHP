<?php 

class product 
{
    public $name;
    public $price;
    public $photo;

    function print(){
        echo "<div>";
        echo '<h3>'. $this->name .'</h3>' .'<br>';
        echo "<img src='{$this -> photo}'style=\"width:200px\">" .'<br>';
        echo '<p style="font-weight:bold">'."the price is \$".$this->price .'</p>'. '<br>';
        echo "</div>";
        echo "<hr>";

    }
}
$product1 = new product;
$product1 -> name = 'laptop';
$product1 -> photo = './image/labtop.jpg';
$product1 -> price = 380;
$product1 ->  print() ;
$product2 = new product;
$product2 -> name = 'phone';
$product2 -> photo = './image/phone.jpg';
$product2 -> price = 1000;
$product2 ->  print() ;
?>

<?php 
class Human {
    // Properties
    public $age=20;
    private $name;
  public function newAge(){
        $this->age = $this->age + 5;
        echo "the object has ".$this->age."years old"."<br>";
  }

  function set_namee($name) {
    $this->name = $name;
  }
  function get_namee() {
    return $this->name;
  }
}

$h1=new Human();
$h1->age =22;
echo $h1->age ."<br>";
$h1->newAge();

$h1->set_namee("ahmad");
echo "Name: " . $h1->get_namee()."<br>";


$h2=new Human();
$h2->age =30;
// echo $h2->age."<br>";
$h2->newAge();

$h3=new Human();
$h3->set_namee("Asem");
echo "Name: " . $h3->get_namee()."<br>";
echo "<hr>";

?>
<?php

class student {
    // Properties
    public $name;
    // public $age;
    public $gender;
  
    // Methods
  
      function __construct($gender, $name='zzz'){
          $this->name =$name;
          $this->gender =$gender;

      }
  
//     function set_name($name) {
//       $this->name = $name;
//     }
//     function get_name() {
//       return $this->name;
//     }
  
//     function set_age($age) {
//       $this->age = $age;
//     }
//     function get_age() {
//       return $this->age;
//   }


  }
  
$std1 = new student('talab');
// $std2 = new student();
// $std3= new student();

// echo '<pre>';
// print_r($std1);
// echo '</pre>';
  
// $std1->set_name('Obaida');
// $std2->set_name('Talab');
// $std3->set_name('Amro');

// echo '<pre>';
// print_r($std1);
// echo '</pre>';

// $std1->set_age(20);
// $std2->set_age(19);
// $std3->set_age(21);

// echo '<pre>';
// print_r($std1);
// echo '</pre>';
  
// echo $std1->get_name() . '<br>';
// echo $std2->get_name() . '<br>';
// echo $std3->get_name() . '<br>';

// echo $std1->get_age() . '<br>';
// echo $std2->get_age() . '<br>';
// echo $std3->get_age() . '<br>';



// function __construct($name, $gender)


  $std4= new student( 'Asem' , 'Male');
  echo '<pre>';

  print_r($std4);
  echo '</pre>';
  echo "<hr>";

  ?>
<?php 


 $counting = ["B", "A", "A", "B", "B", "B", "C", "A", "C", "A", "B"];
$key=[];
$value=[];
$nums=0;
echo '<pre>';
print_r(array_count_values($counting));
echo '</pre>';
for ($i = 0 ; $i<count($counting) ; $i++ ){
    for ($x=0;$x<count($counting);$x++){
        if( $counting[$x]===$counting[$i]){
            $nums+=1;
        }    
       
    } 
    array_push( $key , $counting[$i] );
    array_push( $value , $nums );
    $nums=0;
    
};
echo '<pre>';
print_r($value);
print_r(array_combine($key,$value));
echo '</pre>';




?>
<?php 
// array_chunk.(array,length,preserve)
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


$array1 = ["one"=>"group1","two"=>"group2","three"=>"group3","four"=>"group4","five"=>"group5","sex"=>"group6"];
echo "<hr>";
echo '<pre>';
print_r (array_chunk($array1,2));
echo '</pre>';

// array_chunk.

echo "<hr>";
echo '<pre>';
print_r (array_chunk($array1,2,true));
echo '</pre>';

//array_change_key_case.(array,case)

echo "<hr>";
echo '<pre>';
print_r (array_change_key_case($array1));
echo '</pre>';

//array_change_key_case.

echo "<hr>";
echo '<pre>';
print_r (array_change_key_case($array1,CASE_UPPER));
echo '</pre>';

// array_combine.(array of key,array of value)

$key = ["one","two","three","four","five","sex"];
$value = ["group1","group2","group3","group4","group5","group6",];
echo "<hr>";
echo '<pre>';
print_r (array_combine($key,$value));
echo '</pre>';

// array_reverse.(array,preverse)

$array_reverse = ["one"=>"group1","two"=>"group2","three"=>"group3","four"=>"group4","five"=>"group5","sex"=>"group6",];
echo "<hr>";
echo '<pre>';
print_r (array_reverse($array_reverse));
echo '</pre>';

// array_flip.(array,preverse)

$array_flip = ["one"=>"group1","two"=>"group2","three"=>"group3","four"=>"group4","five"=>"group5","sex"=>"group6",];
echo "<hr>";
echo '<pre>';
print_r (array_flip($array_flip));
echo '</pre>';

// count.(array,mode)

$array_count= ["one"=>"group1","two"=>"group2","three"=>"group3","four"=>"group4","five"=>"group5","group6"=>[1,2,3]];
echo "<hr>";
echo '<pre>';
echo (count($array_count));
echo '</pre>';
echo '<pre>';
echo (count($array_count,1));
echo '</pre>';

// in_array.(search,array,type)

$in_array= ["one","two","three","four","five","sex","7"];
echo "<hr>";
echo '<pre>';
var_dump (in_array("one",$in_array));
echo '</pre>';
echo '<pre>';
var_dump (in_array(7,$in_array));
echo '</pre>';
echo '<pre>';
var_dump (in_array(7,$in_array,true));
echo '</pre>';

// array_key_exists.(key,array)

$array_key_exists = ["one"=>"group1","two"=>"group2","three"=>"group3","four"=>"group4","five"=>"group5","sex"=>"group6",];
echo "<hr>";
echo '<pre>';
var_dump (array_key_exists("one",$array_key_exists));
echo '</pre>';
echo "<hr>";

$array =
[
    "A"=>"ahmed",
    10=>"mohammad",
    "alaa",
    "group1"=>["asem","maslamani","ruba","tabarak"],
    true=>"mona",
    8 => "abed",
    "asad"

];
echo '<pre>';
print_r($array);
echo '</pre>';
echo "<hr>";

?>
