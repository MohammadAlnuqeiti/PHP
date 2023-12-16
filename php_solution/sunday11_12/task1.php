<?php  

echo PHPVERSION();
echo "<br>";
echo php_uname();
echo "<br>";
?>
<?php  
echo "<br>";
echo "<br>";

echo "======================================";
echo "<br>";
echo nl2br('Tomorrow I \'ll learn PHP global variables.
This is a bad command: del c:.')

?>
<?php  
echo "<br>";
echo "<br>";

echo "======================================";
echo "<br>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {    
    echo $_POST["username"];
    echo "<br>";
    echo $_POST["phone"];

}

?>
<form action="" method="post">
<input type="text" name="username">
<input type="number" name="phone">
<input type="submit" value="Send">
</form>

<?php  
echo "<br>";
echo "<br>";
echo "======================================";
echo "<br>"; 
    echo $_SERVER['REMOTE_ADDR'];


?>
<?php  
echo "<br>";
echo "<br>";

echo "======================================";
echo "<br>";    
echo __FILE__;


?>

<?php
echo "<br>";
echo "<br>";

echo "======================================";
echo "<br>"; 
$url = 'https://www.w3schools.com/php/default.asp';
$url=parse_url($url);
echo 'Scheme : '.$url['scheme']."\n";
echo "<br>";
echo 'Host : '.$url['host']."\n";
echo "<br>";
echo 'Path : '.$url['path']."\n";
?>
<?php
echo "<br>";
echo "<br>";

echo "======================================";
echo "<br>"; 
$url = 'http://localhost/m.php/';
$url=parse_url($url);
echo 'Scheme : '.$url['scheme']."\n";
echo "<br>";
echo 'Host : '.$url['host']."\n";
echo "<br>";
echo 'Path : '.$url['path']."\n";
?>
<?php
echo "<br>";
echo "<br>";
//change color of the first character in a word
// syntax
// mixed preg_replace ( mixed $pattern , mixed $replacement , mixed $subject [, int $limit = -1 [, int &$count ]] )
echo "======================================";
echo "<br>";
$text = 'PHP Tutorial';
$text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);
echo ($text);
echo "<br>";
echo "-----------------------------------------";
echo "<br>";

$textt = ["PHP" ,"Tutorial","mmmm"];
$textt = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$textt);
print_r ($textt);
echo "<br>";
echo "-----------------------------------------";
echo "<br>";

$text = 'PHP Tutorial';
echo "<span style='color:red;'>$text[0]</span>";
echo substr($text,1);
echo "<br>";
echo "-----------------------------------------";
echo "<br>";
?>
<?php
echo "<br>";
echo "<br>";

echo "======================================";
echo "<br>"; 

echo '<a href="https://www.w3schools.com/php/default.asp">
<input type="submit" value="w3school"/>
</a>';
// echo header("Location: https://www.w3schools.com/php/default.asp");
// exit();
?>
