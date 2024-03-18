<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
</head>
<body>

<?php

?>


<!--Where the logo should be placed-->
<div class="logo">
  <div>
    <img src="assets/Images/realLogo.jpg" alt="SharaX" 
    style="height: 30px; width: 70px;">
  </div>
</div>

<!--Search balk-->
<div class="search">
  <input type="text" placeholder="Search..?">
</div>

<!--Thing with the account, cart & favourite button-->
<div class="addons">

  <button type="button" onclick="link()">
    Acc
  </button>

  <button type="button" class="cart" id="ItemCounter" onclick="goToLink()">   
      0
  </button>

  <button type="button" onclick="link()">
    Liked
  </button>

</div>

<!--where things like home, new & sale r placed-->
<div class="additional-info">
  <button type="button" onclick="link()">Home</button>
  <button type="button" onclick="link()">New</button>
  <button type="button" onclick="link()">Sale</button>
</div>

  <!--Thing that links the javascript to this document-->
  <script src="assets/js/app.js"></script>
    
</body>
</html>