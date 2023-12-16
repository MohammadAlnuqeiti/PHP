<?php 
session_start();
?>
<?php 
// print_r ($_SESSION);
// echo '<br>';
// echo $_SESSION['name'];
?>
<?php
// session_start();
?>

<h1><?php echo($_SESSION["email"])?></h1>
<h1><?php echo($_SESSION["password"])?></h1>