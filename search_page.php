<?php 
include'config.php';

session_start();

$user_id= $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
}
if (isset($_POST['add_to_cart'])) {
    $product_name= $_POST['product_name'];
    $product_price= $_POST['product_price'];
    $product_image= $_POST['product_image'];
    $product_quantity= $_POST['product_quantity'];

    $check_cart_numbers =  mysqli_query($conn, "SELECT * FROM `cart`WHERE name = '$product_name' 
    AND user_id='$user_id'")or die('query failed');

    if(mysqli_num_rows($check_cart_numbers)>0){
        $message[]='already added to cart!';
    }else{
        mysqli_query($conn , "INSERT INTO `cart`(user_id , name , price , quantity , image) 
        VALUES('$user_id' ,'$product_name','$product_price',
        '$product_quantity' ,'$product_image')") or die('query failed');
        $message[]='product added to cart!';
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>search page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

     <!-- custom css file link  -->
     <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="heading">
     <h3>placed  orders</h3>
     <p> <a href="home.php">home</a> / search</p>
    </div>
    <section class="search-form">
        <form action="" method="post">
            <input type="text" name="search" placeholder="search products..." class="box">
            <input type="submit" name="submit" value="search" class="btn">
        </form>
    
    </section>
    <section class="products" style="padding-top: 0;">
     <div class="box-container">
        <?php
        if (isset($_POST['submit'])) {
             $search_item =$_POST['search'];
             $select_products= mysqli_query($conn,"SELECT * FROM `products` WHERE name  LIKE  '%{$search_item}%'" )or die('query failed');
             if (mysqli_num_rows($select_products) > 0) {
                 while ($fetch_products = mysqli_fetch_assoc($select_products)) {    
        ?>
        <form action="" method="post" class="box">
                <img class="image" src="uploadedImage/<?php echo $fetch_products['image'];?>" alt="">
                <div class="name"><?php echo $fetch_products['name'];?></div>
                <div class="price">$<?php echo $fetch_products['price'];?></div>
                <input type="number" min="1" name="product_quantity" value="1" class="qty">   
                <input type="hidden" name="product_name" value="<?php echo $fetch_products['name'];?>"> 
                <input type="hidden" name="product_price" value="<?php echo $fetch_products['price'];?>">
                <input type="hidden" name="product_image" value="<?php echo $fetch_products['image'];?>">
                <input type="submit" value="add to cart" class="btn" name="add_to_cart">            
        </form>

        <?php
             } 
          }else{
            echo '<p class="empty"> no result found!</p>';
          }
        }else {
        echo'<p class="empty">search something!</p>';
        }
        ?>     
     </div>
    
    </section>






    <?php include 'footer.php'; ?>
    
    <!--js file -->
    <script src='js/script.js'></script>
</body>
</html>