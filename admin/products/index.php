<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
</head>
<body>

<?php
  include_once 'admin/core/headers.php';
?>

<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Category</th>
      <th>Price</th>
      <th>Photo</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
  <?php
    $sql = "SELECT productID, title, category, price, photo, descriptions FROM products;";
    include 'connection.php';

    $liqry = $con->prepare($sql);
    if($liqry === false) {
        echo mysqli_error($con);
    } else {
        if($liqry->execute()) {
            $liqry->bind_result($productID, $title, $category, $price, $photo, $description);
            while($liqry->fetch()) {
                ?>
                <tr>
                    <td>
                        <a href="edit_product.php?product_id=<?=$productID;?>"><?=$productID;?></a>
                    </td>
                    <td><?php echo $title;?></td>
                    <td><?php echo $category;?></td>
                    <td><?php echo $price;?></td>
                    <td><?php echo $photo;?></td>
                    <td><?php echo $description;?></td> 
                </tr>
                <?php
            }
        }
        $liqry->close();
    }
  ?>
  </tbody>
</table>


<form action="add_product.php" method="post">

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



<?php 
  include_once 'admin/core/footers.php'; 
?>

</body>
</html>
