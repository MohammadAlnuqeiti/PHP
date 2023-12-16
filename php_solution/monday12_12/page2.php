<?php 
session_start();
?>
<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo $_SESSION['table'];
echo "<br>";
echo "There are " . $_SESSION['numline']  . " lines in" . $_SESSION['namefile']."\n";
echo "<br>";
echo "Last modified " . date("l, dS F, Y, h:ia", $_SESSION['lastmodified'])."\n";

?>