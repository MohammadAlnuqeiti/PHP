<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>register</title>
</head>
<body>
    <?php

require_once("./connection.php");
    $dd=crud::selectData();
    

    if(isset($_POST['submit'])){
        $fname =$_POST['fname'];
        $lname =$_POST['lname'];
        $email =$_POST['email'];
        $password =$_POST['password'];
        $repassword =$_POST['re-password'];
        $fileimagename =$_FILES['file'];
        $imagename=$fileimagename['name'];
        $imagetemp=$fileimagename['tmp_name'];

        $filename =explode('.', $imagename);
        print_r  ($filename). "<br>";
        $file_extenshion=strtolower( end($filename));
        echo   $file_extenshion . "<br>";

        $array_extension=array("png","jpg","jpeg","jfif");

        if(in_array( $file_extenshion, $array_extension)){

        // $upload_image= 'images/'. $fileimagename;
        $upload_image='./image/'.$imagename;
        move_uploaded_file($imagetemp,   $upload_image);
           
        }else{
            echo "the file extenyion is not supported";
        }


        // echo  $fileimagename . "<br>";
        // $filename_seperat=explode(" ", $fileimagename );
        // print_r  ($filename_seperat). "<br>";
        // $file =explode('.', $filename_seperat[0]);
        // print_r  ($file). "<br>";


        //------------------------------------------------
        $email_check=array();

            foreach($dd as $value){
                array_push( $email_check,$value['email']);
            
            }   
            // echo "<pre>";
            // print_r(  $email_check);
            // echo "</pre>";
            if(in_array(  $email ,$email_check)){
                echo "this emaul is found";
            }
        //------------------------------------------------
        if(preg_match("/^[A-Z a-z]+$/",$_POST['fname'])){
                    $fname = $_POST['fname'];
                } else {
                    echo 'Your first name should contain just alphabets';
                }
        if(preg_match("/^[A-Z a-z]+$/",$_POST['lname'])){
                    $lname = $_POST['lname'];
                } else {
                    echo 'Your last name should contain just alphabets';
                }
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $email = $_POST['email'];
        } else {
            echo 'Your email is invalid';
        }
        if(preg_match(("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/"), $_POST['password'])){
            $password = $_POST['password']; 
        } else {
            echo $_POST['password'];
            echo 'Your password is week';
        }
        if(!empty($_POST['fname'])&&!empty($_POST['lname'])&&!empty($_POST['email'])&&!empty($_POST['password'])&&in_array( $file_extenshion, $array_extension)){   
            // INSERT INTO `registeration` (`id`, `fname`, `lname`, `email`, `password`, `is_deleted`, `image`) VALUES (NULL, 'amro', 'amro', 'amro@gmail.com', 'asdf!123', '0', '128-1280406_view-user-icon-png-user-circle-icon-png.png');
            if(  $password ==  $repassword ){
                $db = crud::connect()->prepare("INSERT INTO registeration (id,fname,lname,email,password,image) VALUES(NULL,:f,:l,:e,:p,:i)");
                $db -> bindValue(':f',$fname);
                $db -> bindValue(':l',$lname);
                $db -> bindValue(':e',$email);
                $db -> bindValue(':p',$password);
                $db -> bindValue(':i', $upload_image);
                $db -> execute();
                echo 'Successfully';
            }
        }else{
            echo 'passsword not match';
        }
       


    }
    ?>
<div class="form">

<h1>register form</h1>
<form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="fname" placeholder="first name">
    <input type="text" name="lname" placeholder="last name">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="password">
    <input type="password" name="re-password" placeholder="confirm password">
    <input type="file" name="file" autocomplete="off">
    <input type="submit" name="submit" value="register">
</form>

</div>

</body>
</html>