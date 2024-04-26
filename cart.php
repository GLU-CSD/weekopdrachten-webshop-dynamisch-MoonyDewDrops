<?php
session_start();

include_once 'products.php';

if (isset($_POST['amountOf'])) {
  $product_id = $_POST['id'];
  $quantity = $_POST['amountOf'];

  $sql = "INSERT INTO cart (product_id, quantity) VALUES ('$product_id', '$quantity')";
  if ($conn->query($sql) === TRUE) {

  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

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

  <link rel="shortcut icon" href="assets/Images/favicon.ico">

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
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $btwMath = $row['price'] / 100 * 21;
          $priceWbtwMath = $row['price'] + $btwMath;
          $btw = number_format($btwMath, 2, ',', '');
          $priceWbtw = number_format($row['price'] + $btwMath, 2, ',', '');
      ?>
          <div class="product">
            <img src="<?= $row['photo'] ?>" alt="Product Image" id="ImageStyle" style="height:200px;width:auto;">
            <div class="product-details">
              <div class="name">Name: <?= $row['title'] ?></div>
              <div class="productPrice">Product price: €<?= number_format($row['price'], 2, ',', '') ?></div>
              <div class="amountInCart">Amount: <?= $row['quantity'] ?></div>
              <div class="totalPrice">Total Price: €<?= number_format($row['price'] * $row['quantity'], 2, ',', '') ?></div>
              <div>Btw: €<?=$btw?></div>
              <div>Price including Btw: €<?=$priceWbtw?></div>   
              <br>
              <br>
            </div>
          </div>
      <?php
        }
      } else {
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
      <br>
      <br>
    </div>

    <?php
    include_once 'footer.php';
    ?>

  </div>

</body>

</html>