<?php include('server.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <h1>register</h1>
    <form action="./register.php" method="post">
    <?php include('./error.php');?>
        <div>
            <label>full name</label>
            <input type="text" name="name" value="<?php echo $name ?>">
        </div>
        <div>
            <label>user name</label>
            <input type="text" name="username" value="<?php echo $username ?>">
        </div>
        <div>
            <label>email</label>
            <input type="email" name="email" value="<?php echo $email ?>">
        </div>
        <div>
            <label>password</label>
            <input type="password" name="password" value="<?php echo $password ?>">
        </div>
        <div>
            <label>re password</label>
            <input type="password" name="repassword" value="">
        </div>
        <div>
           <button type="submit" class="btn" name="reg_user">register</button>        
        </div>
        <p>
            do you have account<a href="login.php">login</a>
    </p>
    </form>
    
</body>
</html>