<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mizoram Soil Types</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            /* Light grayish background */
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
            background-color: #289200;
            /* Green header */
            color: #fff;
            text-align: center;
            padding: 10px;
            /* Smaller header */
            font-size: 24px;
            /* Smaller font size */
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #827717;
            /* White content background */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .row {
            width: calc(33.33% - 20px);
            /* Adjust the width to leave more space for spacing */
        }

        .soil-type {
            background-color: #ede499;
            /* Soil-like yellow background */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s;
            cursor: pointer;
            margin-bottom: 30px;
            /* Add more margin between divs */
            height: 440px;
            /* Set a fixed height for all divs */
            overflow: scroll;
        }

        .soil-type:hover {
            background-color: #ffac42;
            /* Darker orange on hover */
        }

        .soil-image {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
            transition: transform 0.2s ease-in-out;
        }

        .soil-type:hover .soil-image {
            transform: scale(1.05);
        }

        h2 {
            color: #4caf50;
            /* Green heading */
            font-size: 24px;
            margin-top: 10px;
        }

        p {
            font-size: 16px;
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
        <h1>Mizoram Soil Types</h1>
    </header>
    <div class="container">
        <div class="row">
            <div class="soil-type">
                <h2>Red and Yellow Soils</h2>
                <img src="https://www.shutterstock.com/shutterstock/photos/1658029063/display_1500/stock-photo-deforestation-close-up-with-roots-rocks-showing-in-sunlight-red-and-yellow-rocks-where-soil-was-1658029063.jpg"
                    alt="Loam Soil" class="soil-image" />
                <p>
                    These soils are predominantly found in the hilly regions of Mizoram.
                    They are formed due to the weathering of crystalline rocks like
                    granite and gneiss. Red soils are well-drained and acidic, while
                    yellow soils are relatively less acidic.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Mountain Soils</h2>
                <img src="https://previews.123rf.com/images/virynja/virynja1211/virynja121100183/16600510-soil-hill.jpg"
                    alt="Red Soil" class="soil-image" />
                <p>
                    Mizoram's hilly terrain has soils that vary with altitude and slope.
                    Soils in higher altitudes tend to be more acidic and less fertile,
                    while those in lower slopes can be more suitable for agriculture.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Alluvial Soils</h2>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRO8hIpl9yJxboXqvfumMYitAMODe6037QvM1TbrHJG&s"
                    alt="Black Soil" class="soil-image" />
                <p>
                    Alluvial soils are typically found in the low-lying areas along
                    riverbanks and valleys. They are formed by the deposition of silt,
                    clay, and sand by rivers over a long period. Alluvial soils are
                    generally fertile and suitable for agriculture.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="soil-type">
                <h2>Laterite Soil</h2>
                <img src="https://t4.ftcdn.net/jpg/01/39/20/75/360_F_139207501_9jBZwr8PtlBpe9ToJzs5hw6gAdifAdg9.jpg"
                    alt="Black Soil" class="soil-image" />
                <p>
                    Laterite soils are common in parts of Mizoram and are characterized
                    by their brick-red color. They are formed in tropical and
                    subtropical regions with high rainfall. Laterite soils are often
                    poor in fertility and nutrients but can be improved with proper
                    management.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Bamboo Soil</h2>
                <img src="https://www.shutterstock.com/shutterstock/photos/1120577843/display_1500/stock-photo-bamboo-shoots-bamboo-shoots-sprouting-from-soil-new-born-bamboo-1120577843.jpg"
                    alt="Black Soil" class="soil-image" />
                <p>
                    In areas with dense bamboo growth, you may find soils influenced by
                    bamboo litter and root decay. These soils are often acidic and have
                    unique properties due to bamboo's impact on the soil composition.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Peat Soil</h2>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlAoWOp-Ylj8I9b6aiCdlaC9YhYeAINJ8mmw9wMUWa&s
          alt=" peat soil" class="soil-image">
                <p>
                    Peat soils, which are rich in organic matter and formed in
                    waterlogged conditions, can be found in some marshy areas of
                    Mizoram. They are acidic and may require special management for
                    agricultural purposes.
                </p>
            </div>
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
            location.replace("mizoram.php")
        }
    </script>
</body>

</html>