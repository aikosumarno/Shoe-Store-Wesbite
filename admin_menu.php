<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Website</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/admin_menu_style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo">
        <img src="images/logo.png" alt="">
    </a>

    <nav class="navbar">
        <a href="#products">products</a>
        <a href="#orders">orders</a>
        <a href="#contact">contact</a>
        <a href="#analytics">analytics</a>
        <a href="#customerpage">customer page</a>
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

</header>

<!-- header section ends -->


<!-- home section starts  -->

<section class="home" id="home">
    <div class="content">
        <h3>Shoe Academy!</h3>
        <p>The home of locally made Indonesian shoes. A collection of 1000+ designs with a large range of sizes.</p>
        <h3>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h3>
    </div>


    
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

</section>

<!-- home section ends -->


<!-- menu section starts  -->
<section class="menu" id="menu">

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/menu.png" alt="">
            </div>
            <a href="admin_page.php" class="btn">products</a>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/menu.png" alt="">
            </div>
            <a href="orderspage.php" class="btn">orders</a>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/menu.png" alt="">
            </div>
            <a href="admin_contact.php" class="btn">contacts</a>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/menu.png" alt="">
            </div>
            <a href="linechart.php" class="btn">analytics</a>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/menu.png" alt="">
            </div>
            <a href="index.php" class="btn">customer page</a>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/menu.png" alt="">
            </div>
            <a href="logout.php" class="btn">logout</a>
        </div>

    </div>

</section>


<!-- menu section ends -->



<!-- contact section starts  -->


<!-- contact section ends -->


<!-- footer section starts  -->

<section class="footer">

    <div class="credit">shoe academy <span>based in jakarta</span> | all rights reserved | classified information |</div>

</section>

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="/Users/aikosumarno/Desktop/CS IA/Program/Website 2/js/script.js"></script>

</body>
</html>