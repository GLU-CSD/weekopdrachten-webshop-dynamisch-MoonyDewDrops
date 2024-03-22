<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product page</title>

    <!--<link rel="stylesheet" href="assets/css/style.css"> -->
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
              
                foreach($products as $product){
                    if($product['id'] == $id){
                        echo '<div id="overviewProduct">';
                            echo '<img src="'.$product['photo'].'" id="bigImage">';
                            echo '<div id="overall">';
                                echo $product['title'].'<br> <br>';
                                echo '€'.$product['price'].'<br> <br>';
                                echo '<button id="description" onclick="addProduct(); location.href=\'cart.php?id=' . $product['id'] . '\'">Add to cart?</button><br><br>';
                                echo $product['description'];
                            echo '</div>';

                            echo '<div id="tinyImages">';
                                echo '<img src="'.$product['photo'].'" class="tiniestImages">';
                                echo '<img src="'.$product['photo2'].'" class="tiniestImages">';
                                echo '<img src="'.$product['photo3'].'" class="tiniestImages">';
                            echo '</div>';
                        echo '</div>';
                    }
                }
            } else {
                echo 'Product not found';
            }
        ?>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
</div>

    
</body>
</html>