<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>I Uttarakhand Soil Types</title>
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
        <h1>Uttarakhand soil types</h1>
    </header>
    <div class="container">
        <div class="row">
            <div class="soil-type">
                <h2>Alluvial Soil</h2>
                <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRO8hIpl9yJxboXqvfumMYitAMODe6037QvM1TbrHJG&s" />
                <p>
                    Alluvial soils are found in the Terai region of Uttarakhand, which
                    is the low-lying plains area in the southern part of the state.
                    These soils are formed by the deposition of silt, clay, and sand
                    carried by rivers like the Ganges, Yamuna, and their tributaries.
                    Alluvial soils are generally fertile and suitable for agriculture.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Mountain or Hill Soils</h2>
                <img src="https://media.istockphoto.com/id/1336523155/photo/coarse-sand-pile-with-cloudy-sky.jpg?s=612x612&w=0&k=20&c=myBP4avboidahhYS-Qh2QPq8Ve8Xs3eSVIU1pZM1EY4="
                    alt="Black Soil" class="soil-image" />
                <p>
                    These soils are found in the hilly and mountainous regions of
                    Uttarakhand, which constitute a significant portion of the state.
                    They are typically formed by the weathering of rocks and have
                    varying characteristics depending on the altitude and topography.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Sandy Soils</h2>
                <img src="https://watermark.lovepik.com/photo/20211121/large/lovepik-sandy-beach-picture_500539373.jpg"
                    alt="Black Soil" class="soil-image" />
                <p>
                    Sandy soils can be found in some areas of Uttarakhand, particularly
                    in the foothills and riverbanks. These soils have good drainage
                    properties but are generally less fertile. They may require
                    amendments to support agriculture.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="soil-type">
                <h2>Limestone Soils</h2>
                <img src="https://media.istockphoto.com/id/1225735654/photo/chalk-mining-limestone-quarry.jpg?s=612x612&w=0&k=20&c=gUMq0oWoIKJ-pZPpGWso_EE4MOoVirGRYzbOfPMxbEw="
                    alt="Black Soil" class="soil-image" />
                <p>
                    In some parts of Uttarakhand, especially the Garhwal region,
                    limestone soils are prevalent. These soils are alkaline and can
                    support the growth of crops like wheat, barley, and potatoes.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Marshy Soils</h2>
                <img src="https://c8.alamy.com/comp/CXNP0J/soil-cracking-during-the-dry-season-on-land-at-keralaindia-CXNP0J.jpg"
                    alt="Black Soil" class="soil-image" />
                <p>
                    Marshy or peat soils are found in wetlands and swampy areas, such as
                    parts of the Rajaji National Park. These soils are waterlogged and
                    acidic, making them unsuitable for most agricultural activities.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Forest Soils</h2>
                <img src="https://c8.alamy.com/comp/H4BXH9/forest-soil-covered-with-autumn-leaves-H4BXH9.jpg"
                    alt="peat soil" class="soil-image" />
                <p>
                    Uttarakhand has extensive forested areas, and the soils in these
                    regions are influenced by the forest ecosystem. These soils are
                    typically rich in organic matter due to the decomposition of leaves,
                    twigs, and other forest litter. They are suitable for forestry and
                    the cultivation of certain forest products.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Red and Yellow Soil</h2>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6ucKW0Bgnuu5tNwHAFX5qxWWMbw2aNlHn9S8TBja9&s"
                    alt="Silt Soil" class="soil-image" />
                <p>
                    Red and yellow soils are common in parts of the state, especially in
                    the regions of Nainital, Almora, and Pithoragarh. These soils are
                    generally well-drained and acidic in nature. They are suitable for
                    growing crops like millets, pulses, and fruits.
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
            location.replace("uttarakhand.php")
        }
    </script>

</body>

</html>