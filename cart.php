<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/0TopBalk.css">
    <link rel="stylesheet" href="assets/css/1navigationBalk.css">
    <link rel="stylesheet" href="assets/css/cartStyle.css">
    <link rel="stylesheet" href="assets/css/footer.css">

    <title>Cart</title>
</head>
<body>

<div class="container">

  <?php
    include 'header.php';
  ?>



  <?php
    include 'products.php';
  ?>


  <div id="cart">
    <?php

      if(!empty($_GET['id'])){
        $id = $_GET['id'];
        echo $id;
      }

      



    ?>
    
  </div>



  <?php
    include 'footer.php';
  ?>

</div>
    
</body>
</html>