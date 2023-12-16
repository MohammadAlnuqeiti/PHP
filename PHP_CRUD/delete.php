<?php 

require_once ("./config.php");
$id= $_GET['id'];
///////////////////////
$sql = "UPDATE employees
SET is_deleted = '1' 
WHERE id = :id";
$statment = $db->prepare($sql);
///////////////////////
if($statment->execute([':id' => $id])){
    header("location:./index.php");
};