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

    <!--the thing that filters everything-->
    <div class="Filter">

      <div id="itemsFound">
        <p>Total items found: 21</p> <!--Here put variable of the amount of items, do later when u got javascript but for now a placeholder-->
      </div>

      <div id="sortBy">
      <P>Sort by:</P>

      <!--the selector for how you want to view products-->
      <form>
        <select style="text-align: center;">

          <option value="1">Newest</option>
          <option value="2">Oldest</option>
          <option value="3">Most popular</option>
          <option value="4">Price: Low-High</option>
          <option value="5">Price: High-Low</option>          
          <option value="6">Duration: Short-Long</option>
          <option value="7">Duration: Long-Short</option>

        </select>
      </form>    
      <br>    
      </div>
      <!--checkbox for what game you wanna display w the products-->
      <div id="gameFilter">
        <p>Type:</p>
        <form>      
        <input type="checkbox" id="Undertale" name="Undertale" value="type1" style="cursor: pointer;">
        <label for="Undertale"> Undertale Remix</label>
        <br>
        <input type="checkbox" id="AU" name="AU" value="type2" style="cursor: pointer;">
        <label for="Undertale"> Undertale Au Remix</label>
        <br>
        <input type="checkbox" id="Deltarune" name="Deltarune" value="type3" style="cursor: pointer;">
        <label for="Deltarune"> Deltarune Remix</label>
        <br>
        <input type="checkbox" id="Original" name="Original" value="type4" style="cursor: pointer;">
        <label for="Original"> Original</label>
        <br>    
        <br> 
      </form>
      </div>
      <!--slider for price-->
      <div id="price">
        <p>Price</p>

        <div class="slidecContainer">
          <input type="range" min="1" max="30" value="30" class="slider" id="myRange">
          <p>€0 - €<span id="prijs"></span></p>
          
        </div>
      </div>

      <!--What you click when you actually want to filter the items-->
      <div id="submitFilter">
        <button type="submit">Filter?</button>
      </div>

    </div>


    <!--Thing where products r inside-->
    <div class="products">

      <!--the start of the products. Has the cover image of the song, n height&width inside it. 
      Inside here r the image, name, price & add to cart button-->
      <div id="product1" class="product-item">
        <img src="https://i.scdn.co/image/ab67616d0000b27337f7b15671c5778cf0a24408" alt="Stone Cold Killer - Dusttale Original" 
        style="width: 100%; height: auto">
        <a href="https://open.spotify.com/album/7yGkXnEDXsVlXC8oF16FTn">Stone Cold Killer - Dusttale Orginal</a><!--This will be link to product page-->
        <p>€17,99</p>
        <br>
        <button type="button" class="productButtons" onclick="addProduct()">Add to cart</button>
      </div>

      <div id="product2" class="product-item">
        <img src="https://i.scdn.co/image/ab67616d0000b2735eeb8bef2852830aca370ecc" alt="V.I.P. - Dreamtale Original"
        style="max-width: 100%; height: auto">
        <a href="https://open.spotify.com/album/59OVswOUZAdYVAeq9zs9DR">V.I.P. - Dreamtale Original</a>
        <p>€17,99</p>
        <Br>
        <button type="button" class="productButtons" onclick="addProduct()">Add to cart</button>
      </div>

      <div id="product3" class="product-item">
        <img src="https://i.scdn.co/image/ab67616d0000b273edc69ca99ecaa858859916d6" alt="Disbelief - Undertale Remix"
        style="max-width: 100%; height: auto">
        <p>Disbelief - Undertale Remix</p>
        <p>€14,99</p>
        <button type="button" class="productButtons" onclick="addProduct()">Add to cart</button>
      </div>

      <div id="product4" class="product-item">
        <img src="https://i.scdn.co/image/ab67616d0000b27393e217d47ab46afb24e2add4" alt="Infamous - Dusttale Original"
        style="max-width: 100%; height: auto">
        <p>Infamous - Dusttale Original</p>
        <p>€16,99</p>
        <BR>
        <button type="button" class="productButtons" onclick="addProduct()">Add to cart</button>
      </div>

      <div id="product5" class="product-item">
        <img src="https://i.scdn.co/image/ab67616d0000b2734bd80a0cd131f21debd0d07d" alt="Dark Darker Yet Monster - Undertale Remix"
        style="max-width: 100%; height: auto">
        <p>Dark Darker Yet Monster - Undertale Remix</p>
        <p>€9,99</p>
        <button type="button" class="productButtons" onclick="addProduct()">Add to cart</button>
      </div>

      <div id="product6" class="product-item">
        <img src="https://i.scdn.co/image/ab67616d0000b27363bbb4ed7019cd5d3c515d08" alt="Tokyovania[Sans & Papyrus Vocals] - Undertale Remix"
        style="max-width: 100%; height: auto">
        <p>Tokyovania[Sans & Papyrus Vocals] - Undertale Remix</p>
        <p>€14,99</p>
        <button type="button" class="productButtons" onclick="addProduct()">Add to cart</button>
      </div>

      <div id="product7" class="product-item">
        <img src="https://i.scdn.co/image/ab67616d0000b273d887b8e4146632d47ab0c6ee" alt="Megalotrousle - Undertale Remix"
        style="max-width: 100%; height: auto">
        <p>Megalotrousle - Undertale Remix</p>
        <p>€9,99</p>
        <br>
        <button type="button" class="productButtons" onclick="addProduct()">Add to cart</button>
      </div>

      <div id="product8" class="product-item">
        <img src="https://i.scdn.co/image/ab67616d0000b273b46c6f2180b6a41487fed6d0" alt="Darker Yet Darker - Undertale Remix"
        style="max-width: 100%; height: auto">
        <p>Darker yet Darker - Undertale Remix</p>
        <p>€9,99</p>
        <br>
        <button type="button" class="productButtons" onclick="addProduct()">Add to cart</button>
      </div>

      <div id="product9" class="product-item">
        <img src="https://i.scdn.co/image/ab67616d0000b2734ae9002283502758b498d615" alt="Battle Against a True Hero - Undertale Remix"
        style="max-width: 100%; height: auto">
        <p>Battle Against a True Hero - Undertale Remix</p>
        <p>€9,99</p>
        <button type="button" class="productButtons" onclick="addProduct()">Add to cart</button>
      </div>

      <div id="product10" class="product-item">
        <img src="https://i.scdn.co/image/ab67616d0000b27361c527fbc1d9bd0b09ef7da1" alt="Defiance - Underfell Original"
        style="max-width: 100%; height: auto">
        <p>Defiance - Underfell Original</p>
        <p>€13,99</p>
        <button type="button" class="productButtons" onclick="addProduct()">Add to cart</button>
      </div>

      <div id="product11" class="product-item">
        <img src="https://i.scdn.co/image/ab67616d0000b273ffbee89074df18aeb7b61c58" alt="Psychostasia - Errortale Orginal"
        style="max-width: 100%; height: auto" >
        <p>Psychostasia - Errortale Original</p>
        <p>€13,99</p>
        <div>
          <button type="button" class="productButtons" onclick="addProduct()">Add to cart</button>
        </div>
      </div>

      <div id="product12" class="product-item">
        <img src="https://i.scdn.co/image/ab67616d0000b27390929a488d253121a9e8a2d6" alt="Attack of the Killer Queen - Deltarune Remix"
        style="max-width: 100%; height: auto">
        <p>Attack of the Killer Queen - Deltarune Remix</p>
        <p>€10,99</p>
        <button type="button" class="productButtons" onclick="addProduct()">Add to cart</button>
      </div>

      <div id="product13" class="product-item">
        <img src="https://i.scdn.co/image/ab67616d0000b2736a487b8ee6230dceba4725f2" alt="Obsession - Dusttale Original"
        style="max-width: 100%; height: auto">
        <p>Obsession - Dusttale Original</p>
        <p>€14,99</p>
        <button type="button" class="productButtons" onclick="addProduct()">Add to cart</button>
      </div>

      <div id="product14" class="product-item">
        <img src="https://i.scdn.co/image/ab67616d0000b27344c914f478ca06b3fe8076a2" alt="BIG SHOT - Deltarune Remix"
        style="max-width: 100%; height: auto">
        <p>BIG SHOT - Deltarune Remix</p>
        <p>€11,99</p>
        <button type="button" class="productButtons" onclick="addProduct()">Add to cart</button>
      </div>

      <div id="product15" class="product-item">
        <img src="https://i.scdn.co/image/ab67616d0000b273a835e1228c922fdcb8fc9feb" alt="what"
        style="max-width: 100%; height: auto">
        <p>Fun With Electrostatic - Errortale Remix</p>
        <p>€11,99</p>
        <button type="button" class="productButtons" onclick="addProduct()">Add to cart</button>
      </div>

      <div id="product16" class="product-item">
        <img src="https://i.scdn.co/image/ab67616d0000b273bce6b3d91965fe4b8fa47ed6" alt="Hysterical - Deltarune Remix"
        style="max-width: 100%; height: auto">
        <p>Hysterical - Deltarune Remix</p>
        <p>€10,99</p>
        <button type="button" class="productButtons" onclick="addProduct()">Add to cart</button>
      </div>

      <div id="product17" class="product-item">
        <img src="https://i.scdn.co/image/ab67616d0000b2731ee6236a101898abb7a2e161" alt="Spear of a True Hero - Undertale Remix"
        style="max-width: 100%; height: auto">
        <p>Spear of a True Hero - Undertale Remix</p>
        <p>€10,99</p>
        <button type="button" class="productButtons" onclick="addProduct()">Add to cart</button>
      </div>

      <div id="product18" class="product-item">
        <img src="https://i.scdn.co/image/ab67616d0000b273eb11675bbb9873e9d96ff650" alt="huh"
        style="max-width: 100%; height: auto">
        <p>Rewind - Undertale Original</p>
        <p>€13,99</p>
        <button type="button" class="productButtons" onclick="addProduct()">Add to cart</button>
      </div>

      <div id="product19" class="product-item">
        <img src="https://i.scdn.co/image/ab67616d0000b27389b5314333251f420d1c09a0" alt="Red Light - Underfell Original"
        style="max-width: 100%; height: auto">
        <p>Red Light - Underfell Original</p>
        <p>€13,99</p>
        <button type="button" class="productButtons" onclick="addProduct()">Add to cart</button>
      </div>

      <div id="product20" class="product-item">
        <img src="https://i.scdn.co/image/ab67616d0000b2731fc2f5ab28c832a1094df62b" alt="Hello World - Aftertale Original"
        style="max-width: 100%; height: auto">
        <p>Hello World - Aftertale Original</p>
        <p>€13,99</p>
        <button type="button" class="productButtons" onclick="addProduct()">Add to cart</button>
      </div>

      <div id="product21" class="product-item">
        <img src="https://i.scdn.co/image/ab67616d0000b2731f13ee83ecc3a4bc08dce62b" alt="huh"
        style="max-width: 100%; height: auto">
        <p>Pandemic - Underfresh Original</p>
        <p>€15,99</p>
        <button type="button" class="productButtons" onclick="addProduct()">Add to cart</button>
      </div>
      

      <!--The next page box that already works but just need to see if i rlly need it in the end. Otherwise remove this later-->
      <div id="nextPage" class="skip">
        <p><a href="http://127.0.0.1:5500/">1</a>, <a href="http://127.0.0.1:5500/">2</a>, 3, 4 ... 10</p>

      </div>


    </div>

  <!--Thing that links the javascript to this document-->
  <script src="assets/js/app.js"></script>

</body>

</html>