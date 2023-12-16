<?php require('./config.php');?>
<?php 
session_start();
$db = crud::selectProductt(); 
// session_unset();
?>
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
    <title>shopping cart</title>
</head>
<body>
    <?php require_once('./header.php');?>
    <?php
// ------------------- select product from database (category)
    if(isset($_GET['id'])){
    $_SESSION['id_category']=$_GET['id'];
    // $id_category= $_SESSION['id_category'];
 
   $sql="SELECT * FROM products WHERE id=".$_SESSION['id_category'];

}else{
    $sql="SELECT * FROM products ";
}
    $db=crud::connect()->prepare($sql);
    $db ->execute();
    $data= $db->fetchAll(PDO::FETCH_ASSOC);

?> 

<?php
// ------------------- add product to cart use session

if(isset($_POST['add'])){
    //print id producr
    if(isset($_SESSION['cart'])){
        $item_array_id = array_column($_SESSION['cart'], 'product_id');
        echo $_SESSION['id_category'];
        
            if(in_array($_POST['product_id'],$item_array_id)){
            echo "<script>alert('product is already added in the cart')</script>";
            echo "<script>window.location='./product.php?action=category&id=".$_SESSION['id_category']."'"."</script>";
            }else{
                $count=count($_SESSION['cart']);
                $item_array=array(
                    'product_id'=>$_POST['product_id'],
                );
                $_SESSION['cart'][$count]=$item_array;
                echo "<script>window.location='./product.php?action=category&id=".$_SESSION['id_category']."'"."</script>";
            }
    }else{
        $item_array=array(
            'product_id'=>$_POST['product_id'],
        );

        // create vew session variable
        $_SESSION['cart'][0]=  $item_array;
        echo "<script>window.location='./product.php'</script>";

        // print_r($_SESSION['cart']);
    } 

}
?>
 <section id="landpage">
            <h1>  ALL PRODUCT</h1>
</section>

<h1>PRODUCTS</h1>
<hr>

<div id="filter">

    <a href="./product.php?action=category&id=1">ALL PRODUCT</a>
    <a href="./product.php?action=category&id=1">CATEGORY ONE</a>
    <a href="./product.php?action=category&id=2">CATEGORY TWO</a>
    <a href="./product.php?action=category&id=1">CATEGORY THREE</a>
    <a href="./product.php?action=category&id=1">CATEGORY FOUR</a>
    <a href="./product.php?action=category&id=2">CATEGORY FIVE</a>   

</div>
<div class="container">
    <div class="row text-center py-5">

    <?php foreach($data as $value):?> 

        <div class="col-md-3 col-sm-6 my-3 my-md-0">
        <form action="product.php" method="post">
            <div class="card shadow">
                <div>
                    <img src="<?php echo $value['image']?>" alt="image" class="img-fluid card-img-top">
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $value['name']?></h5>
                    <h6>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </h6>
                    <p class="carr-text">
                    <?php echo $value['description']?>
                    </p>
                    <h5>
                        <small><s class="text-secondary">$599</s></small>
                        <span class="price">$<?php echo $value['price']?></span>
                    </h5>
                    <button type="submit" name="add" class="btn btn-warning my-3">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                    <input type="hidden" name="product_id" value="<?php echo $value['id']?>">
                </div>
            </div>
        </form>
        </div>
        <?php  endforeach;?>

        <!-- <div class="col-md-3 col-sm-6 my-3 my-md-0">
        <form action="product.php" method="post">
            <div class="card shadow">
                <div>
                    <img src="./image/pm0549.webp" alt="image" class="img-fluid card-img-top">
                </div>
                <div class="card-body">
                    <h5 class="card-title">product1</h5>
                    <h6>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </h6>
                    <p class="carr-text">
                        some cuick example
                    </p>
                    <h5>
                        <small><s class="text-secondary">$599</s></small>
                        <span class="price">$599</span>
                    </h5>
                    <button type="submit" name="add" class="btn btn-warning my-3">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                </div>
            </div>
        </form>
        </div>
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
        <form action="product.php" method="post">
            <div class="card shadow">
                <div>
                    <img src="./image/pm0549.webp" alt="image" class="img-fluid card-img-top">
                </div>
                <div class="card-body">
                    <h5 class="card-title">product1</h5>
                    <h6>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </h6>
                    <p class="carr-text">
                        some cuick example
                    </p>
                    <h5>
                        <small><s class="text-secondary">$599</s></small>
                        <span class="price">$599</span>
                    </h5>
                    <button type="submit" name="add" class="btn btn-warning my-3">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                </div>
            </div>
        </form>
        </div> -->
       
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>