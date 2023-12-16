<?php
// 43
  /*
    Function
    - Introduction And DRY Concept
    - Parameter
    - Argument
  */

  echo "Hello Mr Osama<br>";
  echo "Hello Mr Ahmed<br>";
  echo "Hello Mr Sayed<br>";

  function say_hello($someone) {
    echo "Hello Mr $someone<br>";
  }

  say_hello("Osama");
  say_hello("Ahmed");
  say_hello("Sayed");
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  ?>
  <?php

// 44

  /*
    Function
    - Advanced Examples With Parameters And Arguments
    - Real Life Example
  */

  function say_hello_to($one, $two) {
    echo "Hello $one $two<br>";
  }
  say_hello_to("Osama", "Ahmed");

  function deep_freezer($item) {
    if ($item === "Water") {
      echo "Make Ice <br>";
    } elseif ($item === "Coca Cola") {
      echo "Make It Cold <br>";
    } elseif ($item === "Fruits") {
      echo "Make It Fresh <br>";
    } else {
      echo "Unknown Item";
    }
  }

  deep_freezer("Water");
  deep_freezer("Coca Cola");
  deep_freezer("Fruits");
  deep_freezer("Tv Remote");
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  ?>
  <?php

 // 45

  /*
    Function
    - Optional Return &#038; Null
    - End After Return
  */

  $prizes = ["PC", "Playstation", "XBOX", "Apple TV", "Laptop", "iPad", "iPhone"];

  function get_number($num_one, $num_two) {
    return $num_one + $num_two;
    echo "Will Not Echo Anything"; //ما بشتغل 
  }

  // get_number(2, 1); // 3
  // echo $prizes[3]; // "Apple TV"
  // $prize_number = get_number(2, 1);
  // var_dump($prize_number);
  // echo $prizes[];

  // $prize_number = get_number(2, 1);
  // var_dump($prize_number);

  echo $prizes[get_number(2, 1)];

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
?>
  <?php

// 46

  /*
    Function
    - Default Parameter Value
    --- Using
    --- Test Data
    --- Skip Arguments
  */

  function get_data($country = "Private Country", $name = "Private", $age = "Private", $address = "Private Address") {
    // if ($address === "") {
    //   $address = "Private Address";
    // }
    $line_one = "Your Country Is $country And Your Name Is $name <br>";
    $line_two = "Your Age Is $age And You Live In $address";
    return $line_one . $line_two;
  }

  echo get_data(address: "Cairo");
  echo '<br>';
  echo get_data('','','',"jordan");
  echo '<br>';
  echo get_data();
  echo '<br>';
//   echo get_data("jordan", age:'25' , "aqaba");   //error
  echo get_data("jordan", '25' , address:"aqaba");   
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
?>
<?php

// 47

/*
  Function
  - Variable Arguments List
  --- func_num_args()
  --- func_get_arg(index)
  --- func_get_args()

  Spread Syntax In JS
*/

function calculate(...$nums) {
  // echo "Number Of Arguments: " . func_num_args() . "<br>";
  // echo "Argument Index Number 3 Is " . func_get_arg(3) . "<br>";
  // print_r(func_get_args());
  // $result = 0;
  // foreach (func_get_args() as $arg) :
  //   $result += $arg;
  // endforeach;
  // echo $result;
  echo "Argument Index Number 3 Is " . $nums[3] . "<br>";
  print_r($nums);
  $result = 0;
  foreach ($nums as $num) :
    $result += $num;
  endforeach;
  echo $result;
}

calculate(10, 20, 50, 30, 40, 50, 100);
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
?>
<?php

// 48

/*
  Function
  - Function Advanced Training
  -- Unpacking In Arguments

  Search
  - PHP Variadic Functions
  - Splat Operator
*/

$group_of_skills = ["HTML", "CSS", "JS", "PHP"];

function get_Dataa($name, $country = "Private", ...$skills) {
  echo "Hello $name Your Country Is $country <br>";
  foreach ($skills as $skill) :
    echo "-- $skill <br>";
  endforeach;
}

// get_data("Osama", "Egypt", ...$group_of_skills);
get_Dataa("Osama", "Egypt", ...["HTML", "CSS", "JS", "PHP"]);

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
?>
<?php

// 49

/*
  Function
  - Variable Function
  --- PHP Allow To Use Variable Like Function
  --- When You Append Parentheses () To Variable PHP Will Look For Function With That Name
  - Function Exists
  --- function_exists("Func Name")
*/

function one() {
  return "One From Function";
}

// echo one();

$func1 = "one";

echo $func1();

echo '<br>';

function say_hello_too($someone) {
  return "Hello $someone";
}

$func2 = "say_hello_too";

echo $func2("Osama");

echo '<br>';

function testing() {
  return "Testing From Function";
}

if (function_exists("testing")) {
  echo testing();
} else {
  echo "Function Not Found";
}

echo '<br>';

// echo strlen("Elzero"); // 6

$func3 = "strlen";

echo $func3("Elzero");
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
?>
<?php

// 50

/*
  Function
  - Passing Arguments by Reference
  --- By Default, Function Arguments Are Passed By Value
  --- If The Value Of The Argument Inside The Function Changed It Will Not Change Outside
  --- To Change It Outside Pass The Argument By Reference

  - Return Type Declarations

  Search
  - PHP Strict Mode
*/

function add_five(&$number) {
  $number += 5;
  return $number;
}

$n = 15;

echo add_five($n) . "<br>"; // 20

echo $n; // 20

echo '<br>';

function calculatee($n1, $n2) : int {
  return $n1 + $n2;
}

echo calculatee(10.5, 9.5);

echo '<br>';

echo gettype(calculatee(10.5, 9.5)); // Integer
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


?>
<?php
//51
/*
  Function
  - Anonymous Function
  --- When We Create A Function We Give It A Name So We Can Call It Later With That Name
  --- Sometimes We Need To Create A Function For Specific Task <= This Is Not Against DRY

  - Variable Inherit From Parent Scope
  - Variable Inherit By Reference From Parent Scope
  - Anonymous Function Can Be Passed To A Function
  - Anonymous Function Can Be Return From A Function

  Search
  - Closure
*/

// Normal Function With Parameter

function say_hello_tu($someone) {
  return "Hello $someone";
}

echo say_hello_tu("Osama");

echo '<br>#########<br>';

// Anonymous Function In Variable

$say_hello = function() {
  return "Hello";
};

echo $say_hello();

echo '<br>#########<br>';

// Anonymous Function With Parameter In Variable

$say_hola = function($someone) {
  return "Hola $someone";
};
// $say_hola = fn ($someone) => "Hola $someone"; // arrow function


echo $say_hola("Osama");

echo '<br>#########<br>';

// Inherit Variable From Parent Scope

$msg = "Hi";

$say_hi = function($someone) use ($msg) {
  return "$msg $someone";
};
// $say_hi = fn($someone) =>"$msg $someone"; // arrow function


echo $say_hi("Osama");

echo '<br>#########<br>';

// Pass Anonymous Function To Function => array_map

$nums = [10, 20, 30, 40, 50];

function add_fiive($item) {
  return $item + 5;
}

$nums_after_adding_five = array_map("add_fiive", $nums);

echo '<pre>';
print_r($nums_after_adding_five);
echo '</pre>';

$nums_after_adding_ten = array_map(function($item) { return $item + 10; }, $nums);
// $nums_after_adding_ten = array_map(fn($item)=>  $item + 10, $nums); //arrow function

echo '<pre>';
print_r($nums_after_adding_ten);

//-----------------------------------
$numss = [10, 20, 30, 40, 50];
foreach ($numss as $key => $value):

    $numss[$key] = $value+=5;
   
endforeach;
 print_r($numss);

echo '</pre>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
?>
<?php

// 52

/*
  Function
  - Arrow Function
  --- Short Syntax For Anonymous Function
  --- Automatic Use Variables From Parent Scope

  - Syntax
  --- Function Replaces With fn
  --- No Need For Curly Braces
  --- Return Is Omitted
*/

// Arrow Function In Variable

$say_hello = fn() => "Hello";

echo $say_hello();

echo '<br>#########<br>';

// Arrow Function With Parameter In Variable

$say_hola = fn($someone) => "Hola $someone";

echo $say_hola("Osama");

echo '<br>#########<br>';

// Arrow Inherit Variable From Parent Scope Is Automatic

$msg = "Hi";

$say_hi = fn($someone) => "$msg $someone";

echo $say_hi("Osama");

echo '<br>#########<br>';

// Pass Arrow Function To Function => array_map

$nums = [10, 20, 30, 40, 50];

$nums_after_adding_ten = array_map(fn($item) => $item + 10, $nums);

echo '<pre>';
print_r($nums_after_adding_ten);
echo '</pre>';
?>

<?php
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo "==================================";
echo '<br>';
//  ------------------------------ challenge (43-52) ------------------------------  //

// 1

function greeting($name , $gender=""){
    if ($gender === "Male"){
        echo "Hello Mr $name";
        echo '<br>';

    }elseif($gender === "Female"){
        echo "Hello Miss $name";
        echo '<br>';


    }else {
        echo "Hello $name";
        echo '<br>';


    }
};
// Needed Output
echo greeting("Osama", "Male"); // Hello Mr Osama
echo greeting("Eman", "Female"); // Hello Miss Eman
echo greeting("Sameh"); // Hello Sameh
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo "==================================";
echo '<br>';
// 2
function get_arguments(...$words)
{
foreach($words as $value):

    echo "$value ";

endforeach;
echo '<br>';

}
echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo get_arguments("I", "Love", "PHP"); // I Love PHP
//-------------------------------------
echo '<br>';echo '<br>';echo '<br>';
function get_argumentss(...$words)
{
  $arr =func_get_args();
foreach($arr as $arg):

    echo "$arg ";

endforeach;
echo '<br>';

}
echo get_argumentss("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo get_argumentss("I", "Love", "PHP"); // I Love PHP
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo "==================================";
echo '<br>';

// 3

function sum_all(...$num){

    $result = 0;
    foreach($num as $value):
            if($value===5):
                continue;
            elseif($value===10):
                $value=20;
            endif;
    $result+=$value;
    endforeach;
    echo $result;
    echo '<br>';
}
echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo sum_all(5, 10, 5, 10); // 40
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo "==================================";
echo '<br>';

// 4
function multiply(...$num){

    $result = 1;
    foreach($num as $value):
            if(gettype($value) === gettype(5.5)):
                $value=(int)$value;
            elseif(gettype($value) === gettype("a")):
                continue;
            endif;
    $result*=$value;
    endforeach;
    echo $result;
    echo '<br>';
}
// Needed Output
echo multiply(10, 20); // 200
echo multiply("A", 10, 30); // 300
echo multiply(100.5, 10, "B"); // 1000
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo "==================================";
echo '<br>';

// 5

function check_status($a, $b, $c){
    $name="";
    $age=0;
    $v= true ;
if (gettype($a)===gettype("a")){
    $name=$a;
}elseif(gettype($a)===gettype(1)){
    $age=$a;
}
elseif(gettype($a)===gettype(true)){
    $v=$a;
}
if(gettype($b)===gettype(1)){
    $age=$b;
}
elseif(gettype($b)===gettype("a")){
    $name=$b;
}
elseif(gettype($b)===gettype(true)){
    $v=$b;
}
if(gettype($c)===gettype(true)){
    $v=$c;
}
elseif(gettype($c)===gettype("a")){
    $name=$c;
}
elseif(gettype($c)===gettype(1)){
    $age=$c;
}
echo "Hello $name, Your Age Is $age, You Are $v Available For Hire";
echo '<br>';

}
echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo "==================================";
echo '<br>';


// 6
function ccalculate($num1 , $num2 , $op="default"){

    if ($op == "a" || $op == "add"){
echo $num1 + $num2;
echo '<br>';
    }
    elseif ($op == "s" || $op == "subtract"){
echo $num1 - $num2;
echo '<br>';
    }
    elseif ($op == "m" || $op == "multiply"){
echo $num1 * $num2;
echo '<br>';
    }
    elseif ($op =="default" ){
echo $num1 + $num2;
echo '<br>';
    }else{
        echo "error <br>";
    }
}
// Needed Output
echo ccalculate(10, 20); // 30
echo ccalculate(10, 20, "a"); // 30
echo ccalculate(10, 20, "s"); // -10
echo ccalculate(10, 20, "subtract"); // -10
echo ccalculate(10, 20, "multiply"); // 200
echo ccalculate(10, 20, "mm"); // error
echo ccalculate(10, 20, "m"); // 200
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo "==================================";
echo '<br>';

// 7
function calculat(int $num_one, int $num_two): Float {
    echo '<br>';

    return $num_one + $num_two;
  }
  
  echo calculat(20, 10); // 30
  echo gettype(calculat(20, 10)); // Double
  echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo "==================================";
echo '<br>';
 
// 8
$message = "Hello";
$Hello = fn($d)=>  $message . " " . $d ;
// Write Your Code Here

echo $Hello("Osama"); // Hello Osama
echo '<br>';
echo '<br>';
echo '<br>';
echo "==================================";
echo '<br>';
 
// 9

$greet = function ($msg){
    return  "Greetings";
};
// Needed Output
echo $greet("Osama"); // Greetings
echo '<br>';
$greet = fn ($msg) =>"Greetings";
// Needed Output
echo $greet("Osama"); // Greetings
?>