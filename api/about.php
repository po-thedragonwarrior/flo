<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>About Us</h3>
    <p> <a href="home.php">Home</a> / About </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/about-img-1" alt="">
        </div>

        <div class="content">
            <h3>Why us?</h3>
            <p>Because we're here with diverse collections</p>
            <a href="shop.php" class="btn">Shop Now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>What do we provide?</h3>
            <p>We provide the best quality products at reasonable price</p>
            <a href="contact.php" class="btn">Contact Us</a>
        </div>

        <div class="image">
            <img src="images/about-img-2.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/about-img-3.jpg" alt="">
        </div>

        <div class="content">
            <h3>Our Identity</h3>
            <p>Techno Main Salt Lake CSE Undergraduate</p>
            <a href="#reviews" class="btn">Client Reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">Client Reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/user1.jpg" alt="">
            <p>New Arrival</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Sibele Pal</h3>
        </div>

        <div class="box">
            <img src="images/user.jpg" alt="">
            <p>Most Unique</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Sasshtik Trivedi</h3>
        </div>

        <div class="box">
            <img src="images/user.jpg" alt="">
            <p>Maybe the Best in Kolkata !/p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Sanjit Dutta</h3>
        </div>

        <div class="box">
            <img src="images/user.jpg" alt="">
            <p>Flower quality is too good</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Sagnik Manna</h3>
        </div>

        <div class="box">
            <img src="images/user1.jpg" alt="">
            <p>Amazing</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Susmita Manna</h3>
        </div>

        <div class="box">
            <img src="images/user.jpg" alt="">
            <p>Experience our Most selling product </p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Rohan Banerjee</h3>
        </div>

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>