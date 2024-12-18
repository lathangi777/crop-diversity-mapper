<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rajasthan crops</title>
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
        <h1>Major Crops In Rajasthan</h1>
    </header>
    <div class="container">
        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXSvisGXfhNLV40WDvjrDav1oPOysXqht33xInXtRdvw&s"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Wheat</h2>
            <p class="crop-description">
                Wheat is one of the major cereal crops cultivated in the state of
                Rajasthan, despite its arid and semi-arid climate. Here is detailed
                information about wheat cultivation in Rajasthan: 1. Varieties:
                Rajasthan cultivates a range of wheat varieties, including both
                traditional and modern high-yielding varieties. Popular wheat
                varieties in Rajasthan include HD 2967, GW 496, and Raj 1555. 2.
                Cultivation Season: Wheat in Rajasthan is primarily a Rabi (winter)
                crop. Sowing typically takes place from November to December, and
                harvesting occurs from April to May.
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9-Vmt8PAuRQxprZw-J7yShxStNoISaYmBpA&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Bajra</h2>
            <p class="crop-description">
                Bajra, also known as pearl millet, is an important crop in the state
                of Rajasthan due to its ability to thrive in arid and semi-arid
                conditions. Here is detailed information about bajra cultivation in
                Rajasthan: 1. Varieties: Rajasthan cultivates various bajra varieties,
                including hybrids like RHB 177, RHB 173, and RHB 200. Traditional
                open-pollinated varieties are also grown. 2. Cultivation Season: Bajra
                is primarily a Kharif (summer) crop in Rajasthan. Sowing typically
                takes place from June to July, and harvesting occurs from September to
                October.
            </p>
        </div>
        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTH-zdLGABmStgb0jPVcC-XwHMniyqdh1ebVQ&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Mustard</h2>
            <p class="crop-description">
                Mustard is a major oilseed crop in Rajasthan, known for its extensive
                cultivation in the state. Here is detailed information about mustard
                cultivation in Rajasthan: 1. Varieties: Rajasthan cultivates various
                mustard varieties, including traditional and hybrid varieties. Popular
                varieties include Varuna, Giriraj, Rohini, and others. 2. Cultivation
                Season: Mustard is primarily a Rabi (winter) crop in Rajasthan. Sowing
                typically takes place from October to November, and harvesting occurs
                from March to April.
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvYuIsOSjL7cRSiD0Skcu51q8fT4UTDCnHngwXIMfq&s"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Groundnut</h2>
            <p class="crop-description">
                Groundnut, also known as peanut, is an important oilseed crop grown in
                Rajasthan. Here is detailed information about groundnut cultivation in
                the state: 1. Varieties: Rajasthan cultivates various groundnut
                varieties, including both bold-seeded and medium-seeded types. Popular
                varieties include GG 20, GG 2, and Prutha. 2. Cultivation Season:
                Groundnut is primarily a Kharif (summer) crop in Rajasthan. Sowing
                typically takes place from June to July, and harvesting occurs from
                October to November.
            </p>
        </div>

        <div class="crop-card">
            <img src="https://sahasa64.files.wordpress.com/2020/12/malgalwedha-jowar_14.09.2020-e1609304604817.jpg"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Jowar</h2>
            <p class="crop-description">
                Jowar, also known as sorghum, is an important cereal crop grown in
                Rajasthan. Here is detailed information about jowar cultivation in the
                state: 1. Varieties: Rajasthan cultivates various jowar varieties,
                including both traditional and improved hybrids. Popular varieties
                include CSV 15, Maldandi, and RS 29. 2. Cultivation Season: Jowar is
                primarily a Kharif (summer) crop in Rajasthan. Sowing typically takes
                place from June to July, and harvesting occurs from October to
                November.
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhUMoY-icqJoevS51h8hAZpuaY_g4WWGrCDg&usqp=CAU "
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Barley</h2>
            <p class="crop-description">
                Barley is a significant cereal crop grown in Rajasthan, primarily
                during the Rabi (winter) season. Here is detailed information about
                barley cultivation in the state: 1. Varieties: Rajasthan cultivates
                various barley varieties, including both traditional and improved
                high-yielding varieties. Popular varieties include RD 2035, BH 902,
                and Girdhari. 2. Cultivation Season: Barley is primarily a Rabi
                (winter) crop in Rajasthan. Sowing typically takes place from November
                to December, and harvesting occurs from March to April
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
            location.replace("rajesthan.php")
        }
    </script>
</body>

</html>