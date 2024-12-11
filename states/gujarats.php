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

        </h1>
        <h1>Gujarat Soil Types</h1>
    </header>
    <div class="container">
        <div class="row">
            <div class="soil-type">
                <h2>Alluvial Soil</h2>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRO8hIpl9yJxboXqvfumMYitAMODe6037QvM1TbrHJG&s"
                    alt="Loam Soil" class="soil-image" />
                <p>
                    Alluvial soils are the most extensive and agriculturally important
                    soils in Gujarat. They are deposited by rivers like the Sabarmati,
                    Mahi, Narmada, and Tapi. These soils are fertile, well-drained, and
                    ideal for a variety of crops, including rice, wheat, cotton,
                    sugarcane, and vegetables.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Red and Yellow Soil</h2>
                <img src="https://www.shutterstock.com/shutterstock/photos/1658029063/display_1500/stock-photo-deforestation-close-up-with-roots-rocks-showing-in-sunlight-red-and-yellow-rocks-where-soil-was-1658029063.jpg"
                    alt="Red Soil" class="soil-image" />
                <p>
                    Red and yellow soils, also known as tropical laterite soils, are
                    found in parts of southern Gujarat. They are generally poor in
                    nutrients, acidic, and are suitable for crops like millets,
                    groundnuts, and pulses. These soils are well-drained and ideal for
                    rain-fed agriculture.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Black Soil</h2>
                <img src="https://www.pw.live/repositeries/topics/soil/image004.jpg" alt="Black Soil"
                    class="soil-image" />
                <p>
                    Black soils, also known as Regur or Vertisols, are found in some
                    parts of North Gujarat and Saurashtra. These soils are rich in clay
                    and organic matter, making them suitable for cotton, oilseeds, and
                    pulses. They are known for their ability to retain moisture.
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
                    Laterite soil is found in the northern and central regions of Uttar
                    Pradesh, especially in the terai and the Vindhyan plateau. It is
                    usually red or yellowish and may become hard when dry, making it
                    less suitable for agriculture.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Arid Desert Soil</h2>
                <img src="https://cdn.pixabay.com/photo/2017/06/02/17/34/arid-soil-2366911_960_720.jpg" alt="Black Soil"
                    class="soil-image" />
                <p>
                    In the arid and desert regions of Kutch and North Gujarat, you can
                    find sandy and saline soils. These soils have poor fertility and are
                    often affected by salinity and alkalinity. Agriculture in these
                    areas relies on drought-resistant crops and proper soil management
                    techniques.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Alkaline Soils</h2>
                <img src="https://agritech.tnau.ac.in/agriculture/agri_salinity02.jpg" alt="peat soil"
                    class="soil-image" />
                <p>
                    Some areas in Gujarat have alkaline soils, which can pose challenges
                    for agriculture due to high pH levels and salinity. Specialized
                    crops, such as date palms and certain salt-tolerant vegetables, are
                    grown in these regions.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Coastal Soils</h2>
                <img src="https://watermark.lovepik.com/photo/20211121/large/lovepik-sandy-beach-picture_500539373.jpg"
                    alt="Black Soil" class="soil-image" />
                <p>
                    Coastal areas in Gujarat have soils influenced by their proximity to
                    the sea. These soils can vary from sandy to clayey and may have
                    issues with salinity. Coastal regions often grow salt-resistant
                    crops like rice, coconut, and cashew.
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
            location.replace("gujarat.php")
        }
    </script>
</body>

</html>