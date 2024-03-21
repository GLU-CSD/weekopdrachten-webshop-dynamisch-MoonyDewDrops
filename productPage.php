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

  </head>
<body>
    

<div class="container">

    <?php
    include 'header.php';
    ?>

    <!--Here goes product thingy-->
    <div class="product">
      <?php

        include 'products.php';
      
          if(!empty($_GET['id'])){
            $id = $_GET['id'];
          
            foreach($products as $product){

              if($product['id'] == $id){
                echo '<div id="overviewProduct">';
                  echo '<img src="'.$product['photo'].'" style="width:100%; height: auto;" id="bigImage">';
                  echo '<div id="overall">'.$product['title'].'<br> <br>';
                  echo '€'.$product['price'].'<br> <br>';
                  echo '<button id="description" onclick="goToLink()">Add to cart?</button> <br> <br>';
                  echo $product['description'].'</div>';

                  echo '<div id="tinyImages">';
                    echo '<img src="'.$product['photo'].'" class="tiniestImages" onclick="changePicture1()">';
                    echo '<img src="'.$product['photo2'].'" class="tiniestImages" onclick="changePicture2()">';
                    echo '<img src="'.$product['photo3'].'" class="tiniestImages" onclick="changePicture3()">';
                  echo '</div>';
                echo '</div>';
              }

            }

          } else {
            echo 'product not found';
          }
          ?>
    </div>
    
    <?php
      include 'footer.php';
    ?>

</div>

<script>



//maakt een var voor het grote plaatje aan en linkt em naar de class
let GrootPlaatje = document.getElementById("bigImage");
let klein = document.getElementsByClassName("tiniestImages");


// waarschijnlijk veranderen naar n onclick="changePicture" ding want dit is te ingewikkelt voor zo iets simpels voor mijn brein
function changePicture1(){

// maakt var aan voor het kleine plaatje en stopt de pictures d'r in
  // let klein = document.getElementsByClassName("tiniestImages");

  console.log(klein[0].src);
  // console.log(klein.src, GrootPlaatje.src);

  // GrootPlaatje.src = klein;
}

function changePicture2(){

// maakt var aan voor het kleine plaatje en stopt de pictures d'r in
  // let klein = document.getElementsByClassName("tiniestImages");

  console.log(klein[1].src);
  // console.log(klein.src, GrootPlaatje.src);

  // GrootPlaatje.src = klein;
}

function changePicture3(){

// maakt var aan voor het kleine plaatje en stopt de pictures d'r in
  // let klein = document.getElementsByClassName("tiniestImages");

  console.log(klein[2].src);
  // console.log(klein.src, GrootPlaatje.src);

  // GrootPlaatje.src = klein.src;
}

</script>
    
</body>
</html>