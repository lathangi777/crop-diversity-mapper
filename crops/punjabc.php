<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Punjab crops</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: linear-gradient(to right,
                    rgb(16, 37, 16),
                    rgb(165, 196, 115));
            margin: 0;
            padding: 0;
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

        header {
            background-image: linear-gradient(to top, #d9f00b 0%, #db0c05 100%);
            color: white;
            text-align: center;
            padding: 10px 0;
        }

        .container {
            max-width: 1300px;
            margin: 20px auto;
            padding: 100px;
            background-image: linear-gradient(to top, #ee6a2d 0%, #32db08 100%);
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
        <h1>Major Crops In Punjab</h1>
    </header>
    <div class="container">
        <div class="crop-card">
            <img src="https://files.worldwildlife.org/wwfcmsprod/images/Cotton_09.21.12_Industries/hero_small/74bop80spn_133837741.jpg"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Cotton</h2>
            <p class="crop-description">
                Cotton (Gossypium hirsutum) cultivation is an important cash crop in
                Punjab.<br />

                1. Varieties:<br />

                Punjab cultivates various cotton varieties, including hybrid and Bt
                (genetically modified) cotton varieties. Some popular cotton varieties
                grown in the state include Bikaneri Nerma, F1861, and G. Cot 10.<br />
                2. Cultivation Seasons:<br />

                Cotton is primarily a Kharif (monsoon) crop in Punjab. Planting
                typically starts from June to July, and harvesting takes place from
                September to October.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSIZRv65byCBRdTgbsy9rKfXgqjXa9WlOZM0uSMTozn&s"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Sugarcane</h2>
            <p class="crop-description">
                Sugarcane (Saccharum officinarum) cultivation is an important
                agricultural activity in Punjab, primarily for sugar production.<br />

                1. Varieties:<br />

                Punjab cultivates various sugarcane varieties, including high-yielding
                and disease-resistant ones. Some popular sugarcane varieties grown in
                the state include Co 0238, Co 1148, and CoJ 64.<br />
                2. Cultivation Seasons:<br />

                Sugarcane is primarily a Kharif (monsoon) crop in Punjab. Planting
                typically starts in May to June, and harvesting takes place from
                October to November.<br />
            </p>
        </div>
        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXSvisGXfhNLV40WDvjrDav1oPOysXqht33xInXtRdvw&s"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Wheat</h2>
            <p class="crop-description">
                Wheat (Triticum aestivum) cultivation is a significant agricultural
                activity in Punjab, often referred to as the "Wheat Bowl of India" due
                to its substantial wheat production.<br />
                1. Varieties:<br />

                Punjab cultivates a wide range of wheat varieties, including
                high-yielding and disease-resistant ones. Some popular wheat varieties
                grown in the state include PBW 343, HD 2967, and PBW 621.<br />
                2. Cultivation Seasons:<br />

                Wheat is primarily a Rabi (winter) crop in Punjab. Planting typically
                starts in November to December, and harvesting takes place from April
                to May.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkt57OXX88zUAwjey7m3NgemnRKq3V5WEqqtstc4F7&s"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Rice</h2>
            <p class="crop-description">
                Rice (Oryza sativa) cultivation is a significant agricultural activity
                in Punjab, contributing to the state's food security and economy.
                <br />
                1. Varieties:<br />

                Punjab cultivates various rice varieties, including both traditional
                and modern high-yielding varieties. Some popular rice varieties grown
                in the state include PUSA Basmati, PR 106, and PR 111.<br />
                2. Cultivation Seasons:<br />

                Rice is primarily a Kharif (monsoon) crop in Punjab. Planting
                typically starts in June to July, coinciding with the onset of the
                monsoon, and harvesting takes place from September to October.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAFHQNhWu8Cw3ByqPbvsbEmYXpdBCIJuZ357nVD-lLJxwHECw_b_tvbTVfSwIwVlSHDOc&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Maize</h2>
            <p class="crop-description">
                Maize (Zea mays) cultivation is an important agricultural activity in
                Punjab, contributing to both food and fodder production. <br />
                1. Varieties:<br />

                Punjab cultivates various maize varieties, including hybrid and
                open-pollinated varieties. Some popular maize varieties grown in the
                state include HK 110, HM 4, and DHM 117.<br />
                2. Cultivation Seasons:<br />

                Maize is primarily a Kharif (monsoon) crop in Punjab. Planting
                typically starts in June to July, and harvesting takes place from
                October to November.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhUMoY-icqJoevS51h8hAZpuaY_g4WWGrCDg&usqp=CAU "
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Barley</h2>
            <p class="crop-description">
                Barley (Hordeum vulgare) cultivation is an important agricultural
                activity in Punjab, contributing to both food and fodder production.
                <br />

                1. Varieties:<br />

                Punjab cultivates various barley varieties, including two-row and
                six-row varieties. Some popular barley varieties grown in the state
                include RD 2506, PL 375, and BH 393.<br />
                2. Cultivation Seasons:<br />

                Barley is primarily a Rabi (winter) crop in Punjab. Planting typically
                starts in November to December, and harvesting takes place from March
                to April.<br />
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
            location.replace("punjab.php")
        }
    </script>
</body>

</html>