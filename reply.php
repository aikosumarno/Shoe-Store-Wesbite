<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '/Applications/XAMPP/xamppfiles/htdocs/ShoeWebsite/phpmailer/src/Exception.php';
    require '/Applications/XAMPP/xamppfiles/htdocs/ShoeWebsite/phpmailer/src/PHPMailer.php'; 
    require '/Applications/XAMPP/xamppfiles/htdocs/ShoeWebsite/phpmailer/src/SMTP.php';

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

        $mail -> addAddress($_POST["email"]);

        $mail -> isHTML(true);

        $mail -> Subject = $_POST["subject"];
        $mail -> Body = $_POST["message"];

        $mail -> send();

        echo

        "

        <script> 
        alert('Sent Successfully');
        documernt.location.href = 'index.php';
        </script>

        ";

        header('location:admin_contact.php');

    }

?>



