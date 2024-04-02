<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Form</title>
    <link rel="stylesheet" href="assets/css/0TopBalk.css">
    <link rel="stylesheet" href="assets/css/1navigationBalk.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/formStyle.css">

    <meta name="description" content=""> 
  
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta property="og:image:alt" content="">
  
    <link rel="shortcut icon" href="assets/Images/favicon.ico">
  
    <meta name="theme-color" content="#fafafa">
    <link rel="shortcut icon" href="assets/Images/favicon.ico">

    <!--Thing that links the javascript to this document-->
    <script defer src="assets/js/app.js"></script>
</head>
<body>
  
    <div class="container">

    <?php
    include_once 'header.php';
    ?>

      <div class="bestelling">

        <form action="purchaseInfo.php" id="orderForm">

          <br>

          <label for="aanhef">Aanhef:</label>

          <select id="aanhef" name="aanhef" required>

            <option value="Dhr.">Dhr.</option>
            <option value="Mevr.">Mevr.</option>

          </select><br><br>
      
          <label for="voornaam">Voornaam:</label>
          <input type="text" id="voornaam" name="voornaam" required><br><br>
      

          <label for="tussenvoegsel">Tussenvoegsel:</label>
          <input type="text" id="tussenvoegsel" name="tussenvoegsel" required><br><br>
      

          <label for="achternaam">Achternaam:</label>
          <input type="text" id="achternaam" name="achternaam" required><br><br>
      

          <label for="straatnaam">Straatnaam:</label>
          <input type="text" id="straatnaam" name="straatnaam" required><br><br>
      

          <label for="huisnummer">Huisnummer:</label>
          <input type="number" id="huisnummer" name="huisnummer" required><br><br>
      

          <label for="postcode">Postcode:</label>
          <input type="text" id="postcode" name="postcode" pattern="[1-9][0-9]{3} ?[a-zA-Z]{2}" title="Enter a valid postcode" required><br><br>
          
      

          <label for="land">Land:</label>
          <input type="text" id="land" name="land" required><br><br>
      

          <label for="email">E-mailadres:</label>
          <input type="email" id="email" name="email" required><br><br>
      

          <label for="telefoonnummer">Telefoonnummer:</label>
          <input type="tel" id="telefoonnummer" name="telefoonnummer" required><br><br>
      

          <label for="geboortedatum">Geboortedatum:</label>
          <input type="date" id="geboortedatum" name="geboortedatum" required><br><br>
      

          <input type="checkbox" id="voorwaarden" name="voorwaarden" required>
          <label for="voorwaarden" required>Ik ga akkoord met de algemene voorwaarden</label><br><br>
      

          <input type="submit" value="Submit">

        </form>

      </div>


        <?php
        include_once 'footer.php';
        ?>
    </div>



    
</body>
</html>