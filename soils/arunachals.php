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
        <h1>Arunachal Pradesh Soil Types</h1>
    </header>
    <div class="container">
        <div class="row">
            <div class="soil-type">
                <h2>Arunachal Alluvial Soil</h2>
                <img src="https://cdn1.byjus.com/wp-content/uploads/2018/11/free-ias-prep/2017/01/16101459/6-1024x768.jpg"
                    alt="Loam Soil" class="soil-image" />
                <p>
                    This type of soil is found in the low-lying areas along the river
                    valleys and is characterized by its fertility due to the deposition
                    of silt and clay by rivers. It is well-suited for agriculture.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Hill Forest Soil</h2>
                <img src="https://img.freepik.com/free-photo/mountain-forest-volcanic-soil_23-2148249038.jpg?w=360"
                    alt="Red Soil" class="soil-image" />
                <p>
                    In the hilly regions of Arunachal Pradesh, you'll find hill forest
                    soils. These soils tend to be acidic and are often found in areas
                    covered with dense forests. They are not very suitable for
                    agriculture without proper soil management.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Mountain Soils</h2>
                <img src="https://www.indianetzone.com/photos_gallery/76/Mountain_Soil_in_India.jpg" alt="Black Soil"
                    class="soil-image" />
                <p>
                    These soils are found at higher elevations in the state, and their
                    characteristics can vary. They are typically less fertile and may
                    have higher levels of rock fragments and gravel.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="soil-type">
                <h2>Lithosols Soil</h2>
                <img src="https://thumbs.dreamstime.com/z/lithosol-soil-visible-layers-type-bieszczady-mountains-222426373.jpg"
                    alt="Black Soil" class="soil-image" />
                <p>
                    These are shallow soils found in rocky terrain and are not
                    well-suited for agriculture. They are commonly found in the
                    mountainous regions of Arunachal Pradesh.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Podzols</h2>
                <img src="https://cdn.britannica.com/91/147291-050-612EFF95/soil-Podzolic-topsoil-subsoil-layer-Wales.jpg?w=400&h=300&c=crop"
                    alt="Black Soil" class="soil-image" />
                <p>
                    Podzols are found in the colder and high-altitude areas of the
                    state. They tend to be acidic and leached of nutrients, making them
                    less suitable for agriculture.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Red and Yellow Soil</h2>
                <img src="https://www.shutterstock.com/shutterstock/photos/1658029063/display_1500/stock-photo-deforestation-close-up-with-roots-rocks-showing-in-sunlight-red-and-yellow-rocks-where-soil-was-1658029063.jpg"
                    alt="peat soil" class="soil-image" />
                <p>
                    These soils are predominantly found in the lower regions of the
                    state and are typically rich in iron and aluminum oxides. They are
                    somewhat suitable for agriculture but require proper management due
                    to the risk of soil erosion.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Lateritic Soils</h2>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBrE-v3VlvuSXt1dVHIyJAv0OPeub5ES26o6q7_I39&s"
                    class="soil-image" />
                <p>
                    Lateritic soils are formed by the leaching of soluble minerals,
                    leaving behind a concentration of iron and aluminum oxides. They can
                    be found in certain regions of Arunachal Pradesh and may be suitable
                    for some types of crops.
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
            location.replace("arunachal.php")
        }
    </script>
</body>

</html>