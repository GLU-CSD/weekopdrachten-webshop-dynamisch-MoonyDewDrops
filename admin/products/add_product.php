<?php
session_start();

include_once 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $photo = $_POST['photo'];
    $descriptions = $_POST['descriptions'];

    $sql = "INSERT INTO products (title, category, price, photo, descriptions) VALUES (?, ?, ?, ?, ?)";
    $insertqry = $con->prepare($sql);
    if ($insertqry === false) {
        echo mysqli_error($con);
    } else {
        $insertqry->bind_param('ssdss', $title, $category, $price, $photo, $descriptions);
        if ($insertqry->execute()) {
            echo "Product added successfully!";
        } else {
            echo "Error adding product: " . $insertqry->error;
        }
    }
    $insertqry->close();
}

$con->close();
?>
