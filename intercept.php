<?php
session_start();
session_unset();

//This whole file is just to clear the cart. It makes it so when you click the clear button in the cart, you get sent to this page!
//and if you're in this page, it unsets the session, and redirects you to the cart again after a split second! :D Also set a cute lil href
//if the redirect dont work.

?>

<head>
  <meta http-equiv="refresh" content="0.1; URL=cart.php">
</head>

<body>
  <a href="cart.php">Click here if not redirected.</a>
</body>