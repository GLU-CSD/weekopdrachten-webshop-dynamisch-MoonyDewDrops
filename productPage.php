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

  </head>
<body>
    

    <div class="container">

    <?php
    include 'header.php';
    ?>

    <!--Here goes product thingy-->
    <div class="product">
      <?php

      if(!empty($_GET['id']))
      {
        echo $_GET['id'];
      } else{
        echo 'id not found :3';
      }

      // if($id == 'abce83e6-9ff1-435f-9189-0e93dcf14829'){
          
      // }

       $id = $_GET['id'];

      //$id = $_GET['product['id']'];
      
      // echo $id;
      ?>
    
    </div>
    
    <?php
      include 'footer.php';
    ?>


    </div>

    
</body>
</html>