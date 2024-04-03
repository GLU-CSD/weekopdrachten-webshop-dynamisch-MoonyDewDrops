<?php 
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
      
            if(isset($_POST['amountOf'])){
        
              $_SESSION['cart'][$_POST['id']] = $_POST['amountOf'];
              
              foreach ($_SESSION['cart'] as $id => $Amount) {

                foreach ($products as $product) {

                  if ($product['id'] == $id) {

                    $total = $product['price'] * $Amount;
                    $btwAmnt = round(((21 / 100) * $total), 2);
                    $WithBtw = $total + $btwAmnt;
                    ?>

                    <div class="product">

                      <img src="<?=$product['photo']?>" alt="Product Image">

                      <div class="product-details">

                        <div class="name">Name: <?=$product['title']?></div>
                        <div class="productPrice">Product price: €<?=$total?></div>
                        <div class="cartPrice">Individual product price: €<?=$product['price']?></div>
                        <div class="amountInCart">Amount : <?=$Amount?></div>
                        <div class="totalPrice">Total Price: €<?=$total?></div>

                      </div>
                      
                      <!-- berekening zal zijn (21 / 100) * totaal prijs. stop gwn in een variabel zo van $btw = (21/100) * totaal prijs(de variabel dan) -->
                      <div class="btwClass">

                        Btw: €<?=$btwAmnt?>

                      </div>

                      <div class="priceWbtw">

                        Total price: €<?=$WithBtw?>

                      </div>

                    </div>

                    <?php
                  }

                }

              }
              
              ?>

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