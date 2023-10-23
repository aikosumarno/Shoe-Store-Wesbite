<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Shoes";

$con = mysqli_connect($servername, $username, $password, $dbname);

if ($con){
    echo "Connection Successful";
}
else {
    echo "Connection Failed";
}

if (isset($_POST["import"])){
    $fileName = $_FILES["file"]["tmp_name"];

    if($_FILES["file"]["size"]>0){
        $file = fopen($fileName, "r'");

        while (($column = fgetcsv ($file, 1000, ",")) !== FALSE){
            $sqlInsert = mysqli_query($conn, "INSERT INTO `order`(name, number, email, method, flat, street, city, state, country, pin_code, total_products, total_price) VALUES('$name','$number','$email','$method','$flat','$street','$city','$state','$country','$pin_code','$total_product','$price_total')") or die('query failed');
            

            $result = mysqli_query($conn, $sqlInsert);

            if (!empty($result)){
                echo "Data succesfully imported into database";
            }
            else{
                echo "Unable to upload CSV file into database";
            }
        }
    }
}

?> 

