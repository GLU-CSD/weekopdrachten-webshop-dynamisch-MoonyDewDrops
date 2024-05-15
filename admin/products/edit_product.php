<?php
session_start();
include_once '../../connection.php';

  //checking if its a post/get
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //setting the things as the posts so we acc got sum to work with   
    $id = $_GET['id'];
    $productID = $_POST['productID'];
    $title = $_POST['title'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $photo = $_POST['photo'];
    $description = $_POST['descriptions'];

    //sql command :33
    $sql = "UPDATE products SET productID = ?, title = ?, category = ?, price = ?, photo = ?, descriptions = ? WHERE id = ?";
    $updateqry = $conn->prepare($sql);

    //if there aint a update querry, show an error :3
    if ($updateqry === false) {
        echo mysqli_error($conn);
    } else {
        //else it just updates!! :DD
        $updateqry->bind_param('sssdsss', $productID, $title, $category, $price, $photo, $description, $id); 
        if ($updateqry->execute()) {
            //If it does its thang <3?>
                <a href='index.php'>Updated succesfully</a>
             <?php
        } else {
            //if it dont do its thang </3
            echo "Error updating product: " . $updateqry->error;
        }
    }

    //close up girl
    $updateqry->close();
}


$conn->close();
?>
