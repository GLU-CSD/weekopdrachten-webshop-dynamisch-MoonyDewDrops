<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>

<?php

$products = [
  //begin of array
        [
            "id" => "abce83e6-9ff1-435f-9189-0e93dcf14829",
            "title" => "Stone Cold Killer - Dusttale Orginal",
            "category" => "Original",
            "price" => 17.99,
						"sale" => false,
            "duration" => 3.08,
            "age" => 1,
            "photos" => [
                "photo1" => "https://i.scdn.co/image/ab67616d0000b27337f7b15671c5778cf0a24408",
                "photo2" => "",
                "photo3" => ""
            ]
        ],
        [
            "id" => "57327307-f429-423e-b79a-6026299923f9",
            "title" => "V.I.P. - Dreamtale Original",
            "category" => "Original",
            "price" => 17.99,
						"sale" => false,
            "duration" => 3.57,
            "age" => 2,
            "photos" => [
                "photo1" => "https://i.scdn.co/image/ab67616d0000b2735eeb8bef2852830aca370ecc",
                "photo2" => "",
                "photo3" => ""
            ]
        ],
	      [
            "id" => "d1167f65-0fe7-4166-a452-4849953271f0",
            "title" => "Disbelief - Undertale Remix",
            "category" => "Undertale AU",
            "price" => 14.99,
						"sale" => false,
            "duration" => 5.03,
            "age" => 3,
            "photos" => [
                "photo1" => "https://i.scdn.co/image/ab67616d0000b2735eeb8bef2852830aca370ecc",
                "photo2" => "",
                "photo3" => ""
            ]
        ],
        [
            "id" => "aac18fa2-52da-4ccc-87bb-5c8a541e4dc8",
            "title" => "Infamous - Dusttale Original",
            "category" => "Original",
            "price" => 16.99,
            "sale" => false,
            "duration" => 3.38,
            "age" => 4,
            "photos" => [
                "photo1" => "https://i.scdn.co/image/ab67616d0000b27393e217d47ab46afb24e2add4",
                "photo2" => "",
                "photo3" => ""
            ]
        ],
        [
            "id" => "425e6bec-8d30-491b-9e0a-92d3563a6a63",
            "title" => "Defiance - Underfell Original",
            "category" => "Original",
            "price" => 13.99,
            "sale" => false,
            "duration" => 4.14,
            "age" => 5,
            "photos" => [
                "photo1" => "https://i.scdn.co/image/ab67616d0000b27361c527fbc1d9bd0b09ef7da1",
                "photo2" => "",
                "photo3" => ""
            ]
        ],
        [
            "id" => "a2c4dea8-d91f-4fde-8d13-76421fac6792",
            "title" => "Psychostasia - Errortale Original",
            "category" => "Original",
            "price" => 13.99,
            "sale" => false,
            "duration" => 2.52,
            "age" => 6,
            "photos" => [
                "photo1" => "https://i.scdn.co/image/ab67616d0000b273ffbee89074df18aeb7b61c58",
                "photo2" => "",
                "photo3" => ""
            ]
        ],
        [
          "id" => "6cf71701-9b8d-4735-86a3-35f32eae52e4",
          "title" => "Attack of the Killer Queen - Deltarune Remix",
          "category" => "Deltarune Remix",
          "price" => 10.99,
          "sale" => false,
          "duration" => 2.48,
          "age" => 7,
          "photos" => [
              "photo1" => "https://i.scdn.co/image/ab67616d0000b27390929a488d253121a9e8a2d6",
              "photo2" => "",
              "photo3" => ""
          ]
        ],
        [
            "id" => "5a26fd65-ef05-431c-b42e-02f019f9123d",
            "title" => "Obsession - Dusttale Original",

            "category" => "Original",
            "price" => 14.99,
            "sale" => 12.99,
            "duration" => 3.10,
            "age" => 8,
            "photos" => [
                "photo1" => "https://i.scdn.co/image/ab67616d0000b2736a487b8ee6230dceba4725f2",
                "photo2" => "",
                "photo3" => ""
            ]
        ],
        [
          "id" => "16d815a0-6fcf-4f96-8b3e-d78eedef7286",
          "title" => "BIG SHOT - Deltarune Remix",

          "category" => "Deltarune Remix",
          "price" => 11.99,
          "sale" => 9.99,
          "duration" => 3.17,
          "age" => 9,
          "photos" => [
              "photo1" => "https://i.scdn.co/image/ab67616d0000b27344c914f478ca06b3fe8076a2",
              "photo2" => "",
              "photo3" => ""
          ]
        ],
        [
          "id" => "e2b9efa7-64b4-4958-89d3-25b3524bc4de",
          "title" => "Hysterical - Deltarune Remix",

          "category" => "Deltarune Remix",
          "price" => 10.99,
          "sale" => false,
          "duration" => 3.25,
          "age" => 10,
          "photos" => [
              "photo1" => "https://i.scdn.co/image/ab67616d0000b273bce6b3d91965fe4b8fa47ed6",
              "photo2" => "",
              "photo3" => ""
          ]
      ],
      [
          "id" => "355631ce-9ee6-45a5-b709-ac7c4d3773c3",
          "title" => "Fun With Electrostatic - Errortale Remix",

          "category" => "Undertale AU",
          "price" => 11.99,
          "sale" => false,
          "duration" => 3.05,
          "age" => 11,
          "photos" => [
              "photo1" => "https://i.scdn.co/image/ab67616d0000b273a835e1228c922fdcb8fc9feb",
              "photo2" => "",
              "photo3" => ""
          ]
      ],
      [
          "id" => "968ef7e0-2a3a-433c-ace7-8cf6bc6294ea",
          "title" => "Spear of a True Hero - Undertale Remix",

          "category" => "Undertale Remix",
          "price" => 10.99,
          "sale" => false,
          "duration" => 3.57,
          "age" => 12,
          "photos" => [
              "photo1" => "https://i.scdn.co/image/ab67616d0000b2731ee6236a101898abb7a2e161",
              "photo2" => "",
              "photo3" => ""
          ]
      ],
      [
        "id" => "4e0d07a3-fb98-49dc-aef4-c14f038cbb21",
        "title" => "Rewind - Undertale Original",
        "category" => "Original",
        "price" => 13.99,
        "sale" => false,
        "duration" => 3.44,
        "age" => 13,
        "photos" => [
            "photo1" => "https://i.scdn.co/image/ab67616d0000b273eb11675bbb9873e9d96ff650",
            "photo2" => "",
            "photo3" => ""
        ]
      ],
      [
        "id" => "9038e2da-0331-4c0e-8ca1-2db7e7756af2",
        "title" => "Red Light - Underfell Original",
        "category" => "Original",
        "price" => 0.00,
        "sale" => 0.00,
        "duration" => 0.00,
        "age" => 14,
        "photos" => [
            "photo1" => "https://i.scdn.co/image/ab67616d0000b27389b5314333251f420d1c09a0",
            "photo2" => "",
            "photo3" => ""
        ]
      ],
      [
        "id" => "b65b3234-6981-4c59-bf0f-43239474f0f9",
        "title" => "Hello World - Aftertale Original",
        "category" => "Original",
        "price" => 0.00,
        "sale" => 0.00,
        "duration" => 0.00,
        "age" => 15,
        "photos" => [
          "photo1" => "https://i.scdn.co/image/ab67616d0000b2731fc2f5ab28c832a1094df62b",
          "photo2" => "",
          "photo3" => ""
        ]
      ],
      [
        "id" => "9f153ce0-9776-4884-9330-568c4680e21f",
        "title" => "Pandemic - Underfresh Original",
        "category" => "Original",
        "price" => 0.00,
        "sale" => 0.00,
        "duration" => 0.00,
        "age" => 16,
        "photos" => [
            "photo1" => "https://i.scdn.co/image/ab67616d0000b2731f13ee83ecc3a4bc08dce62b",
            "photo2" => "",
            "photo3" => ""
        ]
      ],
      [
        "id" => "492dc956-36b1-47c8-9248-fce79d79eccf",
        "title" => "Dark Darker Yet Monster - Undertale Remix",
        "category" => "Undertale Remix",
        "price" => 0.00,
        "sale" => 0.00,
        "duration" => 0.00,
        "age" => 17,
        "photos" => [
          "photo1" => "https://i.scdn.co/image/ab67616d0000b2734bd80a0cd131f21debd0d07d",
          "photo2" => "",
          "photo3" => ""
        ]
      ],
      [
        "id" => "257cc213-051a-44e4-8fb0-06639b8f84ac",
        "title" => "Tokyovania[Sans & Papyrus Vocals] - Undertale Remix",
          "category" => "Undertale Remix",
          "price" => 0.00, 
          "sale" => 0.00,
          "duration" => 0.00,
          "age" => 18,
          "photos" => [
            "photo1" => "https://i.scdn.co/image/ab67616d0000b27363bbb4ed7019cd5d3c515d08",
            "photo2" => "",
            "photo3" => ""
          ]
      ],
      [
        "id" => "79da8bfe-a88b-43f4-8647-9a15be961c4a",
        "title" => "Megalotrousle - Undertale Remix",
        "category" => "Undertale Remix",
        "price" => 0.00,
        "sale" => 0.00,
        "duration" => 0.00,
        "age" => 19,
        "photos" => [
            "photo1" => "https://i.scdn.co/image/ab67616d0000b273d887b8e4146632d47ab0c6ee",
            "photo2" => "",
            "photo3" => ""
        ]
      ],
      [
        "id" => "8124c7af-7cbf-45a4-9062-832e2005a0fa",
        "title" => "Darker yet Darker - Undertale Remix",
        "category" => "Undertale Remix",
        "price" => 0.00,
        "sale" => 0.00,
        "duration" => 0.00,
        "age" => 20,
        "photos" => [
          "photo1" => "https://i.scdn.co/image/ab67616d0000b273b46c6f2180b6a41487fed6d0",
          "photo2" => "",
          "photo3" => ""
        ]
      ],
      [
        "id" => "9ef0dffd-6c82-4647-8ba1-6876911a817d",
        "title" => "Battle Against a True Hero - Undertale Remix",
          "category" => "Undertale Remix",
          "price" => 0.00, 
          "sale" => 0.00,
          "duration" => 0.00,
          "age" => 21,
          "photos" => [
            "photo1" => "https://i.scdn.co/image/ab67616d0000b2734ae9002283502758b498d615",
            "photo2" => "",
            "photo3" => ""
          ]
      ],


    //end of array
];

foreach ($products as $product) {
    if (!empty($product['title'])) {
        echo $product['title'];
        echo "<br>";
    } else {
        echo "No title found";
    }
}


?>

</body>
</html>