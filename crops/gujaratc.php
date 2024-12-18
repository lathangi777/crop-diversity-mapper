<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gujarat crops</title>
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

        </h1>
        <h1>Major Crops In Gujarat</h1>
    </header>
    <div class="container">
        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkt57OXX88zUAwjey7m3NgemnRKq3V5WEqqtstc4F7&s"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Paddy</h2>
            <p class="crop-description">
                Rice (Oryza sativa) cultivation in Gujarat is significant, and it contributes to the state's food
                security and economy.<br>
                1. Varieties:<br>

                Gujarat cultivates various rice varieties, including both traditional and modern high-yielding
                varieties.
                Some popular rice varieties grown in the state include IR-8, IR-36, and Swarna.<br>
                2. Cultivation Seasons:<br>

                Rice is grown in both Kharif (monsoon) and Rabi (winter) seasons in Gujarat.
                Kharif rice is planted during June to July, while Rabi rice is sown during November to December.<br>
            </p>
        </div>


        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXSvisGXfhNLV40WDvjrDav1oPOysXqht33xInXtRdvw&s"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Wheat</h2>
            <p class="crop-description">
                Wheat (Triticum aestivum) cultivation in Gujarat is significant and contributes to the state's food
                security and agricultural economy.<br>

                1. Varieties:<br>

                Gujarat cultivates a range of wheat varieties, including high-yielding and disease-resistant ones.
                Some popular wheat varieties grown in the state include GW 366, GW 322, and HD 2967.<br>
                2. Cultivation Seasons:<br>

                Wheat is primarily a Rabi (winter) crop in Gujarat.
                Planting typically starts in November to December, and harvesting takes place from March to April.<br>
            </p>
        </div>
        <div class="crop-card">
            <img src="https://files.worldwildlife.org/wwfcmsprod/images/Cotton_09.21.12_Industries/hero_small/74bop80spn_133837741.jpg"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Cotton</h2>
            <p class="crop-description">
                Cotton (Gossypium hirsutum) cultivation in Gujarat is a significant agricultural activity and
                contributes substantially to the state's economy.<br>

                1. Varieties:<br>

                Gujarat cultivates various cotton varieties, including hybrid and Bt (genetically modified) cotton
                varieties.
                Some popular cotton varieties grown in the state include Shankar-6, Gujarat-1, and 1701.<br>
                2. Cultivation Seasons:<br>

                Cotton is primarily a Kharif (monsoon) crop in Gujarat.
                Planting typically starts in June to July, and harvesting takes place from October to January.<br>
            </p>
        </div>


        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRR9ZULtphUmyI49z1uMRK4rEtD7YmjNUIc8v8kbdZgZ9j0MyuztiD6WsaVm8UzLb4VLUs&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Oilseeds</h2>
            <p class="crop-description">
                Oilseeds cultivation in Gujarat is crucial for the production of edible oils and contributes
                significantly to the state's agricultural economy.<br>
                1. Varieties:<br>

                Gujarat cultivates various oilseeds, including groundnut (peanut), soybean, sunflower, and sesame.
                Different varieties of these oilseeds are grown to suit local agro-climatic conditions.<br>
                2. Cultivation Seasons:<br>

                Oilseeds are grown in both Kharif (monsoon) and Rabi (winter) seasons in Gujarat.
                Groundnut and soybean are predominantly Kharif crops, while sunflower and sesame can be grown in both
                seasons.<br>
            </p>
        </div>


        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqvAIYionJIVAOr8yhMUHtsiyk5Wh1bvlPWw&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Pulses</h2>
            <p class="crop-description">
                Pulses cultivation in Gujarat, including Toor dal (pigeon pea), chickpeas (gram), and lentils (masoor
                dal), is vital for the state's food security and provides a source of protein for its population.<br>
                1. Varieties:<br>

                Gujarat cultivates various pulse crops, including multiple varieties of Toor dal, chickpeas, and
                lentils.
                Popular pulse varieties in the state include GJG 31 (Toor dal), BG-369 (chickpeas), and L 4077
                (lentils).<br>
                2. Cultivation Seasons:<br>

                Pulses are grown in both Kharif (monsoon) and Rabi (winter) seasons in Gujarat.
                Toor dal is primarily a Kharif crop, while chickpeas and lentils are typically Rabi crops<br>
            </p>
        </div>

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
            location.replace("gujarat.php")
        }
    </script>
</body>

</html>