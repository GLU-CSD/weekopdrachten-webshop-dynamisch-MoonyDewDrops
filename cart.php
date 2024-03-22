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



        foreach($products as $product){
            if($product['id'] == $id){
                $price = $product['price'];

                echo '<div class="topRow">';

                  echo '<div id="name">'.$product['title'].'</div>';

                  echo '<div id="productPrice">productprijs</div>';

                  echo '<div id="cartPrice">'.$price.'</div>';

                  echo '<div id="amountInCart">Javascript ItemCounter variabel</div>';

                  echo '<div id="totalPrice">Totaal prijs</div>';

                echo '</div>';

                echo '<br> <br>';
                
                //berekening zal zijn (21 / 100) * totaal prijs. stop gwn in een variabel zo van $btw = (21/100) * totaal prijs(de variabel dan)
                echo '<div class="btwClass">';
                  echo 'btw';

                echo '</div>';

                echo '<br> <br>';

                //bij deze dan gwn de variabel van de btw + degene van de totale prijs
                echo '<div id="priceWbtw" style="margin-left:90%;">';

                  echo 'prijs met btw';

                echo '</div>';
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