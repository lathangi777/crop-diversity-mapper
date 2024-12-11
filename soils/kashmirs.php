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

        </h1>
        <h1>Jammu and Kashmir Soil Types</h1>
    </header>
    <div class="container">
        <div class="row">
            <div class="soil-type">
                <h2>Loamy Soils</h2>
                <img src="https://www.worldatlas.com/r/w1200/upload/33/45/4c/sandy-loam-soil.jpg" alt="Loam Soil"
                    class="soil-image" />
                <p>
                    Loamy soils, a mixture of sand, silt, and clay, are common in many
                    parts of the region, especially in the Jammu plains. These soils are
                    generally fertile and well-suited for agriculture.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Alluvial Soils</h2>
                <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRO8hIpl9yJxboXqvfumMYitAMODe6037QvM1TbrHJG&s" />
                <p>
                    Alluvial soils are found in the floodplains of rivers, including the
                    Jhelum and Chenab rivers. These soils are fertile and suitable for a
                    range of crops, making them important for agriculture.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Clayey Soils</h2>
                <img src="https://www.shutterstock.com/shutterstock/photos/1922365577/display_1500/stock-photo-close-up-photo-of-sand-and-soil-a-real-close-up-of-a-part-of-the-earth-s-crust-ordinary-plain-1922365577.jpg"
                    alt="Black Soil" class="soil-image" />
                <p>
                    Clayey soils are found in various areas, particularly in the Kashmir
                    Valley. These soils can be challenging for agriculture due to their
                    heavy and water-retaining nature, but they are suitable for certain
                    crops like paddy rice.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="soil-type">
                <h2>Sandy Soils:</h2>
                <img src="https://watermark.lovepik.com/photo/20211121/large/lovepik-sandy-beach-picture_500539373.jpg"
                    alt="Black Soil" class="soil-image" />
                <p>
                    Sandy soils are found in some regions, especially in the arid areas
                    of Jammu. These soils have good drainage but may lack essential
                    nutrients, so they often require soil amendments for agriculture.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Laterite Soils</h2>
                <img src="https://t4.ftcdn.net/jpg/01/39/20/75/360_F_139207501_9jBZwr8PtlBpe9ToJzs5hw6gAdifAdg9.jpg"
                    alt="Black Soil" class="soil-image" />
                <p>
                    Laterite soils, rich in iron and aluminum oxides, are found in parts
                    of the Jammu region. They tend to be acidic and are not as fertile
                    as some other soil types.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Saline and Alkaline Soil</h2>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDIwqUpFyeqx-Do2pLJR8CuQoYTB1t5wPRENB9bhbfbA&s"
                    alt="peat soil" class="soil-image" />
                <p>
                    In some parts of Telangana, particularly in the low-lying areas and
                    near lakes or water bodies, saline and alkaline soils can be found.
                    These soils have a high concentration of salts and are not suitable
                    for most crops without proper reclamation.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="soil-type">
                <h2>Forest and Hilly Soils</h2>
                <img src="https://www.indianetzone.com/photos_gallery/76/Mountain_Soil_in_India.jpg"
                    class="soil-image" />
                <p>
                    In the forested and hilly regions of Telangana, the soils may vary
                    depending on the local topography and vegetation. These soils may
                    range from acidic to neutral and may support diverse flora.
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
            location.replace("kashmir.php")
        }
    </script>
</body>

</html>