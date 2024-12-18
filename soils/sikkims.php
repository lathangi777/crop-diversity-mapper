<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Odisha Soil Types</title>
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
            height: 450px;
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
        <h1>Sikkim Soil Types</h1>
    </header>
    <div class="container">
        <div class="row">
            <div class="soil-type">
                <h2>Red and Yellow Soil</h2>
                <img src="https://www.shutterstock.com/shutterstock/photos/1658029063/display_1500/stock-photo-deforestation-close-up-with-roots-rocks-showing-in-sunlight-red-and-yellow-rocks-where-soil-was-1658029063.jpg"
                    alt="Loam Soil" class="soil-image" />
                <p>
                    These soils are found in the mid-hill and submontane regions of
                    Sikkim. Red soils are usually well-drained and rich in iron, while
                    yellow soils tend to be less fertile due to leaching.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Glacial Soils</h2>
                <img src="https://cdn.britannica.com/96/131196-004-DBD591CA/Glacial-road-cut-Sierra-Nevada-Mountains.jpg"
                    class="soil-image" />
                <p>
                    In some parts of the higher Himalayan regions of Sikkim, glacial
                    soils are found. These soils are relatively new, and their fertility
                    depends on the composition of rocks from which they are formed.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Alluvial Soils</h2>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRO8hIpl9yJxboXqvfumMYitAMODe6037QvM1TbrHJG&s"
                    alt="Black Soil" class="soil-image" />
                <p>
                    Found in the valleys of Sikkim, particularly in areas along the
                    banks of rivers like the Teesta, Rangit, and their tributaries.
                    Alluvial soils are rich in organic matter and minerals, making them
                    suitable for agriculture.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="soil-type">
                <h2>Loamy Soil</h2>
                <img src="https://img.freepik.com/premium-photo/fertile-loam-soil-suitable-planting_38663-516.jpg"
                    alt="Black Soil" class="soil-image" />
                <p>
                    Loamy soils are a mixture of sand, silt, and clay and can be found
                    in various regions of Sikkim. They are usually well-suited for
                    agriculture and support a wide range of crops.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Brown Soils</h2>
                <img src="https://previews.123rf.com/images/nomadsoul1/nomadsoul11402/nomadsoul1140200131/25933176-fresh-brown-soil-background.jpg"
                    alt="Black Soil" class="soil-image" />
                <p>
                    These soils are typically found in the lower temperate and
                    subtropical regions of Sikkim. They are moderately fertile and
                    support a variety of crops.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Forest Soil:</h2>
                <img src="https://c8.alamy.com/comp/R65GB2/abstract-natural-background-from-texture-of-the-mountain-slope-with-red-soil-clay-and-stones-R65GB2.jpg"
                    alt="peat soil" class="soil-image" />
                <p>
                    These soils are found in the hilly and forested regions of Sikkim.
                    They are often acidic and not very suitable for agriculture.
                    However, they are vital for sustaining the rich biodiversity of the
                    state.
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
            location.replace("sikkim.php")
        }
    </script>
</body>

</html>