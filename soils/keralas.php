<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Indian Soil Types</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            /* Light grayish background */
            margin: 0;
            padding: 0;
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
            height: 460px;
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
            </p>
            Kerala Soil Types
        </h1>
    </header>
    <div class="container">
        <div class="row">
            <div class="soil-type">
                <h2>Alluvial Soil</h2>
                <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRO8hIpl9yJxboXqvfumMYitAMODe6037QvM1TbrHJG&s" />
                <p>
                    Alluvial soils are found in the low-lying areas, river basins, and
                    coastal regions of Kerala. They are generally fertile and contain a
                    good amount of organic matter. These soils are suitable for a
                    variety of crops, including rice, coconut, and spices.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Laterite Loam</h2>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4AxAxBKVIAaP8oe9pnEGvuba2XeZ9LEtXi5qtvxfTFg&s"
                    alt="Black Soil" class="soil-image" />
                <p>
                    Laterite loam is a variation of laterite soil that has better
                    texture and fertility. It is more suitable for agriculture and can
                    be found in some parts of Kerala.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Mountain Soils</h2>
                <img src="https://www.indianetzone.com/photos_gallery/76/Mountain_Soil_in_India.jpg" alt="Black Soil"
                    class="soil-image" />
                <p>
                    In the hilly areas of Kerala, you can find mountain soils. These
                    soils are generally shallow and stony due to the rugged terrain and
                    high elevation. They may not be very fertile but are used for tea,
                    coffee, and spices.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="soil-type">
                <h2>Peat and Organic Soils</h2>
                <img src="https://media.istockphoto.com/id/137352546/photo/compost-background.jpg?s=612x612&w=0&k=20&c=0yh93V9Vnwk8Q9LDvvIm3rrUrwfy_VphYZcHyjj4xVY="
                    alt="Black Soil" class="soil-image" />
                <p>
                    In the Kuttanad region and other wetlands, peat and organic soils
                    are prevalent. These soils are rich in organic matter but require
                    proper drainage for cultivation. They are suitable for crops like
                    paddy and certain vegetables.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Coastal Sandy Soil</h2>
                <img src="https://t3.ftcdn.net/jpg/03/11/12/30/360_F_311123005_toBaAOuGY1etLzfWahHUmCGZTpaohxfQ.jpg"
                    alt="Black Soil" class="soil-image" />
                <p>
                    Coastal regions of Kerala have sandy soils, which are well-drained
                    but often deficient in nutrients. Coastal areas are suitable for
                    crops like coconut and cashew.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Clayey Soil</h2>
                <img src="https://www.shutterstock.com/shutterstock/photos/1889602528/display_1500/stock-photo-clay-soil-close-up-empty-land-1889602528.jpg"
                    alt="peat soil" class="soil-image" />
                <p>
                    Clayey soils can be found in some parts of Kerala and are generally
                    suitable for paddy cultivation. They retain moisture well but may
                    need proper drainage to prevent waterlogging.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Black Soil</h2>
                <img src="https://www.pw.live/repositeries/topics/soil/image004.jpg" alt="Silt Soil"
                    class="soil-image" />
                <p>
                    In some parts of Punjab, you can find black soil, also known as
                    regur soil. It is rich in clay and organic matter and is known for
                    its fertility. Black soil is suitable for crops like cotton,
                    soybeans, and pulses.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Red Soil</h2>
                <img src="https://media.istockphoto.com/id/1253538508/photo/red-ground-soil-texture-in-brazil.jpg?s=612x612&w=0&k=20&c=igWTvmgHWIVG3_fwzN4GfWUVoTdHz8eGp3GPY6tNFWQ="
                    alt="Silt Soil" class="soil-image" />
                <p>
                    Red soils are prevalent in various parts of Karnataka, particularly
                    in the northern and eastern regions. These soils are well-drained
                    and often rich in iron and aluminum, which gives them a reddish
                    color. They are suitable for crops like groundnuts, millets, and
                    pulses.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="soil-type">
                <h2>Laterite Soil</h2>
                <img src="https://c8.alamy.com/comp/D66F43/tropical-laterite-soil-or-red-earth-background-D66F43.jpg"
                    class="soil-image" />
                <p>
                    Laterite soils are common in many parts of Kerala. They are red to
                    yellowish-red in color and are rich in iron and aluminum oxides.
                    These soils are well-drained but can be nutrient-poor. Laterite
                    soils are typically found in the hilly regions and along the Western
                    Ghats.
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
            location.replace("kerala.php")
        }
    </script>
</body>

</html>