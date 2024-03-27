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

  <!--Thing that links the javascript to this document-->
  <script defer src="assets/js/app.js"></script>

</head>

<body>

  <!--Container that contains everything-->
<div class="container">

    <?php
    include_once 'header.php';

    include_once 'filter.php';

    include_once 'products.php';
    ?>

    <!--Thing where products r inside-->
  <div class="products">

    <!--the start of the products. Has the cover image of the song, n height&width inside it. 
    Inside here r the image, name, price & add to cart button-->

    <?php
      foreach ($products as $product) {
        ?>
        <a href="productPage.php?id=<?=$product['id']?>" style="text-decoration:none;color:black;">
        
          <div id="product" class="product-item" >
      
          <img src="<?=$product['photo']?>" alt="<?=$product['title']?>" 
          style="width: 100%; height: auto">
          <?=$product['title']?>
          <p>€<?=$product['price']?></p>

          <!-- <button type="button" class="productButtons" onclick="addProduct()">Add to cart</button> -->
          </div>
        </a>
        <?php
      }
    ?>

    <!--The next page box that already works but just need to see if i rlly need it in the end. Otherwise remove this later-->
    <div id="nextPage" class="skip">
      <p><a href="http://127.0.0.1:5500/">1</a>, <a href="http://127.0.0.1:5500/">2</a>, 3, 4 ... 10</p>

    </div>

    </div>

    <?php
      include_once 'footer.php';
    ?>

</div>
      
</body>

</html>


