<?php
    $myemail = "pramodsh582@gmail.com";
    $name = $_POST['your-name'];
    $email_address = $_POST["your-email"];
    $message = $_POST['your-message'];
    $phone = $_POST['your-number'];
    $price = $_POST['price-range'];
    $to = $myemail;
    $email_subject = "$name";
    $email_body = "You have received a new message. ".
    " Here are the details:\n Name: $name \n ".
    "Email: $email_address\n Phone: $phone\n Message \n $message";
    $headers = "From: $myemail\n";
    $headers = "Reply-To: $email_address";
    mail($to,$email_subject,$email_body,$headers);
    //redirect to the 'thank you' page
    header('Location: ./index.html');
?>