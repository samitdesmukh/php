<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];

    
    if ($username === "admin") {
        
        $reversedUsername = strrev($username);
        
        echo "Welcome " . $reversedUsername;
    } else {
        
        echo "Invalid username. Please try again.";
    }
} else {
   
    header("Location: index.html");
    exit();
}
?>
