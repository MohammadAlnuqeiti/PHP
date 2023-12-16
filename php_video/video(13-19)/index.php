<?php
// 13
  /*
    Variables
    - Naming Rules + Info
    [1] Start With Dollar Sign $
    [2] Start With A Letter [a-z] Or [A-Z] Or Underscore
    [3] You Can Use Numbers Inside The Name
    [4] No Special Characters Allowed
    [5] Case Sensitive
    - Test Single And Double Quotes

    Search
    - Loosely Typed Language
  */

  $username = "Osama";
  $Username = "Elzero";

  echo $username;
  echo '<br>';
  echo $Username;
  echo '<br>';
  echo 'Hello $username';
  echo '<br>';
  echo "Hello $username";
  ?>
  <?php 
  // 14
    echo '<br>';
    echo '<br>';
    echo '<br>';

  $username = "Mohammad" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Page | <?php echo $username ?></title>
  </head>
  <body>
    <div>Welcome <?php echo $username ?></div>
    <div><?php echo $username ?> You Scored 1000 Points</div>
    <div>
      <?php include("score.php") ?>
    </div>
  </body>
</html>

<?php
//  15
  /*
    Variable Variable
    Takes The Value Of A Variable And Treats That As The Name Of A Variable
  */
  echo '<br>';
  echo '<br>';
  echo '<br>';

  $a = "asad";
  $$a = "elzero";
  $$$a = "mohammad";

  echo $a;
  echo "<br>";
  echo $$a;
  echo "<br>";
  echo $asad;
  echo "<br>";
  echo $$$a;
  echo "<br>";
  echo $elzero;
  echo "<br>";

  echo "Hello ${$a}"; // $$a
  echo "<br>";
  echo "Hello ${$$a}"; // $$$a
  ?>
  <?php
// 16
/*
  Assign Variable By Reference
  - By Default, Variables Are Always Assigned By Value
  - Assigned By Reference Make Variable Alias Or Point To Another

  Search
  - References Are Not Pointers
*/
echo '<br>';
echo '<br>';
echo '<br>';

$a = "ahmed";
$b = $a;
$b = "mohammad";
$a = "reference";

echo $a;
echo '<br>';
echo $b;
echo '<br>';
echo gettype($b);
?>

<?php 
/*
echo '<br>';
echo '<br>';
echo '<br>';

print_r($_SERVER)
*/
?>
<?php
// 17
echo '<br>';
echo '<br>';
echo '<br>';
/*
  Pre-Defined Variables

  Search
  - PHP Pre-Defined Variables
*/

// echo '<pre>';
// print_r($_SERVER);
// echo $_SERVER["HTTP_CONNECTION"];
// echo '</pre>';
if ($_SERVER["REQUEST_METHOD"]=="POST"){
echo $_POST["username"];
echo '<br>';
echo $_POST["number"];
}
?>

<form action="" method="post">
<input type="text" name="username">
<input type="number" name="number">
<input type="submit" value="Send">
</form>

<?php
// 18

echo '<br>';
echo '<br>';
echo '<br>';
  /*
    Constants
    - That Value Cannot Change During The Execution
    - Constants Always Uppercase
  */

  define("DB_NAME", "elzero");
  define("MAIN_NUMBER", 5);

  echo DB_NAME;
  echo MAIN_NUMBER * 50;
  ?>
  <?php
// 19
/*
  Pre-Defined Constants [Case Sensitive]
  - PHP_VERSION
  - PHP_OS_FAMILY
  - PHP_INT_MAX
  - DEFAULT_INCLUDE_PATH

  Magic Constants [Case Insensitive]
  - __LINE__
  - __FILE__
  - __DIR__

  Reserved Keywords
  - break
  - clone

  Search
  - PHP Predefined Constants
  - Compile Time vs Runtime
  - List of Reserved Words
*/

define("BREAKS", "AA");

echo php_uname();
echo '<br>';
echo PHP_VERSION;
echo '<br>';
echo __LINE__;
echo '<br>';
echo __FILE__;
echo '<br>';
echo __dir__;
echo '<br>';
echo BREAKS;

// No Problem Here
function hello() {
  return "Hello";
}

echo hello();

// Syntax Error => Reserved Word
function clones() {
  return "Clones";
}

echo clones();
?>
<?php  
// challeng ----------- 13-19 ----------------- //

echo '<br>';
echo '<br>';
echo '<br>';
$title = 'orange academy'
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $title ?>">
    <title>Welcome To <?php echo $title ?> </title>
  </head>
  <body>
    <h1><?php echo $title ?> </h1>
    <p>Here In <?php echo $title ?> We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?php echo $title ?> Is The What You Need.</div>
    <footer>All Right Reserved To <?php echo $title ?></footer>
  </body>
</html>

<?php 
echo '<br>';
echo '<br>';
echo '<br>';

$name = "elzero";
// $$name= & $name ;
$$name = "Web";

echo $elzero;
echo '<br>';
echo ${$name};
echo '<br>';
echo ${$name};
echo '<br>';
echo ${$name};
echo '<br>';

//---------------------------------
$a = 200;
$b = $a;
$a = 100;

echo $b; // 100
//---------------------------------
echo "<br>_SERVER:<br><pre>";
echo ($_SERVER['DOCUMENT_ROOT']);
echo '<br>';
echo ($_SERVER['SERVER_NAME']);
echo '<br>';
echo ($_SERVER['SystemRoot']);
echo '<br>';
echo ($_SERVER['OPENSSL_CONF']);
echo '<br>';
echo '<br>';
echo '<br>';

// print_r($_SERVER);
// echo "</pre><br><br>_ENV:<br><pre>";
// print_r($_ENV);
// echo "</pre><br><br>";

//-------------------------------------

/*
break
clone
die()
empty()
final
or
switch
use
isset()
and
echo 
for
new
public
static
try
var
print
*/


//------------------------------------------

// "60"
// "C:\xampp\htdocs\elzero\index.php"
// "C:\xampp\htdocs\elzero"

echo (__LINE__);
echo '<br>';
echo (__FILE__);
echo '<br>';
echo(__DIR__);
?>