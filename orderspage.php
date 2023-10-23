<?php

@include 'config.php';

if(isset($_POST['add_product'])){

   $product_type = $_POST['product_type'];
   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_quantity = $_POST['product_quantity'];
   $product_status = $_POST['product_status'];

   if(empty($product_type) || empty($product_name) || empty($product_price)|| empty($product_status)){
      $message[] = 'please fill out all';
   }else{
      $insert = "INSERT INTO orders(type, name, price, quantity, status) VALUES('$product_type', '$product_name', '$product_price','$product_quantity', '$product_status')";
      $upload = mysqli_query($conn,$insert);
      if($upload){
         $message[] = 'New order added successfully!';
      }else{
         $message[] = 'Error!';
      }
   }

};

if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM orders WHERE id = $id");
   header('location:orderspage.php');
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <!-- font awesome cdn link --> 
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link -->
    <link rel = "stylesheet" href = "css/adminstyle.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '<span class="message">'.$message.'</span>';
   }
}

?>
    
<div class = "container">
    <div class="admin-product-form-container">
        <form action= "<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
            <h3>add a new order</h3>
            <input type="text" placeholder="enter  product type" name = product_type class="box">
            <input type="text" placeholder="enter product name" name="product_name" class="box">
            <input type="number" placeholder="enter product price" name="product_price" class="box">
            <input type="number" placeholder="enter product quantity" name="product_quantity" class="box">
            <input type="text" placeholder="enter status" name="status" class="box">
            <input type="submit" class="btn" name="add_product" value="add order">
      </form>
    </div>

    <?php

   $select = mysqli_query($conn, "SELECT * FROM orders");
   
   ?>
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>type</th>
            <th>name</th>
            <th>price</th>
            <th>quantity</th>
            <th>status</th>
            <th>action</th>
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            <td><?php echo $row['type']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td>$<?php echo $row['price']; ?></td>
            <td><?php echo $row['quantity']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td>
               <a href="orders_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
               <a href="orderspage.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>

</div>

</body>
</html>