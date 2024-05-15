<?php
session_start();

include_once '../../connection.php';

//checking if its a post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //checking if girl aint starving[empty]
    $productID = $_POST['productID'];
    $title = $_POST['title'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $photo = $_POST['photo'];
    $description = $_POST['descriptions'];

    //sql command :33
    $sql = "INSERT INTO products (productID, title, category, price, photo, descriptions) VALUES (?, ?, ?, ?, ?, ?)";

    //querry thingy
    $insertqry = $conn->prepare($sql);
    //if there aint a update querry, show an error :3
    if ($insertqry === false) {
        echo mysqli_error($conn);
    } else {
        //else it just updates!! :DD
        $insertqry->bind_param('sssdss', $productID, $title, $category, $price, $photo, $description); 
        if ($insertqry->execute()) {
            //if it succesfully adds the thing
            echo "Product added successfully!";
        } else {
            //if it fails
            echo "Error adding product: " . $insertqry->error;
        }
    }
    $insertqry->close();
}

$conn->close();
?>
