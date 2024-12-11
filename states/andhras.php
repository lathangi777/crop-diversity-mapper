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
            margin-bottom: 20px;
            /* Add more margin between divs */
            height: 400px;
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
            Andhra Pradesh Soil Types
        </h1>
    </header>
    <div class="container">
        <div class="row">
            <div class="soil-type">
                <h2>Alluvial Soil</h2>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRO8hIpl9yJxboXqvfumMYitAMODe6037QvM1TbrHJG&s"
                    alt="Loam Soil" class="soil-image" />
                <p>
                    Alluvial soil is found in the coastal plains and river basins of
                    Andhra Pradesh. It is rich in organic matter and minerals, making it
                    suitable for a wide range of crops, including rice, sugarcane, and
                    cotton.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Red Soil</h2>
                <img src="https://media.istockphoto.com/id/1253538508/photo/red-ground-soil-texture-in-brazil.jpg?s=612x612&w=0&k=20&c=igWTvmgHWIVG3_fwzN4GfWUVoTdHz8eGp3GPY6tNFWQ="
                    alt="Red Soil" class="soil-image" />
                <p>
                    Red soils are prominent in the Rayalaseema region and parts of
                    Telangana. They get their reddish color from iron oxide content.
                    These soils are generally well-drained but can be
                    nutrient-deficient, requiring appropriate fertilization for
                    agriculture.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Black Soil</h2>
                <img src="https://www.pw.live/repositeries/topics/soil/image004.jpg" alt="Black Soil"
                    class="soil-image" />
                <p>
                    Black soils, also known as Regur or Cotton soils, are found in parts
                    of Telangana and Rayalaseema regions. They are dark in color, rich
                    in minerals, and known for their water-holding capacity. Black soils
                    are highly suitable for growing cotton, oilseeds, and certain
                    pulses.
                </p>
            </div>
        </div>
        <!-- Add more Indian soil types with images and details as needed -->

        <div class="row">
            <div class="soil-type">
                <h2>Laterite Soil</h2>
                <img src="https://t4.ftcdn.net/jpg/01/39/20/75/360_F_139207501_9jBZwr8PtlBpe9ToJzs5hw6gAdifAdg9.jpg"
                    alt="Black Soil" class="soil-image" />
                <p>
                    Laterite soils are commonly found in hilly regions, especially the
                    Eastern Ghats. They are well-drained but tend to be low in fertility
                    and can be acidic. These soils are less suitable for agriculture but
                    may support forest growth.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Arid Desert Soil</h2>
                <img src="https://cdn.pixabay.com/photo/2017/06/02/17/34/arid-soil-2366911_960_720.jpg" alt="Black Soil"
                    class="soil-image" />
                <p>
                    In certain parts of the state, particularly in the Rayalaseema and
                    Anantapur regions, you can find arid desert soils. These soils are
                    typically sandy and have low fertility, making agriculture
                    challenging without irrigation and soil improvement measures.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Peat Soil</h2>
                <img src="https://img.freepik.com/premium-photo/peat-soil-planting-seedlings-flowers-ovary-closeup-natural-peat-from-swamps-selective-focus_330426-367.jpg"
                    alt="peat soil" class="soil-image" />
                <p>
                    Peat soils are found in swampy or marshy areas, particularly in the
                    delta regions of Andhra Pradesh. These soils are rich in organic
                    matter but can be acidic and require proper drainage for
                    agriculture.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Coastal Soil</h2>
                <img src="https://watermark.lovepik.com/photo/20211121/large/lovepik-sandy-beach-picture_500539373.jpg"
                    alt="Black Soil" class="soil-image" />
                <p>
                    Coastal areas of Andhra Pradesh have sandy soils due to their
                    proximity to the Bay of Bengal. These soils are well-draining but
                    may require irrigation and nutrient management for crop cultivation.
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
            location.replace("andhra.php")
        }
    </script>
</body>

</html>