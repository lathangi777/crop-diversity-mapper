<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tamilnadu Soil Types</title>
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
            </p>Tamil Nadu Soil Types
        </h1>
    </header>
    <div class="container">
        <div class="row">
            <div class="soil-type">
                <h2>Red Soil</h2>
                <img src="https://media.istockphoto.com/id/1253538508/photo/red-ground-soil-texture-in-brazil.jpg?s=612x612&w=0&k=20&c=igWTvmgHWIVG3_fwzN4GfWUVoTdHz8eGp3GPY6tNFWQ="
                    alt="Loam Soil" class="soil-image" />
                <p>
                    Red soil is the most common type of soil in Tamil Nadu. It is
                    typically found in areas with low rainfall and is rich in iron and
                    aluminum oxides, which give it a reddish color. Red soil is suitable
                    for crops like groundnuts, millets, and pulses.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Alluvial Soils</h2>
                <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRO8hIpl9yJxboXqvfumMYitAMODe6037QvM1TbrHJG&s" />
                <p>
                    Alluvial soil is found in areas near rivers and river deltas, such
                    as the Cauvery Delta. It is fertile and well-suited for paddy
                    cultivation, making it one of the primary rice-growing regions in
                    Tamil Nadu.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Black Soil</h2>
                <img src="https://img.freepik.com/premium-photo/black-land-plant-isolated-white-background_188078-21218.jpg"
                    alt="Black Soil" class="soil-image" />
                <p>
                    Black soil, also known as regur or vertisols, is found in some parts
                    of Tamil Nadu, particularly in the western and northwestern regions.
                    These soils are rich in clay and are known for their ability to
                    retain moisture. They are well-suited for crops like cotton,
                    soybeans, and some oilseeds.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="soil-type">
                <h2>Laterite Soil</h2>
                <img src="https://media.istockphoto.com/id/481134152/photo/bauxite.jpg?s=612x612&w=0&k=20&c=rVY1MxWOomgZiaWkiH5eDRHoi3OsP7tYuvQRSTauk5k="
                    alt="Black Soil" class="soil-image" />
                <p>
                    Laterite soil is prevalent in the hilly regions of Tamil Nadu, such
                    as the Nilgiris and parts of the Western Ghats. It is often rich in
                    iron and aluminum but can be relatively infertile. However, with
                    proper management and amendments, it can support some agricultural
                    activities.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Coastal Sandy Soil</h2>
                <img src="https://t3.ftcdn.net/jpg/03/11/12/30/360_F_311123005_toBaAOuGY1etLzfWahHUmCGZTpaohxfQ.jpg"
                    alt="Black Soil" class="soil-image" />
                <p>
                    Coastal areas of Tamil Nadu, along the Bay of Bengal, have sandy
                    soils. These soils are well-drained but often lack fertility. They
                    are mainly used for activities like horticulture and coconut
                    cultivation.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Saline and Alkaline Soil</h2>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDIwqUpFyeqx-Do2pLJR8CuQoYTB1t5wPRENB9bhbfbA&s"
                    alt="peat soil" class="soil-image" />
                <p>
                    Soils: Some coastal areas, especially in the Ramanathapuram and
                    Tuticorin districts, have saline and alkaline soils. These soils are
                    often unsuitable for most crops due to their high salt content.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="soil-type">
                <h2>Forest and Hilly Soils</h2>
                <img src="https://www.indianetzone.com/photos_gallery/76/Mountain_Soil_in_India.jpg"
                    class="soil-image" />
                <p>
                    The hilly and forested regions of Tamil Nadu have soils that vary
                    depending on altitude and vegetation. These soils are typically
                    suitable for forest growth and some horticultural crops.
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
            location.replace("tamil.php")
        }
    </script>
</body>

</html>