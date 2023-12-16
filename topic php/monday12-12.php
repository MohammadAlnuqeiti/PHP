<?php  
$nums = 10;

    if ($nums >5)  
        echo "This condition is TRUE.";  
    if ($nums >15)  
        echo "This condition is FALSE.";  
?> 
<?php  
echo "<br>";
$x = 5985;
var_dump($x);
?>  
<?php  
echo "<br>";
$x = 10.365;
var_dump($x);
?> 
<?php  
echo "<br>"; 
$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>"; 
echo $y;
?>
<?php 
echo "<br>"; 
$array = array("asem","maslamane","ruba","tabark");
print_r($array);
echo "<br>"; 
echo $array[0];
echo "<br>"; 
echo $array[2];
echo "<br>"; 
$array2 = ["asem","maslamane","ruba","tabark"];
$array2[4]="ahmed";
echo "<br>"; 
print_r($array2);
echo "<br>"; 

?>
<?php   
    $nl = NULL;  
    echo $nl;   //it will not give any output  
    echo "<br>";
    $x = "Hello world!";
    $x = null;
    var_dump($x);
?> 
 <?php
echo (int)12.5 . '<br>'; 
echo (int)12.1 . '<br>'; 
echo (int)12.9 . '<br>'; 
echo (int)-12.9 . '<br>'; 

echo 5 + '5 mohamed'; //(int) : to remove waring 
echo '<br>';
echo 5 + (int)'5 mohamed'; //(int) : to remove waring 
echo '<br>';
echo 5 + (integer)'5 aseem'; //(integer) : to remove waring 
echo '<br>';
echo 5 + ( integer )'5 ruba'; //( integer ) : to remove waring 
echo '<br>';
echo gettype(5 + (int)'5 tabark');
echo '<br>';
// ----------------------------------------
echo 5 + (int) 15.5; //(int) : to casting it from double to int 
echo '<br>';
echo 10.5 + 10.5 ; //21
echo '<br>';
echo gettype(10.5 + 10.5); //double +double =double 
echo '<br>';
echo (int)10.5 + (int)10.5 ; //20 //int
echo '<br>';
echo (int) (10.5 + 10.5 ); //21 //int
echo '<br>';
echo gettype((int) (10.5 + 10.5));
echo '<br>';
echo ((bool)("mohammed"));
echo '<br>';
echo gettype((bool)("mohammed"));
echo '<br>';
echo ((bool)(2));
echo '<br>';
echo gettype((bool)(2));
?> 

<?php 

// session_start();


?>
<?php 


// echo '<br>';
// echo '<br>';
// $_SESSION['name']="mohammad";

// echo $_SESSION["name"];
?>
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php


$_SESSION["email"] = "ahmad@gmail.com";
$_SESSION["password"] = "012345";
$_SESSION["array"] = ['AHMED','MOHAMMAD'];

// session_unset();
$_SESSION["email"] = "Aqaba@gmail.com";
echo "<br>";
// session_destroy();

echo ($_SESSION["email"]); 
echo "<br>";
print_r($_SESSION["array"]);










if (!empty($_SESSION["array"])){
    print_r($_SESSION["array"]);
}
else{
    echo ("Not Available"); 
}
