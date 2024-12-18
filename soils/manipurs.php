<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Manipur Soil Types</title>
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
        <h1>Manipur Soil Types</h1>
    </header>
    <div class="container">
        <div class="row">
            <div class="soil-type">
                <h2>Red Soils</h2>
                <img src="https://media.istockphoto.com/id/1253538508/photo/red-ground-soil-texture-in-brazil.jpg?s=612x612&w=0&k=20&c=igWTvmgHWIVG3_fwzN4GfWUVoTdHz8eGp3GPY6tNFWQ="
                    alt="Loam Soil" class="soil-image" />
                <p>
                    Red soil, also known as tropical laterite soil, is found in some
                    hilly areas of Manipur. This soil is reddish in color and often rich
                    in iron and aluminum, which can affect its fertility. However, with
                    proper soil management and amendments, red soil can be suitable for
                    agriculture.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Mountain Soils</h2>
                <img src="https://previews.123rf.com/images/virynja/virynja1211/virynja121100183/16600510-soil-hill.jpg"
                    alt="Red Soil" class="soil-image" />
                <p>
                    In the higher elevations of Manipur, particularly in the hills and
                    mountainous regions, mountain soils are found. These soils are often
                    stony and less fertile, posing challenges for agriculture.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Alluvial Soils</h2>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRO8hIpl9yJxboXqvfumMYitAMODe6037QvM1TbrHJG&s"
                    alt="Black Soil" class="soil-image" />
                <p>
                    Alluvial soil is typically found in the valley areas of Manipur,
                    such as the Imphal Valley. It is fertile and suitable for
                    agriculture, making it a vital region for the state's agricultural
                    activities.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="soil-type">
                <h2>Loam Soil</h2>
                <img src="https://www.shutterstock.com/shutterstock/photos/1701145015/display_1500/stock-photo-close-up-of-fertile-loam-for-the-background-1701145015.jpg"
                    alt="Black Soil" class="soil-image" />
                <p>
                    Loam soil is a mixture of sand, silt, and clay and can be found in
                    various parts of Manipur. It is generally fertile and suitable for a
                    wide range of crops.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Marshy Soil</h2>
                <img src="https://thumbs.dreamstime.com/z/marshy-ground-29146497.jpg" alt="Black Soil"
                    class="soil-image" />
                <p>
                    Some low-lying areas in Manipur may have marshy or peat soils. These
                    soils can be waterlogged and acidic, making them less suitable for
                    agriculture without proper drainage and soil improvement.
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
            location.replace("manipur.php")
        }
    </script>
</body>

</html>