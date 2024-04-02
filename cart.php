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
    <header style="font-size: 40px; text-align: center;">Product</header>
    <br>
    <?php
      include_once 'products.php';
      
      if (!empty($_SESSION['produceID'])){
        $products = $_SESSION['produceID'];

        $id = $products['id'];
        $price = $products['price'];
        $coverPhoto = $products['photo'];
        $title = $products['title'];


        if(isset($_POST['amountOf'])){

        $Amount = $_POST['amountOf'];

        $_SESSION['amountOfProduct'] = $Amount;

        } else{
          $Amount = $_SESSION['amountOfProduct'];  
        }

          foreach($products as $product){
              if(!empty($product['id'] == $id)){
                  $total = $price * $Amount;
                  $btwAmnt = round(((21 / 100) * $total), 2);
                  $WithBtw = $total + $btwAmnt;
        ?>
                <img src="<?=$coverPhoto?>" alt="Product Image" id="productImage">
  
                <br> <br> <br>

                <div class="topRow">
                                
                  <div id="name"><?=$title?></div>

                  <div id="productPrice">€<?=$total?></div>

                  <div id="cartPrice">€<?=$price?></div>

                  <div id="amountInCart"><?=$Amount?></div>

                  <div id="totalPrice">€<?=$total?></div>

                </div>

                <br> <br>
                
                <!-- berekening zal zijn (21 / 100) * totaal prijs. stop gwn in een variabel zo van $btw = (21/100) * totaal prijs(de variabel dan) -->
                <div class="btwClass">
                  Btw: €<?=$btwAmnt?>

                </div>
                <br> <br>

                <!-- bij deze dan gwn de variabel van de btw + degene van de totale prijs -->
                <div class="priceWbtw">

                  Total price: €<?=$WithBtw;?>
 
                </div>
                <br> <br>
                <?php
            }

                     
          }
          ?>                           

          <button id="Paying" onclick="location.href='form.php'">Pay?</button>
          <button id="ClearCart" onclick="location.href='intercept.php'">Clear?</button>
    <?php
      } else {
        echo 'Whoops, looks like your cart is empty. Maybe try adding a few?';
      }    

        
    ?>

    
  </div>



  <?php
    include_once 'footer.php';
  ?>

</div>
    
</body>
</html>