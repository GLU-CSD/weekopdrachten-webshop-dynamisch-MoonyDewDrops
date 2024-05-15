<?php
session_start();

include_once '../../connection.php';

//checking if its a GET
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  //checking if girl aint starving[empty]
  if (isset($_GET['id']) && !empty($_GET['id'])) {
    //setting the thing as the post so we acc got sum to work with
    $id = $_GET['id'];

    //the sql command :3
    $sql = "DELETE FROM products WHERE id = ?";

    $stmt = $conn->prepare($sql);
    //bind the question mark in the sql command to the variable. very useful my friend 
    $stmt->bind_param("s", $id);

    //checkin if its bein executed
    if ($stmt->execute()) {
      //to see if there was any of the things affected, and if it isnt, it'll display an error  
      if ($stmt->affected_rows > 0) {?>
        <a href='index.php'>Deleted succesfully</a>
     <?php
      } else {
        //error message :3
        echo "No product found with the ID provided";
      }
    } else {
      //other error message :D
      echo "Error deleting product: " . $conn->error;
    }

    $stmt->close();
  } else {
    //yuupp, shows if there's nothing filled in
    echo "Product ID is required";
  }
}

$conn->close();
?>