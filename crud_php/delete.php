<?php 

require_once ("./config.php");
$id= $_GET['id'];
// $sql = "DELETE FROM employees WHERE id=:id";
// $sql = "UPDATE FROM employees WHERE id=:id";
// $statment = $db->prepare($sql);
///////////////////////
$sql = "UPDATE employees
SET is_deleted = '1' 
WHERE id = :id";
$statment = $db->prepare($sql);
///////////////////////
if($statment->execute([':id' => $id])){
    header("location:./index.php");
};