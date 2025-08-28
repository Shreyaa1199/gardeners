<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

    <div class="flex">

        <a href="home.php" class="logo">The Gardeners.</a>

        <nav class="navbar">
            <ul>
                <li><a href="home.php">home</a></li>
                <!-- <li><a href="#">pages +</a> -->
                    <!-- <ul> -->
                    <li><a href="about.php">about</a></li>
                    <li><a href="contact.php">contact</a></li>
                    <!-- <li><a href="guide.php">Guide</a></li> -->
                    <!-- </ul> -->
                </li>
                <li><a href="shop.php">shop</a></li>
                <li><a href="orders.php">orders</a></li>
                <!-- <li><a href="#">account +</a> -->
                    <!-- <ul> -->
                 <!-- <li><a href="login.php">login</a></li>
                <li><a href="register.php">register</a></li> -->
                    <!-- </ul> -->
                </li>
            </ul>
        </nav>
<!-- modified code to check user log in for withlist and cart  -->
<div class="icons">
    <div id="menu-btn" class="fas fa-bars"></div>
    <a href="search_page.php" class="fas fa-search"></a>
    <div id="user-btn" class="fas fa-user"></div>

    <?php
    session_start();
    // Check if the user is logged in
    if(isset($_SESSION['user_id'])) {
        // If logged in, display wishlist and cart icons with counts
        $select_wishlist_count = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE user_id = '$user_id'") or die('query failed');
        $wishlist_num_rows = mysqli_num_rows($select_wishlist_count);
        ?>
        <a href="wishlist.php"><i class="fas fa-heart"></i><span>(<?php echo $wishlist_num_rows; ?>)</span></a>

        <?php
        $select_cart_count = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
        $cart_num_rows = mysqli_num_rows($select_cart_count);
        ?>
        <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>(<?php echo $cart_num_rows; ?>)</span></a>
    <?php
    } else {
        // If not logged in, display a login link
        ?>
        <a href="login.php"><i class="fas fa-heart"></i><span>(Login to view)</span></a>
        <a href="login.php"><i class="fas fa-shopping-cart"></i><span>(Login to view)</span></a>
    <?php
    }
    ?>
</div>
 <!-- modified code ends here s -->




        <!-- <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
           // <?php
                //$select_wishlist_count = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE user_id = '$user_id'") or die('query failed');
                //$wishlist_num_rows = mysqli_num_rows($select_wishlist_count);
            //?>
            <a href="wishlist.php"><i class="fas fa-heart"></i><span>(<?php echo $wishlist_num_rows; ?>)</span></a>
            //<?php
               // $select_cart_count = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
                //$cart_num_rows = mysqli_num_rows($select_cart_count);
            ?>
            <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>(<?php echo $cart_num_rows; ?>)</span></a>
        </div> -->

        <!-- <div class="account-box">
            <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">logout</a>
        </div> -->



        <!-- modified code -->


        <?php
session_start(); // Start session to access session variables
?>

<?php if(isset($_SESSION['user_id'])): ?>
    <!-- User is logged in, display account box -->
    <div class="account-box">
        <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p><br>
        <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p> <br>
        <a href="logout.php" class="delete-btn">logout</a>
    </div>
<?php else: ?>
    <!-- User is not logged in, display login or register options -->
    <div class="account-box">
        <p><a href="login.php">Login</a></p> <br> <br> 
        <!-- <span> or </span> Text separator -->
        <p><a href="register.php">Register</a></p> 
    </div>
<?php endif; ?>

<!-- till here -->

    </div>

</header>