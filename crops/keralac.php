<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kerala crops</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: linear-gradient(to right,
                    rgb(16, 37, 16),
                    rgb(165, 196, 115));
            margin: 0;
            padding: 0;
        }

        header {
            background-image: linear-gradient(to top, #5430d6 0%, #c5434d 100%);
            color: white;
            text-align: center;
            padding: 10px 0;
        }

        .container {
            max-width: 1300px;
            margin: 20px auto;
            padding: 100px;
            background-image: linear-gradient(to top, #ee6a2d 0%, #e0949a 100%);
            box-shadow: 0 0 20px rgba(80, 5, 87, 0.1);
            border-radius: 10px;
        }

        .crop-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 40px;
            padding: 20px;
            background-color: rgb(92, 122, 151);
            box-shadow: 0 0 0 3px black;
            border: 1px solid #000000;
            border-radius: 50px;
            transition: transform 0.2s ease-in-out;
        }

        .crop-card:hover {
            transform: scale(1.08);
        }

        .crop-image {
            max-width: 25%;
            height: 25%;
            border-radius: 5px;
            margin-bottom: 7px;
        }

        .crop-name {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
        }

        .crop-description {
            text-align: auto;
        }

        ::-webkit-scrollbar {
            width: 9px;

        }

        ::-webkit-scrollbar-thumb {
            background-color: #5f5f5f;
            border-radius: 20px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: #3e3d3d;
        }

        ::-webkit-scrollbar-track:hover {
            background-color: rgb(255, 255, 255);
        }
    </style>
</head>

<body>
    <header>

        <h1>
            <p style="float:left;">
                <button onclick="myfunction()">
                    <img src="https://cdn-icons-png.flaticon.com/512/25/25694.png" alt="W3Schools.com" width="30"
                        height="40" style="background-color: white" />
                </button>
                <button onclick="myfunction1()">
                    <img src="https://thumb.ac-illust.com/ef/ef76a36c7a4f85f140bf3566836df260_t.jpeg"
                        alt="W3Schools.com" width="30" height="40" style="background-color: white" />
                </button>
            </p>Major Crops In Kerala
        </h1>
    </header>
    <div class="container">
        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT43VzKmZw85dc_GZXLjsKt5iQompGg3RYpWg&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Coconut</h2>
            <p class="crop-description">
                Coconut cultivation is a vital agricultural activity in the state of
                Kerala, India. Kerala is often referred to as the "Land of Coconuts"
                due to the widespread presence of coconut trees and its extensive use
                in the daily life of the people. Coconut cultivation is widespread
                across Kerala, with a significant presence in the coastal districts,
                including Alappuzha, Kollam, and Ernakulam. Coastal areas offer ideal
                agro-climatic conditions for coconut growth.
            </p>
        </div>

        <div class="crop-card">
            <img src="https://images.moneycontrol.com/static-mcnews/2022/08/sreehari-devadas-WDI95CIPW00-unsplash.jpg?impolicy=website&width=1600&height=900"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Rice</h2>
            <p class="crop-description">
                Kerala cultivates a variety of rice types, including traditional
                varieties like Pokkali and Navara, as well as modern high-yielding
                varieties. The choice of rice variety depends on factors like soil
                type, climate, and intended use. Rice cultivation takes place in
                various parts of Kerala, including the Kuttanad region, Palakkad,
                Thrissur, and Malappuram. Kuttanad, often called the "Rice Bowl of
                Kerala," is known for its extensive paddy fields.
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdPxbcpbImGq-j070jNPHIYm7ZWJ1uX2c8-A&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Rubber</h2>
            <p class="crop-description">
                Rubber cultivation is a significant agricultural activity in the state
                of Kerala, India. Kerala is one of the leading rubber-producing states
                in India and is known for its extensive rubber plantation.<br />
                Rubber Variety:<br />
                Kerala primarily cultivates Hevea brasiliensis, commonly known as
                natural rubber or rubber tree. Rubber from these trees is processed to
                obtain latex, which is used for various rubber-based products.<br />
                Growing Regions:<br />

                Rubber plantations are widespread in Kerala, with significant
                cultivation in districts like Kottayam, Pathanamthitta, Kollam, and
                Ernakulam. The state's hilly terrain and favorable climate contribute
                to rubber tree growth
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwsFygNPAwj1rg2HbBK5zHuh46EXl3sF9ViA&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Tea</h2>
            <p class="crop-description">
                Tea cultivation is an important agricultural activity in the state of
                Kerala, India, particularly in the hilly regions of the Western
                Ghats.<br />
                Varieties of Tea:<br />
                Kerala cultivates both black and green tea varieties. The choice of
                tea variety depends on factors like elevation, climate, and processing
                methods.<br />
                Growing Regions:<br />

                The major tea-growing regions in Kerala are the high-altitude areas of
                Munnar, Wayanad, and Idukki. These hilly terrains provide the ideal
                conditions for tea cultivation<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0oJ77gQWRznPd1gjVi9sC1bTx22m70y9NhQ&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Coffee</h2>
            <p class="crop-description">
                Coffee cultivation is an important agricultural activity in the state
                of Kerala, India, especially in the hill regions of the Western
                Ghats<br />
                Varieties of Coffee:<br />

                Kerala primarily cultivates two main varieties of coffee: Arabica
                (Coffea arabica) and Robusta (Coffea canephora). The choice of variety
                depends on factors like elevation, climate, and local preferences.<br />
                Growing Regions:<br />

                The major coffee-growing regions in Kerala are Wayanad, Idukki, and
                Palakkad. These hilly areas with favorable elevations provide the
                ideal conditions for coffee cultivation.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://rukminim1.flixcart.com/image/850/1000/k1gr2q80/plant-sapling/9/k/a/hybrid-kerala-robusta-banana-exotic-tropical-banana-plant-1-nos-original-imaff3dyac6hnjhr.jpeg?q=20 "
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Banana</h2>
            <p class="crop-description">
                Banana cultivation is a significant agricultural activity in the state
                of Kerala, India, where a variety of banana types are grown.<br />
                Varieties of Bananas:<br />

                Kerala cultivates various banana varieties, including Nendran,
                Palayankodan, Robusta, and Poovan. Nendran bananas are especially
                famous for their quality and are widely grown.<br />
                Growing Regions:<br />

                Banana cultivation is widespread across Kerala, with significant
                cultivation in districts like Thrissur, Kozhikode, Malappuram, and
                Palakkad. Kerala's tropical climate and well-distributed rainfall
                favor banana growth.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIpSOSLYaoiH00k5R1fDspaCzOelBmGGxp6ryJWvztjfPT7gob5khQAp1GBm3CZgNrm7Y&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Cocoa</h2>
            <p class="crop-description">
                Cocoa cultivation, the source of cocoa beans used in chocolate
                production, is a relatively new but growing agricultural activity in
                the state of Kerala<br />
                Cocoa Varieties:<br />

                Kerala primarily cultivates the Criollo and Forastero varieties of
                cocoa. Criollo is known for its fine flavor, while Forastero is valued
                for its disease resistance and higher yields.<br />
                Growing Regions:<br />

                Cocoa cultivation in Kerala is concentrated in the hilly regions of
                districts like Idukki, Wayanad, and Palakkad. These areas offer
                favorable elevations and agro-climatic conditions for cocoa growth.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQW3fhXRCuwBptL_AvYcFtp20lB2BtwSYCLNg&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Spices</h2>
            <p class="crop-description">
                Kerala, often referred to as the "Spice Garden of India," is renowned
                for its diverse spice cultivation. The state's history and culture are
                deeply intertwined with the cultivation and trade of spices.<br />
                1. Varieties of Spices:<br />

                Kerala cultivates a wide range of spices, including black pepper,
                cardamom, cinnamon, cloves, nutmeg, mace, ginger, and turmeric. These
                spices are essential components of Indian cuisine and are exported
                globally.<br />
                2. Growing Regions:<br />

                Spices are grown throughout Kerala, with specific regions specializing
                in certain spices. For example, Wayanad is known for pepper and
                cardamom, while Idukki is famous for its cardamom plantations.<br />
            </p>
        </div>
        <!-- Add more crop cards as needed -->
    </div>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement(
                { pageLanguage: "en" },
                "google_translate_element"
            );
        }
    </script>
    <script>
        function myfunction() {
            location.replace("index.php")
        }
    </script>
    <script>
        function myfunction1() {
            location.replace("kerala.php")
        }
    </script>
</body>

</html>