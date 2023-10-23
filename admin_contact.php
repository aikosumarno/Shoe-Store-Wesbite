<?php

@include 'config.php';

if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM contact WHERE id = $id");
   header('location:admin_contact.php');
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/adminstyle.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '<span class="message">'.$message.'</span>';
   }
}

?>
   
<div class="container">

   <div class="admin-product-form-container">

      <form action = "reply.php" method="post">
            <h3>Reply to customers</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" name = "name" placeholder="name">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" name = "email" placeholder="email" value = "">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="text" name = "subject" placeholder="subject" id="">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="text" name = "message" placeholder="message" id="">
            </div>
            <button type = "submit" class = "btn btn-success" name = "send">Contact Now</button>
        </form>


   </div>

   <?php

   $select = mysqli_query($conn, "SELECT * FROM contact");
   
   ?>
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>name</th>
            <th>email</th>
            <th>subject</th>
            <th>message</th>
            <th>action</th>
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['subject']; ?></td>
            <td><?php echo $row['message']; ?></td>
            <td>
               <a href="admin_contact.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> Completed </a>
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>

</div>


</body>
</html>