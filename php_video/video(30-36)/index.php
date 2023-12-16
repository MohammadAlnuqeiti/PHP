<?php
//  30
  /*
    Control Structure
    - If, Elseif, Else <= Basics

    Syntax
    if (Condition) {
      // If Condition Is True <= Run Me
    } else {
      // If Condition Is False <= Run Me
    }
  */

  if (10 > 10) {

    echo "First Condition";

  } elseif (10 > 10) {

    echo "Second Condition";

  } else {

    echo "No";

  }
  ?>
  <?php

  // 31
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

/*
  Control Structure
  - If, Elseif, Else <= Real Life Examples

  3% To 30%
*/

// If

$page = "About";

if ($page == "About") {

  echo "This Is The Page";

}

echo '<br>';

// If, Else

$title = "";

if ($title == "") {

  echo "Unknown Page";

} else {

  echo $title;

}

echo '<br>';

// If, Elseif, Else

$lang = "Elzero";

if ($lang == "Arabic") {

  echo 'مرحبا';

} elseif ($lang == "English") {

  echo 'Hello';

} elseif ($lang == "Spanish") {

  echo 'Hola';

} else {

  echo 'Unknown Language';

}
?>
<?php

//  32


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
/*
  Control Structure
  - If, Elseif, Else <= Advanced Practice

  30% To 60%
*/

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  if ($_POST['lang'] == 'ar') {

    header("Location: ar.php");

    exit();

  } elseif ($_POST['lang'] == 'en') {

    echo "hello"." ".$_POST['username']." "."your language is inglish";



  }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Support</title>
</head>
<body>
  <form action="" method="POST">
    <input type="text" name="username">
    <select name="lang">
      <option value="ar">Arabic</option>
      <option value="en">English</option>
      <option value="es">Spanish</option>
    </select>
    <input type="submit" value="Go">
  </form>
</body>
</html>

<?php
// 33
  /*
    Control Structure
    - If, Elseif, Else <= Alternate Syntax

    60% To 80%
  */

  if (10 > 5) {

    echo "Good";

  } else {

    echo "Bad";

  }

  echo "<br>";

  if (10 > 10) echo "Good";
  else echo "Bad";

  echo "<br>";

  if (10 > 10)
    echo "Good";
  else
    echo "Bad";

  echo "<br>";

  if (10 > 10) echo "Good"; else echo "Bad";

?>

<?php if (10 > 5) : ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    Hello Page
  </body>
</html>

<?php endif; ?>

<?php

  if (10 > 10) :

    echo "First";

  elseif (10 > 10) :

    echo "Second";

  else:

    echo "Last";

  endif;

?>
<?php
// 34
/*
  Control Structure
  - Nested If Condition And Training
*/
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$name = "mohammad";
$is_student = true;
$is_orphan = true;
$country = "jordan";
$country_discount = 50;
$price = 100;
$student_discount = 10;
$orphan_discount = 15;


if ($country == "jordan"){
      if($is_student == true){
            if ($is_orphan == true){
              echo "hello $name";
              echo "<br>";
              echo "is discount-country $$country_discount";
              echo "<br>";
              echo "is student-discount $$student_discount";
              echo "<br>";
              echo "is orphan-discount $$orphan_discount";
              echo "<br>";
              echo "total price is $" . $price - $country_discount - $student_discount - $orphan_discount;
              echo "<br>";

            }else{
            echo "hello $name";
            echo "<br>";
            echo "is discount-country $$country_discount";
            echo "<br>";
            echo "is student-discount $$student_discount";
            echo "<br>";
            echo "total price is $" . $price-$country_discount-$student_discount;
            echo "<br>";
            
            }
    }else{
    echo "hello $name";
    echo "<br>";
    echo "is discount-country $$country_discount";
    echo "<br>";
    echo "total price is $" . $price-$country_discount;
    echo "<br>";

      }

}else{
  echo "hello $name";
  echo "<br>";
  echo "No Discount";
  echo "<br>";
  echo "total price is $$price";
  echo "<br>";
}
?>

<?php

// 35
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
  /*
    Control Structure
    - Ternary Operator => Short If
  */

  $a = 10;

  if ($a > 8) {

    echo "Good";

  } else {

    echo "Bad";

  }

  // Condition ? True : False;

  echo $a > 8 ? "Good" : "Bad";

  echo '<br>';

  echo "I Love PHP Because Its A ";

  if ($a > 8) {

    echo "Good";

  } else {

    echo "Bad";

  }

  echo " Language";

  echo '<br>';

  echo "I Love PHP Because Its A " . ($a > 8 ? "Good" : "Bad") . " Language";

  echo '<br>';

  $result = $a > 8 ? "Good" : "Bad";

  echo "I Love PHP Because Its A $result Language";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo 15<20 ? "true" : "false"
  ?>

<?php

// 37  

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
/*
  Control Structure
  - Switch

  Syntax
  switch (expression) {
    Case 1:
      // Code Block 1
      break;
    Case 2:
      // Code Block 2
      break;
    Case 3:
      // Code Block 3
      break;
    Default:
      // Default Code Block
  }

*/

$day = "Thu";

switch($day) {

  case "Sat":
    echo "Hello Today Is $day We Are Open From 10:16";
    break;

  case "Sun":
    echo "Hello Today Is $day We Are Open From 12:18";
    break;

  case "Mon":
  case "Thu":
    echo "Hello Today Is $day We Are Open From 08:12";
    break;

  default:
    echo "Unknown Day";

}
?>

<?php 

// ------------------------  challenge (30-36) ----------------------- //
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "====================================";
echo "<br>";

// 1 
$a = 100;
$b = 200;
$c = 100;


if ($a < $b){
  if ($a === $c){
    if ($a+$c === $b){
      echo "YES";
    }}
  }else {
  echo "NO";
}
echo "<br>";

/*
  Check That:
  Variable "b" Larger Than Variable "a"
  Variable "a" Identical To Variable "c"
  Variable "a" Plus Variable "c" Identical To Variable "b"
*/

// "Yes"
//----------------------------------------------
// 2
// Test Case 1
$a = 100;
$b = 200;
$c = 300;

// A Is Not Larger Than B Or C
if ($a < $b && $a < $c){
  echo "A Is Not Larger Than B and C";
}else{
  echo "A Is  Larger Than B Or C";
}
echo "<br>";
echo "<br>";
echo "<br>";

$admins = ["Osama", "Ahmed", "Sayed"];

// Input Name "Osama"
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    if ($_POST['user'] == "Osama" || $_POST['user'] == "Ahmed" || $_POST['user'] == "Sayed" ){
      echo "The Request Method Is Post And Username Is ". $_POST["user"];
      echo "<br>";
      echo "This Username ". $_POST['user'] ." Is Admin";
    }
    else{
      echo "The Request Method Is Post And Username Is ". $_POST["user"];
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
       
//-----------------------------------------

}
// Needed Output
// "The Request Method Is Post And Username Is Osama"
// "This Username Osama Is Admin"
?>
<form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Send">
</form>

<?php 

echo "<br>";
echo "<br>";
echo "<br>";
   
//-----------------------------------------
//4
$a = 30;
$b = 20;
$c = 10;

echo  ($a + $b === $c) ?  ("A + B = C") : (($a + $c === $b) ?  ("A + C = B") : (($b + $c === $a) ?  ("B + C = A"):  "The End"));
//------------------------------------------
echo "<br>";
echo "<br>";
echo "<br>";
   
//5
$name = "Osama";
$age = 40;
$country = "Egypt";

if ($age > 18) {
  echo "The Age Is Good To Go<br>";
  if (gettype($name) === "string") {
    echo "The Name Is Good To Go<br>";
    if ($country === "Egypt") {
      echo "The Country Is Good To Go<br>";
    }
  }
}
echo "<br>";
echo "<br>";
echo "<br>";

if ($age > 18 && gettype($name) === "string" && $country === "Egypt") {
  echo "The Age Is Good To Go<br>";
  echo "The Name Is Good To Go<br>";
  echo "The Country Is Good To Go<br>";
}

// Needed Output
// "The Age Is Good To Go"
// "The Name Is Good To Go"
// "The Country Is Good To Go"
//-----------------------------------------------

//6 echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$genre = "Hack And Slash";
switch($genre){
  case "RPG":
    echo "I Recommend Ys Games";
    break;
  case "Hack And Slash":
    echo "I Recommend Castlevania Games";
    break;
  case "FPS":
    echo "I Recommend Uncharted Games";
    break;
  case "Platform":
    echo "I Recommend Megaman Games";
    break;
  case "Puzzle":
    echo "I Recommend Megaman Games";
    break;
  
  default:
  echo "I Recommend Shadow Of Mordor And Shadow Of War";

}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
//---------------------------------------------

// 7
$num_one = 23;
$num_two = 5;
$op = "*";

if ($op === "+"){
  echo $num_one + $num_two;

}
elseif ($op === "-") {
  echo $num_one - $num_two;
}
elseif ($op === "*") {
  echo $num_one * $num_two;
}
elseif ($op === "/") {
  echo ((int)($num_one / $num_two));
}
else{
  echo "Unknown Operation";

}
//-------------------------------------------------
// 8
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
$day = "Thu";

if ($day === "Sat" || $day === "Sun" || $day === "Mon" ){
  echo "We Are Open All The Day";

}elseif ($day === "Tue" || $day === "Wed") {
  echo "We Are Open From 08:12";
}elseif ($day === "Thu" || $day === "Fri") {
  echo "We Are Closed";
}else{
  echo "Unknown Day";
}
?>