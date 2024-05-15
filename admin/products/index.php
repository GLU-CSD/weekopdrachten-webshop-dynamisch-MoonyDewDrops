<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
</head>
<body>

<?php
  include_once '../core/headers.php';
?>

<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Product ID</th>
      <th>Title</th>
      <th>Category</th>
      <th>Price</th>
      <th>Photo</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
  <?php
    $sql = "SELECT id, productID, title, category, price, photo, descriptions FROM products;";
    include_once '../../connection.php';

    $liqry = $conn->prepare($sql);
    if($liqry === false) {
        echo mysqli_error($conn);
    } else {
        if($liqry->execute()) {
            $liqry->bind_result($id, $productID, $title, $category, $price, $photo, $description);
            while($liqry->fetch()) {
                ?>
                <tr>
                    <td><?=$id?></td>
                    <td><?=$productID;?></td>
                    <td><?=$title;?></td>
                    <td><?=$category;?></td>
                    <td><?=$price;?></td>
                    <td><?=$photo;?></td>
                    <td><?=$description;?></td> 
                </tr>
                <?php
            }
        }
        $liqry->close();
    }
  ?>
  </tbody>
</table>

<!-- form for adding products -->
<div class="addProduct">
  <p>Add a product</p>
  <form action="add_product.php" method="post">

    <label for="productID">Product ID:</label><br>
    <input type="text" id="productID" name="productID"><br>

    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title"><br>

    <label for="category">Category:</label><br>
    <input type="text" id="category" name="category"><br>

    <label for="price">Price:</label><br>
    <input type="text" id="price" name="price"><br>

    <label for="photo">Photo:</label><br>
    <input type="text" id="photo" name="photo"><br>

    <label for="descriptions">Description:</label><br>
    <textarea id="descriptions" name="descriptions"></textarea><br>
    
  <input type="submit" value="Add Product">
  </form>
</div>

<br>

<!-- form for editing products -->
<div class="editProduct">
  <p>Edit a product</p>
  <form action="edit_product.php" method="post">

    <label for="productID">Product ID of what you want to edit:</label><br>
    <input type="text" id="productID" name="productID"><br>

    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title"><br>

    <label for="category">Category:</label><br>
    <input type="text" id="category" name="category"><br>

    <label for="price">Price:</label><br>
    <input type="text" id="price" name="price"><br>

    <label for="photo">Photo:</label><br>
    <input type="text" id="photo" name="photo"><br>

    <label for="descriptions">Description:</label><br>
    <textarea id="descriptions" name="descriptions"></textarea><br>
    
  <input type="submit" value="Edit Product">
  </form>
</div>

<br>

<!-- form for deleting products -->
<div class="deleteProduct">
  <p>Delete a product</p>
  <form action="delete_product.php" method="post">

    <label for="productID">Product ID of what you want to delete:</label><br>
    <input type="text" id="productID" name="productID"><br>
    
  <input type="submit" value="Delete Product">
  </form>
</div>

<?php 
  include_once '../core/footers.php'; 
?>

</body>
</html>
