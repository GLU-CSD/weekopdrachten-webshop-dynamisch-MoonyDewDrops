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


    <!--Thing that links the javascript to this document-->
    <script defer src="assets/js/app.js"></script>

    <link rel="shortcut icon" href="assets/Images/favicon.ico">
    <meta name="theme-color" content="#fafafa">

    <!--Thing that links the javascript to this document-->
    <script defer src="assets/js/ImageSelector.js"></script>

  </head>
<body>
    

<div class="container">
    <!-- Header -->
    <?php include 'header.php'; ?>

    <!-- Product -->
    <div class="product">
        <?php
            include 'products.php';
          
            if(!empty($_GET['id'])){
                $id = $_GET['id'];
                $productExist = false;
                foreach($products as $product){
                    
                    if($product['id'] == $id){
                        $productExist = true;
                        ?>
                        <div id="overviewProduct">
                            <img src="<?=$product['photo']?>" id="bigImage">
                            <div id="overall">
                                <?=$product['title']?> <br> <br>
                                €<?=$product['price']?> <br> <br>
                                  <form action="cart.php" method="post">
                                    <input type="number" name="amountOf" placeholder="1" style="width:5%;" required>
                                    <input type="hidden" name="id" value="<?=$_SESSION['produceID'] = $product['id']?>">
                                    
                                      <button type="submit" id="description">
                                        Add to cart?
                                      </button>
                                  </form>
                                <br><br>
                                <?=$product['description']?>
                            </div>

                            <div id="tinyImages">
                                <img src="<?=$product['photo']?>" class="tiniestImages">
                                <img src="<?=$product['photo2']?>" class="tiniestImages">
                                <img src="<?=$product['photo3']?>" class="tiniestImages">
                            </div>
                        </div>
                        <?php
                    }
                }
            } if(!$productExist) {
                echo 'Product not found';
            }

        ?>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
</div>

    
</body>
</html>