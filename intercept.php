<?php
session_start();

if (isset($_POST['clear_cart'])) {
    // Unset the session
    session_unset();
    // Redirect back to cart.php after unsetting the session
    header("Location: cart.php");
    exit(); // Ensure script execution stops after redirection
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirecting...</title>
    <meta http-equiv="refresh" content="0; URL=cart.php">
</head>
<body>
    <a href="cart.php">Click here if not redirected.</a>
</body>
</html>
