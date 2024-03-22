<?php
session_start();

// function setCartedProduct(){
//   $_SESSION["productID"] = $product['id'];
// }
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

  <!--Thing that links the javascript to this document-->
  <script defer src="assets/js/app.js"></script>

</head>

<body>

  <!--Container that contains everything-->
<div class="container">

    <?php
    include_once 'header.php';
    ?>

    <?php
      include 'filter.php';
    ?>

    <?php
    include 'products.php';
    ?>

    <!--Thing where products r inside-->
  <div class="products">

    <!--the start of the products. Has the cover image of the song, n height&width inside it. 
    Inside here r the image, name, price & add to cart button-->

    <?php
      foreach ($products as $product) {
        echo '<div id="product" class="product-item">
      
        <img src="'.$product['photo'].'" alt="'.$product['title'].'" 
        style="width: 100%; height: auto">
        <a href="productPage.php?id='.$product['id'].'">'.$product['title'].'</a>
        <p>€'.$product['price'].'</p>
        <br>
        <button type="button" class="productButtons" onclick="addProduct()">Add to cart</button>
        </div>';
      }
    ?>

    <!--The next page box that already works but just need to see if i rlly need it in the end. Otherwise remove this later-->
    <div id="nextPage" class="skip">
      <p><a href="http://127.0.0.1:5500/">1</a>, <a href="http://127.0.0.1:5500/">2</a>, 3, 4 ... 10</p>

    </div>

    </div>

    <?php
      include 'footer.php';
    ?>

</div>
      
</body>

</html>