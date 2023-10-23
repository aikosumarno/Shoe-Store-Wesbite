<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '/Applications/XAMPP/xamppfiles/htdocs/ShoeWebsite/phpmailer/src/Exception.php';
    require '/Applications/XAMPP/xamppfiles/htdocs/ShoeWebsite/phpmailer/src/PHPMailer.php'; 
    require '/Applications/XAMPP/xamppfiles/htdocs/ShoeWebsite/phpmailer/src/SMTP.php';

    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $method = $_POST['method'];
    $flat = $_POST['flat'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $pin_code = $_POST['pin_code'];
    $total_product = $_POST['total_product'];
    $price_total =$_POST['price_total'];

    if(isset($_POST['send'])){
        $mail = new PHPMailer(true);

        $mail -> isSMTP();
        $mail -> Host = 'smtp.gmail.com';
        $mail -> SMTPAuth = true;
        $mail -> Username = 'aikojosephines@gmail.com'; //admin email
        $mail -> Password = 'bnyibayvlzwzaqip'; //admin gmail password
        $mail -> SMTPSecure = 'ssl';
        $mail -> Port = 465;

        $mail -> setFrom('aikojosephines@gmail.com'); //admin gmail

        $mail -> addBcc("aikojosephines@gmail.com");
        $mail -> addAddress($_POST["email"]);

        $mail -> isHTML(true);

        $mail -> Subject = "order summary";
        $mail -> Body =  $_POST['name'];
        $mail -> Body =  $_POST['number'];
        $mail -> Body =  $_POST['email'];
        $mail -> Body =  $_POST['method'];
        $mail -> Body =  $_POST['flat'];
        $mail -> Body =  $_POST['street'];
        $mail -> Body =  $_POST['city'];
        $mail -> Body =  $_POST['state'];
        $mail -> Body =  $_POST['country'];
        $mail -> Body =  $_POST['pin_code'];
        $mail -> Body =  $_POST['total_product'];
        $mail -> Body =  $_POST['price_total'];


        $mail -> send();

        echo

        "

        <script> 
        alert('Sent Successfully');
        documernt.location.href = 'index.php';
        </script>

        ";

        header('location:index.php');

    }




?>



