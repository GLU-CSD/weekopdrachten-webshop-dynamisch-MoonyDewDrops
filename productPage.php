<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product page</title>

  <link rel="stylesheet" href="assets/css/pageProductLayout.css">

  <link rel="stylesheet" href="assets/css/0TopBalk.css">
  <link rel="stylesheet" href="assets/css/1navigationBalk.css">
  <link rel="stylesheet" href="assets/css/pageProduct.css">
  <link rel="stylesheet" href="assets/css/footer.css">

  <link rel="shortcut icon" href="assets/Images/favicon.ico">
  <meta name="theme-color" content="#fafafa">

  <!--Thing that links the javascript to this document-->
  <script defer src="assets/js/ImageSelector.js"></script>
  <script defer src="assets/js/app.js"></script>

</head>

<body>


  <div class="container">
    <!-- Header -->
    <?php include_once 'header.php'; ?>

    <!-- Product -->
    <div class="product">
      <?php
      include_once 'products.php';

      //if the get for id isnt empty, to the magic
      if (!empty($_GET['id'])) {

        //sets the id variable as the get
        $id = $_GET['id'];

        //sets the variable to false if that wasn't obvious
        $productExist = false;

        //cute foreach loop n stuff :3
        foreach ($products as $product) {

          //if the product id (the one of the product array in the products.php file) is equal to the id variable (basically the Get['id])
          if ($product['id'] == $id) {
            //then the product exists :D Makes it so that i can do the 'product not found' stuff if it aint so easily
            $productExist = true;
      ?>
            <!-- here we're just setting all the data for the product gotten from the products.php file and used -->
            <div id="overviewProduct">
              <img src="<?= $product['photo'] ?>" id="bigImage">
              <div id="overall">
                <?= $product['title'] ?> <br> <br>
                €<?= $product['price'] ?> <br> <br>
                <form action="cart.php" method="post">
                  <input type="number" name="amountOf" placeholder="1" style="width:10%;" required>
                  <input type="hidden" name="id" value="<?= $product['id'] ?>">

                  <button type="submit" id="description">
                    Add to cart?
                  </button>
                </form>
                <br><br>
                <?= $product['description'] ?>
              </div>

              <div id="tinyImages">
                <img src="<?= $product['photo'] ?>" class="tiniestImages">
                <img src="<?= $product['photo2'] ?>" class="tiniestImages">
                <img src="<?= $product['photo3'] ?>" class="tiniestImages">
              </div>
            </div>
      <?php
          }
        }
      }
      if (!$productExist) {
        //Does this thing so if they cant find a product, you got this
        echo 'Product not found';
      }

      ?>
    </div>

    <!-- Footer -->
    <?php include_once 'footer.php'; ?>
  </div>


</body>

</html>