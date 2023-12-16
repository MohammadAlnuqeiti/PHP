<?php  
session_start();

// variable decleration

$name="";
$username="";
$password="";
$email="";
$errors =array();
$_SESSION['success']= "";
$db =mysqli_connect('localhost','root','','testmysql'); // connect data base


//receive all input value from the form
$name = mysqli_real_escape_string($db, $_POST['name']);
$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password = mysqli_real_escape_string($db, $_POST['password']);
$repassword = mysqli_real_escape_string($db, $_POST['repassword']);


//check empty stack 
if (empty($name)){array_push(($errors),"fullname is required");}
if (empty($username)){array_push(($errors),"username is required");}
if (empty($email)){array_push(($errors),"email is required");}
if (empty($password)){array_push(($errors),"password is required");}

if ($password != $repassword){
    array_push($errors ," password not match");
}

if (count($errors ) == 0){
    $password = md5($repassword);//طريقة تشفير لحتى ما يخزن كلمة السر مثل ماهي 
    $query = "insert into user(name,username,email,password)values('$name','$username','$email','$password')";
    mysqli_query($db,$query);

    $_SESSION['username']=$username; //انشاء جلسة جديدة بعد تسجيل الدخول
    $_SESSION['success']= "register successfull";
    header("location: home.php");// عشان ينقل على صفحى الهوم
}
    ?>

