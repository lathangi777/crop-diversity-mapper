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
        <h1>Bihar Soil Types</h1>
    </header>
    <div class="container">
        <div class="row">
            <div class="soil-type">
                <h2>Red and Yellow Soils</h2>
                <img src="https://www.shutterstock.com/shutterstock/photos/1658029063/display_1500/stock-photo-deforestation-close-up-with-roots-rocks-showing-in-sunlight-red-and-yellow-rocks-where-soil-was-1658029063.jpg"
                    alt="Loam Soil" class="soil-image" />
                <p>
                    Red and yellow soils are prevalent in the southern and southwestern
                    parts of Bihar. These soils are typically low in fertility and are
                    characterized by a reddish or yellowish color due to the presence of
                    iron and aluminum oxides.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Black Soils</h2>
                <img src="https://www.pw.live/repositeries/topics/soil/image004.jpg" alt="Red Soil"
                    class="soil-image" />
                <p>
                    Black soil, also known as Regur soil, is found in some parts of
                    Bihar, primarily in the southeastern region. These soils are rich in
                    clay and organic matter, making them highly suitable for crops like
                    cotton, soybeans, and pulses.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Alluvial Soils</h2>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRO8hIpl9yJxboXqvfumMYitAMODe6037QvM1TbrHJG&s"
                    alt="Black Soil" class="soil-image" />
                <p>
                    Alluvial soil is the most dominant soil type in Bihar. It is formed
                    by the deposition of silt, clay, and sand brought by the rivers,
                    mainly the Ganges, Gandak, Sone, and Kosi. Alluvial soil is
                    generally fertile and suitable for a wide range of agricultural
                    crops.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="soil-type">
                <h2>Laterite Soil</h2>
                <img src="https://t4.ftcdn.net/jpg/01/39/20/75/360_F_139207501_9jBZwr8PtlBpe9ToJzs5hw6gAdifAdg9.jpg"
                    alt="Black Soil" class="soil-image" />
                <p>
                    Laterite soils are found in the hilly regions of Bihar, especially
                    in the northeastern part. They are typically rich in iron and
                    aluminum and may be suitable for certain crops after proper
                    treatment.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Bhabar Soil</h2>
                <img src="https://i.pinimg.com/originals/76/1b/49/761b49cd8371a2fea7ccc8d87dcdb7ef.png" alt="Black Soil"
                    class="soil-image" />
                <p>
                    Bhabar soils are also found in the northern part of Bihar, adjacent
                    to the Terai region. They are a mixture of alluvial and hill soils,
                    and their fertility varies depending on the depth and composition of
                    the soil.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Saline and Alkaline Soil</h2>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDIwqUpFyeqx-Do2pLJR8CuQoYTB1t5wPRENB9bhbfbA&s"
                    alt="peat soil" class="soil-image" />
                <p>
                    Some areas of Bihar have saline and alkaline soils, particularly in
                    the northwestern and southern parts. These soils may not be suitable
                    for most crops without proper reclamation.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Terai Soil</h2>
                <img src="https://c8.alamy.com/comp/E29WC9/nepal-terai-area-bheri-zone-bardia-national-park-tiger-footprint-E29WC9.jpg"
                    class="soil-image" />
                <p>
                    Terai soils are found in the Terai region, which lies in the
                    foothills of the Himalayas in northern Bihar. These soils are a
                    mixture of alluvial and hill soils and are generally fertile.
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
            location.replace("bihar.php")
        }
    </script>
</body>

</html>