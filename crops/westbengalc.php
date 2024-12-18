<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Westbengal crops</title>
    <style>
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

        </h1>
        <h1>Major Crops In Westbengal</h1>
    </header>
    <div class="container">
        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRR9ZULtphUmyI49z1uMRK4rEtD7YmjNUIc8v8kbdZgZ9j0MyuztiD6WsaVm8UzLb4VLUs&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Oilseeds</h2>
            <p class="crop-description">
                Oilseed cultivation is an essential component of agriculture in West
                Bengal, contributing to edible oil production and the state's
                agricultural economy.<br />
                Oilseed Varieties:<br />
                West Bengal cultivates various oilseed crops, including mustard,
                sunflower, soybean, groundnut, and sesame. Mustard is the most widely
                grown oilseed in the state.<br />
                Growing Regions:<br />

                Oilseeds are cultivated in various districts of West Bengal, with
                mustard being grown extensively in districts like Bardhaman,
                Murshidabad, and Nadia. Sunflower and soybean are also grown in select
                regions<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHVJyWYwCn0ZthdzcW3FLui8dgjpXVi_i3Ng&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Jute</h2>
            <p class="crop-description">
                Jute is a significant cash crop in the state of West Bengal, India,
                and has played a pivotal role in the state's economy and industrial
                heritage<br />
                Jute Cultivation Area:<br />

                West Bengal is one of the leading jute-producing states in India, with
                jute cultivation concentrated in districts like Hooghly, North 24
                Parganas, Nadia, and Murshidabad. The state's agro-climatic conditions
                are well-suited for jute cultivation.<br />
                Jute Varieties:<br />

                Several jute varieties are grown in West Bengal, including Corchorus
                olitorius (Tossa Jute) and Corchorus capsularis (White Jute). Tossa
                Jute is known for its longer and stronger fibers, making it suitable
                for higher-quality jute products.<br />
            </p>
        </div>
        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4QXubiryUBkyODJ38_HLbwjyy03fPhKkOQjmvCMcZ7xbyK8POOGr7AJ9PCzpeU-GERmo&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Potato</h2>
            <p class="crop-description">
                Potato cultivation is an important agricultural activity in the state
                of West Bengal<br />

                Varieties of Potato:<br />

                West Bengal cultivates a wide range of potato varieties, including
                both early and late-maturing types. Some popular potato varieties
                grown in the state include Kufri Jyoti, Kufri Chandramukhi, and Kufri
                Badshah.<br />
                Growing Regions:<br />

                Potatoes are grown throughout West Bengal, with significant production
                in districts like Hooghly, Burdwan (Bardhaman), and Malda. Different
                varieties are cultivated based on local conditions.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXSvisGXfhNLV40WDvjrDav1oPOysXqht33xInXtRdvw&s"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Wheat</h2>
            <p class="crop-description">
                Wheat is one of the significant Rabi (winter) crops cultivated in the
                state of West Bengal<br />
                Varieties of Wheat:<br />

                West Bengal cultivates various wheat varieties, including both
                traditional and modern high-yielding varieties. Some popular wheat
                varieties grown in the state include HD-2967, PBW-502, and DBW-187.<br />
                Growing Regions:<br />

                Wheat is grown in various districts of West Bengal, with significant
                production in areas like Bardhaman, Murshidabad, and Nadia. Different
                wheat varieties are cultivated based on local conditions.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkt57OXX88zUAwjey7m3NgemnRKq3V5WEqqtstc4F7&s"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Rice</h2>
            <p class="crop-description">
                Rice is the staple food and the primary cereal crop in the state of
                West Bengal<br />

                Varieties of Rice:<br />

                West Bengal cultivates a diverse range of rice varieties, including
                both traditional and high-yielding modern varieties. Some popular rice
                varieties grown in the state include Swarna, IR-36, Banskathi, and
                Gobindobhog<br />
                Growing Regions:<br />

                Rice is cultivated throughout West Bengal, with significant production
                in the districts of Bardhaman, Murshidabad, and Nadia. Different rice
                varieties are grown based on local conditions.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwsFygNPAwj1rg2HbBK5zHuh46EXl3sF9ViA&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Tea</h2>
            <p class="crop-description">
                Tea cultivation in West Bengal is renowned for its high-quality and
                aromatic teas, particularly in the Darjeeling and Dooars regions<br />
                Growing Regions:<br />

                West Bengal is home to two significant tea-producing regions:
                Darjeeling and Dooars-Terai. Darjeeling tea, often referred to as the
                "Champagne of Teas," is produced in the Darjeeling district and is
                known for its unique flavor and aroma. The Dooars and Terai regions,
                situated in the foothills of the Himalayas, also produce a substantial
                amount of tea.<br />
                Varieties of Tea:<br />

                Darjeeling teas are mainly of the Camellia sinensis variety, which
                includes black, green, white, and oolong teas. Assam and clonal teas
                are common in the Dooars-Terai region.<br />
            </p>
        </div>
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
            location.replace("westbengal.php")
        }
    </script>
</body>

</html>