
<?php 

require_once ("./config.php");
//---------------------------------------

$id = $_GET['id'];
$getUsers = $db->prepare('SELECT * FROM employees WHERE  id = :id ');
$getUsers->execute([':id'=>$id]);
$users = $getUsers->fetch(PDO::FETCH_OBJ);


if ( isset($_POST['name'])&& isset($_POST['address']) && isset($_POST['salary'])){
    $name = $_POST['name'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];

$sql = "UPDATE employees
SET user_name = '$name' , user_address =  '$address' , Salary = '$salary'
WHERE id = $id";

$db->prepare($sql);
$db->exec($sql);
header("location:./index.php");


};

?>
<?php include('./header.php')?>


  <div class="container">

        <div class="card mt-5">
            <div class="card-header">
                <h2>update emploee</h2>
            </div>
            <div class="card-body">
                <form action="" method="post"> 
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $users->user_name;?>" >
                    </div>
                    <div class="form-group"> 
                        <label>Address</label>
                        <input type="text" name="address" class="form-control" value="<?php echo $users->user_address;?>" >
                    </div>
                    <div class="form-group"> 
                        <label>Salary</label>
                        <input type="number" name="salary" class="form-control"  value="<?php echo $users->Salary;?>">   
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="ubdate data" class="btn btn-info">   
                    </div>
                </form>
            </div>
        </div>
</div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>