<!doctype html>
<html class="no-js" lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>

  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/0TopBalk.css">
  <link rel="stylesheet" href="assets/css/1navigationBalk.css">
  <link rel="stylesheet" href="assets/css/2Filter.css">
  <link rel="stylesheet" href="assets/css/3products.css">
  <link rel="stylesheet" href="assets/css/footer.css">

  <meta name="description" content="">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta property="og:image:alt" content="">

  <link rel="shortcut icon" href="assets/Images/favicon.ico">
  <meta name="theme-color" content="#fafafa">

</head>

<body>

<?php

?>

  <!--Container that contains everything-->
  <div class="container">

    <?php
    include 'header.php';
    ?>

    <?php
      include 'filter.php';
    ?>

    <?php
      include 'products.php';
    ?>

    <?php
      include 'footer.php';
    ?>
</div>



  <!--Thing that links the javascript to this document-->
  <script>
    
    //This creates a variable for the slider, and the value it changes. 
    var slider = document.getElementById("myRange");
    var output = document.getElementById("prijs");

    //What the text that displays the price displays. This sets it to the slider value 
    output.innerHTML = slider.value;

    //when it changes, the value (so also the text) changes
    slider.oninput = function() {
      output.innerHTML = this.value;
    }

    //creates counter for cart
    var ItemCounter = 0;

    //gets the id of the button
    const counterDiv = document.getElementById("ItemCounter");

    //adds the numbers like a pro
    function addProduct(){
      ItemCounter++;
      counterDiv.innerHTML = ItemCounter;
    }

    //the function to send it to the site

    function link() {
      //window.location.href = "https://u230062.gluwebsite.nl/web/WebshopJulia/";
      window.location.href = "index.php";

    }


    function goToLink() {
      window.location.href = "form.php";
    }

    </script>

</body>

</html>