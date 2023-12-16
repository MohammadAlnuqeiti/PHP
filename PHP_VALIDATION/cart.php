<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrab cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./product.css">
    
    <title>cart</title>
</head>
<body>
<?php session_start();?>
<?php require('./config.php');?>
<?php require_once('./header.php');?>
<?php 
$db = crud::selectProductt();
 
$product_id=array_column($_SESSION['cart'], 'product_id');
?>
<?php
// ------------------- delet from cart 
if(isset($_POST['remove'])){
    if($_GET['action']=="remove"){
    $id=$_GET['id'];
    // print_r($_SESSION['cart']);
    foreach($_SESSION['cart'] as $key => $value ){
        if($value['product_id'] == $id){
            unset($_SESSION['cart'][$key]);
            echo "<script>alert('you are shure')</script>";
            echo "<script>window.location='cart.php'</script>";

        }
    }
   
}
}
if(isset($_POST['empty'])){
   
        
  unset($_SESSION['cart']);
  header("location: ./product.php");


}
?>  
<div class="container-fluid ">
    <div class="row ps-5">
        <div class="col-md-7">
            <div class=" shopping-cart">
                <h6>My cart</h6>
                <hr>
                <?php $total=0 ?>
              <?php foreach($db as $value):?>
<?php if(in_array($value['id'],$product_id)):?>
                <form action="cart.php?action=remove&id=<?php echo $value['id']?>" method="post" class="cart-items">
                    <div class="border rounded p-2">
                        <div class="row bg-white">
                            <div class="col-md-3 pl-0">
                                <img src="<?php echo $value['image']?>" alt="<?php echo $value['name']?>" class="img-fluid">
                            </div>
                            <div class="col-md-6">
                                <h5 class="pt-2"><?php echo $value['name']?></h5>
                                <small class="text-secondary">Seller: dailytuition</small>
                                <h5 class="pt-2">$<?php echo $value['price']?></h5>
                                <button type="submit" class="btn btn-warning">Save for Later</button>
                                <button type="submit" class="btn btn-danger mx-2" name="remove">Remove</button>
                                <button type="submit" class="btn btn-danger mx-2" name="empty">Remove</button>
                            </div>
                            <div class="col-md-3 py-5">
                                <div>
                                    <button type="button" class="btn bg-light border rounded-circle"><i class="fas fa-minus"></i></button>
                                    <input type="text" value="1" class="form-control w-25 d-inline">
                                    <button type="button" class="btn bg-light border rounded-circle"><i class="fas fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <?php $total+=$value['price'];?>
<?php endif;?>
<?php endforeach;?>
            </div>
      
</div>
<div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">

            <div class="pt-4">
                <h6>PRICE DETAILS</h6>
                <hr>
                <div class="row price-details">
                    <div class="col-md-6">
                        <?php
                            if (isset($_SESSION['cart'])){
                                $count  = count($_SESSION['cart']);
                                echo "<h6>Price ($count items)</h6>";
                            }else{
                                echo "<h6>Price (0 items)</h6>";
                            }
                        ?>
                        <h6>Delivery Charges</h6>
                        <hr>
                        <h6>Amount Payable</h6>
                    </div>
                    <div class="col-md-6">
                        <h6>$<?php echo $total; ?></h6>
                        <h6 class="text-success">FREE</h6>
                        <hr>
                        <h6>$<?php
                            echo $total;
                            ?></h6>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>