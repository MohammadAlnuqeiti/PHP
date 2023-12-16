<?php

header("Access-Control-Allow-Origin:*");

header("Content-type: application/json ; charset=UTF-8");

header("Access-Control-Allow-Methods:*");

header("Access-Control-Max-Age:3600:*");

header("Access-Control-Allow-Headers:*");

// fetch user infonmation 
// 1. open connction 
$server = "localhost";
$user= 'root'; 
$pass ='';
$dbname = "php_validation";

$conn = mysqli_connect($server,$user,$pass,$dbname);

$query = "select * from users where id = {$_GET['id']}";
$result = mysqli_query($conn, $query);
$userset = mysqli_fetch_assoc($result);
// print_r($userset);

if(!empty($userset)){
    $JSON_data=json_encode($userset);
    print_r($JSON_data);
    
}else{
    echo "user not found";
}
die;

// $data = ["Name" => "groub5" , "password"=>"12345"];

// print_r($JSON_data);




?>