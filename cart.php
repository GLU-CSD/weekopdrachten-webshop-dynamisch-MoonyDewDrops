<?php
// Start session
session_start();

// Include the database connection script
include_once 'products.php'; // Assuming you've created this file

// If there's a post with 'amountOf', add item to the cart
if (isset($_POST['amountOf'])) {
    // Get product ID and quantity from the form
    $product_id = $_POST['id'];
    $quantity = $_POST['amountOf'];

    // Insert the item into the cart table
    $sql = "INSERT INTO cart (product_id, quantity) VALUES ('$product_id', '$quantity')";
    if ($conn->query($sql) === TRUE) {
        echo "Item added to cart successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Fetch items from the cart table
$sql = "SELECT products.*, cart.quantity FROM products INNER JOIN cart ON products.id = cart.product_id";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="assets/css/0TopBalk.css">
  <link rel="stylesheet" href="assets/css/1navigationBalk.css">
  <link rel="stylesheet" href="assets/css/cartStyle.css">
  <link rel="stylesheet" href="assets/css/footer.css">

  <!--Thing that links the javascript to this document-->
  <script defer src="assets/js/app.js"></script>

  <title>Cart</title>
</head>

<body>

  <div class="container">

    <?php
    include_once 'header.php';
    ?>


    <div id="cart">
      <header style="font-size: 40px; text-align: center;">Cart</header>
      <br>
      <?php
      // Display cart items
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              // Display cart item details
      ?>
              <div class="product">
                <!-- Display product image -->
                <img src="<?= $row['photo'] ?>" alt="Product Image" id="ImageStyle" style="height:200px;width:auto;">
                <div class="product-details">
                  <!-- Display product name, quantity, and total price -->
                  <div class="name">Name: <?= $row['title'] ?></div>
                  <div class="productPrice">Product price: €<?= number_format($row['price'], 2, ',', '') ?></div>
                  <div class="amountInCart">Amount: <?= $row['quantity'] ?></div>
                  <div class="totalPrice">Total Price: €<?= number_format($row['price'] * $row['quantity'], 2, ',', '') ?></div>
                </div>
              </div>
      <?php
          }
      } else {
          // Display message if cart is empty
          echo "Cart is empty";
      }

      $conn->close();
      ?>
      
      <!-- Cute lil buttons for paying and clearing the cart -->
      <div class="buttons">
        <button id="Paying" onclick="location.href='form.php'">Pay?</button>
        <form action="intercept.php" method="post">
         <button type="submit" name="clear_cart" id="ClearCart">Clear?</button>
        </form>

      </div>
    </div>

    <?php
    include_once 'footer.php';
    ?>

  </div>

</body>

</html>
