<?php require_once("./config.php"); 


$getUsers = $db->prepare('SELECT * FROM employees ORDER BY id DESC');
$getUsers->execute();
$users = $getUsers->fetchAll();




?>
<?php include('./header.php')?>

  <div id="title">
        <h1>
            Employees Detalis
        </h1>
        <a href="./create.php" id="create">+ Add New Employees</a>
    </div>

  <table class="table table-bordered">
  <tr>  
    <th>#</th>
    <th>Name</th>
    <th>Address</th>
    <th>Salary</th>
    <th>Action</th>
</tr>  
<?php $i=1;?>

<?php foreach ($users as $row ): ?>
<?php 
if ($row['is_deleted']==1){
  continue;
}
?>
<tr>
  <?php ?>
    <td><?php echo $i;?></td>
    <td><?php echo $row['user_name'];?></td>
    <td><?php echo $row['user_address'];?></td>
    <td><?php echo $row['Salary'];?></td>
    <td>
      <a href="./read.php?id=<?php echo $row['id'];?>" class="btn btn-info">read</a>
      <a href="./update.php?id=<?php echo $row['id'];?>" class="btn btn-warning">edit</a>
      <a href="./delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger" onclick="return confirm('are you shure?')">delete</a>
    </td>
</tr>
<?php ++$i;?>

<?php ?>
<?php  endforeach;?>
</table>  















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>