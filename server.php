<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // You can add code here to save the message to a database or send it via email
    echo "Thank you, " . $name . ". Your message has been received.";
}
?>
