<?php
  session_start();

  include_once '../../connection.php';

  //checking if its a post
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //checking if girl aint starving[empty]
    if(isset($_POST['productID']) && !empty($_POST['productID'])) {
      //setting the thing as the post so we acc got sum to work with
      $productID = $_POST['productID'];

       //the sql command :3
      $sql = "DELETE FROM products WHERE productID = ?";

      $stmt = $conn->prepare($sql);
      //bind the question mark in the sql command to the variable. very useful my friend 
      $stmt->bind_param("s", $productID);
      
      //checkin if its bein executed
      if ($stmt->execute()) {
        //to see if there was any of the things affected, and if it isnt, it'll display an error
        if ($stmt->affected_rows > 0) {
          echo "Product deleted successfully";
        } else {
          //error message :3
          echo "No product found with the ID provided";
        }
      } else {
        //other error message :D
        echo "Error deleting product: " . $conn->error;
      }
      
      //closin it up
      $stmt->close();
    } else {
      //yuupp, shows if there's nothing filled in
      echo "ProductID is required";
    }
  }

  $conn->close();
?>
