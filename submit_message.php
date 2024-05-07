<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $message = $_POST["message"];
    
    // Sanitize input (optional)
    $name = htmlspecialchars($name);
    $message = htmlspecialchars($message);
    
    // Save the message to a file or database
    // For example, if using a file:
    $file = 'messages.txt';
    $current = file_get_contents($file);
    $current .= "Name: $name\nMessage: $message\n\n";
    file_put_contents($file, $current);
    
    // Redirect or display a success message
    header("Location: thank_you.html");
    exit();
}
?>
