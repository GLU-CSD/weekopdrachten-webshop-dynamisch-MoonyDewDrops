<?php
session_start();
session_unset();
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

    <title>Purchase Completed</title>
</head>
<body>

<?php 
  include 'header.php'; 
?>
  <div class="PurchaseCompleted">
    Thank you for your order! Here is the information of your order:
     
  </div>

<?php
  include 'footer.php';
?>
    
</body>
</html>