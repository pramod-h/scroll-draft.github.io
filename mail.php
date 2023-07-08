<?php

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $appointmentType = $_POST['ap-type'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $name = $_POST['your-name'];
    $number = $_POST['your-number'];
    $email = $_POST['your-email'];
    $priceRange = $_POST['price-range'];
    $message = $_POST['your-message'];

    // Create the email message
    $to = 'pramodsh582@gmail.com'; // Enter your email address here
    $subject = 'New Design Consultation Request';

    $emailMessage = "Appointment Type: $appointmentType\n";
    $emailMessage .= "Date: $date\n";
    $emailMessage .= "Time: $time\n";
    $emailMessage .= "Name: $name\n";
    $emailMessage .= "Number: $number\n";
    $emailMessage .= "Email: $email\n";
    $emailMessage .= "Price Range: $priceRange\n";
    $emailMessage .= "Message:\n$message";

    // Set the headers
    $headers = "From: $name <$email>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";

    // Send the email
    if (mail($to, $subject, $emailMessage, $headers)) {
        echo 'Thank you for your message. We will get back to you soon.';
    } else {
        echo 'Unable to send the email. Please try again later.';
    }
} else {
    // Redirect to the form page if accessed directly without submitting the form
    header('Location: index.html');
    exit;
}
