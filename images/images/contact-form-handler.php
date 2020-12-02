<?php
    $name = $_POST['name'];
    $visitor = $_POST['email'];
    $message = $_POST['message'];


    $email_from = "gillelamaheshwerreddy1999@gmail.com";
    $email_subject = "New Form Submission";
    $email_body = "User Name: $name.\n". "User Email: $visitor.\n". "User Message: $message.\n";


    $to = "vtu10149@veltechuniv.edu.in";
    $headers = "From: $email_from\r\n";

    $headers .="Reply-To: $visitor\r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: contact.php");
    ?>
