<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];

    // Checking if the entered username is "admin"
    if ($username === "admin") {
        // Reverse the username
        $reversedUsername = strrev($username);
        // Display the welcome message
        echo "Welcome " . $reversedUsername;
    } else {
        // Display error message for incorrect username
        echo "Invalid username. Please try again.";
    }
} else {
    // If the script is accessed without POST data, redirect to the login page
    header("Location: index.html");
    exit();
}
?>
