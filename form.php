<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
  
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
</head>
<body>

    <div class="container">
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

      <div class="bestelling">

        <form id="orderForm">

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

      <!--the footer witht he copyright info, the about SharaX & Where to go for help-->
      <div class="disclaimer">
          <div id="about" style="padding: 5%;">
            <p>About SharaX</p>
            <p></p>
            <br>
            <p><a href="https://www.youtube.com/user/SharaXChannel">Youtube</a>, 
              <a href="https://soundcloud.com/sharaxsierra">Sound-
                cloud</a></p>
          </div>
          <div id="copyRight" style="padding: 5%;">
            <p>Copyright</p>
            <p> </p>
            <p>All content displayed here belongs to their respective owners</p>
            <p>I do not claim any ownership over the pictures and songs displayed here</p>
            <p>©Julia Brouwer 2024</p>
          </div>
          <div id="help" style="padding: 5%;">
            <p>Help</p>
            <Br>
            <p>When in need of help, don't hesitate to reach out to us via our e-mail if you have any 
              questions concern a purchase.
            </p>
            <p><a href="http://127.0.0.1:5500/">Support</a></p>
            <p><a href="http://127.0.0.1:5500/">FAQ</a></p>
          </div>
        </div>
    </div>
    <script src="assets/js/app.js"></script>

    
</body>
</html>