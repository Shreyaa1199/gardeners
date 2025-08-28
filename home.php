<?php

@include 'config.php';
session_start();
// modified
$user_id = "";
 if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
 }

// session_start();
// $user_id = $_SESSION['user_id'];

// if(!isset($user_id)){

//  $user_id = null;
//    } 
// till here 

//  if(!isset($user_id))
  // $user_id = null;
      //  header('location:login.php');
      
//   } 



// session_start();

// $user_id = $_SESSION['user_id'];

// if(!isset($user_id)){
//    header('location:login.php');
// }

// if(isset($_POST['add_to_wishlist'])){

//    $product_id = $_POST['product_id'];
//    $product_name = $_POST['product_name'];
//    $product_price = $_POST['product_price'];
//    $product_image = $_POST['product_image'];
   
//    $check_wishlist_numbers = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

//    $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

//    if(mysqli_num_rows($check_wishlist_numbers) > 0){
//        $message[] = 'already added to wishlist';
//    }elseif(mysqli_num_rows($check_cart_numbers) > 0){
//        $message[] = 'already added to cart';
//    }else{
//        mysqli_query($conn, "INSERT INTO `wishlist`(user_id, pid, name, price, image) VALUES('$user_id', '$product_id', '$product_name', '$product_price', '$product_image')") or die('query failed');
//        $message[] = 'product added to wishlist';
//    }

// }

// if(isset($_POST['add_to_cart'])){

//    $product_id = $_POST['product_id'];
//    $product_name = $_POST['product_name'];
//    $product_price = $_POST['product_price'];
//    $product_image = $_POST['product_image'];
//    $product_quantity = $_POST['product_quantity'];

//    $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

//    if(mysqli_num_rows($check_cart_numbers) > 0){
//        $message[] = 'already added to cart';
//    }else{

//        $check_wishlist_numbers = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

//        if(mysqli_num_rows($check_wishlist_numbers) > 0){
//            mysqli_query($conn, "DELETE FROM `wishlist` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');
//        }

//        mysqli_query($conn, "INSERT INTO `cart`(user_id, pid, name, price, quantity, image) VALUES('$user_id', '$product_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
//        $message[] = 'product added to cart';
//    }

// }

// ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="home">

   <div class="content">
      <h3>Grow On</h3>
      <p>Your garden's time to shine</p>
      <p>Discover the joy of cultivating your own piece of paradise, where 
         every seed planted brings a moment of delight and every blossom tells 
         a story of nurturing hands and thriving dreams. 
      </p>
      <a href="about.php" class="btn">discover more</a>
   </div>

</section>

<!-- <section class="products">

   <h1 class="title">latest products</h1>

   <div class="box-container">

      //<?php
         //$select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 6") or die('query failed');
         //if(mysqli_num_rows($select_products) > 0){
           // while($fetch_products = mysqli_fetch_assoc($select_products)){
      //?>
      <form action="" method="POST" class="box">
         <a href="view_page.php?pid=<?php echo $fetch_products['id']; ?>" class="fas fa-eye"></a>
         <div class="price">Rs.<?php echo $fetch_products['price']; ?>/-</div>
         <img src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="" class="image">
         <div class="name"><?php echo $fetch_products['name']; ?></div>
         <input type="number" name="product_quantity" value="1" min="0" class="qty">
         <input type="hidden" name="product_id" value="<?php echo $fetch_products['id']; ?>">
         <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
         <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
         <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
         <input type="submit" value="add to wishlist" name="add_to_wishlist" class="option-btn">
         <input type="submit" value="add to cart" name="add_to_cart" class="btn">
      </form>
      <?php
       //  }
      //}else{
      //   echo '<p class="empty">no products added yet!</p>';
      //}
      ?>

   </div>

   <div class="more-btn">
      <a href="shop.php" class="option-btn">load more</a>
   </div>

</section> -->
 
<!-- about section starts here  -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body> 

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/img2.jpg" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>With a commitment to quality, innovation, and customer satisfaction, we offer a comprehensive range of gardening products and services 
                tailored to meet your unique requirements. Whether you're a seasoned gardener or just starting, our dedicated team ensures that you have
                 everything you need to cultivate your green oasis and bring your gardening dreams to life.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p>Our extensive inventory features everything from rare and exotic plants to essential gardening tools and supplies, sourced from trusted suppliers and growers.
                 Additionally, we offer valuable resources, informative guides, and inspirational content to empower and inspire garden enthusiasts at every level.</p>
            <a href="guide.php" class="btn">Seasonal gardening tips</a>
        </div>

        <div class="image">
            <img src="images/bg.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/shop.jpg" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p> We are gardeners, with years of experience and expertise in the industry, our knowledgeable staff is committed to delivering exceptional service, expert advice, and
                 unparalleled support to our valued customers. Whether you're embarking on a gardening journey or seeking guidance, trust to be your trusted partner
                  every step of the way.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

    </div>

</section>


<script src="js/script.js"></script>

</body>
</html>
<!-- about section ends here  -->


<section class="home-contact">

   <div class="content">
      <h3>have any questions?</h3>
      <p>Contact us or 
         leave us a message below.</p>
      <a href="contact.php" class="btn">contact us</a>
   </div>

</section>




<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>