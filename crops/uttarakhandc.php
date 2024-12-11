<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Uttrakhand crops</title>
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
        <h1>Major Crops In Uttarakhand</h1>
    </header>
    <div class="container">
        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkt57OXX88zUAwjey7m3NgemnRKq3V5WEqqtstc4F7&s"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Rice</h2>
            <p class="crop-description">
                Rice (Oryza sativa) cultivation in Uttarakhand is primarily focused on
                providing staple food for the local population. Here's detailed
                information about rice cultivation in Uttarakhand: 1. Varieties:
                Uttarakhand cultivates a variety of rice, including both traditional
                and improved high-yielding varieties. Some popular rice varieties
                grown in the state include Basmati rice, Pusa Basmati, and Govind
                Bhog. 2. Cultivation Seasons: Rice is mainly a Kharif (monsoon) crop
                in Uttarakhand. Planting typically starts in June to July, and
                harvesting takes place from September to October.
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXSvisGXfhNLV40WDvjrDav1oPOysXqht33xInXtRdvw&s"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Wheat</h2>
            <p class="crop-description">
                Wheat (Triticum aestivum) cultivation in Uttarakhand is essential for
                providing a staple food source and supporting the livelihoods of many
                farmers in the region. Here's detailed information about wheat
                cultivation in Uttarakhand: 1. Varieties: Uttarakhand cultivates
                various wheat varieties suitable for its agro-climatic conditions.
                Some popular wheat varieties grown in the state include HD 2967, UP
                262, and HPW 155. 2. Cultivation Seasons: Wheat is primarily a Rabi
                (winter) crop in Uttarakhand. Planting typically starts in November to
                December, and harvesting takes place from April to May.
            </p>
        </div>
        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTH-zdLGABmStgb0jPVcC-XwHMniyqdh1ebVQ&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Oilseeds(Mustard and Soyabean)</h2>
            <p class="crop-description">
                Oilseed cultivation, including mustard and soybean, in Uttarakhand
                contributes to edible oil production and the local economy. Here's
                detailed information about oilseed cultivation in Uttarakhand: 1.
                Varieties: Uttarakhand cultivates various oilseed crops, including
                mustard and soybean. Different varieties of these oilseeds are grown
                to suit local agro-climatic conditions. 2. Cultivation Seasons:
                Oilseeds like mustard and soybean are predominantly Rabi (winter)
                crops in Uttarakhand. Planting usually starts in November to December,
                and harvesting takes place from April to May.
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDx-9iGCZQAALaJCky9gsV7houSy36uJlkkCC_jXfSlvazdYFY4HAKY85P70Yc1s1yGUE&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Fruits</h2>
            <p class="crop-description">
                Fruit cultivation in Uttarakhand, including apples, plums, and
                peaches, is an important horticultural activity that contributes to
                the state's economy and provides livelihoods for many farmers. Here's
                detailed information about fruit cultivation in Uttarakhand: 1.
                Varieties: Uttarakhand is known for its high-quality apple varieties,
                including Red Delicious, Golden Delicious, and Royal Delicious. Plums
                and peaches also come in various local and commercial varieties
                suitable for the region. 2. Cultivation Seasons: Fruit trees are
                typically grown in the temperate and sub-temperate regions of
                Uttarakhand. Planting and harvesting seasons vary depending on the
                specific fruit typ
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXRdydXS7ldp6Vt5ScU7GjHuQC6hwVdQpCrQ&usqp=CAU "
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Tea</h2>
            <p class="crop-description">
                Tea cultivation in Uttarakhand is gaining prominence, particularly in
                the hilly areas of the state. Here's detailed information about tea
                cultivation in Uttarakhand: 1. Varieties: Uttarakhand primarily
                cultivates Camellia sinensis var. sinensis and Camellia sinensis var.
                assamica, the two main tea varieties. Different clones and hybrids of
                these varieties are grown to suit local agro-climatic conditions. 2.
                Cultivation Regions: Tea cultivation in Uttarakhand is concentrated in
                regions with suitable altitudes and climatic conditions, such as the
                Kumaon and Garhwal divisions. High elevations provide the necessary
                cool temperatures and well-drained slopes for tea plantations.
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
            location.replace("uttarakhand.php")
        }
    </script>
</body>

</html>