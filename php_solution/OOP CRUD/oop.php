<?php
include('./config.php');

if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];

    $create=new user();
    // $create->create(NULL,$name,$email,$number);
    // $create->update(1,$name,$email,$number);
    // $create->delete($name);
    $admin= new Admin($name, $email,$number,$role=1);
    

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<form action="" method="post">

<input type="text" name="name">
<input type="number" name="number">
<input type="email" name="email">
<input type="submit" name="submit">

</form>
</body>
</html>