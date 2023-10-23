<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>products</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/productstyle.css">
</head>
<body>


<header class="header">

   <div class="flex">

      <a href="#" class="logo">shoe academy</a>

      <nav class="navbar">
         <a href="userindex.php">Return to Main Menu</a>
         <a href="products.php">View Products</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <<a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>

<section class="home" id="home">
    <div class="content">
        <h3>Thank you for shopping with us!</h3>
        <p>A receipt has been sent to your email.</p>
    </div>

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

</section>



<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>