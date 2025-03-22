<?php
// Display errors for debugging (disable in production)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Define a simple welcome message
$welcomeMessage = "Welcome to Me Consultancy Online!";

// Get the current date and time
date_default_timezone_set('UTC'); // Set to your timezone if needed
$currentDateTime = date('Y-m-d H:i:s');

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>
<body style="font-family: Arial, sans-serif; text-align: center; padding: 20px;">
    <h1><?php echo $welcomeMessage; ?></h1>
    <p>Current Date and Time: <strong><?php echo $currentDateTime; ?></strong></p>
</body>
</html>

