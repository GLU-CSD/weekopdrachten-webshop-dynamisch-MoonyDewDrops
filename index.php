<?php
session_start();
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
      //Database connection
      include_once 'products.php'; //(the one above this one)

      // Check if id is good or whateva
      if (isset($_GET['id'])) {
        // protection
        $id = intval($_GET['id']);
        // getting stuff based off id
        $sql = "SELECT * FROM products WHERE id = $id";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
          // Loop through the results
          while ($product = $result->fetch_assoc()) {
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
          echo "No product found with the provided ID";
        }
      } else {
        echo "No ID provided";
      }
      ?>

      <!--The next page box that already works but just need to see if i rlly need it in the end. Otherwise remove this later-->
      <!-- Deleted this, but it's just a href added to the text. If i wanna do this stuff in the future, ik what to do -->
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