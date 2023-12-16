<?php
// 4
echo 'we love php';
echo '<br>';
ECHO 'we love php';
echo '<br>';
print 'we love php';
print '<br>';
PRINT 'we love php';
PRINT '<br>';
?>
<?php

echo 'we love php';
echo '<br>';
ECHO 'we love php';
echo '<br>';
print 'we love php';
print '<br>';
PRINT 'we love php';
PRINT '<br>';
?>
<?='iam mohammad';?>

<?php
// 5
  // Single Line Comment
  echo '<br>'; // Single Line Comment
  echo 'Test'; // Single Line Comment
  echo 'Test'; # Single Line Comment

  /*
    Line 1
    Line 2
  */

  /*
    ====================
    == My Special App ==
    ====================
  */

  /* Single Line */

  echo 'Test' /* Single Line */;

  // I Used Print Because Its Faster Than Echo <= Example Not True
  print 'Test';
  print '<br>';
  ?>
  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php echo'UTF-8'?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= 'My First PHP Page'?></title>
    <?= '<title>My First PHP Page</title>'?>
  </head>
  <body>
    <?php
    /*
    hi
    my
    name
    mohammad
    */
    ?>
    <?php echo '<div>We Love</div>'?>

    <div><?php echo 'Elzero Channel'?></div>
 
  </body>
</html>
<?php
//echo 'Prevent Me From Running Please';
/*echo 'Prevent Me From Running Please';*/
#echo 'Prevent Me From Running Please';

?>
<?php
// My Application
// Version 1.0
// Created By Elzero

/*
My Application
Version 1.0
Created By Elzero
*/

// ## First Comment   
# // # Second Comment  
/* /* /* Third Comment */  #false
////// Fourth Comment
?>
<?php

/*
============================================
= Data Types  6
= ----------
= bool  => Boolean
= int   => Integer
= float => Floating Point Number | double
= string
= array
= Other Types
= gettype()
============================================
*/

echo gettype(True);
echo '<br>';
echo gettype(False);
echo '<br>';
echo gettype(true);
echo '<br>';
echo gettype(100);
echo '<br>';
echo gettype(-200);
echo '<br>';
echo gettype(0);
echo '<br>';
echo gettype(70.30);
echo '<br>';
echo gettype(-60.30);
echo '<br>';
echo gettype('Elzero');
echo '<br>';
echo gettype("Elzero");
echo '<br>';
echo gettype(array("EG" => "Egypt", "KSA" => "Saudi Arabia"));
echo '<br>';
echo gettype(array("Egypt", "Saudi Arabia"));
echo '<br>';
echo gettype(["Egypt", "Saudi Arabia"]);
?>
<?php

/*
============================================
= Data Types  7
= ----------
= Type Juggling + Automatic Type Conversion
============================================
*/

echo 1 + "2"; // 3
echo '<br>';
echo gettype(1 + "2"); // Integer
echo '<br>';
echo True; // 1
echo '<br>';
echo gettype(True); // Boolean
echo '<br>';
echo True + True; // 2
echo '<br>';
echo gettype(True + True); // Integer
echo '<br>';
echo 5 + '5 Lessons'; // 10 => Warning
echo '<br>';
echo gettype(5 + '5 Lessons'); // Integer => Warning
echo '<br>';
echo 10 + 15.5; // 25.5
echo '<br>';
echo gettype(10 + 15.5); // double => Float
echo '<br>';
?>
<?php
// 8
/*
============================================
= Data Types
= ----------
= Type Casting
= ----------------------
= "boolean" or "bool"
= "integer" or "int"
= "float" or "double" or "real"
= "string"
= "array"
= "object"
= "null"
= ------
= Search For Settype
============================================
*/

echo 5 + (int) "5 Lessons";
echo '<br>';
echo  (5 + "8 Lessons");
echo '<br>';
echo 5 + (integer) "5 Lessons";
echo '<br>';
echo 5 + ( integer ) "5 Lessons";
echo '<br>';
echo gettype(5 + (int) "5 Lessons");
echo '<br>';
echo 10 + 15.5;
echo '<br>';
echo 10 + (int) 15.5;
echo '<br>';
echo gettype(10 + (int) 15.5);
echo '<br>';
echo 10.5 + 10.5;
echo '<br>';
echo gettype(10.5 + 10.5);
echo '<br>';
echo (int) 10.5 + (int) 10.5; // 20
echo '<br>';
echo gettype((int) 10.5 + (int) 10.5);
echo '<br>';
echo (int) (10.5 + 10.5); // 21
echo '<br>';
echo  true ; // 1
echo '<br>';
echo gettype ((int) true) ; // 1
?>
<?php
// 9
/*
============================================
= Data Types 
= ----------
= Boolean + Converting To Boolean
============================================
*/
echo '<br>';
echo '<br>';

var_dump((boolean) "");
echo '<br>';
var_dump((bool) array());
echo '<br>';
var_dump((bool) []);
echo '<br>';
echo ((bool) "Elzero" );
echo '<br>';
var_dump((bool) 0);
echo '<br>';
var_dump((bool) "0");
echo '<br>';
var_dump((bool) "Elzero");
echo '<br>';
var_dump((bool) array(1));
echo '<br>';
var_dump((bool) [1]);
echo '<br>';
var_dump((bool) 100);
echo '<br>';
var_dump((bool) -100);
echo '<br>';
var_dump((bool) 10.5);
echo '<br>';
var_dump((bool) -10.5);
echo '<br>';
var_dump((int) -10.5);

?>
<?php
// 10
/*
============================================
= Data Types
= ----------
= String And Escaping
= -------------------
= nl2br()
============================================
*/

echo 'Hello PHP';
echo '<br>';
echo "Hello PHP";
echo '<br>';
echo "Hello 'PHP'";
echo '<br>';
echo 'Hello "PHP"';
echo '<br>';
echo 'Hello \'PHP\'';
echo '<br>';
echo "Hello \"PHP\"";
echo '<br>';
echo "Hello PHP\\";
echo '<br>';
echo 'Hello PHP
On Multiple
Lines';
echo '<br>';
echo nl2br('Hello PHP
On Multiple
Lines');
?>

<?php
// 11
  /*
  ============================================
  = Data Types
  = ----------
  = String And Escaping
  = -------------------
  = Heredoc
  = Nowdoc
  ============================================
  */

  $name = "Osama";

  // Heredoc
  echo <<<"Here"
  Hello PHP
  Special Characters $$$ ' ' ' """"" \\\\
  Hello My Name Is $name
  Here;

  echo '<br>';

  // Nowdoc
  echo <<<'Now'
  Hello PHP
  Special Characters $$$ ' ' ' """"" \\\\
  Hello My Name Is $name
  Now;

  echo '<br>';

  echo '<ul>';
    echo "<li>" . $name . "</li>";
    echo "<li>" . $name . "</li>";
    echo "<li>" . $name . "</li>";
    echo "<li>" . $name . "</li>";
  echo '</ul>';

  echo '<br>';

  echo '<ul>'
  , "<li>" . $name . "</li>"
  , "<li>" . $name . "</li>"
  , "<li>" . $name . "</li>"
  , "<li>" . $name . "</li>"
, '</ul>';

echo '<br>';

  echo <<<"navlinks"
  <ul>
    <li>$name</li>
    <li>$name</li>
    <li>$name</li>
    <li>$name</li>
  </ul>
  navlinks;
  ?>
  <?php

/*
============================================

// 12
= Data Types
= ----------
= Array
= -------------------
= Array With Key
= Array Without Keys
= Array With One Key
= Array Value Override
= ------------------
= print_r()
============================================
*/

echo '<pre>';
print_r([
  0 => "Sameh",
  "A" => "Ahmed",
  "B" => "Basem",
  "Mahmoud",
  True => "Sayed",
  "1" => "Osama",
  "Gamal",
  10 => "Amera",
  "Eman",
  "Mohamed",
  False => "Asmaa",
  8 => "Haytham",
  "Samer",
  "Names" => [
    "Osama",
    "Ahmed",
    "Sayed" => [
      "1",
      "2",
      "3"
    ]
  ]
]);
echo '</pre>';
?>

<?php
 
// challeng 6-12
//-------------------------------------
echo '(==================challeng 6-12================)';
echo '<br>';
echo (int) 15.2 +(int)14.7 + (10.5 + 10.5); // 50
echo '<br>';
echo gettype((int) 15.2 +(int)14.7 + (int)(10.5 + 10.5)); // Integer
//---------------------------------
echo '<br>';
echo '<br>';
echo '<br>';
//100
 $x=100;
// Method One 
echo gettype(100);
echo '<br>';
var_dump(100);
echo '<br>';

// Method Two
echo settype($x,'int');
echo '<br>';
echo $x;
// Method Three => Optional

//---------------------------------
echo '<br>';
echo '<br>';
echo '<br>';

echo "Hello \"Elzero\" ";
echo '<br>';

echo <<< 'here'
""" We Love "$$PHP"; 
here;
// Needed Output
// Hello "Elzero" \\ """ We Love "$$PHP"
//---------------------------------
echo '<br>';
echo '<br>';
echo '<br>';

echo <<< "test"
We <br> 
Love <br>
Elzero <br>
Web  <br>
School

test;
echo '<br>';

echo nl2br ('
We
Love
Elzero
Web
School
');
echo '<br>';
echo ('We <br> Love <br> Elzero <br> Web <br> School');
// Needed Output
// We
// Love
// Elzero
// Web
// School
//---------------------------------
echo '<br>';
echo '<br>';
echo '<br>';

  echo nl2br (<<< 'test'
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
test);


// Needed Output
// Hello "'Elzero'"
// We Love $Programming$
// Languages Specially "PHP"
//---------------------------------
echo '<br>';
echo '<br>';
echo '<br>';

$something = "Programming";

echo <<<"code"
Hello \PHP\
We Love $something
code;

// [1] Fix The Error
// [2] Remove 2 Characters To Get The Output

// Needed Output
// Hello \PHP\ We Love Programming
//---------------------------------
echo '<br>';
echo '<br>';
echo '<br>';

echo ((bool)"Hello PHP");
echo '<br>';
echo gettype((int)"Hello PHP");

// Needed Output
// 1
// integer
//---------------------------------
echo '<br>';
echo '<br>';
echo '<br>';

echo '<pre>';
print_r([
  
  'FrontEnd' => ['HTML',
  'CSS',
  'js'=>[
    'Vuejs'=>[
      2=>'v2',
      3=>'v3',
    ],0=>'Reactjs',
    'Svelte',


  ]
],
'BackEnd' => [
  'PHP','MySQL','Secuity'
],
0 => 'Git',
1 => 'Github',
'Testing' => [
  'Unit Testing','End To End', 'Integration'
],

]);
?>