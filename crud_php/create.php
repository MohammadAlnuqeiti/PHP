
<?php 

require_once ("./config.php");
$message = "";

if ( isset($_POST['name'])&& isset($_POST['address']) && isset($_POST['salary'])){
    $name = $_POST['name'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];
  
    $insertdata = "INSERT INTO employees (id , user_name , user_address , Salary)
    VALUES (NULL ,  '$name' ,   '$address' ,  '$salary'  )";
        
    $db->prepare($insertdata);
    $db->exec($insertdata);
    header("location:./index.php");
  
  }

?>
<?php include('./header.php')?>


  <div class="container">

        <div class="card mt-5">
            <div class="card-header">
                <h2>create emploee</h2>
            </div>
            <div class="card-body">
                <form action="" method="post"> 
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group"> 
                        <label>Address</label>
                        <input type="text" name="address" class="form-control">
                    </div>
                    <div class="form-group"> 
                        <label>Salary</label>
                        <input type="number" name="salary" class="form-control">   
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="create" class="btn btn-info">   
                    </div>
                </form>
            </div>
        </div>
</div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>