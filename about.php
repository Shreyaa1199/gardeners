<?php

// $user_id = "";
@include 'config.php';
session_start();
$user_id = "";
 if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
 }




// if(!isset($user_id)){
//    header('location:login.php');
// }

?>

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

    <?php @include 'header.php'; ?>

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
                <p>With a commitment to quality, innovation, and customer satisfaction, we offer a comprehensive range
                    of gardening products and services
                    tailored to meet your unique requirements. Whether you're a seasoned gardener or just starting, our
                    dedicated team ensures that you have
                    everything you need to cultivate your green oasis and bring your gardening dreams to life.</p>
                <a href="shop.php" class="btn">shop now</a>
            </div>

        </div>

        <div class="flex">

            <div class="content">
                <h3>what we provide?</h3>
                <p>Our extensive inventory features everything from rare and exotic plants to essential gardening tools
                    and supplies, sourced from trusted suppliers and growers.
                    Additionally, we offer valuable resources, informative guides, and inspirational content to empower
                    and inspire garden enthusiasts at every level.</p>
                <a href="contact.php" class="btn">contact us</a>
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
                <p> We are gardeners, with years of experience and expertise in the industry, our knowledgeable staff is
                    committed to delivering exceptional service, expert advice, and
                    unparalleled support to our valued customers. Whether you're embarking on a gardening journey or
                    seeking guidance, trust to be your trusted partner
                    every step of the way.</p>
                <a href="#reviews" class="btn">clients reviews</a>
            </div>

        </div>

    </section>

    <section class="reviews" id="reviews">

        <h1 class="title">client's reviews</h1>

        <div class="box-container">

            <div class="box">
                <img src="images/pic-1.png" alt="">
                <p>Fast shipping and plants arrived in perfect condition. Their packaging is top-notch!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Tom</h3>
            </div>

            <div class="box">
                <img src="images/pic-2.png" alt="">
                <p>Excellent customer service. They really helped me choose the right plants for my climate!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Deeya</h3>
            </div>

            <div class="box">
                <img src="images/pic-3.png" alt="">
                <p>The website is so easy to navigate, and I found exactly what I was looking for. Will definitely be
                    back for more.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Atlas</h3>
            </div>

            <div class="box">
                <img src="images/pic-4.png" alt="">
                <p>Fantastic selection and quality! My garden has never looked better. Fast shipping too!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Angel</h3>
            </div>

            <div class="box">
                <img src="images/pic-5.png" alt="">
                <p>Great prices and the plants arrived in perfect condition. Highly recommend!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Ryle</h3>
            </div>

            <div class="box">
                <img src="images/pic-6.png" alt="">
                <p>Ordered several garden decor items and they're just beautiful. Adds so much charm to my garden!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Shreya</h3>
            </div>

        </div>

    </section>











    <?php @include 'footer.php'; ?>

    <script src="js/script.js"></script>

</body>

</html>