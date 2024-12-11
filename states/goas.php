<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            background-color: #EDE499;
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
            </p>Major
            Goa Soil Types
        </h1>
    </header>
    <div class="container">
        <div class="row">
            <div class="soil-type">
                <h2>Alluvial Soil</h2>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRO8hIpl9yJxboXqvfumMYitAMODe6037QvM1TbrHJG&s"
                    alt="Loam Soil" class="soil-image">
                <p>
                    Alluvial soils are found in the floodplains of rivers like Mandovi and Zuari. These soils are
                    generally fertile and suitable for agriculture due to their high mineral content and good water
                    retention capacity.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Red and Yellow Soil</h2>
                <img src="https://www.shutterstock.com/shutterstock/photos/1658029063/display_1500/stock-photo-deforestation-close-up-with-roots-rocks-showing-in-sunlight-red-and-yellow-rocks-where-soil-was-1658029063.jpg"
                    alt="Red Soil" class="soil-image">
                <p>
                    Red and yellow soils are common in hilly and upland areas of Goa. These soils are typically rich in
                    iron and aluminum and are well-drained. They are suitable for various crops but may require proper
                    nutrient management.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Black Soil </h2>
                <img src="https://www.pw.live/repositeries/topics/soil/image004.jpg" alt="Black Soil"
                    class="soil-image">
                <p>
                    Black soils, also known as regur or cotton soil, are less common but can be found in some parts of
                    Goa. These soils are generally fertile and well-suited for certain crops.



                </p>
            </div>
        </div>
        <!-- Add more Indian soil types with images and details as needed -->

        <div class="row">
            <div class="soil-type">
                <h2> Laterite Soil</h2>
                <img src="https://t4.ftcdn.net/jpg/01/39/20/75/360_F_139207501_9jBZwr8PtlBpe9ToJzs5hw6gAdifAdg9.jpg"
                    alt="Black Soil" class="soil-image">
                <p>
                    This is the predominant soil type in Goa and covers a significant portion of the state. Laterite
                    soils are typically red to yellowish in color and are rich in iron and aluminum oxides. They are
                    well-drained but may become hard when dry and soft when wet.

                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Coastal Sandy Soil</h2>
                <img src="https://t3.ftcdn.net/jpg/03/11/12/30/360_F_311123005_toBaAOuGY1etLzfWahHUmCGZTpaohxfQ.jpg"
                    alt="Black Soil" class="soil-image">
                <p>
                    Along the coastal regions of Goa, you can find sandy soils, which are less fertile and have low
                    water-holding capacity. These soils are often used for horticulture and coastal vegetation.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Saline and Alkaline Soils</h2>
                <img src="https://www.agrilearner.com/wp-content/uploads/2018/06/salinity.png" alt="peat soil"
                    class="soil-image">
                <p>
                    In some areas near the coast, saline and alkaline soils are present, which are not suitable for most
                    crops but can be used for salt-tolerant vegetation.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2> Lateritic Plateau Soil</h2>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5ssEvMZdStMPmQgGxSZ2IkjcmyArwQcQkvDlsfMMGWA&s"
                    alt="Black Soil" class="soil-image">
                This type of soil is found in the plateau regions of Goa. It is similar to laterite soil but is
                generally shallower and may be less fertile.
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
            location.replace("goa.php")
        }
    </script>
</body>

</html>