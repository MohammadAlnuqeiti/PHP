<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="testmysqli";

$db = mysqli_connect($servername,$username,$password,$dbname);
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}else{
    echo "You are connected to the database successfully";
    echo (mysqli_connect_errno());
}