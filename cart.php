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
    include 'header.php';
  ?>


  <div id="cart">
    <?php
      include 'products.php';
        $id = $_GET['id'];
        $amount = $AmountProduct;
        foreach($products as $product){
            if($product['id'] == $id){
                $price = $product['price'];
                ?>

                <div class="topRow">

                  <div id="name"><?=$product['title']?></div>

                  <div id="productPrice">productprijs</div>

                  <div id="cartPrice"><?=$price?></div>

                  <div id="amountInCart"><?php
                    // echo $_SESSION["ProductInCart"];
                  ?></div>

                  <div id="totalPrice">Totaal prijs</div>

                </div>

                <br> <br>
                
                <!-- berekening zal zijn (21 / 100) * totaal prijs. stop gwn in een variabel zo van $btw = (21/100) * totaal prijs(de variabel dan) -->
                <div class="btwClass">
                  btw

                </div>
                <br> <br>

                <!-- bij deze dan gwn de variabel van de btw + degene van de totale prijs -->
                <div id="priceWbtw" style="margin-left:90%;">

                  prijs met btw

                </div>
                <?php
            }

                     
      }
    ?>
    
  </div>



  <?php
    include 'footer.php';
  ?>

</div>
    
</body>
</html>