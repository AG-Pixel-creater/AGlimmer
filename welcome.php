<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars(trim($_POST['username']));
    echo "<h1>Welcome, " . $username . "!</h1>";
    echo "<p>Thank you for visiting AG Browser. We're glad to have you here.</p>";
} else {
    echo "<h1>No username provided.</h1>";
}
?>
