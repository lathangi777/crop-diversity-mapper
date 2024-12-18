<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Indian Soil Types</title>
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
            margin-bottom: 20px;
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
            </p>Rajasthan Soil Types
        </h1>
    </header>
    <div class="container">
        <div class="row">
            <div class="soil-type">
                <h2>Alluvial Soil</h2>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRO8hIpl9yJxboXqvfumMYitAMODe6037QvM1TbrHJG&s"
                    alt="Loam Soil" class="soil-image" />
                <p>
                    Alluvial soils are found in the northwestern and northeastern parts
                    of Rajasthan. These soils are fertile and are deposited by rivers
                    like the Chambal, Banas, and Ghaggar-Hakra. They are generally good
                    for agriculture and support the cultivation of crops like wheat,
                    maize, and oilseeds.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Red and Yellow Soils</h2>
                <img src="https://www.shutterstock.com/shutterstock/photos/1658029063/display_1500/stock-photo-deforestation-close-up-with-roots-rocks-showing-in-sunlight-red-and-yellow-rocks-where-soil-was-1658029063.jpg"
                    alt="Red Soil" class="soil-image" />
                <p>
                    Red and yellow soils are common in the hilly and rocky areas of
                    Rajasthan, such as the Aravalli Range. These soils are well-drained
                    and often contain iron oxide, giving them their distinctive color.
                    They are suitable for growing drought-resistant crops like millets
                    and pulses.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Black Soil</h2>
                <img src="https://www.pw.live/repositeries/topics/soil/image004.jpg" alt="Black Soil"
                    class="soil-image" />
                <p>
                    Black soils, also known as Regur or Cotton Soil, are found in some
                    parts of southeastern Rajasthan. These soils are clayey and rich in
                    nutrients, making them suitable for the cultivation of cotton,
                    oilseeds, and certain cereals.
                </p>
            </div>
        </div>
        <!-- Add more Indian soil types with images and details as needed -->

        <div class="row">
            <div class="soil-type">
                <h2>Saline and Alkaline Soils</h2>
                <img src="https://agritech.tnau.ac.in/agriculture/agri_salinity02.jpg" alt="Black Soil"
                    class="soil-image" />
                <p>
                    In some regions of Rajasthan, particularly in areas with poor
                    drainage, saline and alkaline soils are prevalent. These soils are
                    not suitable for most crops due to their high salt content, and they
                    require special treatment and management practices for agriculture.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Arid Desert Soil</h2>
                <img src="https://cdn.pixabay.com/photo/2017/06/02/17/34/arid-soil-2366911_960_720.jpg" alt="Black Soil"
                    class="soil-image" />
                <p>
                    This is the predominant soil type in Rajasthan due to its arid and
                    semi-arid climate. It is typically sandy in texture and has low
                    moisture retention capacity. The Thar Desert in western Rajasthan is
                    a prime example of this type of soil.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Limestone Soils</h2>
                <img src="https://media.istockphoto.com/id/1225735654/photo/chalk-mining-limestone-quarry.jpg?s=612x612&w=0&k=20&c=gUMq0oWoIKJ-pZPpGWso_EE4MOoVirGRYzbOfPMxbEw="
                    alt="peat soil" class="soil-image" />
                <p>
                    In areas with a high concentration of limestone, the soils can be
                    influenced by this mineral. These soils may have a higher pH and may
                    be less suitable for certain crops but can support vegetation
                    adapted to alkaline conditions.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Sandy Soil</h2>
                <img src="https://watermark.lovepik.com/photo/20211121/large/lovepik-sandy-beach-picture_500539373.jpg"
                    alt="Black Soil" class="soil-image" />
                <p>
                    Sandy soils can be found in various parts of Rajasthan, and they
                    have a coarse texture with low water-holding capacity. They are less
                    fertile and can be challenging for agriculture without proper
                    irrigation and soil improvement techniques.
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
            location.replace("rajesthan.php")
        }
    </script>
</body>

</html>