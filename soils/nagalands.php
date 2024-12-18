<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nagaland Soil Types</title>
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
            background-color: #d04379;
            border-radius: 20px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: #490249;
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
            height: 480px;
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
        <h1>Nagaland Soil Types</h1>
    </header>
    <div class="container">
        <div class="row">
            <div class="soil-type">
                <h2>Red Soils</h2>
                <img src="https://media.istockphoto.com/id/1253538508/photo/red-ground-soil-texture-in-brazil.jpg?s=612x612&w=0&k=20&c=igWTvmgHWIVG3_fwzN4GfWUVoTdHz8eGp3GPY6tNFWQ="
                    alt="Loam Soil" class="soil-image" />
                <p>
                    Red soil is rich in iron and aluminum oxides, giving it a reddish
                    color. It is mainly found in the central and southern parts of
                    Nagaland. While it can be fertile, it often requires appropriate
                    management and amendments for agriculture.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Mountain Soils</h2>
                <img src="https://previews.123rf.com/images/virynja/virynja1211/virynja121100183/16600510-soil-hill.jpg"
                    alt="Red Soil" class="soil-image" />
                <p>
                    This type of soil is prevalent in the hilly regions of Nagaland,
                    especially in the eastern and northern parts. Mountain soils are
                    typically shallow and stony, with low organic matter content. They
                    are well-drained due to the steep slopes.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Alluvial Soils</h2>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRO8hIpl9yJxboXqvfumMYitAMODe6037QvM1TbrHJG&s"
                    alt="Black Soil" class="soil-image" />
                <p>
                    Alluvial soil is generally found in the low-lying areas along rivers
                    and streams. It is relatively fertile and suitable for agriculture.
                    However, the extent of alluvial soil in Nagaland is limited due to
                    the hilly terrain.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="soil-type">
                <h2>Laterite Soil</h2>
                <img src="https://t4.ftcdn.net/jpg/01/39/20/75/360_F_139207501_9jBZwr8PtlBpe9ToJzs5hw6gAdifAdg9.jpg"
                    alt="Black Soil" class="soil-image" />
                <p>
                    Laterite soils are common in the lower elevations and are
                    characterized by their leaching and iron-rich nature. They can be
                    quite acidic and are generally not as fertile as other soil types.
                    Farmers may need to apply lime and organic matter to improve its
                    quality for farming.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Loamy Soil</h2>
                <img src="https://www.shutterstock.com/shutterstock/photos/1701145015/display_1500/stock-photo-close-up-of-fertile-loam-for-the-background-1701145015.jpg"
                    alt="Black Soil" class="soil-image" />
                <p>
                    Loamy soil is a mixture of sand, silt, and clay. It is one of the
                    more fertile soil types and can be found in the valleys and some
                    parts of the plains in Nagaland. It holds moisture well and is
                    suitable for a variety of crops.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Forest Soil</h2>
                <img src="https://c8.alamy.com/comp/H4BXH9/forest-soil-covered-with-autumn-leaves-H4BXH9.jpg"
                    alt="peat soil" class="soil-image" />
                <p>
                    In the forested areas of Nagaland, you'll find forest soils, which
                    are generally acidic and low in fertility. These soils are crucial
                    for maintaining the region's biodiversity and forest ecosystems.
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
            location.replace("nagaland.php")
        }
    </script>
</body>

</html>