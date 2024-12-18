<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tripura Soil Types</title>
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
            background-color: #EDE499;
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
        <h1>Tripura Soil Types</h1>
    </header>
    <div class="container">
        <div class="row">
            <div class="soil-type">
                <h2>Red and Yellow Soils</h2>
                <img src="https://www.shutterstock.com/shutterstock/photos/1658029063/display_1500/stock-photo-deforestation-close-up-with-roots-rocks-showing-in-sunlight-red-and-yellow-rocks-where-soil-was-1658029063.jpg"
                    alt="Loam Soil" class="soil-image">
                <p>
                    These soils are also known as lateritic soils and are found in various parts of Tripura. They are
                    well-drained and typically rich in iron and aluminum oxides. Red and yellow soils are suitable for
                    crops like pulses, oilseeds, and certain types of fruits. </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Mountain Soils</h2>
                <img src="https://previews.123rf.com/images/virynja/virynja1211/virynja121100183/16600510-soil-hill.jpg"
                    alt="Red Soil" class="soil-image">
                <p>
                    In the hilly regions of Tripura, mountain soils are prevalent. These soils are often acidic and have
                    lower fertility compared to other soil types in the state. They are suitable for certain
                    horticultural crops and forests.


                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Alluvial Soils</h2>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRO8hIpl9yJxboXqvfumMYitAMODe6037QvM1TbrHJG&s"
                    alt="Black Soil" class="soil-image">
                Alluvial soils are found in the river valleys and plains of Tripura. They are usually fertile and
                suitable for a wide range of crops, including rice, jute, sugarcane, and vegetables. The sedimentary
                deposits from rivers make these soils rich in minerals and organic matter.


                </p>
            </div>
        </div>

        <div class="row">
            <div class="soil-type">
                <h2> Laterite Soil</h2>
                <img src="https://t4.ftcdn.net/jpg/01/39/20/75/360_F_139207501_9jBZwr8PtlBpe9ToJzs5hw6gAdifAdg9.jpg"
                    alt="Black Soil" class="soil-image">
                <p>
                    Laterite soils are typically found in the higher elevations of Tripura, especially in the hilly and
                    forested areas. They tend to be acidic and have poor fertility, making them less suitable for
                    agriculture. However, they are essential for maintaining the natural vegetation and biodiversity of
                    the region.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Bamboo Soil</h2>
                <img src="https://www.shutterstock.com/shutterstock/photos/1120577843/display_1500/stock-photo-bamboo-shoots-bamboo-shoots-sprouting-from-soil-new-born-bamboo-1120577843.jpg"
                    alt="Black Soil" class="soil-image">
                <p>
                    Tripura is known for its bamboo forests, and specific soils, sometimes referred to as bamboo soils,
                    support the growth of bamboo. These soils are typically found in the hilly and forested areas of the
                    state.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="soil-type">
                <h2>Saline and Alkaline Soil</h2>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDIwqUpFyeqx-Do2pLJR8CuQoYTB1t5wPRENB9bhbfbA&s"
                    alt="peat soil" class="soil-image">
                <p>
                    Some areas in Tripura may have saline and alkaline soils, which are not suitable for most
                    agricultural crops. These soils often require special management and reclamation techniques if they
                    are to be used for farming.
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
            location.replace("thripura.php")
        }
    </script>

</body>

</html>