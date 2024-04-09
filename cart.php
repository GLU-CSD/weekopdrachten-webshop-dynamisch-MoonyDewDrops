<?php
//starts session
session_start();
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
      include_once 'products.php';

      //if there's a post w amountOf do the magic
      if (isset($_POST['amountOf'])) {

        //sets the thing as the post of amountOf
        $_SESSION['cart'][$_POST['id']] = $_POST['amountOf'];

        //for every thing in the session, does id as the key and amount as the value
        foreach ($_SESSION['cart'] as $id => $Amount) {

          //nother foreach loop, for every product (which will act as the other variable listed on the right)
          foreach ($products as $product) {

            //if the product id is equal to the variable of id excecutes the stuff
            if ($product['id'] == $id) {

              //math for the prices n stuff like that
              $total = $product['price'] * $Amount;
              $btwAmnt = round(((21 / 100) * $total), 2);
              $WithBtw = $total + $btwAmnt;

              $CorrectTotal = number_format($total, 2, ',', '');

              $CorrectPrice = number_format($product['price'], 2, ',', '');

              $CorrectBtwAmnt = number_format($btwAmnt, 2, ',', '');
              $CorrectWithBtw = number_format($WithBtw, 2, ',', '');
              
      ?>

              <div class="product">

                <!-- sets the image as the link that is said in the products database. -->
                <img src="<?= $product['photo'] ?>" alt="Product Image" id="ImageStyle" style="height:200px;width:auto;">

                <div class="product-details">

                  <!-- Same here with the title n price, just gets the info from the product database. It can do this bcs its on the item of which the id
                variable aligns with, so it does the things where the id is the same as the id in the array, n not sum else.
                quick thing: if you have 1 in your array, and you have a variable which 1, and loops to find this (by doing if ($product['id'] = $id)),
                it will then put all the requested info into the things, and not of 2, because we r not on 2, we're on 1. -->
                  <div class="name">Name: <?= $product['title'] ?></div>
                  <div class="productPrice">Product price: €<?= $CorrectTotal ?></div>
                  <div class="cartPrice">Individual product price: €<?= $CorrectPrice ?></div>
                  <div class="amountInCart">Amount : <?= $Amount ?></div>
                  <div class="totalPrice">Total Price: €<?= $CorrectTotal ?></div>

                </div>

                <!-- berekening zal zijn (21 / 100) * totaal prijs. stop gwn in een variabel zo van $btw = (21/100) * totaal prijs(de variabel dan) -->
                <div class="btwClass">

                  Btw: €<?= $CorrectBtwAmnt ?>

                </div>

                <div class="priceWbtw">

                  Total price: €<?= $CorrectWithBtw ?>

                </div>

                <br>

              </div>

        <?php
            }
          }
        }

        ?>

        <!-- cute lil buttons for paying and clearing the cart -->
        <button id="Paying" onclick="location.href='form.php'">Pay?</button>
        <button id="ClearCart" onclick="location.href='intercept.php'">Clear?</button>

      <?php
      } else {

        echo 'Whoops, looks like your cart is empty. Maybe try adding a few things?';
      }

      ?>

    </div>

    <?php
    include_once 'footer.php';
    ?>

  </div>

</body>

</html>