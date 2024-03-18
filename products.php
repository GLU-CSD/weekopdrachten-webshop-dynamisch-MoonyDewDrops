<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>

<?php

$array = [
    "products" => [
        [
            "id" => "abce83e6-9ff1-435f-9189-0e93dcf14829",
            "title" => "Stone Cold Killer - Dusttale Orginal",

            "category" => "Undertale AU",
            "price" => 17.99,
						"sale" => false,
            "duration" => 3.08,
            "age" => 1,
            "photos" => [
                "photo1" => "",
                "photo2" => "",
                "photo3" => ""
            ]
        ],
        [
            "id" => "57327307-f429-423e-b79a-6026299923f9",
            "title" => "V.I.P. - Dreamtale Original",

            "category" => "Undertale AU",
            "price" => 17.99,
						"sale" => 13.99,
            "duration" => 3.57,
            "age" => 2,
            "photos" => [
                "photo1" => "",
                "photo2" => "",
                "photo3" => ""
            ]
        ],
	    [
            "id" => "d1167f65-0fe7-4166-a452-4849953271f0",
            "title" => "Disbelief - Undertale Remix",

            "category" => "Undertale AU",
            "price" => 14.99,
						"sale" => 10.99,
            "duration" => 5.03,
            "age" => 3,
            "photos" => [
                "photo1" => "",
                "photo2" => "",
                "photo3" => ""
            ]
        ]
    ]
];

?>
<!-- 
    Rest of the Id things:
aac18fa2-52da-4ccc-87bb-5c8a541e4dc8
425e6bec-8d30-491b-9e0a-92d3563a6a63
a2c4dea8-d91f-4fde-8d13-76421fac6792
6cf71701-9b8d-4735-86a3-35f32eae52e4
5a26fd65-ef05-431c-b42e-02f019f9123d
16d815a0-6fcf-4f96-8b3e-d78eedef7286
e2b9efa7-64b4-4958-89d3-25b3524bc4de
355631ce-9ee6-45a5-b709-ac7c4d3773c3
968ef7e0-2a3a-433c-ace7-8cf6bc6294ea
4e0d07a3-fb98-49dc-aef4-c14f038cbb21
9038e2da-0331-4c0e-8ca1-2db7e7756af2
b65b3234-6981-4c59-bf0f-43239474f0f9
9f153ce0-9776-4884-9330-568c4680e21f
492dc956-36b1-47c8-9248-fce79d79eccf
257cc213-051a-44e4-8fb0-06639b8f84ac
79da8bfe-a88b-43f4-8647-9a15be961c4a
8124c7af-7cbf-45a4-9062-832e2005a0fa
9ef0dffd-6c82-4647-8ba1-6876911a817d
-->


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
</body>
</html>