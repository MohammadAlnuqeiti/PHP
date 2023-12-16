<form action="" method="GET">
    <input type="text" placeholder="insert email" name="email" >
    <input type="password" placeholder="insert password" name="password">
    <input type="submit" value="submit">
</form>
<?php 


// --------------------------- 1 --------------------------- //
if ($_SERVER["REQUEST_METHOD"]=="GET" && isset($_GET["email"]) && isset($_GET["password"])){
    echo $_GET["email"] . "<br>";
    echo $_GET["password"] . "<br>";
    echo "this data send to use get method" . "<br>";
    
};
echo "<hr>";
// --------------------------- 2 --------------------------- //
if ($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["url"])){
   $url = $_POST["url"];

   header("Location: $url");
exit;
    
};



?>
<form action="" method="POST">
    <input type="text" placeholder="insert url link" name="url">
    <input type="submit" value="GO">
</form>

<?php
echo "<hr>";
// --------------------------- 3 --------------------------- //

if ($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["number1"])&& isset($_POST["number2"])&& isset($_POST["operator"])){
    $numder1=$_POST["number1"];
    $numder2=$_POST["number2"];
    $operator=$_POST["operator"];
    switch( $operator){
        case("dev"):
            echo $numder1 . " / " . $numder2 . "=" . $numder1/$numder2;
            break;
        case("mul"):
            echo $numder1 . " * " . $numder2 . "=" . $numder1*$numder2;
            break;
        case("add"):
            echo $numder1 . " + " . $numder2 . "=" . $numder1+$numder2;
            break;
        case("sub"):
            echo $numder1 . " - " . $numder2 . "=" . $numder1-$numder2;
            break;
            default:
            echo "please insert true operator";

    }
 

     
 };

?>
<form action="" method="POST">
    <input type="number" placeholder="insert number 1" name="number1">
    <input type="number" placeholder="insert number 2" name="number2">
    <select name="operator">
      <option value="add">+</option>
      <option value="sub">-</option>
      <option value="mul">*</option>
      <option value="dev">/</option>
    </select>
    <!-- <input type="text"  placeholder="insert Arithmetic operation" name="operator"> -->
    <input type="submit" value="submit">
</form>
<?php
echo "<hr>";
// --------------------------- 4 --------------------------- //



?>
<?php
echo "<hr>";
// --------------------------- 5 --------------------------- //

echo basename(__FILE__, '.php') . "<br>";
echo basename(__FILE__) . "<br>";
echo pathinfo(__FILE__, PATHINFO_DIRNAME ) . "<br>"; 
echo basename(__DIR__) . "<br>";
// echo $_SERVER['PHP_SELF'] . "<br>";
?>
<?php
echo "<hr>";
// --------------------------- 6 --------------------------- //
$t = microtime(true);

var_dump(
    $_SERVER['REQUEST_TIME_FLOAT'], 
    $t, 
    $t - $_SERVER['REQUEST_TIME_FLOAT']
);


?>
<?php
echo "<hr>";
// --------------------------- 7 --------------------------- //


session_start();
$_SESSION['name']= "mohammad";


isset($_SESSION['visitor'])? $_SESSION['visitor']++:$_SESSION['visitor']= 1; 

echo "welcome " . $_SESSION['name'] . " counter on refresh = " .  $_SESSION['visitor'] . "<br>";
echo "<hr>";

// --------------------------- 8 --------------------------- //

$address = $_SERVER['SERVER_ADDR'];
echo $address . "<br>";		
$check = [];
// print_r($check). "<br>";
if (in_array($address , $check)){
    echo "ok";
}else{
    array_push($check,$address);
    // print_r($check);
    echo "number of visitor = " . count($check). "<br>";
}
    echo "<hr>";
// --------------------------- 9 --------------------------- //

setcookie("student","mohammad",strtotime("+1 year"),"/","",true,true);
echo "my name is ". $_COOKIE["student"]; // get data from cookie.

// setcookie("student","mohammad",strtotime("-1 second"),"/","",true,true);//delete cookie to use expire.






?>
