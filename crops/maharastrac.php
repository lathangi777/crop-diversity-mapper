<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Maharastra crops</title>
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
            </p>Major Crops In Maharastra
        </h1>
    </header>
    <div class="container">
        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvYuIsOSjL7cRSiD0Skcu51q8fT4UTDCnHngwXIMfq&s"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Groundnuts</h2>
            <p class="crop-description">
                Groundnut, also known as peanut, is an important oilseed crop in
                Maharashtra.<br />

                1. Varieties:<br />

                Maharashtra cultivates various groundnut varieties, including TMV 2,
                Girnar 1, GG 2, GG 20, and many others. The choice of variety depends
                on factors like soil type and agro-climatic conditions.<br />
                2. Cultivation Seasons:<br />

                Groundnut is primarily a Kharif (monsoon) crop in Maharashtra, sown
                from June to July. It is harvested during the post-monsoon season,
                typically from November to December.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://files.worldwildlife.org/wwfcmsprod/images/Cotton_09.21.12_Industries/hero_small/74bop80spn_133837741.jpg"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Cotton</h2>
            <p class="crop-description">
                Cotton is a major cash crop in Maharashtra, contributing significantly
                to the state's agriculture and textile industry.<br />
                1. Varieties:<br />

                Maharashtra cultivates various cotton varieties, including hybrid and
                genetically modified (Bt) cotton varieties. Some popular varieties
                include MECH-162, MECH-184, and MECH-162 Bt.<br />
                2. Cultivation Seasons:<br />

                Cotton is primarily a Kharif (monsoon) crop in Maharashtra, sown from
                June to July. It is harvested during the post-monsoon season,
                typically from October to December.<br />
            </p>
        </div>
        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSIZRv65byCBRdTgbsy9rKfXgqjXa9WlOZM0uSMTozn&s"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Sugarcane</h2>
            <p class="crop-description">
                Sugarcane (Saccharum officinarum) is a major cash crop in Maharashtra
                and plays a vital role in the state's agriculture and economy. Here's
                detailed information about sugarcane cultivation in Maharashtra:<br />

                1. Varieties:<br />

                Maharashtra cultivates several sugarcane varieties, including Co 0238,
                Co 86032, Co 1148, and Co 86010. The choice of variety depends on
                factors like soil type and climate.<br />
                2. Cultivation Seasons:<br />

                Sugarcane is primarily a Kharif (monsoon) crop in Maharashtra, planted
                from June to July. It is harvested during the post-monsoon season,
                typically from November to March.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXSvisGXfhNLV40WDvjrDav1oPOysXqht33xInXtRdvw&s"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Wheat</h2>
            <p class="crop-description">
                Wheat (Triticum aestivum) is an important cereal crop in Maharashtra,
                primarily grown in the Rabi (winter) season.<br />
                1. Varieties:<br />

                Maharashtra cultivates various wheat varieties, both traditional and
                improved, to suit different agro-climatic zones. Some popular
                varieties include HD 2967, WH 1105, and Sharbati.<br />
                2. Cultivation Seasons:<br />

                Wheat is a Rabi (winter) crop in Maharashtra, sown from November to
                December. It is harvested during the pre-summer season, typically from
                April to May.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTH8AA0ey7MS3ku5lAv7aNs5Rny9uFegNUjYw&usqp=CAU "
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Soyabean</h2>
            <p class="crop-description">
                Soybean (Glycine max) is a significant oilseed crop in Maharashtra,
                contributing to both agricultural production and the state's economy.
                <br />1. Varieties:<br />

                Maharashtra cultivates various soybean varieties, including JS 95-60,
                JS 335, and MACS 1249. The choice of variety depends on factors like
                soil type and agro-climatic conditions.<br />
                2. Cultivation Seasons:<br />

                Soybean is primarily a Kharif (monsoon) crop in Maharashtra, sown from
                June to July. It is harvested during the post-monsoon season,
                typically from October to December.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9-Vmt8PAuRQxprZw-J7yShxStNoISaYmBpA&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Bajra</h2>
            <p class="crop-description">
                Bajra, also known as pearl millet (Pennisetum glaucum), is an
                important cereal crop in Maharashtra.<br />
                1. Varieties:<br />

                Maharashtra cultivates various varieties of bajra, including local
                landraces and improved varieties. Some popular varieties include
                Maharashtra Bajra-1 (MB-1) and Maharashtra Bajra-2 (MB-2).<br />
                2. Cultivation Seasons:<br />

                Bajra is primarily a Kharif (monsoon) crop in Maharashtra, sown from
                June to July. It is well-suited to the state's semi-arid and arid
                regions.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="data:image/jpeg;base64,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"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Jowar</h2>
            <p class="crop-description">
                Jowar, also known as sorghum (Sorghum bicolor), is one of the primary
                cereal crops cultivated in Maharashtra. It plays a crucial role in the
                state's agriculture and food security.
                <br />
                1. Varieties:<br />

                Maharashtra cultivates various jowar varieties, including local
                landraces and improved hybrids. Some popular jowar varieties include
                Maldandi, Phule Maval, and Phule Sankar.<br />
                2. Cultivation Seasons:<br />

                Jowar is primarily a Kharif (monsoon) crop in Maharashtra, sown from
                June to July. It is well-suited to the state's diverse agro-climatic
                conditions.<br />
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
            location.replace("maharastra.php")
        }
    </script>
</body>

</html>