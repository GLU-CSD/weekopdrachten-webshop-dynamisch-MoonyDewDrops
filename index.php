<?php
session_start();

    include_once 'products.php';

    // Fetch products from the database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

// Check if there are any products
if ($result->num_rows > 0) {
    $products = array();
    // Fetch each row of the result as an associative array and add it to the products array
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
} else {
    // If no products found, you can handle it accordingly
    echo "No products found";
}

$conn->close();
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>

  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/0TopBalk.css">
  <link rel="stylesheet" href="assets/css/1navigationBalk.css">
  <link rel="stylesheet" href="assets/css/2Filter.css">
  <link rel="stylesheet" href="assets/css/3products.css">
  <link rel="stylesheet" href="assets/css/footer.css">

  <meta name="description" content="">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta property="og:image:alt" content="">

  <link rel="shortcut icon" href="assets/Images/favicon.ico">
  <meta name="theme-color" content="#fafafa">

  <script defer src="assets/js/app.js"></script>
</head>

<body>

  <div class="container">

    <?php
    include_once 'header.php';
    include_once 'filter.php';
    ?>

    <div class="products">
      <?php
      
      if (isset($products)) {
          foreach ($products as $product) {
      ?>
        <a href="productPage.php?id=<?= $product['id'] ?>" style="text-decoration:none;color:black;">
          <div class="product-item">
            <img src="<?= $product['photo'] ?>" alt="<?= $product['title'] ?>" style="width: 100%; height: auto">
            <br> <br>
            <?= $product['title'] ?>
            <p>€<?= $product['price'] ?></p>
          </div>
        </a>
      <?php
          }
      } else {
          echo "No products available.";
      }
      ?>
      <div id="nextPage" class="skip">
        <p>1, 2, 3, 4 ... 10</p>
      </div>
    </div>

    <?php
    include_once 'footer.php';
    ?>

  </div>
</body>

</html>